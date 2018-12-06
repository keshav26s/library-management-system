<?php

    $link=mysqli_connect("localhost","keshav","","dbms1");
if( mysqli_connect_error())
{
	die ("Error");
	
} 
        
        
        if ($_POST['name'] == '') {
            
            echo "<p>Name is required.</p>";
            
		}else {
            
            $query = "delete FROM `author` WHERE f_name = '".mysqli_real_escape_string($link, $_POST['name'])."'";
            
            mysqli_query($link, $query);
            
            
            
        }
        

    


?>

<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Library management system</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="boot/css/boot.min.css">
  <script src="boot/js/jquery.min.js"></script>
  <script src="boot/js/boot.min.js"></script>
   <style>
body {
  background-color: linen;
}

h1 {
  color: LightSeaGreen;
  margin-left: 40px;
} 
</style>
	</head>
	
	
	<body>
	<img src="top-7-books-that-changed-the-world.jpg" align=left height=120 width=200>
	<br>
	<br>
	<h1 align=center>Library Management System</h1>
	<br>
	<br>
	<hr>
	<br>
	<div align="center">
	<h1 >Delete Author</h1>
	<form method="post">
	<p>Enter name of author to delete</p><br>
	<input name="name" type="number_format" placeholder="Enter id ">
	
	<br>

	<br>
	<input type="submit" value="Delete" class="btn btn-danger">	

</html>