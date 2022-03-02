<?php $db = new mysqli('localhost','root','','idb_bisew'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trigger Form </title>
</head>
<body>

	<?php 

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$id = $_POST['stu_id'];


		$sql = "DELETE FROM Student WHERE id = '$id'";

		$db->query($sql);


		if($db->affected_rows>0){
			echo("Delete Successful");
		}

	}

	 ?>

	<?php $data = $db->query("SELECT * FROM Student"); ?>

<form method="post">

<h1>Select student Name:</h1><br>

<select name="stu_id">

	<option value="Select">Select One</option>

	<?php while ($row = $data->fetch_object()) { ?>

	<option value="<?php echo $row->id; ?>"> <?php echo $row->name; ?> </option>

	<?php }	 ?>

</select><br><br>

<input type="submit" name="submit" value="Delete">

	</form>


</body>
</html>