<?php 
// echo $_GET['file'];
// echo "<hr>";
// echo $_GET['id'];
// echo "<hr>";
// echo $_GET['cat'];
		if(isset($_POST['createUser'])){

			$form_submit_name = $_POST['name'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$contact = $_POST['contact'];

			$error = '';

			if(empty($email)){
				$error .= "Email must be filled !!! <br>";
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
				<input type="text" name="email"  class="form-control" onkeyup="checkEmail(this.value)">
			</div>

				<p><span id="found_email"></span></p>

			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" name="address" class="form-control" >
			</div>

			<div class="form-group">
				<label for="contact">Contact</label>
				<input type="text" name="contact"  class="form-control">
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


		// function cname(str){
		// 	alert(str);
		// }
</script>
	