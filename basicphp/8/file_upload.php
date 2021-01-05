<?php 
// echo $lower_case = strtolower("KATHMANDU");
// echo $lower_case = strtoupper("nepal");
// echo ucwords('kathmandu nepal ');
// echo ucfirst('kathmandu nepal ');


//Simple file upload with no validation
	// if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
	// 	$caption = $_POST['caption'];
	// 	$dir = "uploads/";

		// $path = $dir . basename($_FILES['image']['name']);
		// $is_img = strtolower(pathinfo($path,PATHINFO_EXTENSION));

	// 	if(move_uploaded_file($_FILES["image"]["tmp_name"], $path)):
	// 		print("Photo uploaded successfully!!!");
	// 	else:
	// 	    print"Sorry, there was an error uploading your file.";
	// 	endif;
	// }
?>

 <!-- <form method="post"  action="<?php //echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data"> --> 



<form method="post" action="upload.php" enctype="multipart/form-data">

	Caption: <input name="caption" required type="text"><br><br>
	Image: <input type="file" name="image"><br><br>
	<input type="submit" >
	
</form>

