<?php

class NullSafeOperator
{
    /** @var \DateTime */
    private $date;

    /**
     * @return DateTime
     */
    public function getDate(): ?DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(?DateTime $date): void
    {
        $this->date = $date;
    }
}

try {
    $obj = new NullSafeOperator();
    $obj->setDate(new \DateTime());

    $dateAsString = $obj->getDate() ?->format('Y-m-d H:i:s');

    echo "today is {$dateAsString}" . PHP_EOL;

} catch (Throwable $t) {
    // print_r($t);
}

class NullSafeOperatorE extends NullSafeOperator
{
    public function getInstance()
    {
        return $this;
    }
}

try {
    $obj = new NullSafeOperatorE();
    $obj->setDate(new \DateTime());

    $dateAsString = $obj->getInstance() ?->getDate() ?->format('Y-m-d H:i:s');

    echo "today is {$dateAsString}" . PHP_EOL;

} catch (Throwable $t) {
    // print_r($t);
}
