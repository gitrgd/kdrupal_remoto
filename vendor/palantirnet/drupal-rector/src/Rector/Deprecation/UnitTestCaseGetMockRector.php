<?php

namespace DrupalRector\Rector\Deprecation;

use DrupalRector\Rector\Deprecation\Base\GetMockBase;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

/**
 * Replaces deprecated getMock() calls in classes that extend UnitTestCase.
 *
 * See https://www.drupal.org/node/2907725 for change record.
 *
 * What is covered:
 * - Calls from classes that extend UnitTestCase
 */
final class UnitTestCaseGetMockRector extends GetMockBase
{
    protected $baseClassBeingExtended = 'Drupal\Tests\UnitTestCase';

    /**
     * @inheritdoc
     */
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('Fixes deprecated getMock() calls',[
            new CodeSample(
                <<<'CODE_BEFORE'
$this->entityTypeManager = $this->getMock(EntityTypeManagerInterface::class);
CODE_BEFORE
                ,
                <<<'CODE_AFTER'
$this->entityTypeManager = $this->createMock(EntityTypeManagerInterface::class);
CODE_AFTER
            )
        ]);
    }
}
