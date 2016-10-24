<?php 

$connect = mysqli_connect('localhost','root','','admin');
$query = 'select * from book_details';
$result = mysqli_query($connect,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>export data into excelfile</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
	<h3>export data into excelfile</h3>
	<div class="table-responsive" id="book_information">
		<table class="table table-bordered">
			<tr>
				<th>id</th>
				<th>name_of_book</th>
				<th>copyright</th>
				<th>introduction</th>
				<th>chapter_titles</th>
				<th>page</th>
				<th>price</th>
				<th>quantity_available</th>
				<th>republish</th>
				<th>language</th>
				<th>date_release</th>
				<th>book_id</th>
			</tr>
			<?php 
				while ($row=mysqli_fetch_array($result)) {
					
			 ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name_of_book']; ?></td>
				<td><?php echo $row['copyright']; ?></td>
				<td><?php echo $row['introduction']; ?></td>
				<td><?php echo $row['chapter_titles']; ?></td>
				<td><?php echo $row['page']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['quantity_available']; ?></td>
				<td><?php echo $row['republish']; ?></td>
				<td><?php echo $row['language']; ?></td>
				<td><?php echo $row['date_release']; ?></td>
				<td><?php echo $row['book_id']; ?></td>
			</tr>
			<?php 
				}
			 ?>
		</table>
		<button class="btn-btn-success" name="create_excel" id="create_excel">
			Create Excel File
		</button>
	</div>
</body>
</html>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('#create_excel').click(function(){
			var excel_data 	= $('#book_information').html();
			var page		= 'excel.php?data=' + excel_data;
			window.location = page;

		});
	});
</script>