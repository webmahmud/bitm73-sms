<?php
    require_once 'vendor/autoload.php';
    use App\classes\Student;

    $messege = '';
    if (isset($_POST['btn'])){
        $messege = Student::saveStudentInfo($_POST);
    }
?>



<body bgcolor="#2f4f4f">
<h1>Day 21 Class</h1>
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
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <th>Student Email</th>
                <td><input type="email" name="email"></td>
            </tr>

            <tr>
                <th>Student Mobile</th>
                <td><input type="number" name="mobile"></td>
            </tr>

            <tr>
                <th></th>
                <td><input type="submit" name="btn" value="submit"></td>
            </tr>
        </table>
    </form>
</body>