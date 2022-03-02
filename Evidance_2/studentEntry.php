<?php $db = new mysqli('localhost','root','','idb_bisew'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>student Entry</title>
</head>
<body>

	<?php 	

	if(isset($_POST['submit'])){
		
		extract($_POST);

		$sql = "CALL student_entry('$name','$address','$mobile')";

		$db->query($sql);
		if($db->affected_rows>0){

			echo("<b>student_entry Successful</b>");
		}
	}

	 ?>


	<form method="post">

		<h3>student Entry Form:</h3>

		<label>Student Name:</label>
		<input type="text" name="name" placeholder="Enter your Student name"><br>
		<label>Address:</label>
		<input type="text" name="address" placeholder="Enter your address"><br>

		<label>Mobile:</label>
		<input type="text" name="mobile" placeholder="Enter your mobile"><br><br>

		<input type="submit" name="submit" value="SAVE">

	</form>
	

</body>
</html>