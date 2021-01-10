<?php 
		$user = $Users->edit($_GET['id']);
		$user = $Connect->fetch($user);
		
		if(isset($_POST['updateUser'])){

			$name = $_POST['name'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$contact = $_POST['contact'];

			$error = '';

			if(empty($email)){
				$error .= "Email must be filled !!! <br>";
			}

			if(empty($address)){
				$error .= "Address must be filled !!! <br>";
			}

			if(empty($error)):
				$result = $Users->update($_GET['id'],$name,$email,$address,$contact,'1');
				$_SESSION["success"] = "User Updated Successfully !!!";
				header("LOCATION: ./");
			else:
				echo $error;
			endif;
	
		}
	 ?>
	
	<h2><a href="./">Users</a></h2>
	<form method="post" class="">
			
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" value="<?=$user['name']?>" class="form-control">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email" value="<?=$user['email']?>"  class="form-control">
			</div>

			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" value="<?=$user['address']?>" class="form-control">
			</div>

			<div class="form-group">
				<label for="contact">Contact</label>
				<input type="text" name="contact" value="<?=$user['contact']?>"  class="form-control">
			</div>


			<div>
				<input type="submit" class="btn btn-primary float-right" value="Update User" name="updateUser">
			</div>


	</form>
	