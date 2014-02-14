<?php 
	class loginDAO {
		public static function login($login_email,$login_password) {
			try{
				global $db;
				$sql = "SELECT id,fname,lname
			 			FROM users WHERE email ='{$login_email}' AND password = '{$login_password}'";
				$result = $db->query($sql);
				if ($result) {
					if ($result->num_rows >0) {
						$user = $result->fetch_assoc();
						$result->free();
						$_SESSION = $user;
						return true;
					}else{
						return false;
					}
				} else {
					return false;
				}
			}catch(Exception $e){
				error_log('Error Log.');
			}
		}
	}
 ?>