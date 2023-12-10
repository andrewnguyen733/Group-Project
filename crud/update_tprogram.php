<?php 

    include 'config.php';

    if (isset($_POST['update'])) {
        $tprogram_id = $_POST['tprogram_id'];
        $tprogram_name = $_POST['tprogram_name'];
        $department_id = $_POST['department_id'];
        $year = $_POST['year'];
        echo $tprogram_name ;    
        echo "(", $tprogram_id,")"; 
        $sql = "UPDATE `training_program` SET `TProgram_ID`='$tprogram_id',`TProgram_Name`='$tprogram_name',`Department_ID`='$department_id',`Year`='$year' WHERE `TProgram_ID`='$tprogram_id'"; 
        $result = $conn->query($sql); 
        if ($result == TRUE) {
            echo " Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    } 

    if (isset($_GET['id'])) {

        $tprogram_id = $_GET['id']; 

        $sql = "SELECT * FROM `training_program` WHERE `TProgram_ID`='$tprogram_id'";

        $result = $conn->query($sql); 

        if ($result->num_rows > 0) {        

            while ($row = $result->fetch_assoc()) {
                $tprogram_id = $row['TProgram_ID'];
                $tprogram_name = $row['TProgram_Name'];
                $department_id = $row['Department_ID'];
                $year = $row['Year'];
            } 

?>

        <h2>Training Program Update Form</h2>

        <form action="" method="post">
          <fieldset>
            <legend>Training Program information:</legend>
            Training Program ID:<br>
            <input type="text" name="tprogram_id" value="<?php echo $tprogram_id; ?>">
            <br>
            Training Program name:<br>
            <input type="text" name="tprogram_name" value="<?php echo $tprogram_name; ?>">
            <br>
            Department ID:<br>
            <input type="text" name="department_id" value="<?php echo $department_id; ?>">
            <br>
            Year:<br>
            <input type="number" name="year" value="<?php echo $year; ?>">
            <br>
            <input type="submit" value="Update" name="update">
          </fieldset>
        </form> 

        </body>

        </html> 

    <?php
    } else{ 
        header('Location: view_department.php');
    } 
}
?> 