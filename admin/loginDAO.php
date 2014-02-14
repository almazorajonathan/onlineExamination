<?php 
	class loginDAO {
		public static function login($email, $password) {
			global $db;
			$sql = "SELECT id, fname, lname
					FROM admin
					WHERE email = '{$email}'
					AND password = '{$password}'";
			$result = $db->query($sql);
			if($result) {
				if($result->num_rows > 0) {
					$user = $result->fetch_assoc();
					$_SESSION = $user;
					return true;
				}
			}
		}
	}
 ?>