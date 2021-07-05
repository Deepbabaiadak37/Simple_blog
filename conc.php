<?php

$username= filter_input(INPUT_POST, 'username');
$password= filter_input(INPUT_POST, 'password');

		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="youtube";

		//Create Connection
$conn= new mysqli($host, $dbusername ,$dbpassword ,$dbname);

?>