<?php 
	session_start();
	require_once('connect.php');
	require_once('users/usersTrait.php');
	require_once('users/adminLogin.php');
	require_once('users/users.php');
	require_once('controller/myFunction.php');
	require_once('validate.php');
	require_once('layouts/app.php');
	require_once('partials/success.php');
	
	if(isset($_SESSION['auth_admin'])){
		$folder = (isset($_GET['folder'])) ? $_GET['folder'] : '';
		$file = (isset($_GET['file'])) ? $_GET['file'] : '';
		$folder_file = $Connect->retrieveFileFromUrl($folder,$file);
		include($folder_file);
	}
	else{
		header("LOCATION: login.php");
	}

	require_once('layouts/app-footer.php');
	