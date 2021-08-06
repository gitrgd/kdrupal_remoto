<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/web/core/tests/Drupal/Tests/BrowserTestBase.php-1628251056,/var/www/html/web/core/lib/Drupal/Core/Test/FunctionalTestSetupTrait.php-1626817392,/var/www/html/web/core/tests/Drupal/Tests/SessionTestTrait.php-1626817392,/var/www/html/web/core/lib/Drupal/Core/Test/RefreshVariablesTrait.php-1626817392,/var/www/html/web/core/tests/Drupal/Tests/UiHelperTrait.php-1628251056,/var/www/html/web/core/tests/Drupal/Tests/BrowserHtmlDebugTrait.php-1626817392,/var/www/html/web/core/tests/Drupal/Tests/AssertHelperTrait.php-1626817392,/var/www/html/web/core/lib/Drupal/Core/Test/RefreshVariablesTrait.php-1626817392,/var/www/html/web/core/lib/Drupal/Core/Test/TestSetupTrait.php-1626817392,/var/www/html/web/core/modules/block/tests/src/Traits/BlockCreationTrait.php-1626817392,/var/www/html/web/core/tests/Drupal/FunctionalTests/AssertLegacyTrait.php-1628251056,/var/www/html/web/core/tests/Drupal/KernelTests/AssertLegacyTrait.php-1626817392,/var/www/html/web/core/tests/Drupal/Tests/RandomGeneratorTrait.php-1626817392,/var/www/html/web/core/modules/node/tests/src/Traits/NodeCreationTrait.php-1626817392,/var/www/html/web/core/modules/node/tests/src/Traits/ContentTypeCreationTrait.php-1626817392,/var/www/html/web/core/tests/Drupal/Tests/ConfigTestTrait.php-1626817392,/var/www/html/web/core/lib/Drupal/Core/Config/StorageCopyTrait.php-1628251055,/var/www/html/web/core/tests/Drupal/Tests/TestRequirementsTrait.php-1626817392,/var/www/html/web/core/modules/user/tests/src/Traits/UserCreationTrait.php-1626817392,/var/www/html/web/core/tests/Drupal/Tests/XdebugRequestTrait.php-1626817392,/var/www/html/web/core/tests/Drupal/Tests/PhpunitCompatibilityTrait.php-1626817392,/var/www/html/web/core/tests/Drupal/TestTools/PhpUnitCompatibility/PhpUnit7/TestCompatibilityTrait.php-1628251056',
   'data' => 
  array (
    '54d9c687db34a467b11dad19f0c4c74b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a test case for functional Drupal tests.
 *
 * Tests extending BrowserTestBase must exist in the
 * Drupal\\Tests\\yourmodule\\Functional namespace and live in the
 * modules/yourmodule/tests/src/Functional directory.
 *
 * Tests extending this base class should only translate text when testing
 * translation functionality. For example, avoid wrapping test text with t()
 * or TranslatableMarkup().
 *
 * @ingroup testing
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'ad951aabd6a49b038639f846e9ae70bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a trait for shared functional test setup functionality.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '373e3ae925f6e473eee6fff5a5996953' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to generate and get session name in tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'c51b80a64a4a432233c20c42d2e3ec58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the session cookie.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '3bfe54d6dae5bec3076ef9725e253053' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a session cookie name.
   *
   * @param string $data
   *   The data to generate session name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'generateSessionName',
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
    '08f059002e1def0737cce5ba92cb672d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the session name in use on the child site.
   *
   * @return string
   *   The name of the session cookie.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getSessionName',
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
    '274f9d9c99db54882f16e6341198c40a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a method to refresh in-memory configuration and state information.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'e67f620857f52463e7bb3b71d69421dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Refreshes in-memory configuration and state information.
   *
   * Useful after a page request is made that changes configuration or state in
   * a different thread.
   *
   * In other words calling a settings page with $this->drupalPostForm() with a
   * changed value would update configuration to reflect that change, but in the
   * thread that made the call (thread running the test) the changed values
   * would not be picked up.
   *
   * This method clears the cache and loads a fresh copy.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'refreshVariables',
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
    'b83b71e0f44521bfa6317e4740169025' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The "#1" admin user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '068c2cf309329db100bb69752f0b1d35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The class loader to use for installation and initialization of setup.
   *
   * @var \\Symfony\\Component\\Classloader\\Classloader
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'd99272c8a64f4fea2f826c86b3d7388c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The config directories used in this test.
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
   *   \\Drupal\\Core\\Site\\Settings::get(\'config_sync_directory\') instead.
   *
   * @see https://www.drupal.org/node/3018145
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'e61c98bed162754d001d869a162c0c1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The flag to set \'apcu_ensure_unique_prefix\' setting.
   *
   * Wide use of a unique prefix can lead to problems with memory, if tests are
   * run with a concurrency higher than 1. Therefore, FALSE by default.
   *
   * @var bool
   *
   * @see \\Drupal\\Core\\Site\\Settings::getApcuPrefix().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '1d886728eba8bdc5a255b1524ed361a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares site settings and services before installation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'prepareSettings',
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
    'ac6de1157931ab5c6aa550975059de80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rewrites the settings.php file of the test site.
   *
   * @param array $settings
   *   An array of settings to write out, in the format expected by
   *   drupal_rewrite_settings().
   *
   * @see drupal_rewrite_settings()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'writeSettings',
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
    '3113d7dbc1a2e0a112d7ad24e20b4fd4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Changes parameters in the services.yml file.
   *
   * @param string $name
   *   The name of the parameter.
   * @param string $value
   *   The value of the parameter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'setContainerParameter',
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
    'f032a7a88fe62240341e50f7a6c1db6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rebuilds \\Drupal::getContainer().
   *
   * Use this to update the test process\'s kernel with a new service container.
   * For example, when the list of enabled modules is changed via the internal
   * browser the test process\'s kernel has a service container with an out of
   * date module list.
   *
   * @see TestBase::prepareEnvironment()
   * @see TestBase::restoreEnvironment()
   *
   * @todo Fix https://www.drupal.org/node/2021959 so that module enable/disable
   *   changes are immediately reflected in \\Drupal::getContainer(). Until then,
   *   tests can invoke this workaround when requiring services from newly
   *   enabled modules to be immediately available in the same request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'rebuildContainer',
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
    '288068ee944ca43cbdbaefc22f53c624' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets all data structures after having enabled new modules.
   *
   * This method is called by FunctionalTestSetupTrait::rebuildAll() after
   * enabling the requested modules. It must be called again when additional
   * modules are enabled later.
   *
   * @see \\Drupal\\Core\\Test\\FunctionalTestSetupTrait::rebuildAll()
   * @see \\Drupal\\Tests\\BrowserTestBase::installDrupal()
   * @see \\Drupal\\simpletest\\WebTestBase::setUp()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'resetAll',
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
    'a7e4fe7f0fd37c6f163886274c793e3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a mock request and sets it on the generator.
   *
   * This is used to manipulate how the generator generates paths during tests.
   * It also ensures that calls to $this->drupalGet() will work when running
   * from run-tests.sh because the url generator no longer looks at the global
   * variables that are set there but relies on getting this information from a
   * request object.
   *
   * @param bool $clean_urls
   *   Whether to mock the request using clean urls.
   * @param array $override_server_vars
   *   An array of server variables to override.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\Request
   *   The mocked request object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'prepareRequestForGenerator',
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
    '4fc743122500f2cce6c49f92f5cdb9f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Execute the non-interactive installer.
   *
   * @see install_drupal()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'doInstall',
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
    'd59f6b585b6ceed7371c3628a7e8f839' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize settings created during install.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'initSettings',
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
    'cf6ecb04acb06d0f36dca4a9d55ba8c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize various configurations post-installation.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   The container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'initConfig',
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
    '0fb776760415581d98f0b9223a22c88e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes user 1 for the site to be installed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'initUserSession',
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
    '138d37bac76f41fe0207e07fb66a11ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes the kernel after installation.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   Request object.
   *
   * @return \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   *   The container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'initKernel',
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
    'f1db13c7f2b03fb4409548e0db90e763' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs the default theme defined by `static::$defaultTheme` when needed.
   *
   * To install a test theme outside of the testing environment, add
   * @code
   * $settings[\'extension_discovery_scan_tests\'] = TRUE;
   * @endcode
   * to your settings.php.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   The container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'installDefaultThemeFromClassProperty',
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
    '228b096669fb818524110f7c97ed14cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Install modules defined by `static::$modules`.
   *
   * To install test modules outside of the testing environment, add
   * @code
   * $settings[\'extension_discovery_scan_tests\'] = TRUE;
   * @endcode
   * to your settings.php.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   The container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'installModulesFromClassProperty',
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
    '01b1687a1ba52155a4d70914f838566d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets and rebuilds the environment after setup.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'rebuildAll',
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
    '33d5eb0294c961e826e26751e6c51a16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the parameters that will be used when Simpletest installs Drupal.
   *
   * @see install_drupal()
   * @see install_state_defaults()
   *
   * @return array
   *   Array of parameters for use in install_drupal().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'installParameters',
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
    'c2b54deccc813dde7409c242954d05bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets up the base URL based upon the environment variable.
   *
   * @throws \\Exception
   *   Thrown when no SIMPLETEST_BASE_URL environment variable is provided.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'setupBaseUrl',
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
    'cf7c4c28956ac15e38f111c31ff9001d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares the current environment for running the test.
   *
   * Also sets up new resources for the testing environment, such as the public
   * filesystem and configuration directories.
   *
   * This method is private as it must only be called once by
   * BrowserTestBase::setUp() (multiple invocations for the same test would have
   * unpredictable consequences) and it must not be callable or overridable by
   * test classes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'prepareEnvironment',
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
    '79c64f77ff64d4fc465d6be9a46c43ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns all supported database driver installer objects.
   *
   * This wraps drupal_get_database_types() for use without a current container.
   *
   * @return \\Drupal\\Core\\Database\\Install\\Tasks[]
   *   An array of available database driver installer objects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getDatabaseTypes',
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
    'bca69995b90dc49d7cf64b087af03cb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides UI helper methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '23f510f1683944f26812bc204550897e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the debug functions for browser tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '0647774eab1cb00acc99da1321a3c975' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Class name for HTML output logging.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '7ea8bf57b27bf8c828084b0c5afc5586' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Directory name for HTML output logging.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '3e6a137dd0678f1941ba04c2e503d3ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Counter storage for HTML output logging.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '0e3b9999715dbb067304b6b8d903c2e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Counter for HTML output logging.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '1cb30cae0c44c39ba3fc5e79effaf23b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * HTML output output enabled.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '2020ba19baefc5e3777d8b9f42526eca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The file name to write the list of URLs to.
   *
   * This file is read by the PHPUnit result printer.
   *
   * @var string
   *
   * @see \\Drupal\\Tests\\Listeners\\HtmlOutputPrinter
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '21bf68da71e65eb830ef7385e1657c5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * HTML output test ID.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '8f4a776de2c54f95b71ffab25ebd1f34' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The Base URI to use for links to the output files.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '7a04b5e35659626b6e8045d164e3cefa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats HTTP headers as string for HTML output logging.
   *
   * @param array[] $headers
   *   Headers that should be formatted.
   *
   * @return string
   *   The formatted HTML string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'formatHtmlOutputHeaders',
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
    'd3cb7c5a0eaced692eb7b4950c05b2b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns headers in HTML output format.
   *
   * @return string
   *   HTML output headers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getHtmlOutputHeaders',
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
    '644b50d2b62e44d2a41ea7ab13a50ca5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Logs a HTML output message in a text file.
   *
   * The link to the HTML output message will be printed by the results printer.
   *
   * @param string|null $message
   *   (optional) The HTML output message to be stored. If not supplied the
   *   current page content is used.
   *
   * @see \\Drupal\\Tests\\Listeners\\VerbosePrinter::printResult()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'htmlOutput',
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
    '3f5afd263295a9a1ce89b5a67a65ff8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates the directory to store browser output.
   *
   * Creates the directory to store browser output in if a file to write
   * URLs to has been created by \\Drupal\\Tests\\Listeners\\HtmlOutputPrinter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'initBrowserOutputFile',
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
    '0602232342cc0f959db4c63b2f53e888' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides a Guzzle middleware handler to log every response received.
   *
   * @return callable
   *   The callable handler that will do the logging.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getResponseLogHandler',
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
    '46d203725530f8aa436b54efbafc29d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the current calling line in the class under test.
   *
   * @return array
   *   An associative array with keys \'file\', \'line\' and \'function\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getTestMethodCaller',
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
    '82417b1607c0a664f58c4cda96d8d446' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods for assertions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '45cad4d81305f82acf00458afc420315' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Casts MarkupInterface objects into strings.
   *
   * @param string|array $value
   *   The value to act on.
   *
   * @return mixed
   *   The input value, with MarkupInterface objects casted to string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'castSafeStrings',
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
    'c4b226f1d68961ab37926091b8f4ed22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user logged in using the Mink controlled browser.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '3fce1d260a4078a4e8a1b0a5637fb2c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The number of meta refresh redirects to follow, or NULL if unlimited.
   *
   * @var null|int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'be859f6f4c94f1eccf0ecc52110100b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The number of meta refresh redirects followed during ::drupalGet().
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '23c5ddca37d69552d9c22f07b6b33d1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fills and submits a form.
   *
   * @param array $edit
   *   Field data in an associative array. Changes the current input fields
   *   (where possible) to the values indicated.
   *
   *   A checkbox can be set to TRUE to be checked and should be set to FALSE to
   *   be unchecked.
   * @param string $submit
   *   Value of the submit button whose click is to be emulated. For example,
   *   \'Save\'. The processing of the request depends on this value. For example,
   *   a form may have one button with the value \'Save\' and another button with
   *   the value \'Delete\', and execute different code depending on which one is
   *   clicked.
   * @param string $form_html_id
   *   (optional) HTML ID of the form to be submitted. On some pages
   *   there are many identical forms, so just using the value of the submit
   *   button is not enough. For example: \'trigger-node-presave-assign-form\'.
   *   Note that this is not the Drupal $form_id, but rather the HTML ID of the
   *   form, which is typically the same thing but with hyphens replacing the
   *   underscores.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'submitForm',
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
    '2be4cd850d345ad87c53470412ca4894' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes a form submission.
   *
   * It will be done as usual submit form with Mink.
   *
   * @param \\Drupal\\Core\\Url|string $path
   *   Location of the post form. Either a Drupal path or an absolute path or
   *   NULL to post to the current page. For multi-stage forms you can set the
   *   path to NULL and have it post to the last received page. Example:
   *
   *   @code
   *   // First step in form.
   *   $edit = array(...);
   *   $this->drupalPostForm(\'some_url\', $edit, \'Save\');
   *
   *   // Second step in form.
   *   $edit = array(...);
   *   $this->drupalPostForm(NULL, $edit, \'Save\');
   *   @endcode
   * @param array $edit
   *   Field data in an associative array. Changes the current input fields
   *   (where possible) to the values indicated.
   *
   *   When working with form tests, the keys for an $edit element should match
   *   the \'name\' parameter of the HTML of the form. For example, the \'body\'
   *   field for a node has the following HTML:
   *   @code
   *   <textarea id="edit-body-und-0-value" class="text-full form-textarea
   *    resize-vertical" placeholder="" cols="60" rows="9"
   *    name="body[0][value]"></textarea>
   *   @endcode
   *   When testing this field using an $edit parameter, the code becomes:
   *   @code
   *   $edit["body[0][value]"] = \'My test value\';
   *   @endcode
   *
   *   A checkbox can be set to TRUE to be checked and should be set to FALSE to
   *   be unchecked. Multiple select fields can be tested using \'name[]\' and
   *   setting each of the desired values in an array:
   *   @code
   *   $edit = array();
   *   $edit[\'name[]\'] = array(\'value1\', \'value2\');
   *   @endcode
   *   @todo change $edit to disallow NULL as a value for Drupal 9.
   *     https://www.drupal.org/node/2802401
   * @param string $submit
   *   The id, name, label or value of the submit button which is to be clicked.
   *   For example, \'Save\'. The first element matched by
   *   \\Drupal\\Tests\\WebAssert::buttonExists() will be used. The processing of
   *   the request depends on this value. For example, a form may have one
   *   button with the value \'Save\' and another button with the value \'Delete\',
   *   and execute different code depending on which one is clicked.
   * @param array $options
   *   Options to be forwarded to the url generator.
   * @param string|null $form_html_id
   *   (optional) HTML ID of the form to be submitted. On some pages
   *   there are many identical forms, so just using the value of the submit
   *   button is not enough. For example: \'trigger-node-presave-assign-form\'.
   *   Note that this is not the Drupal $form_id, but rather the HTML ID of the
   *   form, which is typically the same thing but with hyphens replacing the
   *   underscores.
   *
   * @return string
   *   (deprecated) The response content after submit form. It is necessary for
   *   backwards compatibility and will be removed before Drupal 9.0. You should
   *   just use the webAssert object for your assertions.
   *
   * @see \\Drupal\\Tests\\WebAssert::buttonExists()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'drupalPostForm',
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
    'a624361eab862e6619570928bccb92d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Logs in a user using the Mink controlled browser.
   *
   * If a user is already logged in, then the current user is logged out before
   * logging in the specified user.
   *
   * Please note that neither the current user nor the passed-in user object is
   * populated with data of the logged in user. If you need full access to the
   * user object after logging in, it must be updated manually. If you also need
   * access to the plain-text password of the user (set by drupalCreateUser()),
   * e.g. to log in the same user again, then it must be re-assigned manually.
   * For example:
   * @code
   *   // Create a user.
   *   $account = $this->drupalCreateUser(array());
   *   $this->drupalLogin($account);
   *   // Load real user object.
   *   $pass_raw = $account->passRaw;
   *   $account = User::load($account->id());
   *   $account->passRaw = $pass_raw;
   * @endcode
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   User object representing the user to log in.
   *
   * @see drupalCreateUser()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'drupalLogin',
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
    '0773284bbf90822de504d48cdac3b27e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Logs a user out of the Mink controlled browser and confirms.
   *
   * Confirms logout by checking the login page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'drupalLogout',
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
    'f103b88daa8577c3785aaec66bfc8bf7' => 
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
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'e99a6ec122666b24f1489293bb17a2d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a Drupal path or an absolute path.
   *
   * @param string|\\Drupal\\Core\\Url $path
   *   Drupal path or URL to load into Mink controlled browser.
   * @param array $options
   *   (optional) Options to be forwarded to the url generator.
   * @param string[] $headers
   *   An array containing additional HTTP request headers, the array keys are
   *   the header names and the array values the header values. This is useful
   *   to set for example the "Accept-Language" header for requesting the page
   *   in a different language. Note that not all headers are supported, for
   *   example the "Accept" header is always overridden by the browser. For
   *   testing REST APIs it is recommended to obtain a separate HTTP client
   *   using getHttpClient() and performing requests that way.
   *
   * @return string
   *   The retrieved HTML string, also available as $this->getRawContent()
   *
   * @see \\Drupal\\Tests\\BrowserTestBase::getHttpClient()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'drupalGet',
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
    '007748853bea56ad41b297239ab02655' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds an a absolute URL from a system path or a URL object.
   *
   * @param string|\\Drupal\\Core\\Url $path
   *   A system path or a URL.
   * @param array $options
   *   Options to be passed to Url::fromUri().
   *
   * @return string
   *   An absolute URL string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'buildUrl',
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
    'bec6555013478479f142a61ce4ad9389' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Takes a path and returns an absolute path.
   *
   * @param string $path
   *   A path from the Mink controlled browser content.
   *
   * @return string
   *   The $path with $base_url prepended, if necessary.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getAbsoluteUrl',
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
    '8e5bb0c20fe18ad80cf4cbdeeb209cce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepare for a request to testing site.
   *
   * The testing site is protected via a SIMPLETEST_USER_AGENT cookie that is
   * checked by drupal_valid_test_ua().
   *
   * @see drupal_valid_test_ua()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'prepareRequest',
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
    '9914c73e5b6962a2cecac2266f410647' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether a given user account is logged in.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user account object to check.
   *
   * @return bool
   *   Return TRUE if the user is logged in, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'drupalUserIsLoggedIn',
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
    'e0bc8a464364752acfcff532c3f8c31d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clicks the element with the given CSS selector.
   *
   * @param string $css_selector
   *   The CSS selector identifying the element to click.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'click',
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
    'f5a643be446a12792c6bcb2373ac17d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Follows a link by complete name.
   *
   * Will click the first link found with this link text.
   *
   * If the link is discovered and clicked, the test passes. Fail otherwise.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $label
   *   Text between the anchor tags.
   * @param int $index
   *   (optional) The index number for cases where multiple links have the same
   *   text. Defaults to 0.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'clickLink',
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
    '8d34b5c009b1b4c7a0df4e4c58b6cec5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the plain-text content from the current page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getTextContent',
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
    '9ec8b6778f6fe429cf449f2c93beac60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the current URL from the browser.
   *
   * @return string
   *   The current URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getUrl',
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
    '792faa3865d10c01b399de1d466d941e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks for meta refresh tag and if found call drupalGet() recursively.
   *
   * This function looks for the http-equiv attribute to be set to "Refresh" and
   * is case-insensitive.
   *
   * @return string|false
   *   Either the new page content or FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'checkForMetaRefresh',
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
    'c3d9c6e05c97f5ad2124c758e5713e87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Searches elements using a CSS selector in the raw content.
   *
   * The search is relative to the root element (HTML tag normally) of the page.
   *
   * @param string $selector
   *   CSS selector to use in the search.
   *
   * @return \\Behat\\Mink\\Element\\NodeElement[]
   *   The list of elements on the page that match the selector.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'refreshvariablestrait' => 'Drupal\\Core\\Test\\RefreshVariablesTrait',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'cssSelect',
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
    'bdd11dafc9d4abc876c94471682b3ea2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for shared test setup functionality.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '30c2e899ceb693283a01f0e4fd63f15e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of config object names that are excluded from schema checking.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '2362e68e2eba8efd60bcb1ea898160b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The dependency injection container used in the test.
   *
   * @var \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '27fc875006b02992c39265722a869ef4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The site directory of this test run.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '8f9777aebf679efebb3fe78e875124b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The public file directory for the test environment.
   *
   * @see \\Drupal\\simpletest\\TestBase::prepareEnvironment()
   * @see \\Drupal\\Tests\\BrowserTestBase::prepareEnvironment()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '410ce2eb6870b232bf70b5d0c49bb011' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The site directory of the original parent site.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '0c9bc42e7534af39c3623688fe563f8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The private file directory for the test environment.
   *
   * @see \\Drupal\\simpletest\\TestBase::prepareEnvironment()
   * @see \\Drupal\\Tests\\BrowserTestBase::prepareEnvironment()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'fa90079bd8d34f555b531bf65e82a4b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set to TRUE to strict check all configuration saved.
   *
   * @see \\Drupal\\Core\\Config\\Testing\\ConfigSchemaChecker
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '65132211e1bf913c76b77b963c498b6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The DrupalKernel instance used in the test.
   *
   * @var \\Drupal\\Core\\DrupalKernel
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'a21d6420fd73dfda68db63dc869123f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The temporary file directory for the test environment.
   *
   * This value has to match the temporary directory created in
   * install_base_system() for test installs.
   *
   * @see \\Drupal\\simpletest\\TestBase::prepareEnvironment()
   * @see \\Drupal\\Tests\\BrowserTestBase::prepareEnvironment()
   * @see install_base_system()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '237208e3b3c31aa6b8138d6b1a65102b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The test run ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'a8e3b4c4d8e6beac07c03c47ec4a2ca0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the database connection to the site running Simpletest.
   *
   * @return \\Drupal\\Core\\Database\\Connection
   *   The database connection to use for inserting assertions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getDatabaseConnection',
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
    '3a90133bf822b409dbb3422d65e76cc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a database prefix for running tests.
   *
   * The database prefix is used by prepareEnvironment() to setup a public files
   * directory for the test to be run, which also contains the PHP error log,
   * which is written to in case of a fatal error. Since that directory is based
   * on the database prefix, all tests (even unit tests) need to have one, in
   * order to access and read the error log.
   *
   * The generated database table prefix is used for the Drupal installation
   * being performed for the test. It is also used as user agent HTTP header
   * value by the cURL-based browser of WebTestBase, which is sent to the Drupal
   * installation of the test. During early Drupal bootstrap, the user agent
   * HTTP header is parsed, and if it matches, all database queries use the
   * database table prefix that has been generated here.
   *
   * @see \\Drupal\\Tests\\BrowserTestBase::prepareEnvironment()
   * @see \\Drupal\\simpletest\\WebTestBase::curlInitialize()
   * @see \\Drupal\\simpletest\\TestBase::prepareEnvironment()
   * @see drupal_valid_test_ua()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'prepareDatabasePrefix',
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
    '25462f2879e615d3c8ca83693bf2b859' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Changes the database connection to the prefixed one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'changeDatabasePrefix',
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
    '1e5b748764835df810b360e19705f329' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the config schema exclusions for this test.
   *
   * @return string[]
   *   An array of config object names that are excluded from schema checking.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getConfigSchemaExclusions',
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
    '1f1d67cbaa0f9fdd5605c5deacdb5fbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create and place block with default settings.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\block\\Traits',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'f0857d8d256e7d5ad33ce8fbe689756a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a block instance based on default settings.
   *
   * @param string $plugin_id
   *   The plugin ID of the block type for this block instance.
   * @param array $settings
   *   (optional) An associative array of settings for the block entity.
   *   Override the defaults by specifying the key and value in the array, for
   *   example:
   *   @code
   *     $this->drupalPlaceBlock(\'system_powered_by_block\', array(
   *       \'label\' => t(\'Hello, world!\'),
   *     ));
   *   @endcode
   *   The following defaults are provided:
   *   - label: Random string.
   *   - ID: Random string.
   *   - region: \'sidebar_first\'.
   *   - theme: The default theme.
   *   - visibility: Empty array.
   *
   * @return \\Drupal\\block\\Entity\\Block
   *   The block entity.
   *
   * @todo
   *   Add support for creating custom block instances.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\block\\Traits',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'placeBlock',
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
    '197e3f7d7dd0bf8c94ddf1e36a664584' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '09f2d0d73eb7feb5430728d829e960c9' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '0b91c73ac9ecf9bea5da527dfd38a987' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '4d555a294605c0509066c44e4a773cb7' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'fdc9cbf2f7236835ee54776300138a43' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '4cfb92c84e51c30c978334784e72f2d0' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '8620669ba12d0047b1427bb58fa877b1' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'eca2589f1ad5500fedf684d6c98c8149' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'a644214d9f67c8a4dfe170a5c5658858' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '493486e0b859d50d6d5059adb479d940' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '82286bae8efc5c050ff25b3e1210f94a' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'c8e58ee7f4579235816a204e847b7502' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '08290a3ae723e34c3409576be308206e' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'a5690cd28791acb74d96595c3f4be74f' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'a0b2b8d12df7092a0e56a43fb623c2ea' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '4ff821114319c0f583e175a97484befb' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'd240be83712b6a9eec6273aaea69bf57' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '66dd5c209b894e11173f794a6ac91275' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '422100327b3230c128e7a11fe6d6cff5' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '83f10f216124e0105614cd5bda85ed0c' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'fea2d8f533987ceb7326e2f37636f4ad' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '324d43e9ca75ed5b89f562f608fb90b7' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '507dd5f6f7084fc607c94aa58e6b6869' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '200039a2c79264da84c2e2a0456c437a' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '5a40d9eb16bef1cdd75a212cd98a9b5d' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '4cdbf8d2604221498b383ba2a8e90f4e' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '561a47601720865505bf9807383c788c' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'fb5571ceb30becfe432b8ec93e528066' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'd788397e9ab63e4499b04cefbcf8974c' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '5565d16d4442a73fc39a3ed197c5dfeb' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'da46a0302aad4d9cda8bc1c43dcecce4' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '265145e1ba9febd9678128eb5bf3708c' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'c8702615ea69280cf6670083f46f660b' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'a3e58d63b2753bfe0ab0d49066b8ecdf' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'f48563f587b014b502cd94fd054b4640' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'ab2358d56fc30348a0adf1a858152a9a' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '6a31ced3bef5fa789686ac9b9121be33' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '1ccf47eb1cb1985b7eed2fdd9d537751' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'f6863ea6df4f8747208ea098b899282e' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'c517c118c3db7e5a275d0700940ef989' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'cc617b8c729f133c4e729d5b852e3a1d' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '68735f0dc6855c1bd35f47e55c814e2f' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'a91fec6c7fa742bd55dc5eab8d571426' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '9df12f5ceaadab55f0e8a0950a2817f9' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '8cd15affe352598ffc6d00e2c3916855' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '6060805ede68855b5739c66ff622ee0d' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '930217615a6355c2916608589595201a' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'b52428983974835cf86dc048dc4ed12c' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'c2aab06ed173a678ac6828addd64989d' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '3fa4b3551e977e888d3bfbb28de012c4' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '79ea62873c83e59216b83aa8f7d8b66b' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '337c38e27f95cb3d47cdb4cd3bda1b38' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '7a9a38db73d8cb0228c7af0a2fb6489b' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'a0208c190dbd18d1806d87293ece3934' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides random generator utility methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '2c8faa9769eccbfc880ee0f503c99cd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The random generator.
   *
   * @var \\Drupal\\Component\\Utility\\Random
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '23b72b5892d870fbf4eac9824c034019' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a pseudo-random string of ASCII characters of codes 32 to 126.
   *
   * Do not use this method when special characters are not possible (e.g., in
   * machine or file names that have already been validated); instead, use
   * \\Drupal\\simpletest\\TestBase::randomMachineName(). If $length is greater
   * than 3 the random string will include at least one ampersand (\'&\') and
   * at least one greater than (\'>\') character to ensure coverage for special
   * characters and avoid the introduction of random test failures.
   *
   * @param int $length
   *   Length of random string to generate.
   *
   * @return string
   *   Pseudo-randomly generated unique string including special characters.
   *
   * @see \\Drupal\\Component\\Utility\\Random::string()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'randomString',
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
    'b41af08193e9f06f9ebce0a73c1128e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Callback for random string validation.
   *
   * @see \\Drupal\\Component\\Utility\\Random::string()
   *
   * @param string $string
   *   The random string to validate.
   *
   * @return bool
   *   TRUE if the random string is valid, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'randomStringValidate',
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
    '2b0435f208e5687582d448b170216cdb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a unique random string containing letters and numbers.
   *
   * Do not use this method when testing unvalidated user input. Instead, use
   * \\Drupal\\simpletest\\TestBase::randomString().
   *
   * @param int $length
   *   Length of random string to generate.
   *
   * @return string
   *   Randomly generated unique string.
   *
   * @see \\Drupal\\Component\\Utility\\Random::name()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'randomMachineName',
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
    'fd0d1bc98bb67ec0bbdaedd9cd872cec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a random PHP object.
   *
   * @param int $size
   *   The number of random keys to add to the object.
   *
   * @return object
   *   The generated object, with the specified number of random keys. Each key
   *   has a random string value.
   *
   * @see \\Drupal\\Component\\Utility\\Random::object()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'randomObject',
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
    '1b162d81e8779a1c0b805f94e63aced5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the random generator for the utility methods.
   *
   * @return \\Drupal\\Component\\Utility\\Random
   *   The random generator.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getRandomGenerator',
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
    '62598fa845f9f7b1ede97b81ec002840' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create node based on default settings.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '1d3acf4d3871bb94bd91802669ee43f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a node from the database based on its title.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $title
   *   A node title, usually generated by $this->randomMachineName().
   * @param $reset
   *   (optional) Whether to reset the entity cache.
   *
   * @return \\Drupal\\node\\NodeInterface
   *   A node entity matching $title.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getNodeByTitle',
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
    'd12f4f0dd82d380de8d93f4b4504418d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a node based on default settings.
   *
   * @param array $values
   *   (optional) An associative array of values for the node, as used in
   *   creation of entity. Override the defaults by specifying the key and value
   *   in the array, for example:
   *
   *   @code
   *     $this->drupalCreateNode(array(
   *       \'title\' => t(\'Hello, world!\'),
   *       \'type\' => \'article\',
   *     ));
   *   @endcode
   *   The following defaults are provided:
   *   - body: Random string using the default filter format:
   *     @code
   *       $values[\'body\'][0] = array(
   *         \'value\' => $this->randomMachineName(32),
   *         \'format\' => filter_default_format(),
   *       );
   *     @endcode
   *   - title: Random string.
   *   - type: \'page\'.
   *   - uid: The currently logged in user, or anonymous.
   *
   * @return \\Drupal\\node\\NodeInterface
   *   The created node entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'createNode',
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
    '4fd5226b8636ae8cc944c46fa125b642' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserInterface $user */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'createNode',
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
    '6496903dca14cba109f2614921246b58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create content type from given values.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'dd051c00353ecf411a8b5f16fcbaf332' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a custom content type based on default settings.
   *
   * @param array $values
   *   An array of settings to change from the defaults.
   *   Example: \'type\' => \'foo\'.
   *
   * @return \\Drupal\\node\\Entity\\NodeType
   *   Created content type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'createContentType',
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
    '300cb6b2014d7b9c9dc82496c64500d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods to deal with config system objects in tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'configimporter' => 'Drupal\\Core\\Config\\ConfigImporter',
          'storagecomparer' => 'Drupal\\Core\\Config\\StorageComparer',
          'storagecopytrait' => 'Drupal\\Core\\Config\\StorageCopyTrait',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '2365c65059a2004689472bddb3034439' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Utility trait to copy configuration from one storage to another.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '139e4e52c78ed0eddc96d09178200959' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copy the configuration from one storage to another and remove stale items.
   *
   * This method empties target storage and copies all collections from source.
   * Configuration is only copied and not imported, should not be used
   * with the active storage as the target.
   *
   * @param \\Drupal\\Core\\Config\\StorageInterface $source
   *   The configuration storage to copy from.
   * @param \\Drupal\\Core\\Config\\StorageInterface $target
   *   The configuration storage to copy to.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'replaceStorageContents',
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
    'abfa8bad27f3693a3a87e871450449a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a ConfigImporter object to import test configuration.
   *
   * @return \\Drupal\\Core\\Config\\ConfigImporter
   *   The config importer object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'configimporter' => 'Drupal\\Core\\Config\\ConfigImporter',
          'storagecomparer' => 'Drupal\\Core\\Config\\StorageComparer',
          'storagecopytrait' => 'Drupal\\Core\\Config\\StorageCopyTrait',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'configImporter',
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
    '66cd9342fe82f6c13955f2861ce1f48f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copies configuration objects from source storage to target storage.
   *
   * @param \\Drupal\\Core\\Config\\StorageInterface $source_storage
   *   The source config storage service.
   * @param \\Drupal\\Core\\Config\\StorageInterface $target_storage
   *   The target config storage service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'configimporter' => 'Drupal\\Core\\Config\\ConfigImporter',
          'storagecomparer' => 'Drupal\\Core\\Config\\StorageComparer',
          'storagecopytrait' => 'Drupal\\Core\\Config\\StorageCopyTrait',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'copyConfig',
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
    '07a2778a1550378aa5de96a4e1ff8902' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'd7dcefcaadf3f23fc0600485b6d0cd8d' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'd80bedea355a89e058a5e5df33b6eff5' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '561767ecccb992bc89c4aed818ec4a51' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'f12e50c09174a242117a0a810fe7d4e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create additional test users and switch the currently
 * logged in one.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '2136a9d59d14b809fbd1224574d62abd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a random user account and sets it as current user.
   *
   * Unless explicitly specified by setting the user ID to 1, a regular user
   * account will be created and set as current, after creating user account 1.
   * Additionally, this will ensure that at least the anonymous user account
   * exists regardless of the specified user ID.
   *
   * @param array $values
   *   (optional) An array of initial user field values.
   * @param array $permissions
   *   (optional) Array of permission names to assign to user. Note that the
   *   user always has the default permissions derived from the "authenticated
   *   users" role.
   * @param bool $admin
   *   (optional) Whether the user should be an administrator with all the
   *   available permissions.
   *
   * @return \\Drupal\\user\\UserInterface
   *   A user account object.
   *
   * @throws \\LogicException
   *   If attempting to assign additional roles to the anonymous user account.
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   *   If the user could not be saved.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'setUpCurrentUser',
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
    'c03975b59f8f7a59e5743f14ed8fd94c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Switch the current logged in user.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user account object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'setCurrentUser',
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
    '497bb73ee7c082886e29e27f018048d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a user with a given set of permissions.
   *
   * @param array $permissions
   *   Array of permission names to assign to user. Note that the user always
   *   has the default permissions derived from the "authenticated users" role.
   * @param string $name
   *   The user name.
   * @param bool $admin
   *   (optional) Whether the user should be an administrator
   *   with all the available permissions.
   * @param array $values
   *   (optional) An array of initial user field values.
   *
   * @return \\Drupal\\user\\Entity\\User|false
   *   A fully loaded user object with pass_raw property, or FALSE if account
   *   creation fails.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   *   If the user creation fails.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'createUser',
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
    'b7b8d2bcddb0cda16aff989d0e275cbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an administrative role.
   *
   * @param string $rid
   *   (optional) The role ID (machine name). Defaults to a random name.
   * @param string $name
   *   (optional) The label for the role. Defaults to a random string.
   * @param int $weight
   *   (optional) The weight for the role. Defaults to NULL which sets the
   *   weight to maximum + 1.
   *
   * @return string
   *   Role ID of newly created role, or FALSE if role creation failed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'createAdminRole',
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
    'c9a3a0fba217e3f55831c209ca377762' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\RoleInterface $role */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'createAdminRole',
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
    '45d23d6d178aff5f9870c54df8872616' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a role with specified permissions.
   *
   * @param array $permissions
   *   Array of permission names to assign to role.
   * @param string $rid
   *   (optional) The role ID (machine name). Defaults to a random name.
   * @param string $name
   *   (optional) The label for the role. Defaults to a random string.
   * @param int $weight
   *   (optional) The weight for the role. Defaults to NULL which sets the
   *   weight to maximum + 1.
   *
   * @return string
   *   Role ID of newly created role, or FALSE if role creation failed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'createRole',
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
    'e6df9d36fa30409841c77109b70ca363' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a given list of permission names is valid.
   *
   * @param array $permissions
   *   The permission names to check.
   *
   * @return bool
   *   TRUE if the permissions are valid, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'checkPermissions',
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
    '3f321c53973c00e6824bf5c41084e3bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Grant permissions to a user role.
   *
   * @param \\Drupal\\user\\RoleInterface $role
   *   The user role entity to alter.
   * @param array $permissions
   *   (optional) A list of permission names to grant.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'grantPermissions',
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
    'b4ab592d43860ab998ad73ba31a1c03c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds xdebug cookies, from request setup.
   *
   * In order to debug web tests you need to either set a cookie, have the
   * Xdebug session in the URL or set an environment variable in case of CLI
   * requests. If the developer listens to connection on the parent site, by
   * default the cookie is not forwarded to the client side, so you cannot
   * debug the code running on the child site. In order to make debuggers work
   * this bit of information is forwarded. Make sure that the debugger listens
   * to at least three external connections.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request.
   *
   * @return array
   *   The extracted cookies.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'extractCookiesFromRequest',
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
    '348f2ead8fb42cfc8a279bb758143ec9' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '55f608edb24db93010019aefcda128c2' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '21675514c16ea9584be50b8e5d3bb742' => 
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
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '0460bec41203a93d451260335c8b4bbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database prefix of this test run.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'd932cfb6aedbadc2b1436725197a0b97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Time limit in seconds for the test.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'ce8750cd3e24b51beca782c3a46c66c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The translation file directory for the test environment.
   *
   * This is set in BrowserTestBase::prepareEnvironment().
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '3eb601b9e34e67808eb18cd74bff0c73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The config importer that can be used in a test.
   *
   * @var \\Drupal\\Core\\Config\\ConfigImporter
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '04c85e45329d42e221fdee99ac5a2f96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * The test runner will merge the $modules lists from this class, the class
   * it extends, and so on up the class hierarchy. It is not necessary to
   * include modules in your list that a parent class has already declared.
   *
   * @var string[]
   *
   * @see \\Drupal\\Tests\\BrowserTestBase::installDrupal()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'f1940f13bdde137345ecd92e62a0806a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The profile to install as a basis for testing.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '12f009c4bcf139667317abbd27fddec9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme to install as the default for testing.
   *
   * Defaults to the install profile\'s default theme, if it specifies any.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'cf78ddbaa08d196976bd42386ad3d463' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of custom translations suitable for drupal_rewrite_settings().
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'a291195182de28da9be0f0475bf59027' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Mink session manager.
   *
   * This will not be initialized if there was an error during the test setup.
   *
   * @var \\Behat\\Mink\\Mink|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'f5cf80415809047bc2f4c8a2e6ebc0a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Browser tests are run in separate processes to prevent collisions between
   * code that may be loaded by tests.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '31cd9149d956c941f49ab5ede6a07d19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '448383ad90f34f8518892b4667647f50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The base URL.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'a8e27dfe86f17921556af6971d328da3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original array of shutdown function callbacks.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '1ee85e4c57b3c321fea8ac3f81096d37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The app root.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    '0cbf254c37a5cf7fa8673c3b702bcfda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original container.
   *
   * Move this to \\Drupal\\Core\\Test\\FunctionalTestSetupTrait once TestBase no
   * longer provides the same value.
   *
   * @var \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
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
    'c540922a007849d6eac9e04930c55831' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => '__construct',
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
    '3243073f4c9d18c49b931a92f79e0972' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes Mink sessions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'initMink',
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
    'aa9da8a73202f59b18bcf269ffd6f7b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\GuzzleHttp\\Client $client */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'initMink',
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
    '1e5275751cb50e7c03bfb7ae03040420' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Visits the front page when initializing Mink.
   *
   * According to the W3C WebDriver specification a cookie can only be set if
   * the cookie domain is equal to the domain of the active document. When the
   * browser starts up the active document is not our domain but \'about:blank\'
   * or similar. To be able to set our User-Agent and Xdebug cookies at the
   * start of the test we now do a request to the front page so the active
   * document matches the domain.
   *
   * @see https://w3c.github.io/webdriver/webdriver-spec.html#add-cookie
   * @see https://www.w3.org/Bugs/Public/show_bug.cgi?id=20975
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'initFrontPage',
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
    '2428c4fc5a0bbaa415676c317eed5b92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an instance of the default Mink driver.
   *
   * @return Behat\\Mink\\Driver\\DriverInterface
   *   Instance of default Mink driver.
   *
   * @throws \\InvalidArgumentException
   *   When provided default Mink driver class can\'t be instantiated.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getDefaultDriverInstance',
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
    '44003703e1ec769a5ff3b230365a1d35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the Mink driver args from an environment variable, if it is set. Can
   * be overridden in a derived class so it is possible to use a different
   * value for a subset of tests, e.g. the JavaScript tests.
   *
   *  @return string|false
   *   The JSON-encoded argument string. False if it is not set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getMinkDriverArgs',
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
    '317453d8a9c153c1aa85e1a13316c9fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides a Guzzle middleware handler to log every response received.
   *
   * @return callable
   *   The callable handler that will do the logging.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getResponseLogHandler',
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
    'c718af5af0cf66df3ca162c7c3176492' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Registers additional Mink sessions.
   *
   * Tests wishing to use a different driver or change the default driver should
   * override this method.
   *
   * @code
   *   // Register a new session that uses the MinkPonyDriver.
   *   $pony = new MinkPonyDriver();
   *   $session = new Session($pony);
   *   $this->mink->registerSession(\'pony\', $session);
   * @endcode
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'registerSessions',
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
    'ccaaa1ea15047a6e83545854b336f0a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'setUp',
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
    '1ba513cda7effee9a061e79b345fa00e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures test files are deletable.
   *
   * Some tests chmod generated files to be read only. During
   * BrowserTestBase::cleanupEnvironment() and other cleanup operations,
   * these files need to get deleted too.
   *
   * @param string $path
   *   The file path.
   *
   * @see \\Drupal\\Core\\File\\FileSystemInterface::deleteRecursive()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'filePreDeleteCallback',
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
    '073886c1335286f6b738e3ab77bdf619' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clean up the Simpletest environment.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'cleanupEnvironment',
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
    'eb24b433f3d224d0ded5ae34c3c4f557' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'tearDown',
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
    '82fa262b2468a6d435cf18dc3d2e2d75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns Mink session.
   *
   * @param string $name
   *   (optional) Name of the session. Defaults to the active session.
   *
   * @return \\Behat\\Mink\\Session
   *   The active Mink session object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getSession',
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
    'fa1a68ee8217b3a1bd163696877a9f5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get session cookies from current session.
   *
   * @return \\GuzzleHttp\\Cookie\\CookieJar
   *   A cookie jar with the current session.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getSessionCookies',
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
    '4c120cf6de24bb37f9847b9241da5f05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Obtain the HTTP client for the system under test.
   *
   * Use this method for arbitrary HTTP requests to the site under test. For
   * most tests, you should not get the HTTP client and instead use navigation
   * methods such as drupalGet() and clickLink() in order to benefit from
   * assertions.
   *
   * Subclasses which substitute a different Mink driver should override this
   * method and provide a Guzzle client if the Mink driver provides one.
   *
   * @return \\GuzzleHttp\\ClientInterface
   *   The client with BrowserTestBase configuration.
   *
   * @throws \\RuntimeException
   *   If the Mink driver does not support a Guzzle HTTP client, throw an
   *   exception.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getHttpClient',
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
    'e6c56688611a2d9b2200ebf79c0752e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper function to get the options of select field.
   *
   * @param \\Behat\\Mink\\Element\\NodeElement|string $select
   *   Name, ID, or Label of select field to assert.
   * @param \\Behat\\Mink\\Element\\Element $container
   *   (optional) Container element to check against. Defaults to current page.
   *
   * @return array
   *   Associative array of option keys and values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getOptions',
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
    'eb6191b8ba9707cb4532c566dbcf6bbb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs Drupal into the Simpletest site.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'installDrupal',
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
    '1113b03a3742dfe156d1419f7e0aa41b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prevents serializing any properties.
   *
   * Browser tests are run in a separate process. To do this PHPUnit creates a
   * script to run the test. If it fails, the test result object will contain a
   * stack trace which includes the test object. It will attempt to serialize
   * it. Returning an empty array prevents it from serializing anything it
   * should not.
   *
   * @return array
   *   An empty array.
   *
   * @see vendor/phpunit/phpunit/src/Util/PHP/Template/TestCaseMethod.tpl.dist
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => '__sleep',
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
    '9c1d5fde18a62a6a8046808f444787b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translates a CSS expression to its XPath equivalent.
   *
   * The search is relative to the root element (HTML tag normally) of the page.
   *
   * @param string $selector
   *   CSS selector to use in the search.
   * @param bool $html
   *   (optional) Enables HTML support. Disable it for XML documents.
   * @param string $prefix
   *   (optional) The prefix for the XPath expression.
   *
   * @return string
   *   The equivalent XPath of a CSS expression.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'cssSelectToXpath',
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
    '8baf8e6ad62e60142be0e5c1c8c2b92a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs an xpath search on the contents of the internal browser.
   *
   * The search is relative to the root element (HTML tag normally) of the page.
   *
   * @param string $xpath
   *   The xpath string to use in the search.
   * @param array $arguments
   *   An array of arguments with keys in the form \':name\' matching the
   *   placeholders in the query. The values may be either strings or numeric
   *   values.
   *
   * @return \\Behat\\Mink\\Element\\NodeElement[]
   *   The list of elements matching the xpath expression.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'xpath',
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
    'a668b4ad6ecd18a33d132dc6153a3f57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Configuration accessor for tests. Returns non-overridden configuration.
   *
   * @param string $name
   *   Configuration name.
   *
   * @return \\Drupal\\Core\\Config\\Config
   *   The configuration object with original configuration data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'config',
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
    'f9167f0e34d4305d58a94a3beb00cdc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns all response headers.
   *
   * @return array
   *   The HTTP headers values.
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0.
   *   Use $this->getSession()->getResponseHeaders() instead.
   *
   * @see https://www.drupal.org/node/3067207
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'drupalGetHeaders',
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
    'f411344af2983a4c529fe8f207f0f331' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the value of an HTTP response header.
   *
   * If multiple requests were required to retrieve the page, only the headers
   * from the last request will be checked by default.
   *
   * @param string $name
   *   The name of the header to retrieve. Names are case-insensitive (see RFC
   *   2616 section 4.2).
   *
   * @return string|null
   *   The HTTP header value or NULL if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'drupalGetHeader',
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
    '465601f124a66b6e04b287b4ca72a5dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the JavaScript drupalSettings variable for the currently-loaded page.
   *
   * @return array
   *   The JSON decoded drupalSettings value from the current page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getDrupalSettings',
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
    'f2084fda486950628071816ca308842e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the current calling line in the class under test.
   *
   * @return array
   *   An associative array with keys \'file\', \'line\' and \'function\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'getTestMethodCaller',
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
    'c38b4a3949e691e013c4b33ce41efb93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Transforms a nested array into a flat array suitable for drupalPostForm().
   *
   * @param array $values
   *   A multi-dimensional form values array to convert.
   *
   * @return array
   *   The flattened $edit array suitable for BrowserTestBase::drupalPostForm().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'gouttedriver' => 'Behat\\Mink\\Driver\\GoutteDriver',
          'element' => 'Behat\\Mink\\Element\\Element',
          'mink' => 'Behat\\Mink\\Mink',
          'selectorshandler' => 'Behat\\Mink\\Selector\\SelectorsHandler',
          'session' => 'Behat\\Mink\\Session',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'database' => 'Drupal\\Core\\Database\\Database',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'assertlegacytrait' => 'Drupal\\FunctionalTests\\AssertLegacyTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'contenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'nodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'usercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'markupinterfacecomparator' => 'Drupal\\TestTools\\Comparator\\MarkupInterfaceComparator',
          'cookiejar' => 'GuzzleHttp\\Cookie\\CookieJar',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
          'responseinterface' => 'Psr\\Http\\Message\\ResponseInterface',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\Tests\\BrowserTestBase',
         'functionName' => 'translatePostValues',
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