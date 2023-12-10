<?php 
include 'config.php';
if (isset($_GET['id'])) {
    $tprogram_id = $_GET['id'];
    $sql = "DELETE FROM `training_program` WHERE `TProgram_ID`='$tprogram_id'";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "Record deleted successfully.";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 

?>