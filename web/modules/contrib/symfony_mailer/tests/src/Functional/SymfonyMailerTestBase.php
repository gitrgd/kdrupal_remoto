<?php

namespace Drupal\Tests\symfony_mailer\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\symfony_mailer_test\MailerTestTrait;

/**
 * Base class for Symfony Mailer browser tests.
 */
abstract class SymfonyMailerTestBase extends BrowserTestBase {

  use MailerTestTrait;

  protected const TYPE_ALL = '<b>*All*</b>';

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = ['symfony_mailer', 'symfony_mailer_test'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user with permission to manage mailer settings.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * The site name.
   *
   * @var string
   */
  protected $siteName = 'Tom & Jerry';

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    $this->config('system.site')->set('name', $this->siteName)->save();
    $this->adminUser = $this->drupalCreateUser(['administer mailer']);
  }

  /**
   * {@inheritdoc}
   */
  protected function tearDown() {
    parent::tearDown();
    // @todo Test for no mail not working?
    $this->noMail();
  }

  /**
   * Asserts that a policy listing introduction text is correct.
   *
   * @param string $type
   *   The expected email type.
   * @param string $common
   *   The expected common adjusters text.
   */
  protected function assertPolicyListingIntro(string $type, string $common) {
    $this->assertSession()->pageTextContains("Configure Mailer policy records to customise the emails sent for $type.");
    $this->assertSession()->pageTextContains("You can set the $common and more.");
  }

  /**
   * Asserts that a policy listing row text is correct.
   *
   * @param int $row
   *   The row number to check.
   * @param string $sub_type
   *   The expected email sub-type.
   * @param string $summary
   *   The expected summary text.
   * @param string $id
   *   The expected policy ID that the button links to.
   */
  protected function assertPolicyListingRow(int $row, string $sub_type, string $summary, string $id) {
    $base = "#edit-mailer-policy-listing-table tbody tr:nth-of-type($row)";
    $add = $summary ? '' : '/add';
    $this->assertSession()->elementContains('css', "$base td:nth-of-type(1)", $sub_type);
    $this->assertSession()->elementContains('css', "$base td:nth-of-type(2)", $summary);
    $this->assertSession()->elementAttributeContains('css', "$base td:nth-of-type(3) li a", 'href', "/admin/config/system/mailer/policy$add/$id");
  }

}
