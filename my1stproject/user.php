

<?php

$link=mysqli_connect("localhost","keshav","","dbms");
if( mysqli_connect_error())
{
	die ("Error");
	
} 


//$query="delete from `users` where id=5";
//mysqli_query($link,$query);
$query="insert into users (`id`,`email`,`password`) values(3,'gnanav@gmail.com','gnanav123')";
mysqli_query($link,$query);
$query="update `users` set email='gnanav@yahoo.com' where id=2 limit 1";
mysqli_query($link,$query);
$query="select * from users where email like '%n%'";
$result=mysqli_query($link,$query) or die (mysqli_error());
if($result->num_rows>0)
	
{
	echo "<table><tr><th>email</th><th>password</th></tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>".$row['email']."</td><td>".$row['password']."<td></td>";
	}
	echo "</table>";
}


?>