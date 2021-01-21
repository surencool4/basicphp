<form method="post" class="" enctype="multipart/form-data">
			
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text"  name="name" value="<?php echo $user['name'] ?? "" ; ?>" class="form-control">
			</div>

			<div class="form-group">
				<label for="name">Avatar</label>
				<input type="file" name="avatar" class="form-control">
			</div>

			<?php 
				if(!isset($_GET['id'])){
				?>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email"  class="form-control" onkeyup="checkEmail(this.value)">
			</div>

				<p><span id="found_email"></span></p>

			<div class="form-group">
				<label for="address">Password</label>
				<input type="password" name="password" class="form-control" >
			</div>

			<div class="form-group">
				<label for="address">Confirm Password</label>
				<input type="password" name="confirm_password" class="form-control" >
			</div>
		<?php 
	} 
	?>

			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" value="<?php echo $user['address'] ?? "" ; ?>" name="address" class="form-control" >
			</div>

			<div class="form-group">
				<label for="contact">Contact</label>
				<input type="tel" value="<?php echo $user['contact'] ?? "" ; ?>" name="contact"  class="form-control">
			</div>

			<div>
				<input type="submit" class="btn btn-info float-right" value="<?php echo (isset($_GET['id']) ? "Update"  : "Create") ?> User" name="createUser">
			</div>


	</form>