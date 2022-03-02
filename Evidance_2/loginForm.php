<?php $db = new mysqli('localhost','root','','idb_bisew'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
</head>
<body>

<?php 	


	if(isset($_POST['submit'])){

		extract($_POST);

		$data = $db->query("SELECT * FROM uesr WHERE email = '$email' AND password = '$password'");


		if($data->num_rows>0){

			echo "<b>Valid User</b>";
		}else{
			echo "Invalid User";
		}
	}

 ?>

	<form method="post">
		<h2>Login | Form</h2>

		<label>Email:</label>
		<input type="text" name="email" placeholder="Enter your Email"><br><br>
		<label>Password:</label>
		<input type="password" name="password" placeholder="Enter your password"><br><br>

		<input type="submit" name="submit" value="Login">
	</form>

</body>
</html>