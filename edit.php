<?php
include("auth.php");
require("db.php")
$id = $_REQUEST['id'];
$query = "SELECT * FROM new_record WHERE id=.$id."";
$result = mysqli_query ($con,$query) or die( mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>

