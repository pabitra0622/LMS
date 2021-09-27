<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"classfoxproject");
	$cat_name = "";
	$cat_id = "";
	$level = "";
	$Class = "";
	$Publication = "";
	$Author = "";
	$query = "select * from category where cat_id = $_GET[cid]";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$cat_name = $row['cat_name'];
		$cat_id = $row['cat_id'];
		$level = $row['level'];
		$Class = $row['Class'];
		$Publication = $row['Publication'];
		$Author = $row['Author'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Category</title>
	<link rel="stylesheet" type="text/css" href="manage_cat.css">
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
			</div>
	<span><marquee>Welcome to library Management System. Library opens at 6:00 AM and close at 5:45 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				<div class="form-group">
					<div class="AddbookBox">
					<p>Category Name</p>
					<input type="text" name="cat_name" value="<?php echo $cat_name;?>" class="form-control" required="">
					<p>Level</p>
					<input type="text" name="level" value="<?php echo $level;?>" class="form-control" required="">
					<p>Class</p>
					<input type="text" name="Class" value="<?php echo $Class;?>" class="form-control" required="">
					<p>Publicatione</p>
					<input type="text" name="Publication" value="<?php echo $Publication;?>" class="form-control" required="">
					<p>Author </p>
					<input type="text" name="Author" value="<?php echo $Author;?>" class="form-control" required="">
					<button class="btn btn-primary" name="update">Update Category</button>
			</div>
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
		$query = "update category set cat_name = '$_POST[cat_name]' where cat_id = $_GET[cid]";
		$query_run = mysqli_query($connection,$query);
		$query = "update category set level = '$_POST[level]' where cat_id = $_GET[cid]";
		$query_run = mysqli_query($connection,$query);
		$query = "update category set Class = '$_POST[Class]' where cat_id = $_GET[cid]";
		$query_run = mysqli_query($connection,$query);
		$query = "update category set Publication = '$_POST[Publication]' where cat_id = $_GET[cid]";
		$query_run = mysqli_query($connection,$query);
		$query = "update category set Author = '$_POST[Author]' where cat_id = $_GET[cid]";
		$query_run = mysqli_query($connection,$query);
		header("location:manage_cat.php");
	}
?>
