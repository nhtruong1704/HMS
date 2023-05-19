<?php
require "../connect.php";
global $conn;
$EmployeeId = $_POST['EmployeeId'];
$EmployeeName = $_POST['EmployeeName'];
$EmployeePosition = $_POST['EmployeePosition'];
$EmployeeSalary = $_POST['EmployeeSalary'];
$EmployeePhone = $_POST['EmployeePhone'];

if (strlen($EmployeeName) > 0 && strlen($EmployeePosition) > 0 && strlen($EmployeeSalary) > 0 && strlen($EmployeePhone) > 0) {
    if($EmployeeImage != "NO_IMAGE_ADD_EMPLOYEE") {
        $query = "INSERT INTO employee (EmployeeId, EmployeeName, EmployeePosition, EmployeeSalary, EmployeePhone, EmployeeImage ) VALUES (null, '$EmployeeName', '$EmployeePosition', '$EmployeeSalary', '$EmployeePhone', '$EmployeeImage')";
    }
    else{
        $query = "INSERT INTO employee (EmployeeId, EmployeeName, EmployeePosition, EmployeeSalary, EmployeePhone, EmployeeImage) VALUES (null, '$EmployeeName', '$EmployeePosition', '$EmployeeSalary', '$EmployeePhone', '$EmployeeImage')";
    }
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "ADD_EMPLOYEE_SUCCESSFUL";
    } else {
        echo "ADD_EMPLOYEE_FAILED";
    }
} else {
    echo "ADD_EMPLOYEE_NULL";
}
?>

