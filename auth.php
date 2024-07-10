<?php
include("users.php");
require('conn.php');
$status = "";
if(isset($_POST['new'])&& $_POST['new']==1){
	$trn_date = date("Y-m-d H:i:s");
	$name = $_REQUEST['name'];
	$age = $_REQUEST['age'];
	$submittedby = $_SESSION['username'];
	$ins_query="insert into new_record(;trn_date','name','age','submittedby')";
	mysqli_query($con,$ins_query)
	or die(mysqli_error($conn));
	$status = "new record inserted successfully.
	</br></br><a href='view.php'>View Inserted Record</a>";
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta count_charset = "utf-8">
	<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
	<div class = "form">
	<p><a href="dashboard.php">Dashboard</a>
	<a href="view.php">View Records</a></p>
	<a href="logout.php">logout</a>
	<div>
	<h1>Insert New Record</h1>
	<form name = "form" method="post" action"">
	<input type="hidden" name="new" value="1" />
	<p><input type="text" name="name" placeholder="enter name" required />
	<p><input type="text" name="age" placeholder="enter age" required />
	<p><input name="submit" type="submit" value="submit" required /></p>
	</form>
	<p style="color:#FF0000;"><?PHP ECHO $status; ?></p>
</div>
</div>
</body>
</html>