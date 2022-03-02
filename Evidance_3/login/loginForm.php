<?php 	$db = new mysqli('localhost','root','','mycompany'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login Form</title>
</head>
<body>


	<h2>Login | Form:</h2>


	<?php 
	
	if(isset($_POST['submit'])){

		$u = $_POST['username'];
		$p = $_POST['password'];
		$p = sha1($p);


		$sql = "SELECT * FROM uesr WHERE username = '$u' AND password = '$p'";


		$data = $db->query($sql);


		if($data->num_rows>0){

			echo "Valid User";

		}else{
			echo "Invalid User";
		}
	}





	 ?>

	<form method="post">


		<label>User Name:</label>
		<input type="text" name="username" placeholder="Enter your UserName"><br><br>

		<label>password:</label>
		<input type="password" name="password" placeholder="Enter your password"><br><br>

		<input type="submit" name="submit" value="Login">

		
	</form>

</body>
</html>