<?php
require "../connect.php";
global $conn;

class Room
{
    function __construct($id, $name, $price, $des, $image)
    {
        $this->RoomId = $id;
        $this->RoomName = $name;
        $this->RoomPrice = $price;
        $this->RoomDes = $des;
        $this->RoomImage = $image;

    }
}

$arrRooms = array();
$query = "SELECT * FROM room";
$data = mysqli_query($conn, $query);
if ($data) {
    while ($row = mysqli_fetch_assoc($data)) {
        $arrRooms[] = new Room(
            $row['RoomId'],
            $row['RoomName'],
            $row['RoomPrice'],
            $row['RoomDes'],
            $row['RoomImage']
        );
    }
    if (count($arrRooms) > 0) {
        echo json_encode($arrRooms);
    } else {
        echo "Fail";
    }
}


