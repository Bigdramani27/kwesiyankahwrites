<?php
session_start();
require("../controllers/cart_controller.php");

$productID = $_GET['SKU'];
$userID = $_SESSION['customer_id'];
$delete = delete_product_from_wishlist_controller($productID, $userID);
header("Location: ../wishlist/index.php");
?>