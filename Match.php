<?php

class Matcher
{
    public function validate($error)
    {
        return match($error) {
            200,300 => 'Success',
            404 => 'Not Found',
            500 => throw new Exception('Interval Server Error'),
            default => 'Unknow',
        };
    }
}

$obj = new Matcher();
echo $obj->validate(200);
echo $obj->validate(404);
echo $obj->validate(480);
$obj->validate(500);
