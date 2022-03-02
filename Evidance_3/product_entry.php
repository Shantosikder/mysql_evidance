<?php $db = new mysqli('localhost','root','','mycompany'); ?>

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

		$sql = "CALL product_entry('$name','$product_details','$product_price')";

		$db->query($sql);
		
		if($db->affected_rows>0){

			echo("<b>student_entry Successful</b>");
		}else{
			echo "try Agin";
		}
	}

	 ?>


	<form method="post">

		<h3>Product Entry Form:</h3>

		<label>product Name:</label>
		<input type="text" name="name" placeholder="Enter your Student name"><br>
		<label>product_details:</label>
		<input type="text" name="product_details" placeholder="Enter your product_details"><br>

		<label>product_price:</label>
		<input type="text" name="product_price" placeholder="Enter your product_price"><br><br>

		<input type="submit" name="submit" value="SAVE">

	</form>
	

</body>
</html>