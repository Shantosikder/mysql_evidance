
<?php $db = new mysqli('localhost','root','','company'); ?>

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

	$data = $db->query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");

		if($data->num_rows>0){
			echo "<h4>Valid User</h4>";
		}else{
			echo "<b>Invalid User</b>";
		}
	}

	 ?>

	<form method="POST">
		<h1>Login | Form</h1>
		<label>User Name:</label>
		<input type="text" name="username" placeholder="Enter your UserName"><br><br>
		<label>password:</label>
		<input type="password" name="password" placeholder="Enter your password"><br><br>

		<input type="submit" name="submit" value="Login">
	</form>

</body>
</html>