<?php
	function get_user_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"classfoxproject");
		$user_count = "";

		$sql="SELECT * FROM users";

		if ($result=mysqli_query($connection,$sql))
	  {
	  	$rowcount=mysqli_num_rows($result);
	  	return mysqli_free_result($result);
	  }
	}

	function get_book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"classfoxproject");
		$book_count = "";
		$sql="SELECT * FROM addbook";

		if ($result=mysqli_query($connection,$sql))
	  {
	  	$rowcount=mysqli_num_rows($result);
	  	return mysqli_free_result($result);
	  }
	}
	function get_author_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"classfoxproject");
		$author_count = "";
		$sql="SELECT * FROM authors";

		if ($result=mysqli_query($connection,$sql))
		{
			$rowcount=mysqli_num_rows($result);
			return mysqli_free_result($result);
		}
	}
	function get_category_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"classfoxproject");
		$cat_count = "";
		$sql="SELECT * FROM category";

		if ($result=mysqli_query($connection,$sql))
	  {
	  	$rowcount=mysqli_num_rows($result);
	  	return mysqli_free_result($result);
	  }
	}

	function get_issued_book_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$issued_book_count = "";
		$sql="SELECT * FROM users";

		if ($result=mysqli_query($connection,$sql))
	  {
	  	$rowcount=mysqli_num_rows($result);
	  	return mysqli_free_result($result);
	  }
	}
?>
