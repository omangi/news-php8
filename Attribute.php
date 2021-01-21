<?php

#[Attribute]
Class Validate
{
    private $rule, $value;
    public function __construct($rule, $value)
    {
        $this->rule = $rule;
        $this->value = $value;
    }

    public function validate()
    {
        return true;
    }
}

Class Form
{
    #[Validate('max', 8)]
    protected $email;
}

$reflection = new ReflectionClass(Form::class);

foreach ($reflection->getProperties() as $property) {
    $validation = $property->getAttributes(Validate::class)[0];

    $instance = $validation->newInstance();
    $isValid = $instance->validate();

    var_dump($isValid);
}
