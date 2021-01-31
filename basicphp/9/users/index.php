<table class="table table-striped">
	<h2>User(s) <span class="small float-right"><a class="btn btn-primary" href="?folder=users&file=create">Create User</a></span></h2>
	<thead>
		<tr>
			<td>SN</td>
			<td>Avatar</td>
			<td>Name</td>
			<td>Email</td>
			<td>Address</td>
			<td>Contact</td>
			<td colspan="2">Actions</td>
		</tr>
	</thead>
	<tbody>
		
	<?php 
	$i = 0;
		foreach ($Users->index() as $user) {
			$avatar = (empty($user['avatar'])) ? "users/user.png" : $user['avatar'];
			echo "<tr>";
			echo "<td>". ++$i. "</td>";
			echo "<td> <img src='$avatar' class='img-fluid img-thumbnail' style='height:40px;'/> </td>";
			echo "<td>". $user['name']. "</td>";
			echo "<td>" .  $user['email'] . "</td>";
			echo "<td>". $user['address']. "</td>";
			echo "<td>". $user['contact']. "</td>";
			?>
			<td style="width:20%;">
				<a class="btn btn-info btn-small" href="?folder=users&file=update&id=<?=$user['id']?>">Edit</a>
				<a class="btn btn-danger btn-small" href="?folder=users&file=delete&id=<?=$user['id']?>">Delete</a>
			</td>
			<?php
			echo "</tr>";
		}

	?>
			
		</tbody>
	</table>