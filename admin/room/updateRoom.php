<?php
require "../connect.php";
global $conn;
$RoomId = $_POST['RoomId'];
$RoomName = $_POST['RoomName'];
$RoomPrice = $_POST['RoomPrice'];
$RoomDes = $_POST['RoomDes'];
$RoomImage = $_POST['RoomImage'];
$RoomCurrentImage = $_POST['RoomCurrentImage'];




if (strlen($RoomName) > 0 && strlen($RoomPrice) > 0 && strlen($RoomId) > 0 && strlen($RoomDes) > 0) {
    $query = "UPDATE room SET RoomName='$RoomName', RoomDes='$RoomDes', RoomImage='$RoomImage', RoomPrice='$RoomPrice', RoomCurrentImage='$RoomCurrentImage' WHERE RoomId='$RoomId'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        if($RoomCurrentImage != "NO_CURRENT_IMAGE_ROOM_UPDATE") {
            unlink("images".$RoomCurrentImage);
        }
        echo "ROOM_UPDATE_SUCCESSFUL";
    } else {
        echo "ROOM_UPDATE_FAILED";
    }
} else {
    echo "ROOM_UPDATE_NULL";
}
?>
