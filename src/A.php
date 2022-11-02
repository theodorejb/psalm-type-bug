<?php

namespace Test;

/**
 * @psalm-type Foo = array{x: string, y: string}
 */
class A
{
    // Error only occurs if this property is public or protected, and does not have a default value.
    // The property type doesn't matter.
    protected int $prop;

    public function __construct()
    {
        $this->prop = 1;

        /** @var Foo $foo */
        $foo = array_replace_recursive(['y' => ''], ['x' => '']);
        $this->useFoo($foo);
    }

    /**
     * @param Foo $foo
     */
    public function useFoo(array $foo): void
    {
        var_export($foo);
    }
}
