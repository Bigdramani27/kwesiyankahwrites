<?php
session_start();
require("../controllers/cart_controller.php");
require("../controllers/customer_controller.php");

function generateUserId()
{
    $timestamp = round(microtime(true) * 1000);
    $random = rand(1000, 9999);
    return $timestamp . $random;
}


$userID = $_SESSION['customer_id'];
$shippingID = (int) generateUserId();

// Validate and sanitize inputs
$shippingID = (int) generateUserId();
$userID = $_SESSION['customer_id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$country = $_POST['country'];
$city = $_POST['city'];
$street = $_POST['street'];
$apartment = $_POST['apartment'];
$phones = $_POST['phone'];
$phone = $phones['full'];
$zip = $_POST['zip'];



// Check if phone exists for another user
$phone_exists = select_one_customer_phone_which_is_not_user_controller($phone, $userID);
if ($phone_exists != NULL) {
    echo json_encode(['success' => false, 'message' => 'The phone number you entered already exists']);
    exit;
}

// Check if shipping already exists
$check = select_one_shipping_userID_controller($userID);
if ($check) {
    $shippingID = $check['shippingID'];
    $updated = updating_shipping_for_user_controller(
        $shippingID, $userID, $firstName, $lastName,
        $country, $street, $apartment, $city, $phone, $zip
    );
    if ($updated) {
        echo json_encode(['success' => true, 'message' => 'Shipping updated successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update shipping']);
    }
} else {
    $added = add_to_shipping_controller(
        $shippingID, $userID, $firstName, $lastName,
        $country, $street, $apartment, $city, $phone, $zip
    );
    if ($added) {
        echo json_encode(['success' => true, 'message' => 'Shipping added successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to add shipping']);
    }
}
?>
