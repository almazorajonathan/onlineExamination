<?php 
	class loginHandler {
		public function login($email, $password) {
			if(!empty($email) && !empty($password)) {
				$login = loginDAO::login($email, $password);
				if ($login) {
					return true;
				}
			}
		}
	}
 ?>