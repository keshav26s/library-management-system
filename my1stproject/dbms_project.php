

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
	<h1>Login</h1>
	<form method="post">
	<input name="email" type="text" placeholder="Email address">
	
	<br>
	<input name="password" type="password" placeholder="Password">
	<br>
	
	</form>
	<form action="http://localhost/my1stproject/aftersignup.php">
	</br>
	<input type="submit" value="Log In" class = "btn btn-primary">
	</form>
	</div>
	
	
<?php

    $link=mysqli_connect("localhost","keshav","","dbms1");
if( mysqli_connect_error())
{
	die ("Error");
	
} 
        
        
        if ($_POST['email'] == '') {
            
            echo "<p>Email address is required.</p>";
            
        } else if ($_POST['password'] == '') {
            
            echo "<p>Password is required.</p>";
            
        } else {
            
            $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
            
            $result = mysqli_query($link, $query);
            
            if (mysqli_num_rows($result) > 0) {
                
               $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
                
                if (mysqli_query($link, $query)) {
                    
                    echo "<p>You have been logged in</p>";
                    
                } else {
                    
                    echo "<p>There was a problem signing you up - please try again later.</p>";
                    
                }
			   
                
            } else {
                
                echo "<p>Unauthorised user</p>";
                
            }
            
        }
        

    


?>
	
	

</html>
