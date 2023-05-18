<?php
require "../connect.php";
global $conn;
$FoodItemName = $_POST['FoodItemName'];
$FoodItemPrice = $_POST['FoodItemPrice'];
$FoodItemDes = $_POST['FoodItemDes'];
$FoodItemImage = $_POST['FoodItemImage'];


if (strlen($FoodItemName) > 0 && strlen($FoodItemPrice) > 0 && strlen($FoodItemDes) > 0) {
    if($FoodItemImage != "NO_IMAGE_ADD_FOOD") {
        $query = "INSERT INTO fooditem (FoodItemId, FoodItemName, FoodItemPrice, FoodItemDes, FoodItemImage ) VALUES (null, '$FoodItemName', '$FoodItemPrice', '$FoodItemDes', '$FoodItemImage')";
    }
    else{
        $query = "INSERT INTO fooditem (FoodItemId, FoodItemName, FoodItemPrice, FoodItemDes, FoodItemImage) VALUES (null, '$FoodItemName', '$FoodItemPrice', '$FoodItemDes', '$FoodItemImage')";
    }
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "ADD_FOOD_SUCCESSFUL";
    } else {
        echo "ADD_FOOD_FAILED";
    }
} else {
    echo "ADD_FOOD_NULL";
}
?>
