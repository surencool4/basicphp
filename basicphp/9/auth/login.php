<?php 
	if(isset($_POST['login_now'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$error = NULL;
		$error .= $Validate->email($email);
		$error .= $Validate->isEmpty($password, "Password");

		$admin_login = $Users->login($email,$password);
		$admin_login_access = $Connect->countRows($admin_login);

		if(empty($error) && $admin_login_access){
			$_SESSION['auth_admin'] = $email;
			header("LOCATION: ./");
		}
		else{

			?>
				<div class="row justify-content-md-center">
					<div class="alert alert-danger alert-dismissible fade show col-6" role="alert">
						<p>Email & password not matched.</p>
						<p><?=$error?></p>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						 </button>
					</div>
				</div>
			<?php

		}

	}
?>


<div class="d-flex justify-content-center h-100 mt-4 pt-4">
	<div class="card ">
		<div class="card-header">
			<h3 class="text-center">Login</h3>
		</div>
		<div class="card-body">
			<form method="post">
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
					<input type="text" class="form-control" placeholder="username" name="email">
					
				</div>
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>
					<input type="password" class="form-control" placeholder="password" name="password">
				</div>
				<div class="row align-items-center remember">
					<input type="checkbox">Remember Me
				</div>
				<div class="form-group">
					<input type="submit" value="Login" class="btn float-right login_btn" name="login_now">
				</div>
			</form>
		</div>
		<div class="card-footer">
			<div class="d-flex justify-content-center">
				<a href="#" class="text-warning">Forgot your password?</a>
			</div>
		</div>
	</div>
</div>