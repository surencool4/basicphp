<?php 
	include('connect.php');

	$sql = "SELECT * FROM `users`";
	$users = $Connect->runSql($sql);
	$user_count = $Connect->count($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Users</h1>
	
	<?php 
		foreach ($users as $user) {
			echo $user['name']. "<br>";
			echo $user['email'].'<br>';
			echo $user['address'].'<br>';
			echo $user['contact'].'<br>';
			echo $user['status'].'<br>';
		}
	
	?>
	
</body>
</html>