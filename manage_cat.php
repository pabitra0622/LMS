<?php
	require('functions.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Books</title>
  	<style type="text/css">
		#side_bar{
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}
#side_bar td, #side_bar th {
border: 1px solid #ddd;
padding: 0px;
}
#side_bar tr:nth-child(even){background-color: #f2f2f2;}
#side_bar tr:hover {background-color: #ddd;}
#side_bar th {
padding-top: 5px;
padding-bottom: 12px;
text-align: left;
background-color: #04AA6D;
color: white;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
		<font style="color: blue"><span class ="tab"><strong><marquee>	 opens at 6:00 AM and close at 5:45 PM</marquee></strong></span></font>
	<br> <br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover">
				<thead>
						<table id ="side_bar">
					<tr>
						<th>Name</th>
						<th>Category Id</th>
						<th>Level</th>
						<th>Class</th>
						<th>Publication</th>
						<th>Author</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"classfoxproject");
					$query = "select * from category";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<tr>
							<td><?php echo $row['cat_name'];?> </td>
							<td><?php echo $row['cat_id'];?> </td>
							<td><?php echo $row['level'];?> </td>
							<td><?php echo $row['Class'];?> </td>
							<td><?php echo $row['Publication'];?> </td>
							<td><?php echo $row['Author'];?> </td>
							<td>
								<button class="btn" name=""><a href="edit_cat.php?cid=<?php echo $row['cat_id'];?>">Edit</a></button><br>
								
								<button class="btn" name=""><a href="delete_cat.php?cid=<?php echo $row['cat_id'];?>">Delete</a></button>
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
