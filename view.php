<?php
include("auth.php");
require('db.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class = "form">
	<p><a href="index.php">home</a>
	<a href="view.php">View Records</a></p>
	<a href="logout.php">logout</a></p>
	<h2>View Records</h2>
	<table width="100%" border="1" style="border-collapse.colapse;">
    <thead>
    	<tr>
        <th><strong>S.no</strong></th>
    	<th><strong>Name</strong></th>
    	<th><strong>Age</strong></th>
    	<th><strong>Edit</strong></th>
    	<th><strong>Delete</strong></th>
    </tr>
</thead>
<tbody>

	<?php
$count=1;
$sel_query="select * from new_record ORDER BY id desc;";
$result = mysqli_fetch_assoc($sel_query);
while ($row = mysqli_fetch_assoc($result)) { ?>
	<tr><td> align="center"><?php echo $count; ?></td>
		<td> align="center"><?php echo $row ["name"]; ?></td>
		<td> align="center"><?php echo $row ["age"]; ?></td>
		<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align= "center">
	<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++;} ?>
</tbody>
</table>
</div>
</body>
</html>


