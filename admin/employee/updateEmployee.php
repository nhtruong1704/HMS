<?php
require "../connect.php";
global $conn;
$EmployeeId = $_POST['EmployeeId'];
$EmployeeName = $_POST['EmployeeName'];
$EmployeePosition = $_POST['EmployeePosition'];
$EmployeeSalary = $_POST['EmployeeSalary'];
$EmployeePhone = $_POST['EmployeePhone'];
$EmployeeAvatar = $_POST['EmployeeAvatar'];
$EmployeeCurrentAvatar = $_POST['EmployeeCurrentAvatar'];



if (strlen($EmployeeName) > 0 && strlen($EmployeePosition) > 0 && strlen($EmployeeSalary) > 0 && strlen($EmployeePhone) > 0) {
    $query = "UPDATE employee SET EmployeeName='$EmployeeName', EmployeePosition='$EmployeePosition', EmployeeSalary='$EmployeeSalary', EmployeeAvatar='$EmployeeAvatar', EmployeeCurrentAvatar='$EmployeeCurrentAvatar' WHERE EmployeeId='$EmployeeId'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        if($EmployeeCurrentAvatar != "NO_CURRENT_IMAGE_EMPLOYEE_ITEM_UPDATE") {
            unlink("images".$EmployeeCurrentAvatar);
        }
        echo "EMPLOYEE_UPDATE_SUCCESSFUL";
    } else {
        echo "EMPLOYEE_UPDATE_FAILED";
    }
} else {
    echo "EMPLOYEE_UPDATE_NULL";
}
?>
