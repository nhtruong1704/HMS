<?php
require "admin/connect.php";
global $conn;

$CustomerId = $_GET['CustomerId'];
$CustomerAvatar = $_GET['CustomerAvatar'];
if(strlen($CustomerId) > 0 && strlen($CustomerAvatar) > 0) {
    $query = "DELETE FROM customer WHERE CustomerId = '$CustomerId'";
    $data = mysqli_query($conn, $query);
    if($data) {
        if($CustomerAvatar != "NO_IMAGE_CUSTOMER_UPDATE") {
            unlink("images".$CustomerAvatar);
        }
        echo "CUSTOMER_ACC_DELETED_SUCCESSFUL";
    }
    else {
        echo "CUSTOMER_ACC_DELETED_FAILED";
    }
}
else{
    echo "CUSTOMER_ACC_DELETED_NULL";
}
?>