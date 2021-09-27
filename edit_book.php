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
	$query = "select * from addbook where bookid = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$bookname = $row['bookname'];
		$bookid = $row['bookid'];
		$author = $row['author'];
		$Publication = $row['Publication'];
		$Faculty = $row['Faculty'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
  <link rel="stylesheet" type="text/css" href="editbook.css">
</head>
<body>
	<span><marquee>Welcome to library Management System. Library opens at 6:00 AM and close at 5:45 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
					  <div class="EditbookBox">
					<p>Book Name</p>
					<input type="text" name="bookname" value="<?php echo $bookname;?>" class="form-control" required="">
					<p>Author</p>
					<input type="text" name="author" value="<?php echo $author;?>" class="form-control" required="">
					<p>Publication</p>
					<input type="text" name="Publication" value="<?php echo $Publication;?>" class="form-control" required="">
					<p>Faculty</p>
					<input type="text" name="Faculty" value="<?php echo $Faculty?>" class="form-control" required="">
				<button class="btn btn-primary" name="update">Update Book</button>
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
		$query = "update addbook set bookname = '$_POST[bookname]' where bookid = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		$query = "update addbook set author = '$_POST[author]'where bookid = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		$query = "update addbook set Publication = '$_POST[Publication]' where bookid = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		$query = "update addbook set Faculty = '$_POST[Faculty]' where bookid = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		header("location:manage_book.php");
	}
?>
