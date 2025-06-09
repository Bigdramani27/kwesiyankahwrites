<?php
require("../controllers/product_controller.php");
require("../controllers/cart_controller.php");
$productID =  $_POST['productID'];
$select = select_one_product_controller($productID);
$productImage = $select['productImage'];
$productFileLocation = $select['productFileLocation'];
$wishlist = delete_product_from_wishlist_admin_controller($productID);
$cart = delete_item_for_admin_controller($productID);

unlink("../wp-content/uploads/books/" . $productImage);
unlink("../wp-content/uploads/files/" . $productFileLocation);

$delete = delete_one_product_controller($productID);
if ($delete) {
    $response = array('success' => true, 'message' => 'Book Successfully Deleted');
} else {
    $response = array('success' => false, 'message' => 'Something is wrong, try again later');
}
echo json_encode($response);
