<?php 
    include 'config.php';
    $sql = "SELECT *FROM training_program";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>

<html>

<head>

    <title>View Training Program</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Training Program</h2>

<table class="table">

    <thead>
        <tr>
        <th>Training Program ID</th>
        <th>Name</th>
        <th>Department ID</th>
        <th>Year></th>
        </tr>
    </thead>
    <tbody> 
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['TProgram_ID']; ?></td>
                    <td><?php echo $row['TProgram_Name']; ?></td>
                    <td><?php echo $row['Department_ID']; ?></td>
                    <td><?php echo $row['Year']; ?></td>
                    <td><a class="btn btn-info" href="update_tprogram.php?id=<?php echo $row['TProgram_ID']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete_tprogram.php?id=<?php echo $row['TProgram_ID']; ?>">Delete</a></td>
                    </tr>                       

        <?php       }

            } 

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>