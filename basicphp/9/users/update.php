<?php 
	$id = $_GET['id'];
	$user = $Users->edit($id);
	$user = $Connect->fetch($user);
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$name = $_POST['name'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$error = '';

		if(empty($error)):
			$result = $Users->update($id,$name,$address,$contact,'1');
			$_SESSION["success"] = "User Updated Successfully !!!";
			header("LOCATION: ./");
		else:
			echo $error;
		endif;

	}
?>
	
	<h2><a href="./">Users</a></h2>
	<?php include('users/form.php'); ?>
	