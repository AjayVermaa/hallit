<?php
$link = mysqli_connect("localhost", "root", "9964208393", "print") or die("Connection Error");
$password=$_POST['psw'];
$uname=$_POST['uname'];
$query="select psw from register where uname = '$uname'";
$res=mysqli_query($link,$query) or die("ERROR");
$r=mysqli_fetch_array($res);
if($r[0]==$password){
session_start();
header("location: homepage.php");
$_SESSION["uname"]=$id;
$_SESSION["set"]=TRUE;
}

elseif($r[0]==NULL)
{
die("invalid user");
}
else
{
die ("invalid password");
}
?>
