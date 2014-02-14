<?php 
	class userHANDLER {
		public function createUser($fname, $lname, $email, $password) {
			$createuser = userDAO::createusers($fname, $lname, $email, $password);
			if($createuser) {
				return true;
			}
		}
	}
 ?>