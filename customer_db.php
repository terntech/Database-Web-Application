<?php
require('customerdatabase.php');

	function add_customer($ambassadorid, $f_name, $l_name, $address1, $address2, $zipcode, $email, $phonenumber, $age, $residents) {
        
         global $db;
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query = "INSERT INTO [dbo].[Customer]
                        ([AmbassadorID],[f_name],[l_name],[Address1],[Address2],[Zipcode],[Email],[Phone],[Age],[InHouseResidents]
                        )
                        VALUES
                        ('$ambassadorid','$f_name', '$l_name', '$address1', '$address2', '$zipcode', '$email', '$phonenumber', '$age', '$residents')";
            if ($db->exec($query))
            {
                    include ('add_customer_success.php');
            }
            else {              
               $error = $db->errorinfo();
               include ('error.php');
            }   
        }
	function get_customers() {
		global $db;
		$query = "SELECT * FROM dbo.Customer";
		$customers = $db->query($query);
		return $customers;
	}
/*	
	
	function check_staffer_username($username) {
		global $db;
		$query = "SELECT username FROM employee_table WHERE username = '$username' AND status = 'Staffer'";
		$staffer_username = $db->query($query);
		return $staffer_username;
	}
	
	function check_staffer_password($password) {
		global $db;
		$query = "SELECT password FROM employee_table WHERE password = '$password' AND status = 'Staffer'";
		$staffer_password = $db->query($query);
		return $staffer_password;
	}
	
	
	function get_events() {
		global $db;
		$query = 'SELECT * FROM event_table ORDER BY date';
		$events = $db->query($query);
		return $events;
	}
	
	function get_employees() {
		global $db;
		$query = 'SELECT * FROM employee_table ORDER BY id';
		$employees = $db->query($query);
		return $employees;
	}
	
	function add_event($e_name, $date, $e_time, $slots, $slots_open) {
		global $db;
		$query = "INSERT INTO event_table
					 (e_name, date, e_time, slots, slots_open)
				  VALUES
					 ('$e_name', '$date', '$e_time', '$slots', '$slots_open')";
		$db->exec($query);
	}
	
	function add_employee($f_name, $l_name, $username, $password, $status) {
		global $db;
		$query = "INSERT INTO employee_table
					 (f_name, l_name, username, password, status)
				  VALUES
					 ('$f_name', '$l_name', '$username', '$password', '$status')";
		$db->exec($query);
	}
	
	function cancel_event($e_name) {
		global $db;
		$query = "DELETE FROM event_table WHERE e_name = '$e_name'";
		$db->exec($query);
	}
	
	function remove_employee($username) {
		global $db;
		$query = "DELETE FROM employee_table WHERE username = '$username'";
		$db->exec($query);
	}
	
	function sign_up($e_name) {
		global $db;
		$query = "UPDATE event_table SET slots_open = slots_open - 1 WHERE e_name = '$e_name'";
		$db->exec($query);
	}
        */
?>