<?php $db = new mysqli('localhost','root','','company'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>manufacturer Entry</title>
	<style>
		table{

			border-collapse: collapse;

			width: 400px;
			height: 150px;

	}
	</style>
</head>
<body>

	<?php 	

	$sql = "SELECT * FROM products_view";

	$data = $db->query($sql);


	 ?>

	 <table border="1">
	 	<tr>
	 		<th>ID</th>
	 		<th>Product Nane</th>
	 		<th>Price</th>
	 	</tr>
	 	<?php while ($row = $data->fetch_assoc()) {  ?>
	 		<tr>
	 			<td> <?php echo $row['id']; ?> </td>
	 			<td> <?php echo $row['name']; ?> </td>
	 			<td> <?php echo $row['price']; ?> </td>
	 		</tr>
	 <?php	} ?>

	 </table>


	
</body>
</html>