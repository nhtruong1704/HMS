<?php
require "../connect.php";
global $conn;

$RoomId = $_GET['RoomId'];
$RoomImage = $_GET['RoomImage'];
if(strlen($RoomId) > 0 && strlen($RoomImage) > 0) {
    $query = "DELETE FROM room WHERE RoomId = '$RoomId'";
    $data = mysqli_query($conn, $query);
    if($data) {
        if($RoomImage != "NO_IMAGE_ROOM_UPDATE") {
            unlink($RoomImage);
        }
        echo "ROOM_DELETED_SUCCESSFUL";
    }
    else {
        echo "ROOM_DELETED_FAILED";
    }
}
else{
    echo "ROOM_DELETED_NULL";
}
?>