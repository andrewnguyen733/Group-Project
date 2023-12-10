<?php 

    include 'config.php';

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        echo $name;    
        echo "(", $id,")"; 
        $sql = "UPDATE `department` SET `Department_ID`='$id',`Department_name`='$name' WHERE `Department_ID`='$id'"; 
        $result = $conn->query($sql); 
        if ($result == TRUE) {
            echo " Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    } 

    if (isset($_GET['id'])) {

        $id = $_GET['id']; 

        $sql = "SELECT * FROM `department` WHERE `Department_ID`='$id'";

        $result = $conn->query($sql); 

        if ($result->num_rows > 0) {        

            while ($row = $result->fetch_assoc()) {
                $id = $row['Department_ID'];
                $name = $row['Department_Name'];
            } 

?>

        <h2>Department Update Form</h2>

        <form action="" method="post">
          <fieldset>
            <legend>Department information:</legend>
            Department ID:<br>
            <input type="text" name="id" value="<?php echo $id; ?>">
            <br>
            Department name:<br>
            <input type="text" name="name" value="<?php echo $name; ?>">
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