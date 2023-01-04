<?php

	require "db_conn.php";

	$query = "INSERT into sports (players, test_runs, odi_runs, t20_runs) VALUES 
	('Rohit', 200, 150, 100),
	('Munna', 500, 100, 50),
	('Rahul', 100, 50, 300),
	('Romit', 400, 300, 100)";

	if (mysqli_query($conn, $query))
		echo "Data Inserted Successfully..";
	else 
		echo "Error in Insertion";

?>