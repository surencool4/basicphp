<table class="table table-striped">
	<h2>User(s) <span class="small float-right"><a class="btn btn-primary" href="?file=create">Create User</a></span></h2>
	<thead>
		<tr>
			<td>Name</td>
			<td>Email</td>
			<td>Address</td>
			<td>Contact</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
		
	<?php 
		foreach ($Users->index() as $user) {
			echo "<tr>";
			echo "<td>". $user['name']. "</td>";
			echo "<td>" .  $user['email'] . "</td>";
			echo "<td>". $user['address']. "</td>";
			echo "<td>". $user['contact']. "</td>";
			?>
			<td>
				<a class="btn btn-info btn-small" href="?file=update&id=<?=$user['id']?>">Edit</a>
				<a class="btn btn-danger btn-small" href="?file=delete&id=<?=$user['id']?>">Delete</a>
			</td>
			<?php
			echo "</tr>";
		}

	?>
			
		</tbody>
	</table>