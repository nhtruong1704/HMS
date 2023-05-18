<?php
require "connect.php";
global $conn;

class Customer
{
    function __construct($id, $name,$phone, $address, $email, $isVip,$password, $avatar, $dob, $gender)
    {
        $this->CusId = $id;
        $this->CusName = $name;
        $this->CusPhone = $phone;
        $this->CusAddress = $address;
        $this->CusEmail = $email;
        $this->CusIsVip = $isVip;
        $this->CusPassword = $password;
        $this->CusAvatar = $avatar;
        $this->CusDOB = $dob;
        $this->CusGender = $gender;

    }
}
$arrCustomers = array();
$query = "SELECT * FROM customer";
$data = mysqli_query($conn, $query);
if ($data) {
    while ($row = mysqli_fetch_assoc($data)) {
        $arrCustomers[] = new Customer(
            $row['CustomerId'],
            $row['CustomerName'],
            $row['CustomerPhone'],
            $row['CustomerAddress'],
            $row['CustomerEmail'],
            $row['CustomerIsVip'],
            $row['CustomerPassword'],
            $row['CustomerAvatar'],
            $row['CustomerDOB'],
            $row['CustomerGender']
        );
    }
    if (count($arrCustomers) > 0) {
        echo json_encode($arrCustomers);
    } else {
        echo "Fail";
    }
}
?>

