<?php 
    include "config.php";
    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $year = $_POST['year'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $tprogram_id = $_POST['tprogram_id'];
        $account ="$first_name$last_name@gmail.com";
        $role = "Student";

        $sql = "INSERT INTO users(User_ID, `Year`, FirstName, LastName, Email, Phone, TProgram_ID, Account, `Role`) 
                VALUES ('$id','$year','$first_name','$last_name','$email','$phone','$tprogram_id','$account','$role')";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            echo "New record created successfully.";
        }else{
            echo "Error:". $sql . "<br>". $conn->error;
        } 

        $conn->close();     
    }

?>

<!DOCTYPE html>
<html>
<body>
<h2>Signup Form</h2>
<form action="" method="POST">
    <table>
        <tr>
            <th>
                <input type="text" placeholder="ID" name="id">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" placeholder="Year" name="year">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" placeholder="First Name" name="firstname">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" placeholder="Last Name" name="lastname">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" placeholder="Email" name="email">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" placeholder="Phone" name="phone">
            </th>
        </tr>
        <tr>
            <th>
                <input type="text" placeholder="TProgram_ID" name="tprogram_id">
            </th>
        </tr>
        <tr>
            <th></th>
            <th>
                <button type="submit" class="btn btn-primary" name="submit">Add User</button>
            </th>
        </tr>
    </table>
</form>
</body>
</html>