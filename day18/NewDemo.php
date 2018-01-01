<?php

namespace App\classes;
require_once 'Example.php';
//NewDemo is Child class and Example is Parent Class
class NewDemo extends Example
{
public $mobile = '01791728281';
protected $district = "Sagordi";
private $division = "Barisal";

public function newOne(){

    echo "In function new one";
}

protected function newTwo(){

    echo "In function new two";
    $this->one(); // own class object is $this
}

private function newThree(){

    echo "In function new three";
}

}