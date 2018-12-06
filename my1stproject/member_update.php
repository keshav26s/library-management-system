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
    <label id="first">Enter id to update</label><br/>
    <input type="number" name="mem_id"><br/>
<br>
    <label id="first">First Name:</label><br/>
    <input type="text" name="f_name"><br/>
<br>
    <label id="first">Last Name:</label><br/>
    <input type="text" name="l_name"><br/>
<br>
    <label id="first">Join Date:</label><br/>
    <input type="date" name="join_date"><br/>
<br>
	<label id="first">Age:</label><br/>
    <input type="number_format" name="age"><br/>
<br>
	<label id="first">Sex:</label><br/>
    <input type="text" name="sex"><br/>
<br>
	<label id="first">Member type:</label><br/>
    <input type="text" name="mem_type"><br/>
<br>
	<label id="first">Date of Birth:</label><br/>
    <input type="date" name="dob"><br/>
<br>
    <button type="submit" name="save" class="btn btn-primary">Save</button>
	

    </form>
<?php
if(isset($_POST['save'])){
    $sql = "UPDATE member SET f_name='".$_POST["f_name"]."', l_name='".$_POST["l_name"]."', join_date='".$_POST["join_date"]."', age='".$_POST["age"]."',sex='".$_POST["sex"]."',mem_type='".$_POST["mem_type"]."',dob='".$_POST["dob"]."'  where mem_id='".$_POST["mem_id"]."'";
    
    $result = mysqli_query($connection,$sql) or die (mysqli_error($connection));
}
$selectquery = "SELECT * FROM member";
$result = mysqli_query($connection,$selectquery) or die (mysqli_error($connection));
if ($result->num_rows > 0) {
    echo "<table><tr><th>Member ID</th><th>First name</th><th>Last name</th><th>Join Date</th><th>Age</th><th>Sex</th><th>Member Type</th><th>DOB</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["mem_id"]."</td><td>".$row["f_name"]."</td><td>".$row["l_name"]."</td><td>".$row["join_date"]."</td><td>".$row["age"]."</td><td>".$row["sex"]."</td><td>".$row["mem_type"]."</td><td>".$row["dob"]."</td></tr>";
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
