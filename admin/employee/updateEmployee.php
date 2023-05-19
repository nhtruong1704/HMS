<?php
require "../connect.php";
global $conn;
$EmployeeId = $_POST['EmployeeId'];
$EmployeeName = $_POST['EmployeeName'];
$EmployeePosition = $_POST['EmployeePosition'];
$EmployeeSalary = $_POST['EmployeeSalary'];
$EmployeePhone = $_POST['EmployeePhone'];
$EmployeeImage = $_POST['EmployeeImage'];
$EmployeeCurrentImage = $_POST['EmployeeCurrentImage'];



if (strlen($EmployeeName) > 0 && strlen($EmployeePosition) > 0 && strlen($EmployeeSalary) > 0 && strlen($EmployeePhone) > 0) {
    $query = "UPDATE employee SET EmployeeName='$EmployeeName', EmployeePosition='$EmployeePosition', EmployeeSalary='$EmployeeSalary', EmployeeImage='$EmployeeImage', EmployeeCurrentImage='$EmployeeCurrentImage' WHERE EmployeeId='$EmployeeId'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        if($EmployeeCurrentImage != "NO_CURRENT_IMAGE_EMPLOYEE_ITEM_UPDATE") {
            unlink("images".$EmployeeCurrentImage);
        }
        echo "EMPLOYEE_UPDATE_SUCCESSFUL";
    } else {
        echo "EMPLOYEE_UPDATE_FAILED";
    }
} else {
    echo "EMPLOYEE_UPDATE_NULL";
}
?>
