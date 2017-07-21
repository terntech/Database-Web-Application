<?php
	require('customerdatabase.php');
	require('customer_db.php');
	
    if (isset($_POST['action'])) {
		$action = $_POST['action'];
	} else if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}
	if($action == 'show_event_form') {
		include('index.php');
	} else if ($action == 'add_customer') {
		IF (ISSET($_POST['ambassadorid'])) {$ambassadorid=$_POST['ambassadorid'];}ELSE {$ambassadorid='';}
                $f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$address1 = $_POST['address1'];
                IF (ISSET($_POST['address2'])) {$address2=$_POST['address2'];}ELSE {$address2='' ;}
                $zipcode = $_POST['zipcode'];
                IF (ISSET($_POST['phone'])) {$phonenumber=$_POST['phone'];}ELSE {$phonenumber='';}
                $email = $_POST['email'];
                IF (ISSET($_POST['age'])) {$age=$_POST['age'];}ELSE {$age='';} 
                IF (ISSET($_POST['residents'])) {$residents=$_POST['residents'];}ELSE {$residents='';}
		
		if (empty($f_name) || empty($l_name) || empty($address1) || empty($zipcode) || empty($email)){
			$error = "Invalid data. Check all fields and try again.";
			include('error.php');
		} else {
			add_customer($ambassadorid, $f_name, $l_name, $address1, $address2, $zipcode, $email, $phonenumber, $age, $residents);

			/* header("Location: manager_control.php");*/
		}
            }
        /*	} else if($action == 'show_employee_form') {
		include('add_employee.php');
	} else if ($action == 'add_employee') {
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$status = $_POST['status'];
		
		if (empty($f_name) || empty($l_name) || empty($username) || empty($password) || empty($status)) {
			$error = "Invalid data. Check all fields and try again.";
			include('errors/error.php');
		} else {
			add_employee($f_name, $l_name, $username, $password, $status);

			header("Location: manager_control.php");
		}
	} else if ($action == 'cancel_event') {
		$e_name = $_POST['event_name'];
		cancel_event($e_name);
		
		header("Location: manager_control.php");
	} else if ($action == 'remove_employee') {
		$username = $_POST['employee_name'];
		remove_employee($username);
		
		header("Location: manager_control.php");
	} else if ($action == 'show_signup_form') {
		include('sign_up_form.php');
	} else if ($action == 'sign_up') {
		$e_name = $_POST['e_name'];
		$y_name = $_POST['y_name'];
		
		if (empty($y_name)) {
			$error = "Invalid data. Check all fields and try again.";
			include('errors/error.php');
		} else {
			sign_up($e_name);

			header("Location: confirmation.php");
		}
	}
*/		
		
?>