<style>
    table {
    width: 100%;
}
</style>

<?php
$servername = "localhost";
$username = "mysunshineworld_mysunshineworld";
$password = "_ykyianOEUN{";
$dbname = "mysunshineworld_form_db";
	
// connect the database with the server
$conn = new mysqli($servername,$username,$password,$dbname);
	
	// if error occurs
	if ($conn -> connect_errno)
	{
	echo "Failed to connect to MySQL: " . $conn -> connect_error;
	exit();
	}

	$sql = "select * from contactform_database";
	$result = ($conn->query($sql));
	//declare array to store the data of database
	$row = [];

	if ($result->num_rows > 0)
	{
		// fetch all data from db into array
		$row = $result->fetch_all(MYSQLI_ASSOC);
	}
?>

<!DOCTYPE html>
<html>
<style>
	td,th {
		border: 1px solid black;
		padding: 10px;
		margin: 5px;
		text-align: center;
	}
</style>

<body>
	<table>
		<thead>
			<tr>
			<th>Id: </th>
			<th>Gurdian Name: </th>
			<th>Gurdian Email: </th>
			<th>Child Name: </th>
			<th>Child Age: </th>
			<th>Message: </th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($row))
			foreach($row as $rows)
			{
			?>
			<tr>

				<td><?php echo $rows['id']; ?></td>
				<td><?php echo $rows['gurdianName']; ?></td>
				<td><?php echo $rows['gurdianEmail']; ?></td>
				<td><?php echo $rows['childName']; ?></td>
				<td><?php echo $rows['childAge']; ?></td>
				<td><?php echo $rows['message']; ?></td>

			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>

<?php
	mysqli_close($conn);
?>
