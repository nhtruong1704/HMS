<?php
require "admin/connect.php";
global $conn;

$CustomerEmail = $_POST['CustomerEmail'];
$CustomerPassword = $_POST['CustomerPassword'];

//$CustomerEmail = "albedo@gmail.com";
//$CustomerPassword = "123456";

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
if(strlen($CustomerEmail)>0 && strlen($CustomerPassword)>0){
    $arrCustomers = array();
    $query = "SELECT * FROM customer WHERE FIND_IN_SET('$CustomerEmail',CustomerEmail) AND FIND_IN_SET('$CustomerPassword',CustomerPassword)";
    $data = mysqli_query($conn, $query);
    if($data){
        while ($row = mysqli_fetch_assoc($data)){
            array_push($arrCustomers, new Customer(
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
            ));
        }
        if(count($arrCustomers)>0){
            echo json_encode($arrCustomers);
        }else{
            echo "Fail";
        }
    }
}else{
    echo "Null";
}
?>