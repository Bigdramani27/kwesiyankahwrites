<?php
session_start();
require("../controllers/cart_controller.php");

$productID = $_POST['SKU'];
$userID = $_SESSION['customer_id'];

$check = select_user_wishlist_based_on_item_controller($productID, $userID);
if ($check != NULL) {
    $response = array('success' => true, 'message' => 'Book Added To Wishlist');
      echo json_encode($response);
    exit;
}

$add = add_to_wishlist_controller($userID, $productID);
if ($add) {
    $response = array('success' => true, 'message' => 'Book Added To Wishlist');
}

echo json_encode($response);
