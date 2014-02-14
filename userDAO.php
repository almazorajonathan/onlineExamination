<?php 
	class userDAO {
		public static function createusers($fname,$lname,$email,$password){
			try{
				global $db;
				$sql = "INSERT INTO
						users(fname,lname,email,password)
						VALUES('{$fname}','{$lname}','{$email}','{$password}')";
				$result = $db->query($sql);
				if($result) {
					return true;
				}
			} catch(Exception $e){
				error_log('Error Occured.');
			}
		}
	}
 ?>