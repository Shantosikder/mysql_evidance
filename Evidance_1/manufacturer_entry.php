<?php $db = new mysqli('localhost','root','','company'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>manufacturer Entry</title>
</head>
<body>

	<?php 	


	if(isset($_POST['submit'])){
		extract($_POST);

		$sql = "CALL manufacturer_entry('$name','$address','$contact')";

		$db->query($sql);
		if($db->affected_rows>0){
			echo("<b>manufacturer_entry Successful</b>");
		}
	}

	 ?>


	<form method="post">

		<h3>Manufacturer Entry Form:</h3>
		<label>Company Name:</label>
		<input type="text" name="name" placeholder="Enter your companyname"><br>
		<label>Address:</label>
		<input type="text" name="address" placeholder="Enter your address"><br>

		<label>Contact:</label>
		<input type="text" name="contact" placeholder="Enter your contact"><br><br>

		<input type="submit" name="submit" value="SAVE">



	</form>
	

</body>
</html>