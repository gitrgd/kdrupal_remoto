<?php

declare (strict_types=1);
namespace Ssch\TYPO3Rector\Helper\Database\Refactorings;

use PhpParser\Node\Expr;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\Variable;
use Rector\Core\PhpParser\Node\NodeFactory;
use Ssch\TYPO3Rector\Contract\Helper\Database\Refactorings\DatabaseConnectionToDbalRefactoring;
final class DatabaseConnectionExecInsertQueryRefactoring implements \Ssch\TYPO3Rector\Contract\Helper\Database\Refactorings\DatabaseConnectionToDbalRefactoring
{
    /**
     * @var \Ssch\TYPO3Rector\Helper\Database\Refactorings\ConnectionCallFactory
     */
    private $connectionCallFactory;
    /**
     * @var \Rector\Core\PhpParser\Node\NodeFactory
     */
    private $nodeFactory;
    public function __construct(\Ssch\TYPO3Rector\Helper\Database\Refactorings\ConnectionCallFactory $connectionCallFactory, \Rector\Core\PhpParser\Node\NodeFactory $nodeFactory)
    {
        $this->connectionCallFactory = $connectionCallFactory;
        $this->nodeFactory = $nodeFactory;
    }
    /**
     * @return Expr[]
     * @param \PhpParser\Node\Expr\MethodCall $oldNode
     */
    public function refactor($oldNode) : array
    {
        $tableArgument = \array_shift($oldNode->args);
        $dataArgument = \array_shift($oldNode->args);
        if (null === $tableArgument || null === $dataArgument) {
            return [];
        }
        $connectionAssignment = $this->connectionCallFactory->createConnectionCall($tableArgument);
        $connectionInsertCall = $this->nodeFactory->createMethodCall(new \PhpParser\Node\Expr\Variable('connection'), 'insert', [$tableArgument->value, $dataArgument->value]);
        return [$connectionAssignment, $connectionInsertCall];
    }
    /**
     * @param string $methodName
     */
    public function canHandle($methodName) : bool
    {
        return 'exec_INSERTquery' === $methodName;
    }
}
