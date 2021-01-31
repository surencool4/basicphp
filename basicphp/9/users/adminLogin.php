<?php 
	trait adminLogin{

		public function login($email,$password){
			$email = $this->db->clean($email);
			$password = $this->db->clean($password);
			$password = md5($password);

			$sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
			return $this->db->runSql($sql);

		}

	}