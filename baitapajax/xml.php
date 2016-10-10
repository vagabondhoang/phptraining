<!DOCTYPE html>
<html>
<head>
	<title>work with xml file</title>
	<meta charset="utf-8">
	<style type="text/css">
		.content{
			margin: 0 auto;
			background: rgba(54, 128, 0, 0.82);
			width: 600px;
		}
		form{
			padding: 25px;
		}
		input{
			margin: 10px;
		}
	</style>
	
</head>
<body>
	<div class="content">
		<form method="post" action="save_xml.php">
			Firstname: <input type="text" name="fname" required><br>
			Lastname: <input type="text" name="lname" required><br>
			Password: <input type="password" name="password" required><br>
			Email: <input type="email" name="email" required><br>
			Phone Number: <input type="number" name="fnumber" required><br>
			<input type="submit" name="submit" value="submit">
		</form>
	</div>
</body>
</html>