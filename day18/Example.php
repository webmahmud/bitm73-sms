<?php
namespace App\classes;

class Example
{
public $name = "Kamal Khan";
private $city = "Dhaka";
protected $country = "Bangladesh";

public function one(){

    echo 'In One';
}

private function two(){

    echo 'In Two';
}

protected function three(){

    echo 'In Three';
}
}