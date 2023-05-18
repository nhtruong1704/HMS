<?php
require "connect.php";
global $conn;
$CustomerId = $_POST['CustomerId'];
$CustomerName = $_POST['CustomerName'];
$CustomerPhone = $_POST['CustomerPhone'];
$CustomerAddress = $_POST['CustomerAddress'];
$CustomerEmail = $_POST['CustomerEmail'];
$CustomerIsVip = $_POST['CustomerIsVip'];
$CustomerPassword = $_POST['CustomerPassword'];
$CustomerAvatar = $_POST['CustomerAvatar'];
$CustomerCurrentAvatar = $_POST['CustomerCurrentAvatar'];
$CustomerDOB = $_POST['CustomerDOB'];
$CustomerGender = $_POST['CustomerGender'];




if (strlen($CustomerName) > 0 && strlen($CustomerEmail) > 0 && strlen($CustomerId) > 0 && strlen($CustomerPassword) > 0) {
    $query = "UPDATE customer SET CustomerName='$CustomerName', CustomerGender='$CustomerGender', CustomerPhone='$CustomerPhone', CustomerAddress='$CustomerAddress', CustomerEmail='$CustomerEmail', CustomerIsVip='$CustomerIsVip',  CustomerPassword='$CustomerPassword', CustomerAvatar='$CustomerAvatar', CustomerCurrentAvatar='$CustomerCurrentAvatar' WHERE CustomerId='$CustomerId'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        if($CustomerCurrentAvatar != "NO_CURRENT_IMAGE_CUSTOMER_UPDATE") {
            unlink("images".$CustomerCurrentAvatar);
        }
        echo "CUSTOMER_UPDATE_SUCCESSFUL";
    } else {
        echo "CUSTOMER_UPDATE_FAILED";
    }
} else {
    echo "CUSTOMER_UPDATE_NULL";
}
?>
