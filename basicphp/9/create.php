<?php 
		if(isset($_POST['createUser'])){

			$form_submit_name = $_POST['name'];
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
				$result = $Users->add($form_submit_name,$email,$address,$contact,'1');
				$_SESSION["success"] = "User Created Successfully !!!";
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
				<input type="text" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email"  class="form-control">
			</div>

			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" class="form-control">
			</div>

			<div class="form-group">
				<label for="contact">Contact</label>
				<input type="text" name="contact"  class="form-control">
			</div>


			<div>
				<input type="submit" class="btn btn-info float-right" value="Create User" name="createUser">
			</div>


	</form>
	