<?php
include 'conn.php';
$sql = "SELECT * FROM `students`";
$sql_count = "SELECT COUNT(*) AS total_count FROM `students`";
$count = mysqli_query($conn, $sql_count);
$count_total = mysqli_fetch_array($count);
$result = mysqli_query($conn, $sql);


$sqlmin = "SELECT * FROM students WHERE std_age = (SELECT MAX(std_age) FROM students)";
$minCount = mysqli_query($conn, $sqlmin);
$resultMinAge = mysqli_fetch_array($minCount);
//var_dump($result);

$num_rows = mysqli_num_rows($result);

?>

<!DOCTYPE html>

<html>
<link href="https://fonts.googleapis.com/css? family=Open+Sans:300, 400, 700" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="style.css">


<h2>Created with ❤ by Saman Khan</h2>

<table class="container">
	<thead>
		<tr>
			<th>
				<h1>Name</h1>
			</th>
			<th>
				<h1>Email</h1>
			</th>
			<th>
				<h1>Age</h1>
			</th>
			<th>
				<h1>Phone</h1>
			</th>
		</tr>
	</thead>
	<tbody>

		<?php
		if ($num_rows > 0) {

			for ($i = 0; $i < $num_rows; $i++) {

				$row = mysqli_fetch_array($result);
		?>
				<tr>
					<td><?= $row['std_name'] ?></td>
					<td><?= $row[4] ?></td>
					<td><?= $row[2] ?></td>
					<td><?= $row[3] ?></td>
					<td><a href="delete.php?id=<?= $row[0] ?>">Delete</a></td>
					<td><a href="edit.php?id=<?= $row[0] ?>">Edit</a></td>
				</tr>
		<?php
			}
		}
		else{
			echo "<td colspan=5>No Record Found</td>";
		}
		?>
	</tbody>

	<thead>
		<tr>
			<th>
				<h1>Total Count</h1>
			</th>
		</tr>
	</thead>

	<tbody>
				<tr>
					<td><?= $count_total['total_count'] ?></td>
				</tr>
	</tbody>



	<thead>
		<tr>
			<th>
				<h1>Name</h1>
			</th>
			<th>
				<h1>Email</h1>
			</th>
			<th>
				<h1>Age</h1>
			</th>
			<th>
				<h1>Phone</h1>
			</th>
		</tr>
	</thead>

	<tbody>
				<tr>
					<td><?= $resultMinAge[1] ?></td>
					<td><?= $resultMinAge[4] ?></td>
					<td><?= $resultMinAge[2] ?></td>
					<td><?= $resultMinAge[3] ?></td>
				</tr>
	</tbody>
</table>

</tbody>

</html>