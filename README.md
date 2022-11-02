# Reproduce strange Psalm bug with @psalm-type annotation

To reproduce, run `composer install` and then `vendor/bin/psalm`

**Expectation:** No error

**Actual result:**

> ERROR: UndefinedDocblockClass - src/A.php:19:9 - Docblock-defined class, interface or enum named Test\Foo does not exist

> ERROR: InvalidArgument - src/A.php:20:23 - Argument 1 of Test\A::useFoo expects array{x: string, y: string}, but Test\Foo provided
