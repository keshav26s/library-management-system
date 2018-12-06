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
	<h1 >Update table</h1>
	<br>
	<br>
<?php
//connecting the dtabase
$connection = mysqli_connect('localhost','keshav','','dbms1') or die(mysqli_connect_error());
// Select all the rows in the markers table
?>

    <form method="post">
    <label id="first"> Author ID:</label><br/>
    <input type="number_format" name="auth_id"><br/>
<br>
    <label id="first">First Name:</label><br/>
    <input type="text" name="f_name"><br/>
<br>
    <label id="first">Last Name</label><br/>
    <input type="text" name="l_name"><br/>
<br>
    <label id="first">Country</label><br/>
    <input type="text" name="country"><br/>
<br>
    <button type="submit" name="save" class="btn btn-primary">Update</button>
    </form>
<?php
if(isset($_POST['save'])){
    $sql = "UPDATE author SET f_name='".$_POST["f_name"]."', l_name='".$_POST["l_name"]."', country='".$_POST["country"]."' where author_id='".$_POST["auth_id"]."'";
    
    $result = mysqli_query($connection,$sql) or die (mysqli_error($connection));
}
$selectquery = "SELECT * FROM author";
$result = mysqli_query($connection,$selectquery) or die (mysqli_error($connection));
if ($result->num_rows > 0)
	{
    echo "<table><tr><th>Author ID</th><th>First Name</th><th>Last name</th><th>Country</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["author_id"]."</td><td>".$row["f_name"]."</td><td>".$row["l_name"]."</td><td>".$row["country"]."</td></tr>";
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
