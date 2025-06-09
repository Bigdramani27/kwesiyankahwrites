<?php
require("../controllers/product_controller.php");


$productName =  $_POST['productName'];
$productImage = $_FILES['productImage']['name'];
$productImage_tmp = $_FILES['productImage']['tmp_name'];
$productImage_size = $_FILES['productImage']['size'];
$productFileLocation = $_FILES['productFileLocation']['name'];
$productFileLocation_tmp = $_FILES['productFileLocation']['tmp_name'];
$productAuthor =  $_POST['productAuthor'];
$productPrice =  $_POST['productPrice'];
$productCategory =  $_POST['productCategory'];
$productGenre =  $_POST['productGenre'];
$productDescription = $_POST['productDescription'];
$publishedDate = $_POST['publishedDate'];
$productWeight = $_POST['productWeight'];
$productLanguage = $_POST['productLanguage'];
$productAvailable =  $_POST['productAvailable'];



$image_extension = pathinfo($productImage, PATHINFO_EXTENSION);
$productImage = uniqid() . '.' . $image_extension;
$file_extension = pathinfo($productFileLocation, PATHINFO_EXTENSION);
$productFileLocation = uniqid() . '.' . $file_extension;
move_uploaded_file($productImage_tmp, "../wp-content/uploads/books/" . $productImage);
move_uploaded_file($productFileLocation_tmp, "../wp-content/uploads/files/" . $productFileLocation);


function generateUserId() {
    $timestamp = round(microtime(true) * 1000);
    $random = rand(1000, 9999);                
    return $timestamp . $random;               
}
$productID = (int) generateUserId();
$add = add_book_controller($productID, $productName, $productImage, $productPrice,  $productFileLocation, $productAuthor, $productCategory,  $productGenre, $productDescription, $publishedDate, $productWeight, $productLanguage, $productAvailable);

if ($add) {
    $response = array('success' => true, 'message' => 'Book Added Successfully');
}

echo json_encode($response);

?>