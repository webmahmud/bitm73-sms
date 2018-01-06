<html>
<head>
    <title>View - Student - Day 20 class - PHP and MySQL</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/day20.css">
</head>
<body>
<h1>View Student - Day 20 class - PHP and MySQL</h1>

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

<table border="1" width="700">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobile</th>
    </tr>
    <tr>
        <td>Demo</td>
        <td>Demo</td>
        <td>Demo</td>
        <td>Demo</td>

    </tr>

</table>
</body>
</html>