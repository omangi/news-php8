<?php

class User
{
    protected DateTimeImmutable $birthday;

    public function __construct(
        /** user name */
        public string $name,
        public string $lastName = 'Wick',
        private int $age
    ) {
        if ($age < 21) {
            throw new Exception('Very young user');
        }
    }

    public function getAge()
    {
        return $this->age;
    }
}

$obj = new User(
    name: 'John',
    age: 30
);

echo $obj->name . PHP_EOL;
echo $obj->lastName . PHP_EOL;
echo $obj->getAge() . PHP_EOL;
