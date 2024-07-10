<?php
require_once 'conn.php';

$users = fetchUsers($conn);
?>


<html lang="en">

<head>
<title>users</title>
</head>
<body>
<h2>User List</h2>
<table border="1">
<thead>
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		</tr>
		</thead>
		</tbody>
		<?php foreach ($users as $user): ?>
		<tr>

		<td><?php echo $user['ID']; ?></td>
		<td><?php echo $user['NAME']; ?></td>
		<td><?php echo $user['EMAIL']; ?></td>

		</tr>
		<?php endforeach; ?>
		</tbody>
		</table>
		</body>
 		</html>





