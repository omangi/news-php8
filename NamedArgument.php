<?php

class NamedArgument
{
    public function sum(int $numberOne, int $numberTwo = null, int $numberThree)
    {
        return $numberOne + $numberTwo + $numberThree;
    }
}

$obj = new NamedArgument();
echo $obj->sum(1, 2, 3) . PHP_EOL;

echo $obj->sum(
    numberOne: 1,
    numberThree: 3,
    ) . PHP_EOL;

