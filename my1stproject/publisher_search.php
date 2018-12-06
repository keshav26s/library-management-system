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
  table, th, td {
   border: 1px solid black;
   border-collapse: collapse;
}
  </style>
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
	<h1>SEARCH</h1>
	<form method="post">
	<p>Enter name of publisher:</p><br>
	<input name="name" type="text" placeholder="Enter name ">
	
	<br>

	<br>
	<input type="submit" value="Enter" class="btn btn-primary">
	</form>
	</div>
	<?php

    $connection=mysqli_connect("localhost","keshav","","dbms1");
if( mysqli_connect_error())
{
	die ("Error");
	
} 
        
        
        if ($_POST['name'] == '') {
            
            echo "<p>Name is required.</p>";
            
		}else {
            
            
		

		$selectquery = "SELECT * FROM `publisher` WHERE name = '".mysqli_real_escape_string($connection, $_POST['name'])."'";
$result = mysqli_query($connection,$selectquery) or die (mysqli_error($connection));
if ($result->num_rows > 0)
	{
    echo "<table><tr><th>Publisher ID</th><th>Name</th><th>Address</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["pub_id"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

		}
mysqli_close($connection);		

    


?>
</html>