<?php
include "config.php";
if (isset($_POST['submit'])) {
    $tprogram_id = $_POST['tprogram_id'];
    $tprogram_name = $_POST['tprogram_name'];
    $department_id = $_POST['department_id'];
    $year = $_POST['year'];

$sql = "INSERT INTO training_program(TProgram_ID, TProgram_Name, Department_ID, Year) VALUES ('$tprogram_id','$tprogram_name','$department_id','$year')";
$result = $conn->query($sql);
if ($result == true) {
    echo "New record created successfully";
} else {
    echo "Error" . $sql . $conn->error;
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trainning Program</title>
</head>

<body>
    <h1>Add training program</h1>
    <form action="" method="POST">
        <fieldset>
            <legend>Fill imformation</legend>
            Training Program ID:<br>
            <input type="text" name="tprogram_id">
            <br>
            Training Program Name:<br>
            <input type="text" name="tprogram_name">
            <br>
            Department ID:<br>
            <input type="text" name="department_id">
            <br>
            Year:<br>
            <input type="text" name="year">
            <br>
            <br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>

</html>