<?php 

if (isset($_POST['submit'])) {
	$fname 		= $_POST['fname'];
	$lname 		= $_POST['lname'];
	$password 	= $_POST['password'];
	$email 		= $_POST['email'];
	$fnumber 	= $_POST['fnumber'];

	$csvData = "\n".'"' .$fname. '"'.",".'"' .$lname. '"'.",".'"' .$password. '"'.",".'"' .$email. '"'.",".$fnumber;
	$fp = fopen('js/example.csv', 'a');
	fwrite($fp, $csvData);
	fclose($fp);

}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
	<div id="container"></div>

	<script type="text/javascript">

		$(document).ready(function(){

			$.get('js/example.csv', function(data){

				var html = '<table border="1">';
				var rows = data.split("\n");
				rows.forEach(function getvalues(ourrow){

					html += "<tr>";
					var columns = ourrow.split(",");

					html += "<td>" + columns[0] + "</td>";
					html += "<td>" + columns[1] + "</td>";
					html += "<td>" + columns[2] + "</td>";
					html += "<td>" + columns[3] + "</td>";
					html += "<td>" + columns[4] + "</td>";

					html += "</tr>";
				})

				html += '</table>';
				$('#container').append(html);

			});


		});

		
	</script>
</body>
</html>
