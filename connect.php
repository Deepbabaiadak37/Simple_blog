<?php
include("conc.php");

if(mysqli_connect_error())

{
	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_errno());
}
else
{
	$sql="INSERT INTO account (username,password)
	VALUES ('$username','$password')";
	if($conn->query($sql))
	{
		header("Location:login.html");
	}
	else
	{
		echo "Error:". $sql ."". $conn->error();
	}
	$conn->close();
}

	

?>