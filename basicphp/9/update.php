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
		
		if(isset($_POST['updateUser'])){

			$name = $_POST['name'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$contact = $_POST['contact'];

			$error = '';

			if(empty($email)){
				$error .= "Email must be filled !!! <br>";
			}


			if(empty($error)):
				// public function update($id,$name,$email,$address,$contact,$status){
				$result = $Users->update($id,$name,$email,$address,$contact,'1');
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
				<input type="text" name="name" value="<?php echo $user['name']?>" class="form-control">
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
				<label for="">Status</label>
				<input type="checkbox" <?php echo ($user['status'] == 1) ? 'checked' : '' ?>>
			</div>


			<div>
				<input type="submit" class="btn btn-primary float-right" value="Update User" name="updateUser">
			</div>


	</form>
	