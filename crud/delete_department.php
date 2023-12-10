<?php 
include 'config.php';
if (isset($_GET['id'])) {
    $department_id = $_GET['id'];
    $sql = "DELETE FROM `department` WHERE `Department_ID`='$department_id'";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "Record deleted successfully.";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 

?>