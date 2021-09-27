<?php
	require('functions.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
  	<style type="text/css">
		#side_bar{

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
	<span><marquee> Library opens at 6:00 AM and close at 5:45 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover">
				<thead>
						<table id ="side_bar">
					<tr>
						<th>Author Name</th>
						<th>Author ID</th>
						<th>Type</th>
						<th>Publication</th>
						<th>Action</th>

					</tr>
				</thead>
				<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"classfoxproject");
					$query = "select * from authors";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<tr>
							<td><?php echo $row['author_name'];?></td>
							<td><?php echo $row['author_id'];?></td>
							<td><?php echo $row['Type'];?></td>
							<td><?php echo $row['Publication'];?></td>
		<td>
								<button class="btn" name=""><a href="edit_author.php?aid=<?php echo $row['author_id'];?>">Edit</a></button>
								<button class="btn" name=""><a href="delete_author.php?aid=<?php echo $row['author_id'];?>">Delete</a></button>
							</td>
						</tr>
						<?php
					}
				?>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</body>
</html>
