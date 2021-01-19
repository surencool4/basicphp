<?php 
	include('connect.php');
	require_once('usersTrait.php');
	include('users.php');

	$q = $_GET['q'];

	// $sql = "SELECT * FROM `users` WHERE `email` = '$q'";
	// $check = $Connect->runSql($sql);
	$query = $Users->find_email_from_db($q);
	$count = $Connect->countRows($query);

	if($count == 1){
	 	echo "<span style='color:red;'>Email already exists, Try another email</span>
	 	";
	 }
	 else {
	 	echo $q;
	}
	