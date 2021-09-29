<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"classfoxproject");
	$author_name = "";
	$author_id = "";
	$Type = "";
	$Publication = "";
	$query = "select *  from authors";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Author's List</title>
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
  		}
  	</style>
</head>
<body>
<span><marquee>This is library Management System. Library opens at 6:00 AM and close at 5:45 PM</marquee></span><br><br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<table id="side_bar">
				<tr>
					<th>Author's Name</th>
					<th>Author ID </th>
					<th>Type</th>
					<th>Publication</th>
					
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$author_name = $row['author_name'];
							$author_id = $row['author_id'];
								$Type = $row['Type'];
							$Publication = $row['Publication'];
				?>
						<tr>
							<td><?php echo $author_name;?></td>
								<td><?php echo $author_id;?></td>
									<td><?php echo $Type;?></td>
							<td><?php echo $Publication;?></td>
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
