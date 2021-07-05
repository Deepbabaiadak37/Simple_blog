<?php

$id=$_GET['id'];
$username=$_GET['username'];


$connection=mysqli_connect("localhost","root","","image");
$del="DELETE FROM `images` WHERE id='$id' AND name='$username'";
$qry=mysqli_query($connection,$del);
if($qry)
{
	$url="main.php?username=".$username;
		header('Location:'.$url);
}
else
{
	error_log("error");
	$url="main.php?username=".$username;
		header('Location:'.$url);
}



?>



<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
	
</head>
<body>

</body>
</html>