<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/Tests/TestRequirementsTrait.php-1626817392',
   'data' => 
  array (
    'fc6edd7726b994cae0a3fc5aefa9bf79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows test classes to require Drupal modules as dependencies.
 *
 * This trait is assumed to be on a subclass of \\PHPUnit\\Framework\\TestCase, and
 * overrides \\PHPUnit\\Framework\\TestCase::checkRequirements(). This allows the
 * test to be marked as skipped before any kernel boot processes have happened.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'test' => 'PHPUnit\\Util\\Test',
          'skippedtesterror' => 'PHPUnit\\Framework\\SkippedTestError',
        ),
         'className' => 'Drupal\\Tests\\TestRequirementsTrait',
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
    'd2512cf9a9c815586a36644a4a8b751d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the Drupal root directory.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'test' => 'PHPUnit\\Util\\Test',
          'skippedtesterror' => 'PHPUnit\\Framework\\SkippedTestError',
        ),
         'className' => 'Drupal\\Tests\\TestRequirementsTrait',
         'functionName' => 'getDrupalRoot',
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
    '2d9761ec870bdb9e11028ba130a4cd5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check module requirements for the Drupal use case.
   *
   * This method is assumed to override
   * \\PHPUnit\\Framework\\TestCase::checkRequirements().
   *
   * @throws \\PHPUnit\\Framework\\SkippedTestError
   *   Thrown when the requirements are not met, and this test should be
   *   skipped. Callers should not catch this exception.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'test' => 'PHPUnit\\Util\\Test',
          'skippedtesterror' => 'PHPUnit\\Framework\\SkippedTestError',
        ),
         'className' => 'Drupal\\Tests\\TestRequirementsTrait',
         'functionName' => 'checkRequirements',
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
    '9635aa67cdf542003679942530b65538' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks missing module requirements.
   *
   * Iterates through a list of requires annotations and looks for missing
   * modules. The test will be skipped if any of the required modules is
   * missing.
   *
   * @param string $root
   *   The path to the root of the Drupal installation to scan.
   * @param string[] $annotations
   *   A list of requires annotations from either a method or class annotation.
   *
   * @throws \\PHPUnit\\Framework\\SkippedTestError
   *   Thrown when the requirements are not met, and this test should be
   *   skipped. Callers should not catch this exception.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'test' => 'PHPUnit\\Util\\Test',
          'skippedtesterror' => 'PHPUnit\\Framework\\SkippedTestError',
        ),
         'className' => 'Drupal\\Tests\\TestRequirementsTrait',
         'functionName' => 'checkModuleRequirements',
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