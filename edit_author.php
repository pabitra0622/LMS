<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"classfoxproject");
	$author_name = "";
	$author_id = "";
	$Type = "";
	$Publication = "";
	$query = "select * from authors where author_id = $_GET[aid]";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run))
  {
		$author_name = $row['author_name'];
		$author_id = $row['author_id'];
		$Type = $row['Type'];
		$author_id = $row['author_id'];
		$Publication = $row['Publication'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Author</title>
	<link rel="stylesheet" type="text/css" href="edit_author.css">
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
	<span><marquee>Welcome to library Management System. Library opens at 6:00 AM and close at 5:45 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				<div class="form-group">
				<div class="AddbookBox">
					<p>Author Name</p>
					<input type="text" name="author_name" value="<?php echo $author_name;?>" class="form-control" required="">
					<p>Type</p>
					<input type="text" name="Type" value="<?php echo $Type;?>" class="form-control" required="">
					<p>Publication</p>
					<input type="text" name="Publication" value="<?php echo $Publication;?>" class="form-control" required="">
				<button class="btn btn-primary" name="update">Update Author</button>
			</div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>

<?php
	if(isset($_POST['update'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"classfoxproject");
		$query = "update authors set author_name = '$_POST[author_name]' where author_id = $_GET[aid]";
		$query_run = mysqli_query($connection,$query);
			$query = "update authors set Type = '$_POST[Type]' where author_id = $_GET[aid]";
			$query_run = mysqli_query($connection,$query);
				$query = "update authors set Publication = '$_POST[Publication]' where author_id = $_GET[aid]";
				$query_run = mysqli_query($connection,$query);
		$query_run = mysqli_query($connection,$query);
		header("location:manage_author.php");
	}
?>
