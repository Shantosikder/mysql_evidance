<?php $db = new mysqli('localhost','root','','idb_bisew'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Entry</title>
	<style>
		table{

			border-collapse: collapse;

			width: 600px;
			height: 150px;

	}
	</style>
</head>
<body>

	<h1>Show Table:</h1>

	<?php 	

	$sql = "SELECT * FROM student_show";

	$data = $db->query($sql);


	 ?>

	 <table border="1">
	 	<tr>
	 		<th>Name</th>
	 		<th>Address</th>
	 		<th>modiul_name</th>
	 		<th>Totalmark</th>
	 	</tr>
	 	<?php while ($row = $data->fetch_assoc()) {  ?>
	 		<tr>
	 			<td> <?php echo $row['name']; ?> </td>
	 			<td> <?php echo $row['address']; ?> </td>
	 			<td> <?php echo $row['modiul_name']; ?> </td>
	 			<td> <?php echo $row['totalmark']; ?> </td>
	 		</tr>
	 <?php	} ?>

	 </table>


	
</body>
</html>