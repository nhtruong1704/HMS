<?php
require "../connect.php";
global $conn;

class viewEmployee
{
    function __construct($id, $name, $position, $salary,$phone, $avatar)
    {
        $this->EmployeeId = $id;
        $this->EmployeeName = $name;
        $this->EmployeePosition = $position;
        $this->EmployeeSalary = $salary;
        $this->EmployeePhone = $phone;
        $this->EmployeeAvatar = $avatar;

    }
}

$arrEmployees = array();
$query = "SELECT * FROM employee";
$data = mysqli_query($conn, $query);
if ($data) {
    while ($row = mysqli_fetch_assoc($data)) {
        $arrFoodItems[] = new viewEmployee(
            $row['EmployeeId'],
            $row['EmployeeName'],
            $row['EmployeePosition'],
            $row['EmployeeSalary'],
            $row['EmployeePhone'],
            $row['EmployeeAvatar']
        );
    }
    if (count($arrEmployees) > 0) {
        echo json_encode($arrEmployees);
    } else {
        echo "Fail";
    }
}


