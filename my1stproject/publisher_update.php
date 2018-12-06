<html>
<head>
<title>Publisher insert</title>
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
	<h1 >Update publisher table</h1>
	<br>
	<br>
<?php
//connecting the dtabase
$connection = mysqli_connect('localhost','keshav','','dbms1') or die(mysqli_connect_error());
// Select all the rows in the markers table
?>

    <form method="post">
    <label id="first">Enter id to update</label><br/>
    <input type="number" name="pub_id"><br/>
<br>
    <label id="first">Name:</label><br/>
    <input type="text" name="name"><br/>
<br>
    <label id="first">Address:</label><br/>
    <input type="text" name="address"><br/>
<br>

    <button type="submit" name="save" class="btn btn-primary">Update</button>
	

    </form>
<?php
if(isset($_POST['save'])){
    $sql = "UPDATE publisher SET name='".$_POST["name"]."', address='".$_POST["address"]."'  where pub_id='".$_POST["pub_id"]."'";
    
    $result = mysqli_query($connection,$sql) or die (mysqli_error($connection));
}
$selectquery = "SELECT * FROM publisher";
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
		

mysqli_close($connection);
?>
</div>
</body>
</html>
