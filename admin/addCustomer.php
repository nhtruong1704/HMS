<?php
require "connect.php";
global $conn;
$CustomerName = $_POST['CustomerName'];
$CustomerPhone = $_POST['CustomerPhone'];
$CustomerAddress = $_POST['CustomerAddress'];
$CustomerEmail = $_POST['CustomerEmail'];
$CustomerIsVip = $_POST['CustomerIsVip'];
$CustomerPassword = $_POST['CustomerPassword'];
$CustomerDOB = $_POST['CustomerDOB'];
$CustomerGender = $_POST['CustomerGender'];
$CustomerAvatar = $_POST['CustomerAvatar'];




if (strlen($CustomerName) > 0 && strlen($CustomerEmail) > 0 && strlen($CustomerPassword) > 0) {
    if($CustomerAvatar != "NO_IMAGE_ADD_STUDENT") {
        $query = "INSERT INTO customer (CustomerId, CustomerName, CustomerPhone, CustomerAddress, CustomerEmail, CustomerIsVip, CustomerPassword, CustomerDOB, CustomerGender, CustomerAvatar) VALUES (null, '$CustomerName', '$CustomerPhone', '$CustomerAddress', '$CustomerEmail', '$CustomerIsVip', '$CustomerPassword', '$CustomerDOB', '$CustomerGender', '$CustomerAvatar')";
    }
    else{
        $query = "INSERT INTO customer (CustomerId, CustomerName, CustomerPhone, CustomerAddress, CustomerEmail, CustomerIsVip, CustomerPassword, CustomerDOB, CustomerGender) VALUES (null, '$CustomerName', '$CustomerPhone', '$CustomerAddress', '$CustomerEmail', '$CustomerIsVip', '$CustomerPassword', '$CustomerDOB', '$CustomerGender')";
    }
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "ADD_CUSTOMER_SUCCESSFUL";
    } else {
        echo "ADD_CUSTOMER_FAILED";
    }
} else {
    echo "ADD_CUSTOMER_NULL";
}
?>
