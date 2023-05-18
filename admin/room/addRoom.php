<?php
require "../connect.php";
global $conn;
$RoomName = $_POST['RoomName'];
$RoomPrice = $_POST['RoomPrice'];
$RoomDes = $_POST['RoomDes'];
$RoomImage = $_POST['RoomImage'];


if (strlen($RoomName) > 0 && strlen($RoomPrice) > 0 && strlen($RoomDes) > 0) {
    if($RoomImage != "NO_IMAGE_ADD_ROOM") {
        $query = "INSERT INTO room (RoomId, RoomName, RoomPrice, RoomDes, RoomImage ) VALUES (null, '$RoomName', '$RoomPrice', '$RoomDes', '$RoomImage')";
    }
    else{
        $query = "INSERT INTO room (RoomId, RoomName, RoomPrice, RoomDes, RoomImage) VALUES (null, '$RoomName', '$RoomPrice', '$RoomDes', '$RoomImage')";
    }
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "ADD_ROOM_SUCCESSFUL";
    } else {
        echo "ADD_ROOM_FAILED";
    }
} else {
    echo "ADD_ROOM_NULL";
}
?>
