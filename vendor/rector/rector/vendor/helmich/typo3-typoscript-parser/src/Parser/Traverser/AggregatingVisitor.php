<?php

declare (strict_types=1);
namespace RectorPrefix20210804\Helmich\TypoScriptParser\Parser\Traverser;

use RectorPrefix20210804\Helmich\TypoScriptParser\Parser\AST\Statement;
/**
 * Class AggregatingVisitor
 *
 * @package    Helmich\TypoScriptParser
 * @subpackage Parser\Traverser
 */
class AggregatingVisitor implements \RectorPrefix20210804\Helmich\TypoScriptParser\Parser\Traverser\Visitor
{
    /** @var Visitor[] */
    private $visitors = [];
    /**
     * @param Visitor $visitor
     * @return void
     */
    public function addVisitor($visitor) : void
    {
        $this->visitors[\spl_object_hash($visitor)] = $visitor;
    }
    /**
     * @param Statement[] $statements
     * @return void
     */
    public function enterTree($statements) : void
    {
        foreach ($this->visitors as $visitor) {
            $visitor->enterTree($statements);
        }
    }
    /**
     * @param Statement $statement
     * @return void
     */
    public function enterNode($statement) : void
    {
        foreach ($this->visitors as $visitor) {
            $visitor->enterNode($statement);
        }
    }
    /**
     * @param Statement $statement
     * @return void
     */
    public function exitNode($statement) : void
    {
        foreach ($this->visitors as $visitor) {
            $visitor->exitNode($statement);
        }
    }
    /**
     * @param Statement[] $statements
     * @return void
     */
    public function exitTree($statements) : void
    {
        foreach ($this->visitors as $visitor) {
            $visitor->exitTree($statements);
        }
    }
}
