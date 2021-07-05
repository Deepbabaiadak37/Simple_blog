<?php
include("conc.php");



	$result=mysqli_query($conn,"SELECT * FROM account where username='".$username."' and password='".$password."' limit 1") or die("Failed to database".mysql_error());

	$row=mysqli_fetch_array($result);


	if($row['username']==$username && $row['password']==$password)
	{
		$url="main.php?username=".$row['username'];
		header('Location:'.$url);
	}
	else
	{
		echo"ERROR";
		
	}


?>
