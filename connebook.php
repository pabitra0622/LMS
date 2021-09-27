<?php
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $dbname = "classfoxproject";
     $bookname = "";
     $bookid = "";
     $author = "";
     $Publication = "";
     $Faculty = "";
     $errors = array();
    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
     die("Failed to connect!");
    }
     if(isset($_POST['save'])) {
          $bookname = $_POST['bookname'];
     	    $bookid=$_POST['bookid'];
          $author=$_POST['author'];
          $Publication=$_POST['Publication'];
     	    $Faculty=$_POST['Faculty'];
      if(empty($bookname)){
              array_push($errors, "title is required");
         }
     if(empty($bookid)){
               array_push($errors, "Bookid is required");
          }

           if(empty($Author)){
               array_push($errors, "Author is required");
          }
           if(empty($Publication)){
               array_push($errors, "Publication is required");
          }
     	if(empty($Faculty)){
     		array_push($errors, "Faculty is required");
     	}
     	if(count($errors)==0){

  $sql = "INSERT INTO  `addbook`(`bookname`, `bookid`, `author`, `Publication`, `Faculty`) VALUES ('$bookname','$bookid','$author','$Publication','$Faculty')";
                header('location: regbooks.php');
     		mysqli_query($con,$sql);
               $_SESSION['username'] = $username;
               $_SESSION['success'] = "book add Successfully!!";
               header("location: regbooks.php");
     	}
     }

     //login users
    /* if (isset($_POST['login'])){
          if(isset($_POST['username']) && !empty($_POST['username'])){
               if(isset($_POST['password']) && !empty($_POST['password'])){
                $username=$_POST['username'];
                $pass=$_POST['password'];
                $sql2="SELECT * FROM tbl_user WHERE username='$username'";
                $res=mysqli_query($con,$sql2);
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                         $password=['confirm_password'];
                         $dpassword=$row['password'];
                         $npassword=md5($password,$pass);
                         if($dpassword=$npassword){
                              echo "<script>alert('Login Successfully')</script>";
                         }
                         else{
                              echo "<script>alert('Password is wrong')</script>";
                         }
                    }
                }
                else{
                    echo "<script>alert('username is wrong')</script>";
                }
               }
               else{
                   echo "<script>alert('please insert password to continue')</script>";
               }
          }
          else{
              echo "<script>alert('please insert username')</script>";          }
     }


     //logout
     if (isset($_GET['logout'])){
          session_destroy();
          unset($_SESSION['username']);
          header('location: login.php');
     }
*/
?>
