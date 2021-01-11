<?php 
	session_start();
	require_once('connect.php');
	require_once('users.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container p-4">

		<?php 
			include('success.php');
			require('primary.php');
			$filename = (isset($_GET['file'])) ? $_GET['file'] : '';
			$file = $Connect->retrieveFileFromUrl($filename);
			include($file);
		?>
	</div>
</body>
</html>