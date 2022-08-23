<?php

declare (strict_types=1);
namespace Rector\Transform\ValueObject;

use Rector\Core\Validation\RectorAssert;
final class StringToClassConstant
{
    /**
     * @readonly
     * @var string
     */
    private $string;
    /**
     * @var class-string
     * @readonly
     */
    private $class;
    /**
     * @readonly
     * @var string
     */
    private $constant;
    /**
     * @param class-string $class
     */
    public function __construct(string $string, string $class, string $constant)
    {
        $this->string = $string;
        $this->class = $class;
        $this->constant = $constant;
        RectorAssert::className($class);
    }
    public function getString() : string
    {
        return $this->string;
    }
    public function getClass() : string
    {
        return $this->class;
    }
    public function getConstant() : string
    {
        return $this->constant;
    }
}
