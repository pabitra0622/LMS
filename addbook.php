<?php
  include "connectionbook.php";
  $query2 = "select * from authors";
  $author = mysqli_query($con,$query2);
  $query3 = "select * from category";
  $category = mysqli_query($con,$query3);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Online Library Management System | Add Book</title>
    <link rel="stylesheet" type="text/css" href="addbook1.css">
</head>
<body>
    <div class="AddbookBox">
        <h1> Add Book Here</h1>
        <form name = "addbook" action="connebook.php" method="post">
            <p>Book Name</p>
            <input type="text" name="bookname" placeholder="Book's Name" required>
      
	          <p> Author </p>
       <select name="author" id="" required>
         <option value="">Select Author</option>
       <?php
          foreach($author as $auth){
         ?>
        <option value="<?php echo $auth["author_id"]; ?>"><?php echo $auth["author_name"]; ?></option>
        <?php
        }
        ?>
       </select>
       <p>Category</p>

        <select name="category" id="" required>
        <option value="">Select Category</option>
       <?php
          foreach($category as $cat){
         ?>
        <option value="<?php echo $cat["cat_id"]; ?>"><?php echo $cat["cat_name"]; ?></option>
        <?php
        }
        ?>
       </select>
            <p>Publication</p>
            <input type="text" name="Publication" placeholder="Book's Publication" required>
            <p>Faculty</p>
            <input type="text" name="Faculty" placeholder="Book's Faculty" required>
            <br> <br>
            <input type="submit" name="save" value="Add Book " onclick="alert('Success')">
            
          </form>
  </div>
</body>
</html>