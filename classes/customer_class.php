<?php
include_once (dirname(__FILE__)) . '../../settings/connection.php';


// inherit the methods from the connection.php file
class Customer extends Connection
{
	//creating a customer
	function add_customer_info($userID, $firstName, $lastName, $email, $password)
	{
		return $this->query("insert into users(userID, firstName, lastName, email, password, otp, userRole) values('$userID','$firstName', '$lastName', '$email', '$password',  0, 'user')");
	}

	//updating a customer
	function update_customer_info($first_name, $last_name, $phone, $country, $address, $user_id){
		return $this->query("update users set first_name = '$first_name', last_name = '$last_name', phone = '$phone', country = '$country', address = '$address' where user_id = '$user_id'");
	}

	//inserting into shipping info
		function add_customer_shipping($userID, $firstName, $lastName, $email, $phone, $password)
	{
		return $this->query("insert into shipping(userID, firstName, lastName, email, phone) values('$userID','$firstName', '$lastName', '$email', '$phone', '$password',  0, 'user')");
	}


	//selecting one person email
	function select_one_customer_email($email)
	{
		return $this->fetchOne("select * from users where email='$email'");
	}

	//selecting one person phone number
	function select_one_customer_phone($phone){
		return $this->fetchOne("select * from users where phone='$phone'");
	}

	//selecting one person phone number which is not the user
	function select_one_customer_phone_which_is_not_user($phone, $userID){
		return $this->fetchOne("select * from users where phone ='$phone' and userID != '$userID'");
	}

	//selecting all customers
	function selecting_all_users(){
		return $this->fetch("select * from users where roles = 'user'");
	}

	//count all customers
	function count_all_users(){
		return $this->count("select * from users where roles = 'user'");
	}

	//update the otp code for user
	function update_user_otp($otp, $email){
		return $this->query("update users set otp='$otp' where email='$email'");
	}
      // selecting user otp 
	function check_customer_otp ($otp, $email){
		return $this->fetchOne("select * from users where otp='$otp' and email='$email'");
	}

	//update user password 
	function update_user_password($password, $email){
		return $this->query("update users set password = '$password' where email='$email'");
	}


}

?>