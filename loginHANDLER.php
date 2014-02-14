<?php 
	class loginHANDLER {
		public function loginUser($login_user, $login_password) {
			$login = loginDAO::login($login_user, $login_password);
			if($login) {
				return true;
			}
		}
	}
 ?>