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
	<h1 >Insert Book</h1>
	<br>
	<br>
<?php
//connecting the dtabase
$connection = mysqli_connect('localhost','keshav','','dbms1') or die(mysqli_connect_error());
// Select all the rows in the markers table
?>

    <form method="post" ">
    <label id="first"> Book ID:</label><br/>
    <input type="number" name="book_id"><br/>
<br>
    <label id="first">Title:</label><br/>
    <input type="text" name="title"><br/>
<br>
    <label id="first">Edition(only number)</label><br/>
    <input type="text" name="edition"><br/>
<br>
    <label id="first">No of copies left</label><br/>
    <input type="number" name="no_left"><br/>
<br>
    <label id="first">Language</label><br/>
    <input type="text" name="language"><br/>
<br>
    <label id="first">Genre</label><br/>
    <input type="text" name="type"><br/>
<br>
    <label id="first">Member id</label><br/>
    <input type="number" name="b_mem_id"><br/>
	<br>
	<label id="first">Issue date</label><br/>
    <input type="date" name="issue_date"><br/>
	<br>
	<label id="first">Return date </label><br/>
    <input type="date" name="return_date"><br/>
	<br>
	<label id="first">Days late</label><br/>
    <input type="number" name="days_late"><br/>
	<br>
	<label id="first">Fine</label><br/>
    <input type="number" name="fine"><br/>
	<br>
	<label id="first">Author ID </label><br/>
    <input type="number" name="authored_by"><br/>
	<br>
	<label id="first">Publisher ID</label><br/>
    <input type="number" name="published_by"><br/>
	<br>
	<label id="first">Publish date</label><br/>
    <input type="date" name="publish_date"><br/>
<br>
    <button type="submit" name="save" class="btn btn-primary">Save</button>
    </form>
<?php
if(isset($_POST['save'])){
    $sql = "INSERT INTO book
    VALUES ('".$_POST["book_id"]."','".$_POST["title"]."','".$_POST["edition"]."','".$_POST["no_left"]."','".$_POST["language"]."','".$_POST["type"]."','".$_POST["b_mem_id"]."','".$_POST["issue_date"]."','".$_POST["return_date"]."','".$_POST["days_late"]."','".$_POST["fine"]."','".$_POST["authored_by"]."','".$_POST["published_by"]."','".$_POST["publish_date"]."')";
    $result = mysqli_query($connection,$sql) or die (mysqli_error($connection));
}
$selectquery = "SELECT * FROM book";
$result = mysqli_query($connection,$selectquery) or die (mysqli_error($connection));
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

mysqli_close($connection);
?>
</div>
</body>
</html>
