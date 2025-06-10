<?php
session_start();
require("../controllers/cart_controller.php");

$cartID = $_GET['cart'];
$userID = $_SESSION['customer_id'];
$delete =  delete_one_item_from_cart_for_user_controller($cartID, $userID);

header("Location: " . $_SERVER['HTTP_REFERER']);
?>