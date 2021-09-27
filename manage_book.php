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
	<span><marquee>Welcome to library Management System. Library opens at 6:00 AM and close at 5:45 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered table-hover">
				<thead>
					<table id ="side_bar">
					<tr>
						<th>Book Name</th>
						<th>BookID</th>
						<th>Authors</th>
						<th>Publication</th>
						<th>Faculty</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"classfoxproject");
					$query = "select * from addbook";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<tr>
							<td><?php echo $row['bookname'];?></td>
							<td><?php echo $row['bookid'];?></td>
							<td><?php echo $row['author'];?></td>
							<td><?php echo $row['Publication'];?></td>
							<td><?php echo $row['Faculty'];?></td>
							<td>
								<button class="btn" name=""><a href="edit_book.php?bn=<?php echo $row['bookid'];?>">Edit</a></button>
								<button class="btn" name=""><a href="delete_book.php?bn=<?php echo $row['bookid'];?>">Delete</a></button>
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
