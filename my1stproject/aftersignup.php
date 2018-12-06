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
	<div class="img">
	<img src="top-7-books-that-changed-the-world.jpg" align=left height=150 width=200>
	</div><br>
	<br>
	<div class="container">
  <div class="jumbotron">
	<h1 align=center>Library Management System</h1>
	</div>
	</div>
	<br>
	<br>
	<hr>
	<br>
	<style>
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}
.img{
	text-align: center;
}
.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: green
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<div class="navbar">

  
  <div class="dropdown">
    <button class="dropbtn">Book 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/my1stproject/insert_book.php">Insert</a>
	  <a href="http://localhost/my1stproject/updatebooknew.php">Update</a>
      <a href="http://localhost/my1stproject/search_book.php">Search</a>
      <a href="http://localhost/my1stproject/delete_book.php">Delete</a>
	  
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Author
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/my1stproject/insert_author.php">Insert</a>
	  <a href="http://localhost/my1stproject/update_author.php">Update</a>
      <a href="http://localhost/my1stproject/search_author.php">Search</a>
      <a href="http://localhost/my1stproject/delete_author.php">Delete</a>
	  
    </div>
   </div>

<div class="dropdown">
    <button class="dropbtn">Member
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/my1stproject/member_insert.php">Insert</a>
	  <a href="http://localhost/my1stproject/member_update.php">Update</a>
      <a href="http://localhost/my1stproject/member_search.php">Search</a>
      <a href="http://localhost/my1stproject/member_delete.php">Delete</a>
	  
    </div>
  </div>    
  <div class="dropdown">
    <button class="dropbtn">Publisher
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="http://localhost/my1stproject/publisher_insert.php">Insert</a>
	  <a href="http://localhost/my1stproject/publisher_update.php">Update</a>
      <a href="http://localhost/my1stproject/publisher_search.php">Search</a>
      <a href="http://localhost/my1stproject/publisher_delete.php">Delete</a>
	  
    </div>
  </div> 
</div>


</body>
	

	
	

</html>