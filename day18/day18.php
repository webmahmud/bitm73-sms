<html>
<head>
    <title>Day 18 class</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/day18.css">
</head>
<body>
<h1>Day 18 PHP Class</h1>

<?php
require_once 'Registration.php';
use App\classes\Registration;


if(isset($_POST['btn'])){

  //  $fullName= new App\classes\Registration();

  //  $fullName= $fullName->makeFullName($_POST);

$fullName = Registration::makeFullName($_POST);
// here syntex is ClassName: objectName

}



?>
<form action="" method="POST">
<table>

    <tr>
        <th>First Name</th>
        <td>
            <input type="text" name="first_name"/>

        </td>

    </tr>

    <tr>
        <th>Last Name</th>
        <td>
            <input type="text" name="last_name"/>
        </td>

    </tr>


    <tr>
        <th>Full Name</th>
        <td>
            <input type="text" value="<?php echo $fullName;?>"/>
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