<?php 

	 $id = $_GET['id'];
	 $delete = $Users->destroy($id);

	 if($delete){
	 	$_SESSION['primary'] = "User deleted successfully !!!";
	 	header("LOCATION: ./");
	 }