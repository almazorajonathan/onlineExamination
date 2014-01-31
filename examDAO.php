<?php 
	class examDAO{
		public static function createusers($fname,$lname,$email,$password){
			global $db;
			$sql = "INSERT INTO
					users(fname,lname,email,password)
					VALUES('{$fname}','{$lname}','{$email}','{$password}')";
			$result = $db->query($sql);
		}

		public static function login($login_email,$login_password) {
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
		}

		public static function getQuestion($id) {
			global $db;
			$sql = "SELECT question FROM question WHERE id = '{$id}'";
			$result = $db->query($sql);
			if ($result) {
				$row = $result->fetch_assoc();
				return $row['question'];
			} else {
				return false;
			}
		}

		public static function getChoices($id){
			global $db;
			$sql = "SELECT choice1,choice2,choice3,choide4
					FROM question
					WHERE id = '{$id}'";
			$result = $db->query($sql);
			return $result->fetch_assoc();
		}

		public static function getAnswer($id, $answer){
			global $db;
			$sql = "SELECT answer
					FROM question
					WHERE id = '{$id}'
					AND answer = '{$answer}'";
			$result = $db->query($sql);
			if($result->num_rows > 0){
				return 1;
			} else {
				return 0;
			}
		}
	}
?>