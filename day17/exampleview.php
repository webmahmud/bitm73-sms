<?php
require_once ('Example.php');
// $demo = Object , new Demo = Class
$example = new Example; // Create permission for Demo class

echo $example->name;
echo "<br/>";
$example->three();