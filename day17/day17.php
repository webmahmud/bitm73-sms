<html>
<head>
    <title>Day 17 class</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/day16.css">
</head>
<body>
<h1>Day 17 PHP Class</h1>

<?php
echo "<h3>Displaying 1st Method to show array data</h3>";
$data = [];

$data[0] =10;
$data[1]=11;
$data[2]=20;
$data['name']="Mahmud";
$data['city']="Dahaka";
$data['country']="Bangladesh";


foreach ($data as $value){
    echo "<br/>";
    echo $value;
}
echo "<br/>";
echo "<h3>Displaying 2nd Method to show array data</h3>";
echo "<pre>";
print_r($data);
echo "<br/>";

echo "<h3>Displaying 3rd Method to show array data</h3>";
echo "<pre>";
var_dump($data);

$data1=[10,20,30,40,'Mahmud Rahman','Dhaka','Bangladesh'];

echo "<h3>Displaying 4th Method to show array data</h3>";
echo "<pre>";
var_dump($data1);

$data2= [
    'name'=>"Mahmud Rahman",
    'city'=>"Dhaka",
    'country'=>"Bangladesh",
    'mobile'=> '01791728281'
    ];

echo "<h3>Displaying 5th Method to show array data</h3>";
echo "<pre>";
var_dump($data2);



$data3 = [];
$data3[0][0] = 10;
$data3[0][1] = 20;
$data3[0][2] = 30;
$data3[0][3] = 40;

$data3[1][0] = 50;
$data3[1][1] = 60;
$data3[1][2] = 70;
$data3[1][3] = 80;

$data3[2][0] = 90;
$data3[2][1] = 100;
$data3[2][2] = 110;
$data3[2][3] = 120;

$data3[3][0] = 130;
$data3[3][1] = 140;
$data3[3][2] = 150;
$data3[3][3] = 160;

echo "<h3>Displaying 6th Method to show array data, Multi Dimensional </h3>";
echo "<pre>";
foreach ($data3 as $value2){



    foreach ($value2 as $value3){
    echo $value3." ";

    };
    echo "<br/>";
};



echo "<h1>Working with PHP Function</h1>";

function demo() {

echo "My 1st function <br/>";

$firstName="Mahmud";
$lastName="Rahman";
$fullName= $firstName.' '. $lastName;
echo $fullName;
echo "<br/>";
};



function demo1($firstName,$lastName=null) {

   $fullName= $firstName.' '. $lastName;
    return $fullName;
};


demo();

echo demo1('Mahmud1','Rahman1');
echo "<br/>....................<br/>";
$res = demo1('Syed Amirul','Islam');
echo $res;
echo "<br/>............................<br/>";
$newRes = demo1('Mehrab','Islam');
echo "Full Name is: ".$newRes;
echo "<br/>...........................<br/>";

echo "<h3>Working with OOP - Class</h3>";

class Demo {

    public $name="Mahmud Rahman Class";
    public $city="Dhaka";
    public $country="Bangladesh";

    function one(){

        echo 'In One';

    }

    function two(){

        echo 'In Two';
    }

    function three(){

        echo 'In Three';
    }


}
// $demo = Object , new Demo = Class
$demo = new Demo; // Create permission for Demo class

echo $demo->name;
echo "<br/>";
$demo->three();




?>


</body>
</html>