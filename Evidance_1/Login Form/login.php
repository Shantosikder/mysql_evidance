
<?php $db = new mysqli('localhost','root','','company'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
</head>
<body>
		<h1>Login | Form:</h1>

		<?php 

		if(isset($_POST['submit'])){

		extract($_POST);

	 $data = $db->query("SELECT * FROM user WHERE username = '$Username' AND password = '$password'");

	 if($data->num_rows>0){
	 	echo "<b>Valid User</b>";
	 }else{
	 	echo("<b>Invalid User</b>");
	 }
		}

		 ?>

<form method="post" >

	<label>UserName:</label>
	<input type="text" name="Username" placeholder="Enter your UserName"><br><br>

	<label>Password:</label>
	<input type="password" name="password" placeholder="Enter your password"><br><br>

	<input type="submit" name="submit" value="login">

</form>

</body>
</html>