<?php

declare (strict_types=1);
namespace RectorPrefix20210804\Helmich\TypoScriptParser\Parser;

use ArrayObject;
use RectorPrefix20210804\Helmich\TypoScriptParser\Parser\AST\ObjectPath;
use RectorPrefix20210804\Helmich\TypoScriptParser\Parser\AST\RootObjectPath;
use RectorPrefix20210804\Helmich\TypoScriptParser\Tokenizer\TokenInterface;
class ParserState
{
    /** @var ObjectPath */
    private $context;
    /** @var ArrayObject */
    private $statements;
    /** @var TokenStream */
    private $tokens;
    public function __construct(\RectorPrefix20210804\Helmich\TypoScriptParser\Parser\TokenStream $tokens, \ArrayObject $statements = null)
    {
        if ($statements === null) {
            $statements = new \ArrayObject();
        }
        $this->statements = $statements;
        $this->tokens = $tokens;
        $this->context = new \RectorPrefix20210804\Helmich\TypoScriptParser\Parser\AST\RootObjectPath();
    }
    /**
     * @return $this
     * @param \Helmich\TypoScriptParser\Parser\AST\ObjectPath $context
     */
    public function withContext($context)
    {
        $clone = clone $this;
        $clone->context = $context;
        return $clone;
    }
    /**
     * @return $this
     * @param \ArrayObject $statements
     */
    public function withStatements($statements)
    {
        $clone = clone $this;
        $clone->statements = $statements;
        return $clone;
    }
    /**
     * @param int $lookAhead
     * @return TokenInterface
     */
    public function token($lookAhead = 0) : \RectorPrefix20210804\Helmich\TypoScriptParser\Tokenizer\TokenInterface
    {
        return $this->tokens->current($lookAhead);
    }
    /**
     * @param int $increment
     * @return void
     */
    public function next($increment = 1) : void
    {
        $this->tokens->next($increment);
    }
    /**
     * @return bool
     */
    public function hasNext() : bool
    {
        return $this->tokens->valid();
    }
    /**
     * @return ObjectPath
     */
    public function context() : \RectorPrefix20210804\Helmich\TypoScriptParser\Parser\AST\ObjectPath
    {
        return $this->context;
    }
    /**
     * @return ArrayObject
     */
    public function statements() : \ArrayObject
    {
        return $this->statements;
    }
}
