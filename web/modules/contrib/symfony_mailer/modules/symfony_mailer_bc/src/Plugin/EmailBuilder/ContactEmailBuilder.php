<?php

namespace Drupal\symfony_mailer_bc\Plugin\EmailBuilder;

use Drupal\contact\MessageInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\symfony_mailer\EmailFactoryInterface;
use Drupal\symfony_mailer\EmailInterface;
use Drupal\symfony_mailer\Processor\EmailBuilderBase;

/**
 * Defines the Email Builder plug-in for contact module personal forms.
 *
 * @EmailBuilder(
 *   id = "contact",
 *   sub_types = {
 *     "mail" = @Translation("Message"),
 *     "copy" = @Translation("Sender copy"),
 *   },
 * )
 *
 * @todo Notes for adopting Symfony Mailer into Drupal core. This builder can
 * set langcode, to, reply-to so the calling code doesn't need to.
 */
class ContactEmailBuilder extends ContactEmailBuilderBase {

  /**
   * Saves the parameters for a newly created email.
   *
   * @param \Drupal\symfony_mailer\EmailInterface $email
   *   The email to modify.
   * @param \Drupal\contact\MessageInterface $message
   *   Submitted message entity.
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The sender.
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The recipient.
   */
  public function createParams(EmailInterface $email, MessageInterface $message = NULL, AccountInterface $sender = NULL, AccountInterface $recipient = NULL) {
    assert($recipient != NULL);
    $email->setParam('contact_message', $message)
      ->setParam('sender', $sender)
      ->setParam('recipient', $recipient);
  }

  /**
   * {@inheritdoc}
   */
  public function fromArray(EmailFactoryInterface $factory, array $message) {
    $sender = $message['params']['sender'];
    $contact_message = $message['params']['contact_message'];

    // There are two separate email types, so no need for the key to contain
    // page_ or user_.
    $key = substr($message['key'], 5);

    if (isset($message['params']['contact_form'])) {
      return $factory->newEntityEmail($message['params']['contact_form'], $key, $contact_message, $sender);
    }
    return $factory->newModuleEmail('contact', $key, $contact_message, $sender, $message['params']['recipient']);
  }

  /**
   * {@inheritdoc}
   */
  public function build(EmailInterface $email) {
    parent::build($email);
    $recipient = $email->getParam('recipient');

    $email->setVariable('recipient_name', $recipient->getDisplayName())
      ->setVariable('recipient_edit_url', $recipient->toUrl('edit-form')->toString());

    if ($email->getSubType() == 'mail') {
      $email->setTo($recipient);
    }
  }

}
