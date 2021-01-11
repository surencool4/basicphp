<?php 

	if(isset($_SESSION['primary'])):
		
//sweet alert
		?>
			<div class="alert alert-primary">
				<?php echo $_SESSION['primary']; ?>
			</div>
		<?php
	endif;

	// destroy the session
	session_unset();