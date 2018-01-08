<?php
require_once 'vendor/autoload.php';
use App\classes\Student;

$id = $_GET['id'];

$queryResult = Student::getStudentInfoByid($id);
$student = mysqli_fetch_assoc($queryResult);

$messege = '';
if (isset($_POST['btn'])){
    Student::updateStudentInfo($_POST,$id);
}
?>



<body bgcolor="#2f4f4f">
<form action="" method="post">
    <table width="400" height="200" align="center" bgcolor="#faebd7">
        <h1 align="center" style="color: green"><?php echo $messege; ?></h1>
        <tr>
            <td>
                <a href="index.php">Add Student</a> ||
                <a href="view-student.php">View Student</a>
            <td/>
        <tr/>
        <tr>
            <th>Student Name</th>
            <td><input type="text" name="name" value="<?php echo $student['name']; ?>"></td>
        </tr>

        <tr>
            <th>Student Email</th>
            <td><input type="email" name="email" value="<?php echo $student['email']; ?>" ></td>
        </tr>

        <tr>
            <th>Student Mobile</th>
            <td><input type="number" name="mobile" value="<?php echo $student['mobile']; ?>"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="update"></td>
        </tr>
    </table>
</form>
</body>