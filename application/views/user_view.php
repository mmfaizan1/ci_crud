<!DOCTYPE html>
<html>
<head>
	<title>Users List</title>
</head>
<body>
	<h1>Users Registered Users</h1>
	<table border="1" cellpadding="5px">
		<th>ID</th>
		<th>Full Name</th>
		<th>Email</th>
		<th colspan="2">Actions</th>
		<?php
		foreach ($users_list as $users) {
			?>
			<tr>
				<td><?php echo $users->id; ?></td>
				<td><?php echo $users->full_name; ?></td>
				<td><?php echo $users->email; ?></td>
				<td><a href="">Edit</a></td>
				<td><a href="">Delete</a></td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>