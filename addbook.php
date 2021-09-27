<?php
  include "connectionbook.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Online Library Management System | Add Book</title>
    <link rel="stylesheet" type="text/css" href="addbook.css">
<body>

    <div class="AddbookBox">
        <h1> Add Book Here</h1>
        <form name = "addbook" action="connectionbook.php" method="post">
            <p>Book Name</p>
            <input type="text" name="bookname" placeholder="Book's Name">
            <p>Book ID</p>
            <input type="text" name="bookid" placeholder="Book's ID">
	          <p> Author </p>
       <select name="" id="">
         
       
        <option value=""><?php echo $auth['author_name']; ?></option>
        
       </select>

      ?"
      
      
?>
            <input type="text" name="author" placeholder="Book's Author">
            <p>Publication</p>
            <input type="text" name="Publication" placeholder="Book's Publication">
            <p>Faculty</p>
            <input type="text" name="Faculty" placeholder="Book's Faculty">
            <input type="submit" name="save" value="add book" onclick="alert('Success')">
          </form>
    </div>
</body>
</html>
