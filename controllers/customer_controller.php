
<?php
include_once (dirname(__FILE__)) . '/../classes/customer_class.php';

//creating a customer controller
function add_customer_info_controller($userID, $firstName, $lastName, $email, $password)
{
    $customer_instance = new Customer();
    return $customer_instance->add_customer_info($userID, $firstName, $lastName, $email, $password);
}
//updating a customer controller
function update_customer_info_controller($first_name, $last_name, $phone, $country, $address, $user_id)
{
    $customer_instance = new Customer();
    return $customer_instance->update_customer_info($first_name, $last_name, $phone, $country, $address, $user_id);
}

//selecting one customer email
function select_one_customer_email_controller($email)
{
    $customer_instance = new Customer();
    return $customer_instance->select_one_customer_email($email);
}

//selecting one customer phone
function select_one_customer_phone_controller($phone)
{
    $customer_instance = new Customer();
    return $customer_instance->select_one_customer_phone($phone);
}

//selecting one customer phone which is not user
function select_one_customer_phone_which_is_not_user_controller($phone, $userID)
{
    $customer_instance = new Customer();
    return $customer_instance->select_one_customer_phone_which_is_not_user($phone, $userID);
}


//selecting all customers
function selecting_all_users_controller()
{
    $customer_instance = new Customer();
    return $customer_instance->selecting_all_users();
}

//count all customers
function count_all_users_controller()
{
    $customer_instance = new Customer();
    return $customer_instance->count_all_users();
}

//update the otp code for user 
function update_user_otp_controller($otp, $email)
{
    $customer_instance = new Customer();
    return $customer_instance->update_user_otp($otp, $email);
}

// selecting user otp 
function check_customer_otp_controller($otp, $email)
{
    $customer_instance = new Customer();
    return $customer_instance->check_customer_otp($otp, $email);
}

//update user password 
function update_user_password_controller($password, $email)
{
    $customer_instance = new Customer();
    return $customer_instance->update_user_password($password, $email);
}


?>