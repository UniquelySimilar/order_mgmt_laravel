<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Customer List</title>
	</head>
<body>
	<div class="welcome">
		<h1>Welcome to the Customer list</h1>
		<table border='1'>
<?php
	foreach ( $customers as $customer) {
		echo "<tr>";
		echo "<td>$customer[name]</td>";
		echo "<td>$customer[street]</td>";
		echo "<td>$customer[city]</td>";
		echo "<td>$customer[state]</td>";
		echo "<td>$customer[zipcode]</td>";
		echo "<td>$customer[home_phone]</td>";
		echo "<td>$customer[work_phone]</td>";
		echo "<td>$customer[email]</td>";
		echo "</tr>";
	}
?>
		</table>
	</div>
</body>
</html>
