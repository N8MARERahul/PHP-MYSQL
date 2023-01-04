<?php

	$server_name = "localhost";
	$user_name = "root";
	$pass = "";
	$database_name = "assignment";

	$conn = mysqli_connect($server_name, $user_name, $pass, $database_name);

	if (!$conn)
		die ("Connection Failed..." . mysqli_connect_error());

?>