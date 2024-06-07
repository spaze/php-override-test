<?php
abstract class Parenta
{
    public function methodWithDefaultImplementation(): int
    {
        return 1;
    }
}

trait Traita
{
    #[Override]
    public function methodWithDefaultImplementation(): int
    {
        echo 'foo';
        return 2; // The overridden method
    }
} 

final class Childa extends Parenta
{
    use Traita;
}

echo (new Childa)->methodWithDefaultImplementation();
