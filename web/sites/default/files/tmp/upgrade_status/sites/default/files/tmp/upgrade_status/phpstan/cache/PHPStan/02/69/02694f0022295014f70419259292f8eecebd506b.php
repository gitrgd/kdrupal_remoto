<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/FunctionalTests/AssertLegacyTrait.php-1628251056,/var/www/html/web/core/tests/Drupal/KernelTests/AssertLegacyTrait.php-1626817392',
   'data' => 
  array (
    'fac49da145ff8c22719cbbf0959e9070' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides convenience methods for assertions in browser tests.
 *
 * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
 *   the methods on \\Drupal\\Tests\\WebAssert instead, for example
 * @code
 *    $this->assertSession()->statusCodeEquals(200);
 * @endcode
 *
 * @todo https://www.drupal.org/project/drupal/issues/3114617 Note that
 *   deprecations in this file do not use the @ symbol in Drupal 8 because this
 *   will be removed in Drupal 10.0.0. Adding the @ back should re-enable coding
 *   standards checks.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7bd0ba01d1488b0039db5164e52c8f8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Translates Simpletest assertion methods to PHPUnit.
 *
 * Protected methods are custom. Public static methods override methods of
 * \\PHPUnit\\Framework\\Assert.
 *
 * Deprecated Scheduled for removal in Drupal 10.0.0. Use PHPUnit\'s native
 *   assert methods instead.
 *
 * @todo https://www.drupal.org/project/drupal/issues/3031580 Note that
 *   deprecations in this file do not use the @ symbol in Drupal 8 because this
 *   will be removed in Drupal 10.0.0.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '47561141bea095ab48154a21e4eac8bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assert()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertTrue()
   *   instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cf237bb0be532fd4b544cedd5ec58eaf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertEqual()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertEquals()
   *   instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c837d07a6c6aa15cd2447fd9114a26e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertNotEqual()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use
   *   self::assertNotEquals() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNotEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '827caf32b9d9888b9388c49b17f5e8cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertIdentical()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertSame()
   *   instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertIdentical',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2c777128cfbd2241290ac7f7372f77cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertNotIdentical()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use
   *   self::assertNotSame() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNotIdentical',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f806cb13d5f8c96f223d091bf693799a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::assertIdenticalObject()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertEquals()
   *   instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertIdenticalObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8b2259cef14d0ce0611a6b22ee26d43e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::pass()
   *
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertTrue()
   *   instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'pass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '82d32fd283bed138ceb2df506a640656' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @see \\Drupal\\simpletest\\TestBase::verbose()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'verbose',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '80ffb5a2e53c9cb81f1c8fa0a28a7477' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the element with the given CSS selector is present.
   *
   * @param string $css_selector
   *   The CSS selector identifying the element to check.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->elementExists() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertElementPresent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6bf4d6ccd1a0160795df536366ac238e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the element with the given CSS selector is not present.
   *
   * @param string $css_selector
   *   The CSS selector identifying the element to check.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->elementNotExists() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertElementNotPresent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '23d022b2331a01f13274fb3c2ebe7563' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the page (with HTML stripped) contains the text.
   *
   * Note that stripping HTML tags also removes their attributes, such as
   * the values of text fields.
   *
   * @param string $text
   *   Plain text to look for.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   - $this->assertSession()->responseContains() for non-HTML responses,
   *     like XML or Json.
   *   - $this->assertSession()->pageTextContains() for HTML responses. Unlike
   *     the deprecated assertText(), the passed text should be HTML decoded,
   *     exactly as a human sees it in the browser.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f70338668618874c7548dabacc04e59d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the page (with HTML stripped) does not contains the text.
   *
   * Note that stripping HTML tags also removes their attributes, such as
   * the values of text fields.
   *
   * @param string $text
   *   Plain text to look for.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   - $this->assertSession()->responseNotContains() for non-HTML responses,
   *     like XML or Json.
   *   - $this->assertSession()->pageTextNotContains() for HTML responses.
   *     Unlike the deprecated assertNoText(), the passed text should be HTML
   *     decoded, exactly as a human sees it in the browser.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '298bc725bdbf5233c52a8b0ef91282d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper for assertText and assertNoText.
   *
   * @param string $text
   *   Plain text to look for.
   * @param bool $not_exists
   *   (optional) TRUE if this text should not exist, FALSE if it should.
   *   Defaults to TRUE.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertTextHelper',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a386a92acabe7947616ee1468cb5b024' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the text is found ONLY ONCE on the text version of the page.
   *
   * The text version is the equivalent of what a user would see when viewing
   * through a web browser. In other words the HTML has been filtered out of
   * the contents.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages with t(). If left blank, a default message will be displayed.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->getSession()->getPage()->getText() and substr_count() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertUniqueText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c11a77fb1c652a39a2357bcbe3a3d044' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the text is found MORE THAN ONCE on the text version of the page.
   *
   * The text version is the equivalent of what a user would see when viewing
   * through a web browser. In other words the HTML has been filtered out of
   * the contents.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages with t(). If left blank, a default message will be displayed.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->getSession()->getPage()->getText() and substr_count() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoUniqueText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4e820fef3c0022933be8cb0f5d0c26ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the page responds with the specified response code.
   *
   * @param int $code
   *   Response code. For example 200 is a successful page request. For a list
   *   of all codes see http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->statusCodeEquals() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertResponse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '49f26e4f66832a7fa3712787ee478c1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists with the given name and value.
   *
   * @param string $name
   *   Name of field to assert.
   * @param string $value
   *   (optional) Value of the field to assert. You may pass in NULL (default)
   *   to skip checking the actual value, while still checking that the field
   *   exists.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->fieldExists() or
   *   $this->assertSession()->buttonExists() or
   *   $this->assertSession()->fieldValueEquals() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertFieldByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c6d53859e98d956c4cef35f832fe7ac3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist with the given name and value.
   *
   * @param string $name
   *   Name of field to assert.
   * @param string $value
   *   (optional) Value for the field, to assert that the field\'s value on the
   *   page does not match it. You may pass in NULL to skip checking the
   *   value, while still checking that the field does not exist. However, the
   *   default value (\'\') asserts that the field value is not an empty string.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->fieldNotExists() or
   *   $this->assertSession()->buttonNotExists() or
   *   $this->assertSession()->fieldValueNotEquals() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoFieldByName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5769dded7d3e61bffcc1f525cc2adca9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists with the given ID and value.
   *
   * @param string $id
   *   ID of field to assert.
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $value
   *   (optional) Value for the field to assert. You may pass in NULL to skip
   *   checking the value, while still checking that the field exists.
   *   However, the default value (\'\') asserts that the field value is an empty
   *   string.
   *
   * @throws \\Behat\\Mink\\Exception\\ElementNotFoundException
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->fieldExists() or
   *   $this->assertSession()->buttonExists() or
   *   $this->assertSession()->fieldValueEquals() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertFieldById',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5131805341cc70bc42d6b4c6a6617143' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists with the given name or ID.
   *
   * @param string $field
   *   Name or ID of field to assert.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->fieldExists() or
   *   $this->assertSession()->buttonExists() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '20204e8edece6bad16c84e780d03e43e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does NOT exist with the given name or ID.
   *
   * @param string $field
   *   Name or ID of field to assert.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->fieldNotExists() or
   *   $this->assertSession()->buttonNotExists() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoField',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'aea59daef6e96be67efac5c1310636a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS found on the loaded page, fail otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->responseContains() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertRaw',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '25ab79a8b16b95fc7ee5dc4d21a3a0ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS not found on the loaded page, fail otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->responseNotContains() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoRaw',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0f77adf0525d3ba82c480dd60c0262de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pass if the page title is the given string.
   *
   * @param string $expected_title
   *   The string the page title should be.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->titleEquals() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '77dd305c4697dcfd5deb96ac14f8947a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link with the specified label is found.
   *
   * An optional link index may be passed.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $label
   *   Text between the anchor tags.
   * @param int $index
   *   Link position counting from zero.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->linkExists() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '40a25803a84b244b73e9107fa0e9dd32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link with the specified label is not found.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $label
   *   Text between the anchor tags.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->linkNotExists() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoLink',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7169c6d0d64b939a442b25b67b5f6eb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link containing a given href (part) is found.
   *
   * @param string $href
   *   The full or partial value of the \'href\' attribute of the anchor tag.
   * @param int $index
   *   Link position counting from zero.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->linkByHrefExists() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertLinkByHref',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2053a3d0cc94c729d24d42cdc5c3ba9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link containing a given href (part) is not found.
   *
   * @param string $href
   *   The full or partial value of the \'href\' attribute of the anchor tag.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->linkByHrefNotExists() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoLinkByHref',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7bea67ac0c54b450743f5fa2d38b8593' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist with the given ID and value.
   *
   * @param string $id
   *   ID of field to assert.
   * @param string $value
   *   (optional) Value for the field, to assert that the field\'s value on the
   *   page doesn\'t match it. You may pass in NULL to skip checking the value,
   *   while still checking that the field doesn\'t exist. However, the default
   *   value (\'\') asserts that the field value is not an empty string.
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->fieldNotExists() or
   *   $this->assertSession()->buttonNotExists() or
   *   $this->assertSession()->fieldValueNotEquals() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoFieldById',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6838c1155af6fb1b7dd3398a4d5edebe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the internal browser\'s URL matches the given path.
   *
   * @param \\Drupal\\Core\\Url|string $path
   *   The expected system path or URL.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->addressEquals() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertUrl',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd9f506bd480a86da66c02c130808da15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page exists.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->optionExists() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8a7547a57223d73442a94994e6828ec8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option with the visible text exists.
   *
   * @param string $id
   *   The ID of the select field to assert.
   * @param string $text
   *   The text for the option tag to assert.
   *
   * Deprecated in drupal:8.4.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->optionExists() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertOptionByText',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2c0cac8917a7754887de0e0cc8bde36e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option does NOT exist in the current page.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->optionNotExists() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoOption',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ba74d1631eec69a0499553087a4775e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page is checked.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages with t(). If left blank, a default message will be displayed.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->optionExists() instead and check the
   *   "selected" attribute yourself.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertOptionSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '89ce2fd0eef5547f18d7464c9e75ec24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a checkbox field in the current page is checked.
   *
   * @param string $id
   *   ID of field to assert.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->checkboxChecked() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertFieldChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b4900c67da79647c5b8e6a476031adde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a checkbox field in the current page is not checked.
   *
   * @param string $id
   *   ID of field to assert.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->checkboxNotChecked() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoFieldChecked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '564b10b5ac468344fe5de5ba45af60a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists in the current page by the given XPath.
   *
   * @param string $xpath
   *   XPath used to find the field.
   * @param string $value
   *   (optional) Value of the field to assert. You may pass in NULL (default)
   *   to skip checking the actual value, while still checking that the field
   *   exists.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages with t().
   *
   * Deprecated in drupal:8.3.0 and is removed from drupal:10.0.0. Use
   *   $this->xpath() instead and check the values directly in the test.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertFieldByXPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b263325a29e9f0ddb1b9b359ca9b37ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist or its value does not match, by XPath.
   *
   * @param string $xpath
   *   XPath used to find the field.
   * @param string $value
   *   (optional) Value of the field, to assert that the field\'s value on the
   *   page does not match it.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages with t().
   *
   * @throws \\Behat\\Mink\\Exception\\ExpectationException
   *
   * Deprecated in drupal:8.3.0 and is removed from drupal:10.0.0. Use
   *   $this->xpath() instead and assert that the result is empty.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoFieldByXPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '71db6d7d63389240584a28ec9ac62b4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists in the current page with a given Xpath result.
   *
   * @param \\Behat\\Mink\\Element\\NodeElement[] $fields
   *   Xml elements.
   * @param string $value
   *   (optional) Value of the field to assert. You may pass in NULL (default) to skip
   *   checking the actual value, while still checking that the field exists.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages with t().
   *
   * Deprecated in drupal:8.3.0 and is removed from drupal:10.0.0. Use
   *   iteration over the fields yourself instead and directly check the values
   *   in the test.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertFieldsByValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3ced81507a99a3d828405bb2826ebf20' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS found escaped on the loaded page, fail otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->assertEscaped() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertEscaped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '597f81a9808cd1a16334039584293663' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text is not found escaped on the loaded page.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->assertNoEscaped() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoEscaped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f23fa1ff629b901c32b05dba31b56255' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Triggers a pass if the Perl regex pattern is found in the raw content.
   *
   * @param string $pattern
   *   Perl regex to look for including the regex delimiters.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
  *   $this->assertSession()->responseMatches() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'df9b476d5f7689afbd4c5249207a886e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Triggers a pass if the Perl regex pattern is not found in the raw content.
   *
   * @param string $pattern
   *   Perl regex to look for including the regex delimiters.
   *
   * Deprecated in drupal:8.4.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->responseNotMatches() instead.
   *
   * @see https://www.drupal.org/node/3129738
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1701944013b74700727a717906464950' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts whether an expected cache tag was present in the last response.
   *
   * @param string $expected_cache_tag
   *   The expected cache tag.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->responseHeaderContains() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertCacheTag',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3b598cec9e401ea55d419eb126d0ce1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts whether an expected cache tag was absent in the last response.
   *
   * @param string $cache_tag
   *   The cache tag to check.
   *
   * Deprecated in drupal:8.4.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->responseHeaderNotContains() instead.
   *
   * @see https://www.drupal.org/node/3129738
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertNoCacheTag',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '47c52ae3776fa00ae35592c3b7e1ebf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks that current response header equals value.
   *
   * @param string $name
   *   Name of header to assert.
   * @param string $value
   *   Value of the header to assert
   *
   * Deprecated in drupal:8.3.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->responseHeaderEquals() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertHeader',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2f480ed7593c1f5ffe853d4d55824cb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns WebAssert object.
   *
   * @param string $name
   *   (optional) Name of the session. Defaults to the active session.
   *
   * @return \\Drupal\\Tests\\WebAssert
   *   A new web-assert option for asserting the presence of elements with.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'assertSession',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '65a49f5bb71b27449b299c7b6de29db8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds an XPath query.
   *
   * Builds an XPath query by replacing placeholders in the query by the value
   * of the arguments.
   *
   * XPath 1.0 (the version supported by libxml2, the underlying XML library
   * used by PHP) doesn\'t support any form of quotation. This function
   * simplifies the building of XPath expression.
   *
   * @param string $xpath
   *   An XPath query, possibly with placeholders in the form \':name\'.
   * @param array $args
   *   An array of arguments with keys in the form \':name\' matching the
   *   placeholders in the query. The values may be either strings or numeric
   *   values.
   *
   * @return string
   *   An XPath query with arguments replaced.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSession()->buildXPathQuery() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'buildXPathQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e77ad0f21e73a0763588554d960fa797' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper: Constructs an XPath for the given set of attributes and value.
   *
   * @param string $attribute
   *   Field attributes.
   * @param string $value
   *   Value of field.
   *
   * @return string
   *   XPath for specified values.
   *
   * Deprecated in drupal:8.5.0 and is removed from drupal:10.0.0. Use
   *   $this->getSession()->getPage()->findField() instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'constructFieldXpath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '347708ffa17b776b1b17f785164f2f5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current raw content.
   *
   * Deprecated in drupal:8.2.0 and is removed from drupal:10.0.0. Use
   *   $this->getSession()->getPage()->getContent() instead.
   *
   * @see https://www.drupal.org/node/3129738
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'getRawContent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'acccdaa9c539260be849fcd2673797f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all option elements, including nested options, in a select.
   *
   * @param \\Behat\\Mink\\Element\\NodeElement $element
   *   The element for which to get the options.
   *
   * @return \\Behat\\Mink\\Element\\NodeElement[]
   *   Option elements in select.
   *
   * Deprecated in drupal:8.5.0 and is removed from drupal:10.0.0. Use
   *   $element->findAll(\'xpath\', \'option\') instead.
   *
   * @see https://www.drupal.org/node/3129738
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\FunctionalTests',
         'uses' => 
        array (
          'nodeelement' => 'Behat\\Mink\\Element\\NodeElement',
          'expectationexception' => 'Behat\\Mink\\Exception\\ExpectationException',
          'escaper' => 'Behat\\Mink\\Selector\\Xpath\\Escaper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'baseassertlegacytrait' => 'Drupal\\KernelTests\\AssertLegacyTrait',
        ),
         'className' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
         'functionName' => 'getAllOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
  ),
));