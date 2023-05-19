<?php
require "../connect.php";
global $conn;

$EmployeeId = $_GET['EmployeeId'];
$EmployeeImage = $_GET['EmployeeImage'];
if(strlen($EmployeeId) > 0 && strlen($EmployeeImage) > 0) {
    $query = "DELETE FROM employee WHERE EmployeeId = '$EmployeeId'";
    $data = mysqli_query($conn, $query);
    if($data) {
        if($EmployeeImage != "NO_IMAGE_EMPLOYEE_UPDATE") {
            unlink("images".$EmployeeImage);
        }
        echo "EMPLOYEE_DELETED_SUCCESSFUL";
    }
    else {
        echo "EMPLOYEE_DELETED_FAILED";
    }
}
else{
    echo "EMPLOYEE_DELETED_NULL";
}
?>