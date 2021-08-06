<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1628257708,
	'meta' => array (
  'cacheVersion' => 'v9-project-extensions',
  'phpstanVersion' => '0.12.94',
  'phpVersion' => 70328,
  'projectConfig' => '{parameters: {bootstrapFiles: [/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php], excludePaths: {analyseAndScan: [*.api.php, */tests/fixtures/*.php, */tests/Drupal/Tests/Listeners/Legacy/*, */tests/fixtures/*.php, */settings*.php, */bower_components/*, */node_modules/*], analyse: []}, fileExtensions: [module, theme, inc, install, profile, engine], drupal: {drupal_root: /var/www/html/web, entityTypeStorageMapping: {node: Drupal\\node\\NodeStorage, taxonomy_term: Drupal\\taxonomy\\TermStorage, user: Drupal\\user\\UserStorage}}, tmpDir: /var/www/html/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan, customRulesetUsed: true}, rules: [PHPStan\\Rules\\Classes\\PluginManagerInspectionRule, PHPStan\\Rules\\Drupal\\Coder\\DiscouragedFunctionsRule, PHPStan\\Rules\\Drupal\\GlobalDrupalDependencyInjectionRule, PHPStan\\Rules\\Drupal\\PluginManager\\PluginManagerSetsCacheBackendRule, PHPStan\\Rules\\Deprecations\\AccessDeprecatedConstant, PHPStan\\Rules\\Deprecations\\AccessDeprecatedPropertyRule, PHPStan\\Rules\\Deprecations\\AccessDeprecatedStaticPropertyRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedFunctionRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedMethodRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedStaticMethodRule, PHPStan\\Rules\\Deprecations\\FetchingClassConstOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\FetchingDeprecatedConstRule, PHPStan\\Rules\\Deprecations\\ImplementationOfDeprecatedInterfaceRule, PHPStan\\Rules\\Deprecations\\InheritanceOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\InheritanceOfDeprecatedInterfaceRule, PHPStan\\Rules\\Deprecations\\InstantiationOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInClassMethodSignatureRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInClosureSignatureRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInFunctionSignatureRule, PHPStan\\Rules\\Deprecations\\UsageOfDeprecatedCastRule, PHPStan\\Rules\\Deprecations\\UsageOfDeprecatedTraitRule], services: [{class: PHPStan\\Drupal\\ServiceMap}, {class: PHPStan\\Type\\EntityTypeManagerGetStorageDynamicReturnTypeExtension, arguments: {entityTypeStorageMapping: %drupal.entityTypeStorageMapping%}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Type\\ServiceDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Reflection\\EntityFieldsViaMagicReflectionExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: PHPStan\\Rules\\Drupal\\LoadIncludes, tags: [phpstan.rules.rule], arguments: [%drupal.drupal_root%]}, {class: PHPStan\\Rules\\Drupal\\ModuleLoadInclude, tags: [phpstan.rules.rule], arguments: [%drupal.drupal_root%]}, {class: PHPStan\\Rules\\Deprecations\\PluginAnnotationContextDefinitionsRule, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\Deprecations\\ConfigEntityConfigExportRule, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\Drupal\\Tests\\BrowserTestBaseDefaultThemeRule, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\Deprecations\\DeprecatedClassHelper}]}',
  'analysedPaths' => 
  array (
    0 => '/var/www/html/web/themes/custom/gavias_edmix',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
  ),
  'composerInstalled' => 
  array (
  ),
  'executedFilesHashes' => 
  array (
    '/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php' => '6ad3cbafe65641bbbc5725a2719bfc1f2b8b91c1',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => '88caf21263a7d841940cfb8eb5038db48c64eea2',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'Zend OPcache',
    7 => 'apc',
    8 => 'apcu',
    9 => 'bcmath',
    10 => 'bz2',
    11 => 'calendar',
    12 => 'ctype',
    13 => 'curl',
    14 => 'date',
    15 => 'dom',
    16 => 'exif',
    17 => 'fileinfo',
    18 => 'filter',
    19 => 'ftp',
    20 => 'gd',
    21 => 'gettext',
    22 => 'hash',
    23 => 'iconv',
    24 => 'igbinary',
    25 => 'imagick',
    26 => 'intl',
    27 => 'json',
    28 => 'ldap',
    29 => 'libxml',
    30 => 'mbstring',
    31 => 'memcached',
    32 => 'msgpack',
    33 => 'mysqli',
    34 => 'mysqlnd',
    35 => 'openssl',
    36 => 'pcntl',
    37 => 'pcre',
    38 => 'pdo_mysql',
    39 => 'pdo_pgsql',
    40 => 'pdo_sqlite',
    41 => 'pgsql',
    42 => 'posix',
    43 => 'readline',
    44 => 'redis',
    45 => 'session',
    46 => 'shmop',
    47 => 'soap',
    48 => 'sockets',
    49 => 'sodium',
    50 => 'sqlite3',
    51 => 'standard',
    52 => 'sysvmsg',
    53 => 'sysvsem',
    54 => 'sysvshm',
    55 => 'tokenizer',
    56 => 'uploadprogress',
    57 => 'wddx',
    58 => 'xml',
    59 => 'xmlreader',
    60 => 'xmlrpc',
    61 => 'xmlwriter',
    62 => 'xsl',
    63 => 'zip',
    64 => 'zlib',
  ),
  'stubFiles' => 
  array (
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub' => '34c9e85af3fe514ea3e18f7fc87e03f7890e3a46',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/Exception.stub' => '82914ad49fd789e22b8648daf76335a98616d7a8',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub' => 'e8ef2c0c9c8d09136525ee1a9123d958cfe45f3f',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub' => '58d53af400e16da1ac377a3a08cead58f89ef82a',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub' => '1b23e432797a716191e792d673667ebc001643fc',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub' => '8c1272fb5f32ab3478e0c805276609cd02277ee4',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub' => '2a6220f72171aa65d979f4f8ee06a707ecb96ff4',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub' => '8d63f9636060e7efdfced52e29873f51c7cab46e',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub' => '850c98e54136d3dbbd46c1042a9286f7ca4d36f0',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub' => 'd6ee3aa03606b7a32ba2da3fcaa9bd725b28a868',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub' => '8a1046a82d819976c6bc909dc3f7c3241d1474c0',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub' => '6a8ce07b7dc82139ffd4ab1e84414e984801b065',
    'phar:///var/www/html/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub' => 'aff61beeb3e9dfaed0eede432921df5eee2d3b40',
  ),
  'level' => '0',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated method getUsername() of class Drupal\\Core\\Session\\AccountInterface:
in drupal:8.0.0 and is removed from drupal:9.0.0.
  Use \\Drupal\\Core\\Session\\AccountInterface::getAccountName() or
  \\Drupal\\user\\UserInterface::getDisplayName() instead.',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
       'line' => 68,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 68,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated method url() of class Drupal:
in drupal:8.0.0 and is removed from drupal:9.0.0.
  Instead create a \\Drupal\\Core\\Url object directly, for example using
  Url::fromRoute().',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
       'line' => 71,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 71,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated method url() of class Drupal:
in drupal:8.0.0 and is removed from drupal:9.0.0.
  Instead create a \\Drupal\\Core\\Url object directly, for example using
  Url::fromRoute().',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
       'line' => 72,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 72,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    3 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated method url() of class Drupal:
in drupal:8.0.0 and is removed from drupal:9.0.0.
  Instead create a \\Drupal\\Core\\Url object directly, for example using
  Url::fromRoute().',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
       'line' => 142,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 142,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    4 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated method url() of class Drupal:
in drupal:8.0.0 and is removed from drupal:9.0.0.
  Instead create a \\Drupal\\Core\\Url object directly, for example using
  Url::fromRoute().',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
       'line' => 144,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 144,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    5 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated method url() of class Drupal:
in drupal:8.0.0 and is removed from drupal:9.0.0.
  Instead create a \\Drupal\\Core\\Url object directly, for example using
  Url::fromRoute().',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
       'line' => 213,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 213,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/course original.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated function db_select():
in drupal:8.0.0 and is removed from drupal:9.0.0. Instead, get
  a database connection injected into your service from the container and
  call select() on it. For example,
  $injected_database->select($table, $alias, $options);',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/course original.php',
       'line' => 3,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/course original.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 3,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated function db_or():
in drupal:8.0.0 and is removed from drupal:9.0.0. Create
  a \\Drupal\\Core\\Database\\Query\\Condition object, specifying an OR
  conjunction: new Condition(\'OR\');',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/course original.php',
       'line' => 10,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/course original.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 10,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated function db_select():
in drupal:8.0.0 and is removed from drupal:9.0.0. Instead, get
  a database connection injected into your service from the container and
  call select() on it. For example,
  $injected_database->select($table, $alias, $options);',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/course original.php',
       'line' => 53,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/course original.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 53,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/course.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated function db_select():
in drupal:8.0.0 and is removed from drupal:9.0.0. Instead, get
  a database connection injected into your service from the container and
  call select() on it. For example,
  $injected_database->select($table, $alias, $options);',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/course.php',
       'line' => 3,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/course.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 3,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated function db_or():
in drupal:8.0.0 and is removed from drupal:9.0.0. Create
  a \\Drupal\\Core\\Database\\Query\\Condition object, specifying an OR
  conjunction: new Condition(\'OR\');',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/course.php',
       'line' => 10,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/course.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 10,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated function db_select():
in drupal:8.0.0 and is removed from drupal:9.0.0. Instead, get
  a database connection injected into your service from the container and
  call select() on it. For example,
  $injected_database->select($table, $alias, $options);',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/course.php',
       'line' => 53,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/course.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 53,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/functions.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated method entityManager() of class Drupal:
in drupal:8.0.0 and is removed from drupal:9.0.0.
  Use \\Drupal::entityTypeManager() instead in most cases. If the needed
  method is not on \\Drupal\\Core\\Entity\\EntityTypeManagerInterface, see the
  deprecated \\Drupal\\Core\\Entity\\EntityManager to find the
  correct interface or service.',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/functions.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/functions.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated function drupal_render():
in drupal:8.0.0 and is removed from drupal:9.0.0. Use the
  \'renderer\' service instead.',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/functions.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/functions.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated function entity_load_multiple_by_properties():
in drupal:8.0.0 and is removed from drupal:9.0.0. Use the
  entity type storage\'s loadByProperties() method.',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/functions.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/functions.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    3 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated function entity_view():
in drupal:8.0.0 and is removed from drupal:9.0.0.
  Use the entity view builder\'s view() method for creating a render array:',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/functions.php',
       'line' => 66,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/functions.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 66,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/template.functions.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated function format_date():
in drupal:8.0.0 and is removed from drupal:9.0.0.
  Use \\Drupal::service(\'date.formatter\')->format().',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/template.functions.php',
       'line' => 78,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/template.functions.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 78,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated function format_date():
in drupal:8.0.0 and is removed from drupal:9.0.0.
  Use \\Drupal::service(\'date.formatter\')->format().',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/template.functions.php',
       'line' => 79,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/template.functions.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 79,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/template.menu.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to deprecated method entityManager() of class Drupal:
in drupal:8.0.0 and is removed from drupal:9.0.0.
  Use \\Drupal::entityTypeManager() instead in most cases. If the needed
  method is not on \\Drupal\\Core\\Entity\\EntityTypeManagerInterface, see the
  deprecated \\Drupal\\Core\\Entity\\EntityManager to find the
  correct interface or service.',
       'file' => '/var/www/html/web/themes/custom/gavias_edmix/includes/template.menu.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => '/var/www/html/web/themes/custom/gavias_edmix/includes/template.menu.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
); },
	'dependencies' => array (
  '/var/www/html/web/themes/custom/gavias_edmix/customize/dynamic_style.php' => 
  array (
    'fileHash' => 'f3459d8ecb5ff7828e210aad2da86a02acc7582a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/customize/fonts.php' => 
  array (
    'fileHash' => 'c900d88866312b6d4f1cd57106e2ae674c6fa607',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/web/themes/custom/gavias_edmix/customize/preview.php',
      1 => '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme',
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/customize/form.php' => 
  array (
    'fileHash' => '80996dbaff81e8bd5377058ea4ba0540ffba4034',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/customize/preview.php' => 
  array (
    'fileHash' => '454cc192281ee3774b60671c99405046520f9ba0',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme' => 
  array (
    'fileHash' => 'ac8b0f508dad4dc11788eb3d02439acef8e10e02',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/elements.php' => 
  array (
    'fileHash' => 'b594b502f495859dee1c174ac424fb9fec4e8873',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_accordion.php' => 
  array (
    'fileHash' => '1e193df4c1c2e3c75547bea73f31b79dff39381c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_box_info.php' => 
  array (
    'fileHash' => 'f963d4be4c6fa91a2fb8513a6618dd5782e29d7d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_box_parallax.php' => 
  array (
    'fileHash' => '2b4f669e8e3113073645997f46671c8e62ce5cf4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_box_text.php' => 
  array (
    'fileHash' => 'ac2ad528e5aaffd0ee87809c7a844c99ceba31f2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_button.php' => 
  array (
    'fileHash' => '816282cfcac2c6f55370549d9f3b8b380e83d97f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_call_to_action.php' => 
  array (
    'fileHash' => 'c41abb5391a60b957331648970373a44cc126a71',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_carousel_content.php' => 
  array (
    'fileHash' => 'd6aced0460d22d1e2903303b794d89d440c728bf',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_chart.php' => 
  array (
    'fileHash' => 'e83a0d484aae2b516a6df0845156fe6a446ce583',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_code.php' => 
  array (
    'fileHash' => 'f107298542ed066a7a0b61c4fdcd72fefcc6c129',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_column.php' => 
  array (
    'fileHash' => '23a3b1cc5fe82ba91e8e9211351a9d5482755f9f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_counter.php' => 
  array (
    'fileHash' => 'e34816b4304e40036202d72b1b7082a86dd921d4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_divider.php' => 
  array (
    'fileHash' => '1fd1f5dfd014f2a44b77081808b60c43aba6824a',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_drupal_block.php' => 
  array (
    'fileHash' => '0f626479149abab4fcc6e4e4cf3ba8f4492a10a8',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_gallery.php' => 
  array (
    'fileHash' => '350f19bca37e957df28c6382bbe31b80a7b982c4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_gmap.php' => 
  array (
    'fileHash' => 'b3f2d24ab79a42ff1d7236db8967cd7e054b2c41',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_heading.php' => 
  array (
    'fileHash' => 'd891bc9ba1ac4dbe2d7dbfcbc48a87cb53031dc5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_icon_box.php' => 
  array (
    'fileHash' => '51ec2f1a6c16b41dce76456eec545bf4fa650008',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_icon_box_copia.php' => 
  array (
    'fileHash' => '3a57cca013f4d150cc0650dcf523f48898922438',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_icon_box.php',
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_image.php' => 
  array (
    'fileHash' => '47a5232e77174df29c2d02a41e8ef8055a8fc19c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_image_content.php' => 
  array (
    'fileHash' => 'cea6609a136530540f095449c7a091ef8d2fdf06',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_instagram.php' => 
  array (
    'fileHash' => '54aa3e305f3083ec711734f4e16c716f4544d1c4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_our_history.php' => 
  array (
    'fileHash' => '45a7e7a5ab854ddfb397332b4412a41b2f3bb471',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_our_partners.php' => 
  array (
    'fileHash' => '9cae6f2ba326e5b76059f657a8b2a489815f3e71',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_our_team.php' => 
  array (
    'fileHash' => '982b6248d4b61ddcf441b04264d1b994500947b6',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_pricing_item.php' => 
  array (
    'fileHash' => '1eec6539dae63bc49c976cd39c53342cf4f3e6af',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_progress.php' => 
  array (
    'fileHash' => '5af3c80c1c540db13707fae4b1c4f04055bee116',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_quote_text.php' => 
  array (
    'fileHash' => '7e2e5ed0c3e4f3f7cb98d6e3ec2be94f9c6c74c9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_services_carousel.php' => 
  array (
    'fileHash' => '1af21e407bbeb5e7838d65a6d003ca55bcfb6124',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_services_grid.php' => 
  array (
    'fileHash' => '66241769029be74e278a65990f2558dfbf11a97d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_socials.php' => 
  array (
    'fileHash' => '792d8b15f69daa10e83f092f915d3bd0899def9b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_tabs.php' => 
  array (
    'fileHash' => '4176563795d6b1791c779444b2569b6604eb0861',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_testimonial_single.php' => 
  array (
    'fileHash' => '24924c0043a266ef5ed1780264c42e6d4a859bfe',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_video_box.php' => 
  array (
    'fileHash' => '7b1c59e75d95603a861af3d4cc75ef6b7b6510d9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_video_box_original.php' => 
  array (
    'fileHash' => '3ce00412989271518ea20b0f942ae9d14df56971',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_video_box.php',
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_view.php' => 
  array (
    'fileHash' => '79848a2ddd5007af219727207a804a7693fee481',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_view_tabs_ajax.php' => 
  array (
    'fileHash' => 'ddf785ae0778b6d04dfb497adf38e18cfbdd5535',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_work_process.php' => 
  array (
    'fileHash' => '249c1a8c9501a7758da8cfa6b3a377bc0dd0fce2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/contact.php' => 
  array (
    'fileHash' => 'af2561dda135d36e5792a109e09980d946394c1f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/course original.php' => 
  array (
    'fileHash' => '5d41c62e60ef4966b048e9b4a91787fc6a56064e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/course.php' => 
  array (
    'fileHash' => '6024b357cbdfd3d6a5f10ddb55f10c5f2c9f6643',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/web/themes/custom/gavias_edmix/includes/course original.php',
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/functions.php' => 
  array (
    'fileHash' => '0c3830a18a17842b11f8d55aad2973834f29bffc',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/web/themes/custom/gavias_edmix/includes/template.functions.php',
      1 => '/var/www/html/web/themes/custom/gavias_edmix/includes/template.menu.php',
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/oembed.php' => 
  array (
    'fileHash' => 'e71de14828be111d05fb4b91e9d05e376511bf87',
    'dependentFiles' => 
    array (
      0 => '/var/www/html/web/themes/custom/gavias_edmix/includes/template.functions.php',
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/override.php' => 
  array (
    'fileHash' => 'e4dc92a57a1b60d2acc9caf5674f45764a443658',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/template.functions.php' => 
  array (
    'fileHash' => '0bac5c8261a143b85da15e86de8fc3c1f8d0ccad',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/template.menu.php' => 
  array (
    'fileHash' => 'f2f7a1c4b9128ad46b27f9287e1144020b92ad9d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/theme-settings.php' => 
  array (
    'fileHash' => '2447fed379ea79420e41d69f732ac418e9eff09b',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/var/www/html/web/themes/custom/gavias_edmix/customize/fonts.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_font_size',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_fonts',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_render_option_font',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_typography_font_styles',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'option',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'selectors',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_typography_enqueue_google_font',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'font',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_links_typography_font',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'json',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    6 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_options_patterns',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gavias_edmix.theme' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_page',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_image',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_html',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Implements hook_preprocess_HOOK() for HTML document templates.
 *
 * Adds body classes if certain regions have content.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_field',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_maintenance_page',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Implements hook_preprocess_HOOK() for maintenance-page.html.twig.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_block',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Implements hook_preprocess_HOOK() for block.html.twig.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    6 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_block__system_breadcrumb_block',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    7 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_page_title',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Implements hook_preprocess_HOOK() for page templates.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    8 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_theme_suggestions_form_alter',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Implements hook_theme_suggestions_HOOK_alter() for form templates.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'suggestions',
           'type' => 'array',
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => 'array',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    9 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_form_alter',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Implements hook_form_alter() to add classes to the search form.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'attribute' => 'Drupal\\Core\\Template\\Attribute',
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form_state',
           'type' => 'Drupal\\Core\\Form\\FormStateInterface',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form_id',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    10 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_theme_suggestions_page_alter',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'suggestions',
           'type' => 'array',
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => 'array',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    11 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_theme_suggestions_field_alter',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'suggestions',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/elements.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_blockbuilder_get_elements',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_accordion.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_accordion',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_accordion',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_accordion_item',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_box_info.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_box_info',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_box_info',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_box_parallax.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_box_parallax',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_box_parallax',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_box_text.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_box_text',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_box_text',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_button.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_button',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'gsc_button_id',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'length',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_button',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_call_to_action.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_call_to_action',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_call_to_action',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_carousel_content.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_carousel_content',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_carousel_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_chart.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_chart',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_chart',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_code.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_code',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_code',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_column.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_column',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_column',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_counter.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_counter',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_counter',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_divider.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_divider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_divider',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_drupal_block.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_drupal_block',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_drupal_block',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_gallery.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_gallery',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_gallery',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_gmap.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_gmap',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_gmap',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_heading.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_heading',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_heading',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_icon_box.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_icon_box',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_icon_box',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_icon_box_copia.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_icon_box',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_icon_box',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_image.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_image',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_image',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_image_content.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_image_content',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_image_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_instagram.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_instagram',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_instagram',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_our_history.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_our_history',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_our_history',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_our_partners.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_our_partners',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_our_partners',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_our_team.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_our_team',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_our_team',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_pricing_item.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_pricing_item',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_pricing_item',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_progress.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_progress',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_progress',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_quote_text.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_quote_text',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_quote_text',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_services_carousel.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_services_carousel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_services_carousel',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_services_grid.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_services_grid',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_services_grid',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_socials.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_socials',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_socials',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_tabs.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_tabs',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_tabs',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_tab',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_testimonial_single.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_testimonial_single',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_testimonial_single',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_video_box.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_video_box',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_video_box',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_video_box_original.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_video_box',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_video_box',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_view.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_view',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_drupal_block',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_view_tabs_ajax.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_view_tabs_ajax',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'sc_tab_views',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/gva_elements/gsc_work_process.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_blockbuilder\\shortcodes\\gsc_work_process',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_form',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'render_content',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'item',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'gsc_work_process',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => true,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'attr',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'load_shortcode',
       'phpDoc' => NULL,
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/contact.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_form_contact_message_feedback_form_alter',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form_state',
           'type' => 'Drupal\\Core\\Form\\FormStateInterface',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form_id',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/course original.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_check_registered_course',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'uid',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'course_id',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_course',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'vars',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_commerce_product__course',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'vars',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_commerce_product__course__featured_2',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'vars',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_commerce_product__course__featured',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'vars',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_commerce_product__course__teaser',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'vars',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    6 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_commerce_product__course__teaser_2',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'vars',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    7 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_node__lesson',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/course.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_check_registered_course',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'uid',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'course_id',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_course',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'vars',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_commerce_product__course',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'vars',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_commerce_product__course__featured_2',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'vars',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_commerce_product__course__featured',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'vars',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_commerce_product__course__teaser',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'vars',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    6 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_commerce_product__course__teaser_2',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'vars',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    7 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_node__lesson',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/functions.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_include',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Helper function for including theme files.
 *
 * @param string $theme
 *   Name of the theme to use for base path.
 * @param string $path
 *   Path relative to $theme.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'theme',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'path',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_render_block',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'key',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_makeid',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'length',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_add_regions_to_node',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
* THEME_add_regions_to_node
*/',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'allowed_regions',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/oembed.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'AutoEmbed',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'providers',
       'phpDoc' => NULL,
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => false,
       'readonly' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'parse',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Passes on any unlinked URLs that are on their own line for potential embedding.
     * @param string $content The content to be searched.
     * @return string Potentially modified $content.
     */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'content',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'autoembed_callback',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Callback function for {@link AutoEmbed::parse()}.
     * @param array $match A regex match array.
     * @return string The embed HTML on success, otherwise the original URL.
     */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'match',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'get_html',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * The do-it-all function that takes a URL and attempts to return the HTML.
     * @param string $url The URL to the content that should be attempted to be embedded.
     * @param array $args Optional arguments.
     * @return bool|string False on failure, otherwise the UNSANITIZED (and potentially unsafe) HTML that should be used to embed.
     */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'url',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'args',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'discover',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Attempts to find oEmbed provider discovery <link> tags at the given URL.
     *
     * @param string $url The URL that should be inspected for discovery <link> tags.
     * @return bool|string False on failure, otherwise the oEmbed provider URL.
     */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'url',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    6 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'fetch',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Connects to a oEmbed provider and returns the result.
     *
     * @param string $provider The URL to the oEmbed provider.
     * @param string $url The URL to the content that is desired to be embedded.
     * @param array $args Optional arguments.
     * @return bool|object False on failure, otherwise the result in the form of an object.
     */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'provider',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'url',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        2 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'args',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => true,
        )),
      ),
    )),
    7 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'data2html',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Converts a data object and returns the HTML.
     *
     * @param object $data A data object result from an oEmbed provider.
     * @param string $url The URL to the content that is desired to be embedded.
     * @return bool|string False on error, otherwise the HTML needed to embed.
     */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'data',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'url',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    8 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'my_remote_get',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Grabs the response from a remote URL.
     *
     * @param string $url The remote URL.
     * @return bool|string False on error, otherwise the response body.
     */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'url',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    9 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'add_query_arg',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Add HTTP query arguments.
     */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    10 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'esc_url',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Checks and cleans a URL.
     * 
     * @param string $url The URL to be cleaned.
     * @return string The cleaned $url.
     */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'url',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    11 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'shortcode_parse_atts',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Retrieve all attributes from the tag.
     *
     * @param string $text
     * @return array List of attributes and their value.
     */',
         'namespace' => NULL,
         'uses' => 
        array (
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'text',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/override.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_views_view_grid',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_remito_preprocess_views_view',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/template.functions.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_base_url',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_node',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_node__portfolio',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_node__event',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_breadcrumb',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_node__course',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/includes/template.menu.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_preprocess_menu__main',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'variables',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => '_gavias_edmix_attributes_get_attributes',
       'phpDoc' => NULL,
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'menu_link_content_plugin',
           'type' => 'Drupal\\Core\\Menu\\MenuLinkInterface',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
  '/var/www/html/web/themes/custom/gavias_edmix/theme-settings.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_edmix_form_system_theme_settings_alter',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Implementation of hook_form_system_theme_settings_alter()
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 *
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'extension' => 'Drupal\\Core\\Extension\\Extension',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'themecontroller' => 'Drupal\\system\\Controller\\ThemeController',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form_state',
           'type' => NULL,
           'byRef' => true,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
  ),
); },
];