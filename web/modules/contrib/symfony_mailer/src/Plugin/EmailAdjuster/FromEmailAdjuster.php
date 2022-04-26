<?php

namespace Drupal\symfony_mailer\Plugin\EmailAdjuster;

use Drupal\symfony_mailer\EmailInterface;

/**
 * Defines the From Email Adjuster.
 *
 * @EmailAdjuster(
 *   id = "email_from",
 *   label = @Translation("From"),
 *   description = @Translation("Sets the email from header."),
 * )
 */
class FromEmailAdjuster extends AddressAdjusterBase {

  /**
   * {@inheritdoc}
   */
  protected function setAddresses(EmailInterface $email, array $addresses) {
    $email->setFrom(...$addresses);
  }

}
