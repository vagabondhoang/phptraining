<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div><h4>WELCOME <?php echo $_SESSION['username']; ?></h4></div>
</body>
</html>