<?php

 trait usersTrait
 {
 	public function find_email_from_db($email){
 		$sql = "SELECT * FROM `users` WHERE `email` = '$email'";
 		return $this->db->runSql($sql);
 	}
 	

 	
 }