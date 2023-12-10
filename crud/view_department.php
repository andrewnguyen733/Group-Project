<?php 
    include 'config.php';
    $sql = "SELECT *FROM department";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>

<html>

<head>

    <title>View Department</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Department</h2>

<table class="table">

    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        </tr>
    </thead>
    <tbody> 
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['Department_ID']; ?></td>
                    <td><?php echo $row['Department_Name']; ?></td>
                    <td><a class="btn btn-info" href="update_department.php?id=<?php echo $row['Department_ID']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete_department.php?id=<?php echo $row['Department_ID']; ?>">Delete</a></td>
                    </tr>                       

        <?php       }

            } 

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>