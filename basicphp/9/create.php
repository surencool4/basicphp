<?php 
	if(isset($_POST['createUser'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$avatar = $_POST['avatar'];

		$error = NULL;

		$error.= $Validate->isEmpty($name, "Name");
		$error.= $Validate->isEmpty($email, "Email");
		$error.= $Validate->email($email);
		$error.= $Validate->isEmpty($address, "Address");
		$error.= $Validate->isEmpty($contact, "Contact");
		// $error.= $Validate->int($contact, "Contact");
		// $error .= $Validate->charRange($contact,9,10,"Contact");
		$error.= $Validate->confirm($password, $confirm_password, "Password");
		$error.= $Validate->imageUploadValidate($avatar);

		// $error.= $Validate->email($email, "Email");

		//Error validations
		$checkEmail = $Users->find_email_from_db($email);
		$count = $Connect->countRows($checkEmail);
		if($count == 1){
			$error.= "Email Duplicate entry";
		}


		if(empty($error)):
			$result = $Users->add($name,$email,$avatar,$password,$address,$contact,'1');
			
			header("LOCATION: index.php?success=user-created-successfully");
		else:
			echo "<div class='alert alert-danger'>$error</div>";
		endif;
	}
?>
	
	<h2><a href="./">Users</a></h2>
	<form method="post" class="" enctype="multipart/form-data">
			
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label for="name">Avatar</label>
				<input type="file" name="avatar" class="form-control">
			</div>

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

			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" class="form-control" >
			</div>

			<div class="form-group">
				<label for="contact">Contact</label>
				<input type="tel" name="contact"  class="form-control">
			</div>

			<div>
				<input type="submit" class="btn btn-info float-right" value="Create User" name="createUser">
			</div>


	</form>

<script>
	function checkEmail(str) {
	  if (str.length == 0) {
	    document.getElementById("found_email").innerHTML = "";
	    return;
	  } 
	  else {
	    var xmlhttp = new XMLHttpRequest();
	    xmlhttp.onreadystatechange = function() {
	      if (this.readyState == 4 && this.status == 200) {
	        document.getElementById("found_email").innerHTML = this.responseText;
	      }
	    };
	    xmlhttp.open("GET", "ajaxemailchecker.php?q=" + str, true);
	    xmlhttp.send();
	  }
	}

</script>
	