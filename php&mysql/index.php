<?php 

 session_start();

$db = mysqli_connect("localhost", "root", "", "bang_form");

if (isset($_POST['register_btn'])) {
	  // session_start();
	$username 	= mysql_real_escape_string($_POST['username']);
	$email 		= mysql_real_escape_string($_POST['email']);
	$password 	= mysql_real_escape_string($_POST['password']);
	$password2 	= mysql_real_escape_string($_POST['password2']);

	if ($password == $password2) {
		$password = md5($password);
		$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
		mysqli_query($db, $sql);
		$_SESSION['message'] = "You are now logged in";
		$_SESSION['username'] = $username;
		header("location: register.php");

	}else{
		$_SESSION['message'] = "The two passwords do not match";
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="index.php">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Password again:</td>
				<td><input type="password" name="password2"></td>
			</tr>
			<tr>
				<td><input type="submit" name="register_btn" value="Register"></td>
			</tr>
		</table>
	</form>
</body>
</html>