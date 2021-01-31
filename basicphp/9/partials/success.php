<?php 

//warning
//error
//success


	if(isset($_GET['success'])): 
		
		?>
			<div class="alert alert-success">
				<?php 
					$success =  $_GET['success']; 
					$success = str_replace('-', ' ', $success);
					echo $success = ucwords($success);
				?>
			</div>
		<?php
	endif;

	