<?php
include "config.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];


$sql = "INSERT INTO department(Department_ID, Department_Name) VALUES ('$id','$name')";
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
    <title>Department</title>
</head>

<body>
    <h1>Add department</h1>
    <form action="" method="POST">
        <fieldset>
            <legend>Fill imformation</legend>
            Department ID:<br>
            <input type="text" name="id">
            <br>
            Department Name:<br>
            <input type="text" name="name">
            <br>
            <br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>

</html>