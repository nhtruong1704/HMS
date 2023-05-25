<?php
require "../connect.php";
global $conn;
$FoodItemId = $_POST['FoodItemId'];
$FoodItemName = $_POST['FoodItemName'];
$FoodItemPrice = $_POST['FoodItemPrice'];
$FoodItemDes = $_POST['FoodItemDes'];
$FoodItemImage = $_POST['FoodItemImage'];
$FoodItemCurrentImage = $_POST['FoodItemCurrentImage'];

if (strlen($FoodItemName) > 0 && strlen($FoodItemPrice) > 0 && strlen($FoodItemDes) > 0 && strlen($FoodItemId) > 0) {
    $query = "UPDATE fooditem SET FoodItemName='$FoodItemName', FoodItemPrice='$FoodItemPrice', FoodItemDes='$FoodItemDes', FoodItemImage='$FoodItemImage', FoodItemCurrentImage='$FoodItemCurrentImage' WHERE FoodItemId='$FoodItemId'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        if ($FoodItemCurrentImage != "NO_CURRENT_IMAGE_FOOD_ITEM_UPDATE") {
            unlink("images" . $FoodItemCurrentImage);
        }
        echo "FOOD_ITEM_UPDATE_SUCCESSFUL";
    } else {
        echo "FOOD_ITEM_UPDATE_FAILED";
    }
} else {
    echo "FOOD_ITEM_UPDATE_NULL";
}
?>
