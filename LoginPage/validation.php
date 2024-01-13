<?php

session_start();

$con=mysqli_connect('localhost','root','Lovecoding@1');
mysqli_select_db($con,'useregistration');
$name = $_POST['user'];
$pass = $_POST['password'];
$s ="select * from usertable where name='$name' && password='$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1 )
{
 header('location:chat.php');
}
else
{
 header('location:index.html');
}
?>