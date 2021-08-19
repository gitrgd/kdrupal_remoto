<?php

declare (strict_types=1);
namespace Rector\Defluent\NodeAnalyzer;

use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\New_;
use Rector\Defluent\Skipper\FluentMethodCallSkipper;
final class MethodCallSkipAnalyzer
{
    /**
     * @var \Rector\Defluent\Skipper\FluentMethodCallSkipper
     */
    private $fluentMethodCallSkipper;
    /**
     * @var \Rector\Defluent\NodeAnalyzer\FluentChainMethodCallNodeAnalyzer
     */
    private $fluentChainMethodCallNodeAnalyzer;
    public function __construct(\Rector\Defluent\Skipper\FluentMethodCallSkipper $fluentMethodCallSkipper, \Rector\Defluent\NodeAnalyzer\FluentChainMethodCallNodeAnalyzer $fluentChainMethodCallNodeAnalyzer)
    {
        $this->fluentMethodCallSkipper = $fluentMethodCallSkipper;
        $this->fluentChainMethodCallNodeAnalyzer = $fluentChainMethodCallNodeAnalyzer;
    }
    public function shouldSkipMethodCallIncludingNew(\PhpParser\Node\Expr\MethodCall $methodCall) : bool
    {
        if ($this->fluentMethodCallSkipper->shouldSkipRootMethodCall($methodCall)) {
            return \true;
        }
        $chainRootExpr = $this->fluentChainMethodCallNodeAnalyzer->resolveRootExpr($methodCall);
        return $chainRootExpr instanceof \PhpParser\Node\Expr\New_;
    }
    public function shouldSkipLastCallNotReturnThis(\PhpParser\Node\Expr\MethodCall $methodCall) : bool
    {
        return !$this->fluentChainMethodCallNodeAnalyzer->isMethodCallReturnThis($methodCall);
    }
}
