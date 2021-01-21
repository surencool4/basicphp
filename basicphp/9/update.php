<?php 
//get database datas
//connect database
//Query
//fetch (Array datas will get by foreach loop)


		$id = $_GET['id'];
		$user = $Users->edit($id);

		// $user = mysqli_fetch_array($user, MYSQLI_ASSOC);
		$user = $Connect->fetch($user);

		// echo $user['name'];
		// echo $user['email'];
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$name = $_POST['name'];
			$address = $_POST['address'];
			$contact = $_POST['contact'];

			$error = '';


			if(empty($error)):
				// public function update($id,$name,$email,$address,$contact,$status){

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
	