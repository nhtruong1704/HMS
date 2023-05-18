<?php
require "../connect.php";
global $conn;

class FoodItem
{
    function __construct($id, $name, $price, $des, $image)
    {
        $this->FoodItemId = $id;
        $this->FoodItemName = $name;
        $this->FoodItemPrice = $price;
        $this->FoodItemDes = $des;
        $this->FoodItemImage = $image;

    }
}

$arrFoodItems = array();
$query = "SELECT * FROM fooditem";
$data = mysqli_query($conn, $query);
if ($data) {
    while ($row = mysqli_fetch_assoc($data)) {
        $arrFoodItems[] = new FoodItem(
            $row['FoodItemId'],
            $row['FoodItemName'],
            $row['FoodItemPrice'],
            $row['FoodItemDes'],
            $row['FoodItemImage']
        );
    }
    if (count($arrFoodItems) > 0) {
        echo json_encode($arrFoodItems);
    } else {
        echo "Fail";
    }
}

