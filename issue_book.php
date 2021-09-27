<?php
	require('functions.php');
	session_start();
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
  			background-color: blue;
  			padding: 50px;
  			width: 400px;
  			height: 450px;
  		}
  	</style>
</head>
<body>


	<span><marquee>This is library Management System. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				<div class="form-group">
					<label>Book Name:</label>
					<input type="text" name="book_name" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Book Author:</label>
					<select class="form-control" name="book_author">
						<option>-Select author-</option>
						<?php
							$connection = mysqli_connect("localhost","root","");
							$db = mysqli_select_db($connection,"lms");
							$query = "select author_name from authors";
							$query_run = mysqli_query($connection,$query);
							while($row = mysqli_fetch_assoc($query_run)){
								?>
								<option><?php echo $row['author_name'];?></option>
								<?php
							}
						?>
					</select>
				<div class="form-group">
					<label>Book Number:</label>
					<input type="text" name="book_no" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Student ID:</label>
					<input type="text" name="student_id" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Issue Date:</label>
					<input type="text" name="issue_date" class="form-control" value="<?php echo date("yy-m-d");?>" required="">
				</div>
				</div>
				<button class="btn btn-primary" name="issue_book">Issue Book</button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>

<?php
	if(isset($_POST['issue_book'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "insert into issued_books values(null,$_POST[book_no],'$_POST[book_name]','$_POST[book_author]',$_POST[student_id],1,'$_POST[issue_date]')";
		$query_run = mysqli_query($connection,$query);
	}
?>
