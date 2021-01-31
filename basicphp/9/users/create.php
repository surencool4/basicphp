<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		// $avatar = $_POST['avatar'];

		$error = NULL;

		$error.= $Validate->isEmpty($name, "Name");
		$error.= $Validate->isEmpty($email, "Email");
		$error.= $Validate->email($email);
		$error.= $Validate->isEmpty($address, "Address");
		$error.= $Validate->isEmpty($contact, "Contact");
		// $error.= $Validate->int($contact, "Contact");
		// $error .= $Validate->charRange($contact,9,10,"Contact");
		$error.= $Validate->confirm($password, $confirm_password, "Password");

		//Email Duplicate entry validate
		$checkEmail = $Users->find_email_from_db($email);
		$count = $Connect->countRows($checkEmail);
		if($count == 1){
			$error.= "<b>Email</b> already exists. <br>";
		}

		//Avatar
		$error_arr = $Validate->imageUploadValidate('avatar','users','2000000');

		$avatar_datas = array_values($error_arr);
		$error.= $avatar_datas[0];

		if(empty($error)):
			$result = $Users->add($name,$email,$avatar_datas[1],$password,$address,$contact,'1');
			
			header("LOCATION: index.php?success=user-created-successfully");
		else:
			echo "<div class='alert alert-danger'> <h2>Error !!!</h2> $error</div>";
		endif;
	}
?>
	
	<h2><a href="./">Users</a></h2>
	<?php include('users/form.php'); ?>

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
	