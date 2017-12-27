<?php
//echo "<html>";
//            echo "<head>";
//                    echo "<title>Home</title>";
//            echo "</head>";
//echo "<body>";
//echo "<h1>This is a heading</h1>";
//echo "<p>This is a Paragraph</p>";
//echo "</body>";
//echo "</html>";
//echo "<br><hr>";
//echo '<html>
//      <head><title>Home</title></head>
//      <body>
//      <h1>This is a heading</h1>
//      <p>This is a Paragraph</p>
//      </body>
//      <html>
//';
?>

<!--<html>-->
<!--<head>-->
<!--    <title> --><?php //echo "Home"; ?>
<!---->
<!--    </title>-->
<!---->
<!--</head>-->
<!--<body>-->
<!--<h1>--><?php //echo 'This is a Heading'; ?><!--</h1>-->
<!--<p>--><?php //echo 'This is a Paragraph'; ?><!--</p>-->
<!--<input type="text" value="--><?php //echo 'Hello World'; ?><!--" />-->
<!---->
<!--</body>-->
<!--</html>-->

<?php
//$firstName = 'Sagor';
//$lastName = 'Khan';
//echo $firstName.' '.$lastName;

//$x=10;
//$y=20;
//$z= 30;
//
// if (($x<$y) && ($x<$z)){
//
//echo "Condition is true becuase both are true";
//} else {
//     echo "1st condition is not valid so you can not see any output";
//
// }

$data =  [];
$data[0] =10.20;
$data[1]=20;
$data[2] =30;

$data ['name'] = "Sojib Khan";
$data ['city'] = "Dhaka";
$data['country'] = "Bangladesh";

foreach ($data as $anynewvariable){
    echo "<br/>";
    echo $anynewvariable.'';
}


echo "<pre>";
print_r($data);

var_dump($data);

$datanew = [

'name' => 'Sojib Khan',
'city' => 'Dhaka',
'Country' => 'Bangladesh',
'mobile' => '01791728281',

];

foreach ($datanew as $value1){
    echo "<br/>";
    echo $value1.'';
}
echo"<br/>";
print_r($datanew);




?>