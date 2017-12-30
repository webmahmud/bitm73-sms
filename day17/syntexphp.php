<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Operator Testing</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/day16.css" >

</head>

<body>
<h1>PHP Arithmetic Operators</h1>
<table border="1">
<tr>
<th> Addition of $x=20 and $y =10 is</th>
<td> <?php $x=20; $y=10; echo $x+$y; ?></td>
</tr>
<tr>
<th> Subtraction of $x=20 and $y =10 is</th>
<td> <?php $x=20; $y=10; echo $x-$y; ?></td>
</tr>

<tr>
<th> Multiplication  of $x=20 and $y =10 is </th>
<td> <?php $x=20; $y=10; echo $x*$y; ?></td>
</tr>
<tr>
<th> Division   of $x=20 and $y =10 is </th>
<td> <?php $x=20; $y=10; echo $x/$y; ?></td>
</tr>
<tr>
<th> Modulus  of $x=20 and $y =10 is </th>
<td> <?php $x=20; $y=10; echo $x%$y; ?></td>
</tr>

</table>


<h1>PHP Assignment Operators</h1>
<table border="1">
<tr>
<th> 	$x variable value comes 10 when use "=" operator</th>
<td> <?php $x=20;  echo '$x='.$x; ?></td>
</tr>
<tr>
<th> x += y same as x=x+y, x=20, y=10, x+=y return 30</th>
<td> <?php $x=20; $y=10; echo '$x='.$x+=$y; ?></td>
</tr>

<tr>
<th> x -= y	same as x = x - y, 	x=20, y=10, x-=y return 10 </th>
<td> <?php $x=20; $y=10; echo '$x='.$x-=$y; ?></td>
</tr>
<tr>
<th> x *= y	same as x = x * y	x=20, y=10, x*=y return 200 </th>
<td> <?php $x=20; $y=10; echo '$x='.$x*=$y; ?></td>
</tr>
<tr>
<th> x /= y	same as x = x / y	x=20, y=10, x/=y return 10 </th>
<td> <?php $x=20; $y=10; echo '$x='.$x/=$y; ?></td>
</tr>

<tr>
<th> x %= y	same as x = x % y,	x=20, y=10, x%=y return 0 </th>
<td> <?php $x=20; $y=10; echo '$x='.$x%=$y; ?></td>
</tr>

</table>


<h1>PHP Comparison Operators</h1>
<table border="1">
<tr>
<th> Returns true if $x is equal to $y by "==" this operator, $x=20 and $y=20</th>
<td> <?php 

$x=20; $y=20;
if ($x==$y){
	echo "True";	
	} else {
		
	echo "False";
	}
  ?>
  
  </td>
</tr>
<tr>
<th> Returns true if $x is equal to $y, and they are of the same type, $x=20 and $y=20</th>
<td> 

<?php 

$x=20; $y=20;
if ($x===$y){
	echo "True";	
	} else {
		
	echo "False";
	}
  ?>

</td>
</tr>

<tr>
<th> Returns true if $x is not equal to $y, $x=20; $y=30</th>
<td> 

<?php 

$x=20; $y=30;
if ($x!=$y){
	echo "True";	
	} else {
		
	echo "False";
	}
  ?>
</td>
</tr>
<tr>
<th> Returns true if $x is not equal to $y , $x=20; $y=30 </th>
<td> 

<?php $x=20; $y=30;
if ($x<>$y){
	echo "True";	
	} else {
		
	echo "False";
	}
  ?> 

</td>
</tr>
<tr>
<th> Returns true if $x is not equal to $y, or they are not of the same type, $x=20; $y=30</th>
<td> 
<?php $x=20; $y=30;
if ($x!==$y){
	echo "True";	
	} else {
		
	echo "False";
	}
  ?> 


</td>
</tr>

<tr>
<th> Returns true if $x is greater than $y, $x=30; $y=20 </th>
<td> 

<?php $x=30; $y=20;
if ($x>$y){
	echo "True";	
	} else {
		
	echo "False";
	}
  ?> 
</td>
</tr>


<tr>
<th> Returns true if $x is less than $y, $x=20; $y=30 </th>
<td> 

<?php $x=20; $y=30;
if ($x<$y){
	echo "True";	
	} else {
		
	echo "False";
	}
  ?> 
</td>
</tr>


<tr>
<th> Returns true if $x is greater than or equal to $y, $x=30; $y=30 </th>
<td> 

<?php $x=30; $y=30;
if ($x >= $y){
	echo "True";	
	} else {
		
	echo "False";
	}
  ?> 
</td>
</tr>


<tr>
<th> Returns true if $x is less than or equal to $y, $x=30; $y=30 </th>
<td> 

<?php $x=30; $y=30;
if ($x <= $y){
	echo "True";	
	} else {
		
	echo "False";
	}
  ?> 
</td>
</tr>
</table>


<h1>PHP Increment / Decrement Operators</h1>
<table border="1">
<tr>
<th> 	++$x, Increments $x by one, then returns $x, $x=20 ++$x = 21</th>
<td> <?php $x=20;  echo '++$x ='.++$x; ?></td>
</tr>
<tr>
<th> $x++, Returns $x, then increments $x by one, $x=20 $x++ = 20</th>
<td> <?php $x=20;  echo '$x++ ='.$x++; ?></td>
</tr>

<tr>
<th> --$x, Decrements $x by one, then returns $x, $x=20 --$x = 19 </th>
<td> <?php $x=20; echo '--$x ='.--$x; ?></td>
</tr>
<tr>
<th> $x--, Returns $x, then decrements $x by one, $x=20 $x-- = 20 </th>
<td> <?php $x=20; echo '$x--='.$x--; ?></td>
</tr>
</table>



<h1>PHP Logical Operators</h1>
<table border="1">
<tr>
<th> 	True if both $x and $y are true, $x=20 $y = 20</th>
<td> 

<?php $x=20; $y=30;
if ($x && $y){
	echo '$x && $y is True';	
	} else {
		
	echo '$x && $y is False';
	}
  ?>

</td>
</tr>
<tr>
<th> True if either $x or $y is true,  $x=20 $y = 20</th>
<td> 

<?php $x=20; $y=20;
if ($x || $y){
	echo '$x || $y is True';	
	} else {
		
	echo '$x || $y is False';
	}
  ?>


</td>
</tr>

<tr>
<th> True if either $x or $y is true, but not both, $x=100 $y = 50</th>
<td> 
<?php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "True";
}
?>

</td>
</tr>
<tr>
<th> True if $x is not true, $x=30  </th>
<td> 
<?php
$x = 100;  

if ($x !== 90) {
    echo '$x is true';
} else {
	 echo '$x is false';
	
}
?>

</td>
</tr>
</table>



<h1>PHP String Operators</h1>
<table border="1">
<tr>
<th> 	Concatenation of $txt1 and $txt2, $txt1 = Mahmud . $txt2=Rahman</th>
<td> 

<?php 	
		$txt1 = "Mahmud";
		$txt2 = "Rahman";
		echo $txt1.$txt2;
  ?>

</td>
</tr>
<tr>
<th> Appends $txt2 to $txt1, $txt1 .= $txt2</th>
<td> 

<?php 
	$txt1 = "Mahmud ";
	$txt2 = "Rahman";
	$txt1 .= $txt2;
echo $txt1;
  ?>


</td>
</tr>

</table>





<script src="js/jquery-3.2.1.js" ></script>
<script src="js/popper.js" ></script>
<script src="js/bootstrap.js"></script>
</body>
</html>