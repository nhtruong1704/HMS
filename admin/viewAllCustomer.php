<?php
require "connect.php";
global $conn;

class viewCustomer
{
    function __construct($id, $name,$phone, $address, $email, $isVip,$password, $dob, $gender ,$avatar)
    {
        $this->CusId = $id;
        $this->CusName = $name;
        $this->CusPhone = $phone;
        $this->CusAddress = $address;
        $this->CusEmail = $email;
        $this->CusIsVip = $isVip;
        $this->CusPassword = $password;
        $this->CusDOB = $dob;
        $this->CusGender = $gender;
        $this->CusAvatar = $avatar;
    }
}
$arrCustomers = array();
$query = "SELECT * FROM customer";
$data = mysqli_query($conn, $query);
if ($data) {
    while ($row = mysqli_fetch_assoc($data)) {
        $arrCustomers[] = new viewCustomer(
            $row['CustomerId'],
            $row['CustomerName'],
            $row['CustomerPhone'],
            $row['CustomerAddress'],
            $row['CustomerEmail'],
            $row['CustomerIsVip'],
            $row['CustomerPassword'],
            $row['CustomerDOB'],
            $row['CustomerGender'],
            $row['CustomerAvatar']
        );
    }
    if (count($arrCustomers) > 0) {
        echo json_encode($arrCustomers);
    } else {
        echo "Fail";
    }
}
?>

