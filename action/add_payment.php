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
$shippingID = (int) generateUserId();
$userID = $_SESSION['customer_id'];
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$country = $_GET['country'];
$city = $_GET['city'];
$street = $_GET['street'];
$apartment = $_GET['apartment'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$amount = $_GET['amount'];
$check = select_one_shipping_userID_controller($userID);
// if ($check) {
//     $updated = updating_shipping_for_user_controller($shippingID, $userID, $firstName, $lastName, $country, $street, $apartment, $city, $phone);
//     if ($updated) {
//         $response = ['success' => true, 'message' => 'Shipping updated successfully'];
//     } else {
//         $response = ['success' => false, 'message' => 'Failed to update shipping'];
//     }
// } else {
//     $added = add_to_shipping_controller($shippingID, $userID, $firstName, $lastName, $country, $street, $apartment, $city, $phone);
//     if ($added) {
//         $response = ['success' => true, 'message' => 'Shipping added successfully'];
//     } else {
//         $response = ['success' => false, 'message' => 'Failed to add shipping'];
//     }
// }


