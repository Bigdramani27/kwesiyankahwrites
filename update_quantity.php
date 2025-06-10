<?php
session_start();
require("controllers/cart_controller.php");
$amount=[];
$cartID = $_POST['cart_id'];
$userID = $_SESSION['customer_id'];
$quantity = $_POST['new_quantity'];

$result = update_quantity_cart_controller($cartID, $userID, $quantity);
if($result){
$amount["data"] = total_amount_controller($userID);
}
echo json_encode($amount);
?>