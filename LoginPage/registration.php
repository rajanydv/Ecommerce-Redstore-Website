<?php

session_start();

$con=mysqli_connect('localhost','root','Lovecoding@1');
mysqli_select_db($con,'useregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s ="select * from usertable where name= '$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num ==1 )
{

$message = "User Already Exists";
echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:1;url=index.html" );    
    
}
	else
	{
		$reg="insert into usertable(name , password) VALUES ('$name','$pass')";
		mysqli_query($con,$reg);
		$message = "Registration Sucessful";
echo "<script type='text/javascript'>alert('$message');</script>";
       header( "refresh:1;url=index.html" );

	}
?>