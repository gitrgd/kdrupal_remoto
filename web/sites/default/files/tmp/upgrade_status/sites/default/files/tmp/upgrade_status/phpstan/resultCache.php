<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1628274601,
	'meta' => array (
  'cacheVersion' => 'v9-project-extensions',
  'phpstanVersion' => '0.12.94',
  'phpVersion' => 70328,
  'projectConfig' => '{parameters: {bootstrapFiles: [/var/www/html/vendor/mglaman/phpstan-drupal/drupal-autoloader.php], excludePaths: {analyseAndScan: [*.api.php, */tests/fixtures/*.php, */tests/Drupal/Tests/Listeners/Legacy/*, */tests/fixtures/*.php, */settings*.php, */bower_components/*, */node_modules/*], analyse: []}, fileExtensions: [module, theme, inc, install, profile, engine], drupal: {drupal_root: /var/www/html/web, entityTypeStorageMapping: {node: Drupal\\node\\NodeStorage, taxonomy_term: Drupal\\taxonomy\\TermStorage, user: Drupal\\user\\UserStorage}}, tmpDir: /var/www/html/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan, customRulesetUsed: true}, rules: [PHPStan\\Rules\\Classes\\PluginManagerInspectionRule, PHPStan\\Rules\\Drupal\\Coder\\DiscouragedFunctionsRule, PHPStan\\Rules\\Drupal\\GlobalDrupalDependencyInjectionRule, PHPStan\\Rules\\Drupal\\PluginManager\\PluginManagerSetsCacheBackendRule, PHPStan\\Rules\\Deprecations\\AccessDeprecatedConstant, PHPStan\\Rules\\Deprecations\\AccessDeprecatedPropertyRule, PHPStan\\Rules\\Deprecations\\AccessDeprecatedStaticPropertyRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedFunctionRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedMethodRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedStaticMethodRule, PHPStan\\Rules\\Deprecations\\FetchingClassConstOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\FetchingDeprecatedConstRule, PHPStan\\Rules\\Deprecations\\ImplementationOfDeprecatedInterfaceRule, PHPStan\\Rules\\Deprecations\\InheritanceOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\InheritanceOfDeprecatedInterfaceRule, PHPStan\\Rules\\Deprecations\\InstantiationOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInClassMethodSignatureRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInClosureSignatureRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInFunctionSignatureRule, PHPStan\\Rules\\Deprecations\\UsageOfDeprecatedCastRule, PHPStan\\Rules\\Deprecations\\UsageOfDeprecatedTraitRule], services: [{class: PHPStan\\Drupal\\ServiceMap}, {class: PHPStan\\Type\\EntityTypeManagerGetStorageDynamicReturnTypeExtension, arguments: {entityTypeStorageMapping: %drupal.entityTypeStorageMapping%}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Type\\ServiceDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Reflection\\EntityFieldsViaMagicReflectionExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: PHPStan\\Rules\\Drupal\\LoadIncludes, tags: [phpstan.rules.rule], arguments: [%drupal.drupal_root%]}, {class: PHPStan\\Rules\\Drupal\\ModuleLoadInclude, tags: [phpstan.rules.rule], arguments: [%drupal.drupal_root%]}, {class: PHPStan\\Rules\\Deprecations\\PluginAnnotationContextDefinitionsRule, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\Deprecations\\ConfigEntityConfigExportRule, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\Drupal\\Tests\\BrowserTestBaseDefaultThemeRule, tags: [phpstan.rules.rule]}, {class: PHPStan\\Rules\\Deprecations\\DeprecatedClassHelper}]}',
  'analysedPaths' => 
  array (
    0 => '/var/www/html/web/modules/custom/gavias_views_magazine',
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
); },
	'dependencies' => array (
  '/var/www/html/web/modules/custom/gavias_views_magazine/gavias_views_magazine.module' => 
  array (
    'fileHash' => '3d1f94f53cc594454a6a5b71d7c6e7a2c3c431bb',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/modules/custom/gavias_views_magazine/src/Plugin/views/style/mlayout_1.php' => 
  array (
    'fileHash' => 'e3ce5e35f55ed52eadba7d14e8966195a2fd5a0d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/modules/custom/gavias_views_magazine/src/Plugin/views/style/mlayout_2.php' => 
  array (
    'fileHash' => '5487bd86c8ccd402b309cb3f2f02cf71d8101e40',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/modules/custom/gavias_views_magazine/src/Plugin/views/style/mlayout_3.php' => 
  array (
    'fileHash' => '40425ba9c4eed2d3e72b99a9c17267d0022b0875',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/modules/custom/gavias_views_magazine/src/Plugin/views/style/mlayout_4.php' => 
  array (
    'fileHash' => '1d90fd192b29e174bd56a65a3945f202ddf49e93',
    'dependentFiles' => 
    array (
    ),
  ),
  '/var/www/html/web/modules/custom/gavias_views_magazine/src/Plugin/views/style/mlayout_5.php' => 
  array (
    'fileHash' => 'f2fb39a24a52482a61ad60fe1f040db4f1361a47',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/var/www/html/web/modules/custom/gavias_views_magazine/gavias_views_magazine.module' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_views_magazine_theme',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Implements hook_theme().
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'field' => 'Drupal\\Core\\Field',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'template_preprocess_views_view_mlayout_1',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Default template: views_view_mlayout_1.html.twig.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'field' => 'Drupal\\Core\\Field',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
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
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'template_preprocess_views_view_mlayout_2',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Default template: views_view_mlayout_2.html.twig.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'field' => 'Drupal\\Core\\Field',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
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
       'name' => 'template_preprocess_views_view_mlayout_3',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Default template: views_view_mlayout_3.html.twig.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'field' => 'Drupal\\Core\\Field',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
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
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'template_preprocess_views_view_mlayout_4',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Default template: views_view_mlayout_4.html.twig.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'field' => 'Drupal\\Core\\Field',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
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
       'name' => 'template_preprocess_views_view_mlayout_5',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Default template: views_view_mlayout_5.html.twig.
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'field' => 'Drupal\\Core\\Field',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
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
       'name' => 'gavias_views_magazine_help',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Implements hook_help().
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'field' => 'Drupal\\Core\\Field',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'route_name',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'route_match',
           'type' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    7 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'gavias_views_magazine_random_id',
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
  ),
  '/var/www/html/web/modules/custom/gavias_views_magazine/src/Plugin/views/style/mlayout_1.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style\\mlayout_1',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "mlayout_1",
 *   title = @Translation("Gavias Magazine Layout #1"),
 *   help = @Translation("Displays items as Magazine Layout #1."),
 *   theme = "views_view_mlayout_1",
 *   display_types = {"normal"}
 * )
 */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
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
       'name' => 'usesRowPlugin',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Does the style plugin allows to use style plugins.
   *
   * @var bool
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
       'readonly' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'usesRowClass',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Does the style plugin support custom css class for the rows.
   *
   * @var bool
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
       'readonly' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'defineOptions',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Set default options
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'byRef' => false,
       'public' => false,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'buildOptionsForm',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Render the given style.
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
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
      ),
    )),
  ),
  '/var/www/html/web/modules/custom/gavias_views_magazine/src/Plugin/views/style/mlayout_2.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style\\mlayout_2',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "mlayout_2",
 *   title = @Translation("Gavias Magazine Layout #2"),
 *   help = @Translation("Displays items as Magazine Layout #2."),
 *   theme = "views_view_mlayout_2",
 *   display_types = {"normal"}
 * )
 */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
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
       'name' => 'usesRowPlugin',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Does the style plugin allows to use style plugins.
   *
   * @var bool
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
       'readonly' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'usesRowClass',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Does the style plugin support custom css class for the rows.
   *
   * @var bool
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
       'readonly' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'defineOptions',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Set default options
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'byRef' => false,
       'public' => false,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'buildOptionsForm',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Render the given style.
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
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
      ),
    )),
  ),
  '/var/www/html/web/modules/custom/gavias_views_magazine/src/Plugin/views/style/mlayout_3.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style\\mlayout_3',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "mlayout_3",
 *   title = @Translation("Gavias Magazine Layout #3"),
 *   help = @Translation("Displays items as Magazine Layout #3."),
 *   theme = "views_view_mlayout_3",
 *   display_types = {"normal"}
 * )
 */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
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
       'name' => 'usesRowPlugin',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Does the style plugin allows to use style plugins.
   *
   * @var bool
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
       'readonly' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'usesRowClass',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Does the style plugin support custom css class for the rows.
   *
   * @var bool
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
       'readonly' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'defineOptions',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Set default options
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'byRef' => false,
       'public' => false,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'buildOptionsForm',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Render the given style.
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
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
      ),
    )),
  ),
  '/var/www/html/web/modules/custom/gavias_views_magazine/src/Plugin/views/style/mlayout_4.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style\\mlayout_4',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "mlayout_4",
 *   title = @Translation("Gavias Magazine Layout #4"),
 *   help = @Translation("Displays items as Magazine Layout #4."),
 *   theme = "views_view_mlayout_4",
 *   display_types = {"normal"}
 * )
 */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
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
       'name' => 'usesRowPlugin',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Does the style plugin allows to use style plugins.
   *
   * @var bool
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
       'readonly' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'usesRowClass',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Does the style plugin support custom css class for the rows.
   *
   * @var bool
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
       'readonly' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'defineOptions',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Set default options
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'byRef' => false,
       'public' => false,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'buildOptionsForm',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Render the given style.
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
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
      ),
    )),
  ),
  '/var/www/html/web/modules/custom/gavias_views_magazine/src/Plugin/views/style/mlayout_5.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style\\mlayout_5',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "mlayout_5",
 *   title = @Translation("Gavias Grid Layout"),
 *   help = @Translation("Displays Items as Grid."),
 *   theme = "views_view_mlayout_5",
 *   display_types = {"normal"}
 * )
 */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
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
       'name' => 'usesRowPlugin',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Does the style plugin allows to use style plugins.
   *
   * @var bool
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
       'readonly' => false,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'usesRowClass',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Does the style plugin support custom css class for the rows.
   *
   * @var bool
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'type' => NULL,
       'public' => false,
       'private' => false,
       'static' => false,
       'readonly' => false,
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'defineOptions',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Set default options
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
        ),
      )),
       'byRef' => false,
       'public' => false,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'buildOptionsForm',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Render the given style.
   */',
         'namespace' => 'Drupal\\gavias_views_magazine\\Plugin\\views\\style',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stylepluginbase' => 'Drupal\\views\\Plugin\\views\\style\\StylePluginBase',
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
      ),
    )),
  ),
); },
];