<?php 
//Image validation
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$caption = $_POST['caption'];
		$dir = "uploads/";
		
		$path = $dir . basename($_FILES['image']['name']);
		$is_img = strtolower(pathinfo($path,PATHINFO_EXTENSION));


		//Null error
		$error = '';

		//Image(png,jpg,jpeg,gif,bmp,svg)
		
		if($is_img != 'png' && $is_image != 'jpg' && $is_img != 'gif'){
			$error .= "This is not a image !!!";
		}

		if(empty($error)){
			move_uploaded_file($_FILES["image"]["tmp_name"], $path);
			echo "Image upload successfully";
  		} 
		else {
			echo $error;
		  }
	}
?>