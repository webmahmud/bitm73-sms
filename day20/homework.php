<html>
<head>
    <title>Day 18 class</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/day18.css">
</head>
<body>
<h1>Day 19 PHP Class - Home Work</h1>

<?php
require_once 'ClassHomeWork.php';
use App\classes\ClassHomeWork;
$result='';

if(isset($_POST['btn'])){

    //  $fullName= new App\classes\Registration();

    //  $fullName= $fullName->makeFullName($_POST);

    $result = ClassHomeWork::oddEven($_POST);


// here syntex is ClassName: objectName

}



?>
<form action="" method="POST">
    <table>

        <tr>
            <th>Starting Number</th>
            <td>
                <input type="number" name="starting_number"/>

            </td>

        </tr>

        <tr>
            <th>Ending Number</th>
            <td>
                <input type="number" name="ending_number"/>
            </td>

        </tr>

        <tr>
            <th>Choose your Option</th>
            <td>
                <input type="radio" name="choose" value="Odd">Odd
                <input type="radio" name="choose" value="Even">Even

            </td>

        </tr>


        <tr>
            <th>Result</th>
            <td>
               <textarea rows="4" cols="30"><?php echo $result; ?></textarea>
            </td>

        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit"/></td>

        </tr>

    </table>

</form>
</body>
</html>