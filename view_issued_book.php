<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"classfoxproject");
	$bookname = "";
	$BookID = "";
	$author = "";
	$fname = "";
	$Stdid="";
	$query = "select addbook.bookname,addbook.BookID,addbook.author,registration.fname, registration.Stdid from addbook left join registration on addbook.BookID = registration.Stdid";
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
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
					<th> Book Name:</th>
					<th>Book ID </th>
					<th>Author</th>
					<th>Student Name</th>
						<th>Student ID</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$bookname = $row['bookname'];
						$BookID = $row['BookID'];
						$author = $row['author'];
						$fname = $row['fname'];
						$Stdid = $row['Stdid'];
				?>
						<tr>
							<td><?php echo $bookname;?></td>
							<td><?php echo $BookID;?></td>
							<td><?php echo $author;?></td>
							<td><?php echo $fname;?></td>
							<td><?php echo $Stdid;?></td>
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
