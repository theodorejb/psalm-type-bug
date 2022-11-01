<?php

namespace Test;

/**
 * @psalm-type Foo = array{x: string}
 */
class A
{
    // Error only occurs if this property is public or protected, and does not have a default value.
    // The property type doesn't matter.
    protected int $prop;

    public function __construct()
    {
        $this->prop = 1;

        /** @var Foo $_val */
        $_val = array_replace([], ['x' => '']);
    }
}
