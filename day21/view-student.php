<?php
    require_once 'vendor/autoload.php';
    use App\classes\Student;

    if (isset($_GET['delete'])){
        $id=$_GET['id'];
        Student::deleteStudentInfoByID($id);

    }

    $queryResult = Student::getAllStudentInfo();

    /*while ($student = mysqli_fetch_assoc($queryResult)){

    }*/

?>

<body bgcolor="#2f4f4f">
<table bgcolor="#faebd7" align="center">
    <tr>
        <td>
            <a href="index.php">Add Student</a> ||
            <a href="view-student.php">View Student</a>
        </td>
    </tr>
</table>

<table width="900" height="550" align="center" bgcolor="#faebd7" border="1" width="700">

    <tr align="center">
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Student Mobile</th>
        <th></th>
    </tr>
    <?php
    $i=1;
    while ($student = mysqli_fetch_assoc($queryResult)) {

        ?>
    <tr align="center">
        <td>
            <?php echo $i++; ?>
            <?php //echo $student['id']; ?></td>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><?php echo $student['mobile']; ?></td>
        <td>
            <a href="edit-student.php?id=<?php echo $student['id']; ?>">Edit</a>
            <a href="?delete=true&id=<?php echo $student['id']; ?>" onclick=" return confirm('Are you sure to delete this!!'); ">Delete</a>
        </td>
    </tr>
    <?php

    } ?>
</table>
</body>