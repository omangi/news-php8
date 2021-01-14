<?php

class Union
{
    /**
     * @var int
     */
	private $number;

	public function setNumber(int|float $number) : void
    {
        echo "Inputing {$number}" . PHP_EOL;

        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber() : int|float
    {
        echo "Current number is " . $this->number . PHP_EOL;

        return $this->number;
    }
}


$class = new Union();
$class->setNumber(5);
$class->setNumber(5.5);
$class->getNumber();
