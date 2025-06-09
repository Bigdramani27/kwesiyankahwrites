<?php 
require("../controllers/customer_controller.php");
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$en_password = $_POST['password'];
$c_password = $_POST['cpassword'];


if ($en_password != $c_password) {
    $response = array('success' => false, 'message' => 'Password & Confirm password do not match');
    echo json_encode($response);
    exit;
}
$customer = select_one_customer_email_controller($email);
  if ($customer != NULL) {
    $response = array('success' => false, 'message' => 'The Email you entered already exist!');
    echo json_encode($response);
    exit;
  }

 
$password = password_hash($en_password, PASSWORD_BCRYPT);


function generateUserId() {
    $timestamp = round(microtime(true) * 1000);
    $random = rand(1000, 9999);                
    return $timestamp . $random;               
}
$userID = (int) generateUserId();


$pass = add_customer_info_controller($userID, $firstName, $lastName, $email, $password);
if($pass){
  $response = array('success' => true, 'message' => 'Account Successfully Created');
}
echo json_encode($response);

?>