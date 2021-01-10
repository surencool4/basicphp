<?php 

	if(isset($_SESSION['success'])):
		
//sweet alert
		?>
			<div class="alert alert-success">
				<?php echo $_SESSION['success']; ?>
			</div>
		<?php
	endif;

	// destroy the session
	session_unset();