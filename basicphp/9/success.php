<?php 

//warning
//error
//success


	if(isset($_SESSION['success'])): 
		
//sweet alert
		?>
			<div class="alert alert-success">
				<?php echo $_SESSION['success']; ?>
			</div>
		<?php
	endif;

	