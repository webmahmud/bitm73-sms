<html>
<head>
    <title>Home Work for PHP Class</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/day19.css">
</head>
<body>
<h1>Home Work</h1>

<?php
require_once 'vendor/autoload.php';
use App\classes\Day19;
use App\classes\Day191;
use App\classes\HomeWork;

//Day191::add();

$result = '';
if (isset($_POST['btn'])) {
//    $example = new App\classes\Example();
//    $result = $example->makeSeriesNumber($_POST);
//schope resulation operator name is ::

    $result = HomeWork::oddEven($_POST);
}
?>
<form action="" method="POST">
    <table>
        <tr>
            <th>Starting Number</th>
            <td><input type="number" name="starting_number"></td>
        </tr>

        <tr>
            <th>Ending Number</th>
            <td><input type="number" name="ending_number"></td>
        </tr>

        <tr>
            <th>Result</th>
            <td><textarea rows="5" cols="30"><?php echo $result; ?></textarea> </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>


    </table>

</form>

</body>
</html>