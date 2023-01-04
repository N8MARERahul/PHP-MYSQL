<?php

	require "db_conn.php";

	$field = $_POST['field'];

	$query = "SELECT * from sports ORDER BY $field DESC LIMIT 0,1";
	$result = mysqli_query($conn, $query);

	if ($result) {
		if (mysqli_num_rows($result) > 0) {
?>
			<table border = '2'>
				<tr>
					<th>Players</th>
					<th>Test Runs</th>
					<th>ODI Runs</th>
					<th>T20 Runs</th>
					<th>Total Runs</th>
				</tr>
<?php
			while ($row = mysqli_fetch_assoc($result)) {
				echo "
				<tr>
					<td>" . $row['players'] . "</td>
					<td>" . $row['test_runs'] . "</td>
					<td>" . $row['odi_runs'] . "</td>
					<td>" . $row['t20_runs'] . "</td>
					<td>" . ($row['test_runs'] + $row['odi_runs'] + $row['t20_runs']) . "</td>
				</tr>";
			}
		} else {
			echo "Table is Empty";
		}
	} else {
		echo "Error";
	}

?>
</table>