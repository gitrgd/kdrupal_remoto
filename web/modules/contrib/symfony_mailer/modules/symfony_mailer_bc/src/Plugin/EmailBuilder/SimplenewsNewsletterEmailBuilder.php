<?php

namespace Drupal\symfony_mailer_bc\Plugin\EmailBuilder;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\simplenews\SubscriberInterface;
use Drupal\simplenews\Entity\Newsletter;
use Drupal\symfony_mailer\Address;
use Drupal\symfony_mailer\EmailInterface;
use Drupal\symfony_mailer\Entity\MailerPolicy;

/**
 * Defines the Email Builder plug-in for simplenews_newsletter entity.
 *
 * @EmailBuilder(
 *   id = "simplenews_newsletter",
 *   sub_types = {
 *     "node" = @Translation("Issue"),
 *   },
 *   has_entity = TRUE,
 *   common_adjusters = {"email_subject", "email_from"},
 *   import = @Translation("Simplenews newsletter settings"),
 * )
 *
 * @todo Notes for adopting Symfony Mailer into simplenews. Can remove the
 * MailBuilder class, and many methods of MailEntity.
 */
class SimplenewsNewsletterEmailBuilder extends SimplenewsEmailBuilderBase {

  /**
   * Saves the parameters for a newly created email.
   *
   * @param \Drupal\symfony_mailer\EmailInterface $email
   *   The email to modify.
   * @param \Drupal\Core\Entity\ContentEntityInterface $issue
   *   The newsletter issue to send.
   * @param \Drupal\simplenews\SubscriberInterface $subscriber
   *   The subscriber.
   * @param bool $test
   *   (Optional) TRUE to send a test email.
   */
  public function createParams(EmailInterface $email, ContentEntityInterface $issue = NULL, SubscriberInterface $subscriber = NULL, ?bool $test = FALSE) {
    assert($subscriber != NULL);
    $email->setParam('issue', $issue)
      ->setParam('simplenews_subscriber', $subscriber)
      ->setParam('newsletter', $issue->simplenews_issue->entity)
      ->setParam($issue->getEntityTypeId(), $issue)
      ->setVariable('test', $test);
  }

  /**
   * {@inheritdoc}
   */
  public function build(EmailInterface $email) {
    parent::build($email);
    $email->appendBodyEntity($email->getParam('issue'), 'email_html')
      ->addTextHeader('Precedence', 'bulk')
      ->setVariable('opt_out_hidden', !$email->getEntity()->isAccessible());

    // @todo Create SubscriberInterface::getUnsubscriberUrl().
    if ($unsubscribe_url = \Drupal::token()->replace('[simplenews-subscriber:unsubscribe-url]', $email->getParams(), ['clear' => TRUE])) {
      $email->addTextHeader('List-Unsubscribe', "<$unsubscribe_url>");
    }
  }

  /**
   * {@inheritdoc}
   */
  public function import() {
    $helper = $this->helper();

    $settings = $this->helper()->config()->get('simplenews.settings');
    $from = new Address($settings->get('newsletter.from_address'), $settings->get('newsletter.from_name'));
    $config['email_from'] = $helper->policyFromAddresses([$from]);
    $config['email_subject']['value'] = '[[simplenews-newsletter:name]] [node:title]';
    MailerPolicy::import('simplenews_newsletter', $config);

    foreach (Newsletter::loadMultiple() as $id => $newsletter) {
      $from = new Address($newsletter->from_address, $newsletter->from_name);
      $config['email_from'] = $helper->policyFromAddresses([$from]);
      $config['email_subject']['value'] = $newsletter->subject;
      MailerPolicy::import("simplenews_newsletter.node.$id", $config);
    }
  }

}
