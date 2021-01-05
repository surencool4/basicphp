<?php 
	include('connect.php');

	$sql = "SELECT * FROM `users`";
	$users = $Connect->runSql($sql);


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
	<table>
		<thead>
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Address</td>
				<td>Contact</td>
			</tr>
		</thead>
		<tbody>
			
				<?php 
					foreach ($users as $user) {
						echo "<tr>";
						echo "<td>". $user['name']. "</td>";
						echo "<td>" .  $user['email'] . "</td>";
						echo "<td>". $user['address']. "</td>";
						echo "<td>". $user['contact']. "</td>";
						echo "</tr>";
					}
				
				?>
			
		</tbody>
	</table>
	
	
</body>
</html>