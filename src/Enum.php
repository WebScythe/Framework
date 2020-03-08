<?php declare(strict_types=1);

namespace Webscythe\Framework;

use InvalidArgumentException;
use ReflectionClass;
use ReflectionException;

trait Enum
{
    protected $value;

    public function __construct($value)
    {
        if (!in_array($value, $this->getconstants())) {
            throw new InvalidArgumentException("Invalid environment specified");
        }
        $this->value = $value;
    }

    private function getConstants()
    {
        try {
            return (new ReflectionClass(get_class($this)))->getConstants();
        } catch (ReflectionException $e) {
            return [];
        }
    }
    public function equals($value) {
        return $value === $this->value;
    }
}
