<html>
<head>
    <title>Day 20 class - PHP and MySQL</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/day20.css">
</head>
<body>
<h1>Day 20 class - PHP and MySQL</h1>

<?php
require_once 'vendor/autoload.php';
use App\classes\Student;
$message = '';
if (isset($_POST['btn'])){

    $message = Student::saveStudentInfo($_POST);
}

?>
<hr/>
<a href="day20.php">Add Student</a> | <a href="view-student.php">View Student</a>

<hr/>

<form action="" method="POST">
    <table>
        <tr>
            <th>Student Name</th>
            <td><input type="text" name="name"> </td>

        </tr>

        <tr>
            <th>Student Email</th>
            <td><input type="text" name="email"> </td>

        </tr>

        <tr>
            <th>Student Mobile</th>
            <td><input type="text" name="mobile"> </td>

        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"> </td>

        </tr>
        <tr>
            <th></th>
            <td><h3><?php echo $message; ?></h3></td>

        </tr>

    </table>

</form>
</body>
</html>