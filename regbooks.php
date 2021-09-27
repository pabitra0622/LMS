<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"classfoxproject");
	$bookname = "";
	$bookid = "";
	$author = "";
	$Publication = "";
	$Faculty = "";
	$query = "select * from addbook";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book's List</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<style type="text/css">
  		#side_bar{

			background color: blue;

			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
			}

			#side_bar td, #side_bar th {
			border: 1px solid #ddd;
			padding: 8px;
			}

			#side_bar tr:nth-child(even){background-color: #f2f2f2;}

			#side_bar tr:hover {background-color: #ddd;}

			#side_bar th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #04AA6D;

			color: white;
					}
  	</style>
</head>
<body>
<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<table id="side_bar">
				<tr>
					<th>Book's Name</th>
					<th>Book's ID</th>
					<th>Author</th>
					<th>Publication</th>
					<th>Faculty</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$bookname = $row['bookname'];
						$bookid = $row['bookid'];
						$author = $row['author'];
						$Publication = $row['Publication'];
						$Faculty = $row['Faculty'];
				?>
						<tr>
							<td><?php echo $bookname;?></td>
							<td><?php echo $bookid;?></td>
							<td><?php echo $author;?></td>
							<td><?php echo $Publication;?></td>
							<td><?php echo $Faculty;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>

</body>
</html>
