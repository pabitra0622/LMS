<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","classfoxproject");
if(count($_POST)>0) {
$cat_name=$_POST[$cat_name];
}
$query="SELECT * from category where cat_name = '`$cat_name`'";

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
padding-top: 10px;
padding-bottom: 12px;
text-align: left;
background-color: #04AA6D;
color: white;
		}

		input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
	</style>
</head>
<body>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<table id ="side_bar">
				<tr>
					<th>Book's Name</th>
					<th>Level</th>
					<th>Class</th>
					<th>Publication</th>
					<th>Author</th>
				</tr>
				<?php
					$query_run = mysqli_query($conn, $query);
					
					while($row = mysqli_fetch_assoc($query_run))
                    {
						$bookname = $row['bookname'];
						$level = $row['level'];
						$Class = $row['Class'];
						$Publication = $row['Publication'];
						$Author = $row['Author'];
				        ?>
						<tr>
							<td><?php echo $bookname;?></td>
							<td><?php echo $level;?></td>
							<td><?php echo $Class;?></td>
							<td><?php echo $Publication;?></td>
							<td><?php echo $Author;?></td>
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
