<?php
require("../controllers/customer_controller.php");
session_start();
$email = $_POST['email'];
$password = $_POST['lpassword'];

$customer_email = select_one_customer_email_controller($email);
if ($customer_email == NULL) {
    $response = array('success' => false, 'message' => 'Email or Password is incorrect!');
    echo json_encode($response);
    exit;
} else {
    if (password_verify($password, $customer_email['password'])) {
        $_SESSION['email'] = $customer_email['email'];
        $_SESSION['first_name'] = $customer_email['firstName'];
        $_SESSION['customer_id'] = $customer_email['userID'];
        $_SESSION['lastName'] = $customer_email['lastName'];
        $_SESSION['userRole'] = $customer_email['userRole'];
        $_SESSION['pass'] = $password;

        //check if the user is not admin; 
        if ($_SESSION['userRole'] == "user") {
            $response = array('success' => true, 'message' => '../index.php');
            echo json_encode($response);
            exit();
        }
        if ($_SESSION['userRole'] == "admin") {
            $response = array('success' => true, 'message' => '../admin/index.php');
            echo json_encode($response);
            exit();
        }
    } else {
        $response = array('success' => false, 'message' => 'Email or Password is incorrect!');
        echo json_encode($response);
        exit;
    }
}

?>