<?php 
	include('connect.php');

	$q = $_GET['q'];
	$sql = "SELECT * FROM `users` WHERE `email` = '$q'";
	$check = $Connect->runSql($sql);
	$count = mysqli_num_rows($check);

	if($count == 1){
	 	echo "<span style='color:red;'>Email already exists, Try another email</span>
	 	";
	 }
	 else {
	 	echo $q;
	}
	