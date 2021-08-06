<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/Tests/PhpunitCompatibilityTrait.php-1626817392,/var/www/html/web/core/tests/Drupal/TestTools/PhpUnitCompatibility/PhpUnit7/TestCompatibilityTrait.php-1628251056',
   'data' => 
  array (
    'fcea6c0313a8d0c6ac780b7797df21b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Makes Drupal\'s test API forward compatible with multiple versions of PHPUnit.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'runnerversion' => 'Drupal\\TestTools\\PhpUnitCompatibility\\RunnerVersion',
        ),
         'className' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
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
    'b47c42d4f22e38036cdba826499e3c19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a mock object for the specified class using the available method.
   *
   * The getMock method does not exist in PHPUnit 6. To provide backward
   * compatibility this trait provides the getMock method and uses createMock if
   * this method is available on the parent class.
   *
   * @param string $originalClassName
   *   Name of the class to mock.
   * @param array|null $methods
   *   When provided, only methods whose names are in the array are replaced
   *   with a configurable test double. The behavior of the other methods is not
   *   changed. Providing null means that no methods will be replaced.
   * @param array $arguments
   *   Parameters to pass to the original class\' constructor.
   * @param string $mockClassName
   *   Class name for the generated test double class.
   * @param bool $callOriginalConstructor
   *   Can be used to disable the call to the original class\' constructor.
   * @param bool $callOriginalClone
   *   Can be used to disable the call to the original class\' clone constructor.
   * @param bool $callAutoload
   *   Can be used to disable __autoload() during the generation of the test
   *   double class.
   * @param bool $cloneArguments
   *   Enables the cloning of arguments passed to mocked methods.
   * @param bool $callOriginalMethods
   *   Enables the invocation of the original methods.
   * @param object $proxyTarget
   *   Sets the proxy target.
   *
   * @see https://github.com/sebastianbergmann/phpunit/wiki/Release-Announcement-for-PHPUnit-5.4.0
   *
   * @return \\PHPUnit\\Framework\\MockObject\\MockObject
   *
   * @deprecated in drupal:8.5.0 and is removed from drupal:9.0.0.
   *   Use \\Drupal\\Tests\\PhpunitCompatibilityTrait::createMock() instead.
   *
   * @see https://www.drupal.org/node/2907725
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'runnerversion' => 'Drupal\\TestTools\\PhpUnitCompatibility\\RunnerVersion',
        ),
         'className' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
         'functionName' => 'getMock',
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
    '8470f3428a195af783461341b69e929c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compatibility layer for PHPUnit 6 to support PHPUnit 4 code.
   *
   * @param mixed $class
   *   The expected exception class.
   * @param string $message
   *   The expected exception message.
   * @param int $exception_code
   *   The expected exception code.
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0.
   *   Backward compatibility for PHPUnit 4 will no longer be supported.
   *
   * @see https://www.drupal.org/node/3056869
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'runnerversion' => 'Drupal\\TestTools\\PhpUnitCompatibility\\RunnerVersion',
        ),
         'className' => 'Drupal\\Tests\\PhpunitCompatibilityTrait',
         'functionName' => 'setExpectedException',
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