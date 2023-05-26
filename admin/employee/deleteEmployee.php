<?php
require "../connect.php";
global $conn;

$EmployeeId = $_GET['EmployeeId'];
$EmployeeAvatar = $_GET['EmployeeAvatar'];
if(strlen($EmployeeId) > 0 && strlen($EmployeeAvatar) > 0) {
    $query = "DELETE FROM employee WHERE EmployeeId = '$EmployeeId'";
    $data = mysqli_query($conn, $query);
    if($data) {
        if($EmployeeAvatar != "NO_IMAGE_EMPLOYEE_UPDATE") {
            unlink("images".$EmployeeAvatar);
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