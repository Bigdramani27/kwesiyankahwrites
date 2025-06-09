<?php
require("../controllers/product_controller.php");

// Collect data from POST
$productID = $_POST['product'];
$productName = $_POST['productName'];
$productAuthor = $_POST['productAuthor'];
$productPrice = $_POST['productPrice'];
$productCategory = $_POST['productCategory'];
$productGenre = $_POST['productGenre'];
$productDescription = $_POST['productDescription'];
$publishedDate = $_POST['publishedDate'];
$productWeight = $_POST['productWeight'];
$productLanguage = $_POST['productLanguage'];
$productAvailable = $_POST['productAvailable'];

// File details
$productImage = $_FILES['productImage']['name'];
$productImage_tmp = $_FILES['productImage']['tmp_name'];
$productImage_size = $_FILES['productImage']['size'];

$productFileLocation = $_FILES['productFileLocation']['name'];
$productFileLocation_tmp = $_FILES['productFileLocation']['tmp_name'];

// Fetch existing product
$product = select_one_product_controller($productID);

if (!$product) {
    echo json_encode(['success' => false, 'message' => 'Product not found']);
    exit;
}


if (!empty($productImage)) {

    // Remove old image
    $old_image = $product['productImage'];
    if (file_exists("../wp-content/uploads/books/" . $old_image)) {
        unlink("../wp-content/uploads/books/" . $old_image);
    }

    // Generate new name and move file
    $image_extension = pathinfo($productImage, PATHINFO_EXTENSION);
    $productImage = uniqid() . '.' . $image_extension;

    if (!move_uploaded_file($productImage_tmp, "../wp-content/uploads/books/" . $productImage)) {
        echo json_encode(['success' => false, 'message' => 'Failed to upload new image.']);
        exit;
    }
} else {
    $productImage = $product['productImage']; // keep old image
}


if (!empty($productFileLocation)) {
    $old_file = $product['productFileLocation'];
    if (file_exists("../wp-content/uploads/files/" . $old_file)) {
        unlink("../wp-content/uploads/files/" . $old_file);
    }

    // Generate new name and move file
    $file_extension = pathinfo($productFileLocation, PATHINFO_EXTENSION);
    $productFileLocation = uniqid() . '.' . $file_extension;

    if (!move_uploaded_file($productFileLocation_tmp, "../wp-content/uploads/files/" . $productFileLocation)) {
        echo json_encode(['success' => false, 'message' => 'Failed to upload new file.']);
        exit;
    }
} else {
    $productFileLocation = $product['productFileLocation']; // keep old file
}

$update = update_product_controller(
    $productID,
    $productName,
    $productImage,
    $productPrice,
    $productFileLocation,
    $productAuthor,
    $productCategory,
    $productGenre,
    $productDescription,
    $publishedDate,
    $productWeight,
    $productLanguage,
    $productAvailable
);


if ($update) {
    echo json_encode(['success' => true, 'message' => 'Book updated successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to update book']);
}

?>