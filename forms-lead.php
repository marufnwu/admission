<?php

require_once('protect-this.php');

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
<html lang="en">

<head>



    <meta charset="utf-8">
    <title>Leads from Sunshine</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	 <link href="css/sunshine-style.css" rel="stylesheet">

	 
</head>

<style>
    table {
        width: 100%;
    }
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
			<th>Mobile Number: </th>
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
				<td><?php echo $rows['mobileNumber']; ?></td>
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
