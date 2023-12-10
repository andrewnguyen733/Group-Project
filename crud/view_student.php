<?php 
    include 'config.php';
    $sql = "SELECT * FROM users WHERE Role = 'Student'";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>

<table class="table">

    <thead>
        <tr>
        <th>ID</th>
        <th>Year</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>TProgram_ID</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody> 
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['User_ID']; ?></td>
                    <td><?php echo $row['Year']; ?></td>
                    <td><?php echo $row['FirstName']; ?></td>
                    <td><?php echo $row['LastName']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Phone']; ?></td>
                    <td><?php echo $row['TProgram_ID']; ?></td>
                    <td><a class="btn btn-info" href="update_student.php?id=<?php echo $row['User_ID']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete_student.php?id=<?php echo $row['User_ID']; ?>">Delete</a></td>
                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>