<?php
session_start();
require("../controllers/cart_controller.php");

$userID= $_SESSION['customer_id'];
$productID = $_POST['SKU'];
$quantity = $_POST['quantity'] ?: 1;

//check if the user exists
$check = select_user_cart_based_on_item_controller($userID, $productID);

//check if the product is already in the cart
if ($check) {
    $new_quantity = $check['quantity'] + $quantity;
    $update = update_quantity_based_on_item_controller($new_quantity, $userID, $productID);
    $response = array('success' => true, 'message' => 'Book added to cart.');
} else {

    //add to cart
    $add = add_to_cart_controller($userID, $productID, $quantity);
    if ($add) {
        $response = array('success' => true, 'message' => 'Book added to cart.');
    }
}

echo json_encode($response);
