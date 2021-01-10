<?php
	include('classone.php');
	include('classtwo.php');

	 // echo $Classone->something();
	 // echo $Classone->addition(7,5);
	// echo $Classtwo->addition_logic(7,5);
	// echo $Classtwo->text("something goes here");
	echo $Classtwo->subtract_logic(8,3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<ul>
		<li>
			<a href="./">Home</a>
		</li>
		<li>
			<a href="?file=about">About</a>
		</li>
		<li>
			<a href="?file=contact">Contact</a>
		</li>
	</ul>

	<?php 
		$fileName = isset($_GET['file']) ? $_GET['file'] : '';
		try {
			
			if(empty($fileName))
			{
				include("home.php");
			}
			else{
				include("$fileName.php");
			}
		} 
		catch (Exception $e) {
			include("home.php");
		}
		

	?>
	
</body>
</html>