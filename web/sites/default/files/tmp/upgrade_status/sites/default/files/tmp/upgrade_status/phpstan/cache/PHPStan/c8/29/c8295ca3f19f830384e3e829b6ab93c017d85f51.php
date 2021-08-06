<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/var/www/html/vendor/phpunit/phpunit/src/Framework/Assert.php-1578473145',
   'data' => 
  array (
    'c23001e7ddc2c8379bd15be9f261324e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A set of assertion methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
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
    'a0069a5d7a6e2324f5250e06310847d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var int
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
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
    'd328ce0f4bdf663f1e183fb12ce8417b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an array has a specified key.
     *
     * @param int|string        $key
     * @param array|ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertArrayHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cc60490e8a3ffaef8f7d7e2a00cd0e69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an array has a specified subset.
     *
     * @param array|ArrayAccess $subset
     * @param array|ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3494
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertArraySubset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '476000e7174dd54c9221c52646e07e8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an array does not have a specified key.
     *
     * @param int|string        $key
     * @param array|ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertArrayNotHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '29eaac9237c6d4552a277d8902c7c45d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains a needle.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f6d8ab60a263be9c4e759dc80e778ea9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack that is stored in a static attribute of a class
     * or an attribute of an object contains a needle.
     *
     * @param object|string $haystackClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '011e070548418038d71393e83165f1ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain a needle.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a8deb7ca869fd7aac2c3debf1dc7350a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack that is stored in a static attribute of a class
     * or an attribute of an object does not contain a needle.
     *
     * @param object|string $haystackClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeNotContains',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5acbea7ce1dd612725cc66b664afede0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnly',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '22cc08fb9f2647095d98363f6e7b925c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only instances of a given class name.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyInstancesOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a724efe6a52d15ce41d74f102447d735' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack that is stored in a static attribute of a class
     * or an attribute of an object contains only values of a given type.
     *
     * @param object|string $haystackClassOrObject
     * @param bool          $isNativeType
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeContainsOnly',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f7590f6d64c944876cade4b4826a453d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotContainsOnly',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1aef63a3489e4399fcbb203b5c8c671c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack that is stored in a static attribute of a class
     * or an attribute of an object does not contain only values of a given
     * type.
     *
     * @param object|string $haystackClassOrObject
     * @param bool          $isNativeType
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeNotContainsOnly',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5fc0edfc5d78444af1a3178b90298c36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable $haystack
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '573358ebb1eb79598a3026c79089e69c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts the number of elements of an array, Countable or Traversable
     * that is stored in an attribute.
     *
     * @param object|string $haystackClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '350d8be62c953476446ca499e9f24120' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable $haystack
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'adb8eefc2e52876aa1ed96bfeebea7df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts the number of elements of an array, Countable or Traversable
     * that is stored in an attribute.
     *
     * @param object|string $haystackClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeNotCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '54610fbfaebe8c5d8c5288890fafe156' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6a04649cd4236b6cceca0ccb79d1c50f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2fc46a94b0c52953a2578ff5acadd8bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are equal (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '05623de1fb2872d81ea782c90e170912' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are equal (with delta).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2749c0d27ffe4645e13ed3bcf22f8891' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is equal to an attribute of an object.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e50a40317d4f635ffc986d6e0ba3ebd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are not equal.
     *
     * @param float $delta
     * @param int   $maxDepth
     * @param bool  $canonicalize
     * @param bool  $ignoreCase
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '819f17ffb81de94d7181efd957757bc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are not equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEqualsCanonicalizing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3f93d80cf46c589db90334b73df8f52f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are not equal (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEqualsIgnoringCase',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '23084c4443a029f475b63be1fcfc7f0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are not equal (with delta).
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEqualsWithDelta',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd3b7a9414edf0526a944635a73197fad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not equal to an attribute of an object.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8220b43ebbe432a14d4d1793ab5e7cca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is empty.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c3214c9b217e23958bcc2cca29c8a84d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a static attribute of a class or an attribute of an object
     * is empty.
     *
     * @param object|string $haystackClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd26f23eb686fa33d4060e64c62d23424' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not empty.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '76dfe8bf3e9fba07c440e25d5e8a5740' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a static attribute of a class or an attribute of an object
     * is not empty.
     *
     * @param object|string $haystackClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeNotEmpty',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2adb47af74798fca8bfda71ea189df00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a value is greater than another value.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertGreaterThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '84f7b2ccac574fd9343c103f3c42f788' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an attribute is greater than another value.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeGreaterThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8874eb17de376f003c7eb99bdacbd295' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a value is greater than or equal to another value.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertGreaterThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0e0881309a5ede4fa5b540d4735f0711' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an attribute is greater than or equal to another value.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeGreaterThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'aeb2f9efdbcfa17ad93cf9102cec554e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a value is smaller than another value.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertLessThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '30ae32c53b0f6e94d049dd0bdcfe97b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an attribute is smaller than another value.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeLessThan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8d871a5fe5dec71b67c754bc463e807d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertLessThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9c9b171c4d81081463d0240de8cd6cb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an attribute is smaller than or equal to another value.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeLessThanOrEqual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ebc8d159cc00b808496e7019f0c34919' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is equal to the contents of another
     * file.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e908c66491d73ef73a7ac34e7583d6d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is not equal to the contents of
     * another file.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotEquals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b87850f2c68345de92d6a89f67b0806c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEqualsFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1d0a302591ac5eeb787f382aa2a80680' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @noinspection PhpUnitTestsInspection */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEqualsFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '111f1a7b570f4f1fcf0fbaa56401093f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is not equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotEqualsFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'eddb4c3588c1b2458a03e732a1368380' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir is readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9f29e5a8fc8a80d07dc9b1f1a16811f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotIsReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '45ccd8dfaaffeccccf0447eced02cc6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8d25bc78dfda0e901f29d3f10ffa11a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotIsWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7fe161d9fd8a8cb6c5094bbe263d1453' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5bcf983ec0eac1ad713beb1d5d723a2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0dbdf154a62ab5bc338a094e7e0b13ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryIsReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f51c796aaa2a9ba9d3f6451863dce09d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryNotIsReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '397042dd3ef524b3f962bff7ceb5d5e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryIsWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c506a3dcda26a839331e5d29f07704c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryNotIsWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e9967ad1ea058712778c2660178645ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6106147d8bcae14eda90077a8bc6ebf5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '30d6494ea53d035ad0fe58fe7376514b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileIsReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6297a712170986d5b18ed0d10137c612' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotIsReadable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7106fccba6619f41e96ea8757134e364' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileIsWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8245095d0dde244cfdfded0cc8e4d0c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotIsWritable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b5b788a8165fbe85fbe21837ae53684c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a condition is true.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd78ada60075e6b12afd0a161f15b95a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a condition is not true.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotTrue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b4446bba1d949802d944e7b8c29fa2a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a condition is false.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ab277db65f333661282e426186425149' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a condition is not false.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotFalse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '31460fd9a6832171ea8fd1351968385c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is null.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '199db855b475296f3d0bbea2a678e1a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not null.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotNull',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ba7332376407c61c140854f0a395a7f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is finite.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFinite',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ef8605543c68d29f012049ac58520dde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is infinite.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertInfinite',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ebe03e59db6d3a5392697eb22f050b17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is nan.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNan',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3b46a0bd817026cf239b3d0ebc96e157' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a class has a specified attribute.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertClassHasAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '661f3608a39d777c8b6db552666f822d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a class does not have a specified attribute.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertClassNotHasAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'dcc66000ed45f67e72ada926f991e03d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a class has a specified static attribute.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertClassHasStaticAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9a8b8b030c742a5765900c73316e4a12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a class does not have a specified static attribute.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertClassNotHasStaticAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '35b52821f1cf2323f40dc8373c160914' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an object has a specified attribute.
     *
     * @param object $object
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertObjectHasAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '77b5717f469a85efa10bedc50b42137d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an object does not have a specified attribute.
     *
     * @param object $object
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertObjectNotHasAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ce7da0f6cd25e349e71bd5fc05aefa7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables have the same type and value.
     * Used on objects, it asserts that two variables reference
     * the same object.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd0dd43b1d9fd191cd710905bab674a71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable and an attribute of an object have the same type
     * and value.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '294d34883551b5be10540148d56089fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables do not have the same type and value.
     * Used on objects, it asserts that two variables do not reference
     * the same object.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e5b3d7982bb2fef3c6a09e70436b9a78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable and an attribute of an object do not have the
     * same type and value.
     *
     * @param object|string $actualClassOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeNotSame',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f75619402ec046c9e5e5554465af5a9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '276f69b8db4df5e21575fa34fd4ea966' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an attribute is of a given type.
     *
     * @param object|string $classOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4acfb9de060527874c25bd96c02355ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '75865321f06772239ee547ec15391391' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an attribute is of a given type.
     *
     * @param object|string $classOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeNotInstanceOf',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7f4034965479ad56cc137626a519fe98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3369
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertInternalType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'acc6a6dd11cf291a7643c0114a4a9c1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an attribute is of a given type.
     *
     * @param object|string $classOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeInternalType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '76bff9119ea66ac0cc2d6c2520ee0065' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type array.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '31fe1c4dd1d2e82042a962c30effde3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type bool.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '14205748f73361173d54e0f0a1c00524' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type float.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4a6703740dc28f38aac188fdea9c279d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type int.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b1aa76b4803bc18b3287574abd4342ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type numeric.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a461801fec12f14c658e79d85f03cdce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type object.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e405b0a9e565b8c487596b0017bae413' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type resource.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4c2cab567022daaae49ee06468743eef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type string.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'dc9a30a857a2615e24e1f3f63fb2a65c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type scalar.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e60a6291e76ac846d18f01f04eddaa57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type callable.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '478b2dc5eb1f8579b8b9ce957389f9d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type iterable.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsIterable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd96b2e7f205270640ecc7137b8e2b605' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3369
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotInternalType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4e1d5fdc27679f6c6431b92c10204f01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type array.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b6cc7419863bf75d2abf9de315e01ae6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type bool.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotBool',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a71b559373cfa75d615dc3fa4204c511' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type float.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotFloat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ef367284ad688ac46fe9af31766f7503' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type int.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotInt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7f4351f56a680114c02ca741a02e2540' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type numeric.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotNumeric',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a8bcba11b7c22edfcf3df479105fc99b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type object.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotObject',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0b58a0fc65a2e2896b163b4b079eea40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type resource.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotResource',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5517487925875db8248935e912c87f7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type string.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7d3df94553134f810dd7431b9bfd86d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type scalar.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotScalar',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'dbac9a48e061bca80ea02618e95f59b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type callable.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotCallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2fa0fb03c34c73021f7be6e81634e117' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type iterable.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotIterable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5ff9222628cb61641ab0ba809246f6b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an attribute is of a given type.
     *
     * @param object|string $classOrObject
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertAttributeNotInternalType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5cd69c6ee1823cc88aa426bda14ab794' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string matches a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '27e7806845e6338545bfde03fb259fbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string does not match a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotRegExp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd6718bf2acc7179cd0ec6e4cfa7495df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
     * @param Countable|iterable $expected
     * @param Countable|iterable $actual
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertSameSize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c2a590b204974106ccdacfa1c2bb4a15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is not the same.
     *
     * @param Countable|iterable $expected
     * @param Countable|iterable $actual
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotSameSize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '814ecaefa6a5e05ccb9ff00ada0bd920' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringMatchesFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b60641c5273a17fa714b12ddcbdbb1da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotMatchesFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '15106a23fb7e7f72cc4cc8708966ab15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string matches a given format file.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringMatchesFormatFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3e5762dc209634f9714e1fd67544ff78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotMatchesFormatFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9012a3d968631d4458a0a68ada5d425d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string starts with a given prefix.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringStartsWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '67ca0faacd6d842f0ee28dda883329ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string starts not with a given prefix.
     *
     * @param string $prefix
     * @param string $string
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringStartsNotWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '803e6e67c77e3a0970d82844992584b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string ends with a given suffix.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEndsWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6022566e9cf6755a9a169e29e81fd0b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string ends not with a given suffix.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEndsNotWith',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b9f9ef50863f1065466888d7eb07aead' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML files are equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlFileEqualsXmlFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '383fe07ce77b04115d6d18e756247a8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML files are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlFileNotEqualsXmlFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4ef9e62d5b243d32463b269857f6d270' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML documents are equal.
     *
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlStringEqualsXmlFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cfe9a091c82c919a340679f7c2ddac13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML documents are not equal.
     *
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlStringNotEqualsXmlFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '143db2631907ea52880011ed742dbdd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML documents are equal.
     *
     * @param DOMDocument|string $expectedXml
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlStringEqualsXmlString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '27bb51f31859b388844c7e51008e1a46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML documents are not equal.
     *
     * @param DOMDocument|string $expectedXml
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlStringNotEqualsXmlString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4282f23233d9899fff9e7e67f9946d5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a hierarchy of DOMElements matches.
     *
     * @throws AssertionFailedError
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualXMLStructure',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '849cf07408c9f674b6930ed3f0160b2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\DOMAttr $expectedAttribute */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualXMLStructure',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'af44b106e5fba69498b8d43f0a82de50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\DOMAttr $actualAttribute */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualXMLStructure',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '47142203302ca2096a2a0b1426e3a579' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Evaluates a PHPUnit\\Framework\\Constraint matcher object.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertThat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cd3dc16ece5a747be6019eb34e2bdef9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string is a valid JSON string.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJson',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1aaa87f4d921de68d043c96b9c7d5d7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two given JSON encoded objects or arrays are equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonStringEqualsJsonString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'de24be4e8e98df8048584d680f7caef8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two given JSON encoded objects or arrays are not equal.
     *
     * @param string $expectedJson
     * @param string $actualJson
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonStringNotEqualsJsonString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c04888250c02331f5c65cacf8e1c84ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the generated JSON encoded object and the content of the given file are equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonStringEqualsJsonFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b19564d536240d12b7dd64ef4f0e3876' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the generated JSON encoded object and the content of the given file are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonStringNotEqualsJsonFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '966bf3b8267ad0a6ab407dc3d9c562fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two JSON files are equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonFileEqualsJsonFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '41d54ba02b39a26203dd4284c9e0c81a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two JSON files are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \\SebastianBergmann\\RecursionContext\\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonFileNotEqualsJsonFile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fd161cee93cf7ca61fdc418c51cdd04d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'attribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '306f6f70f89fc335ddbe73242bd04b73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param int|string $key
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'arrayHasKey',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1e57719d3f5c8b9cbf1815b1c1be6271' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'attributeEqualTo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '44a07f37c789aba315263b8383aa956b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Fails a test with the given message.
     *
     * @throws AssertionFailedError
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'fail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'df3083bf34172537ab2a98d73e129754' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the value of an attribute of a class or an object.
     * This also works for attributes that are declared protected or private.
     *
     * @param object|string $classOrObject
     *
     * @throws Exception
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'readAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6d104c3a5aad8c872b02207d938f0c17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the value of a static attribute.
     * This also works for attributes that are declared protected or private.
     *
     * @throws Exception
     * @throws ReflectionException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'getStaticAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b79d9514326f9276adc08a9daff735ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the value of an object\'s attribute.
     * This also works for attributes that are declared protected or private.
     *
     * @param object $object
     *
     * @throws Exception
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3338
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'getObjectAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9ea7f49bcd0bede8a355ba89ef38c146' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mark the test as incomplete.
     *
     * @throws IncompleteTestError
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'markTestIncomplete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3aa1c3877f5b9d43c19058dde2b06655' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mark the test as skipped.
     *
     * @throws SkippedTestError
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'markTestSkipped',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9cd4c781d3c7ca9a1e9ac26d1375d140' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the current assertion count.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'getCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '186f29e0e98bb8da5ab671f7442e25a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reset the assertion counter.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'domdocument' => 'DOMDocument',
          'domelement' => 'DOMElement',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'arraysubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
          'attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'classhasattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
          'classhasstaticattribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasStaticAttribute',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objecthasattribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'invalidargumenthelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
          'type' => 'PHPUnit\\Util\\Type',
          'xml' => 'PHPUnit\\Util\\Xml',
          'reflectionclass' => 'ReflectionClass',
          'reflectionexception' => 'ReflectionException',
          'reflectionobject' => 'ReflectionObject',
          'traversable' => 'Traversable',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'resetCount',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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