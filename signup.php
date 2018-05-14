<?php

$link = mysqli_connect("localhost", "root", "9964208393", "print") or die("Connection Error");
$name=$_POST['name'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
if ($password==$cpassword)
{
$q1= "insert into register (name,email,password) values ('$name','$email','$mob','$password')";
$result=mysqli_query($link,$q1);
	if($result)
	{
		session_start();
		header("location:homepage.html");
	}
}
else
{
echo "error sign-up try again";
}

?>
