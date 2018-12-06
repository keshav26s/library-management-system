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
	<p>Enter ID of Book:</p><br>
	<input name="id" type="number_format" placeholder="Enter id ">
	
	<br>

	<br>
	<input type="submit" value="Enter" class = "btn  btn-primary">
	</form>
	<?php

    $link=mysqli_connect("localhost","keshav","","dbms1");
if( mysqli_connect_error())
{
	die ("Error");
	
} 
        
        
        if ($_POST['id'] == '') {
            
            echo "<p>ID is required.</p>";
            
		}else {
            
            
		

		$selectquery = "SELECT * FROM `book` WHERE book_id = '".mysqli_real_escape_string($link, $_POST['id'])."'";
$result = mysqli_query($link,$selectquery) or die (mysqli_error($link));
if ($result->num_rows > 0) {
    echo "<table><tr><th>Book ID</th><th>Title</th><th>Edition</th><th>Copies left</th><th>Language</th><th>Genre</th><th>Member ID</th><th>Issue date</th><th>Return date</th><th>Days late</th><th>Fine</th><th>Author ID</th><th>Publiher ID</th><th>Date published</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["book_id"]."</td><td>".$row["title"]."</td><td>".$row["edition"]."</td><td>".$row["no_left"]."</td><td>".$row["language"]."</td><td>".$row["type"]."</td><td>".$row["b_mem_id"]."</td><td>".$row["issue_id"]."</td><td>".$row["return_date"]."</td><td>".$row["date_late"]."</td><td>".$row["fine"]."</td><td>".$row["authored_by"]."</td><td>".$row["published_by"]."</td><td>".$row["publish_date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
		}

mysqli_close($link);		

    


?>
</div>
</html>