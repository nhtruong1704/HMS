<?php
require "../connect.php";
global $conn;

$FoodItemId = $_GET['FoodItemId'];
$FoodItemImage = $_GET['FoodItemImage'];
if(strlen($FoodItemId) > 0 && strlen($FoodItemImage) > 0) {
    $query = "DELETE FROM fooditem WHERE FoodItemId = '$FoodItemId'";
    $data = mysqli_query($conn, $query);
    if($data) {
        if($FoodItemImage != "NO_IMAGE_FOOD_ITEM_UPDATE") {
            unlink("images".$FoodItemImage);
        }
        echo "FOOD_ITEM_DELETED_SUCCESSFUL";
    }
    else {
        echo "FOOD_ITEM_DELETED_FAILED";
    }
}
else{
    echo "FOOD_ITEM_DELETED_NULL";
}
?>