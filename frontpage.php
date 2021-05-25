<?php
$con = mysqli_connect('localhost', 'root', '','info');

$usern = $_POST['login'];
$passw = $_POST['password'];

$temp=mysqli_query("SELECT * from login WHERE usern ='$usern' AND pass ='$Passw' ";);

$res=mysql_fetch_row($temp)

if($res)
{
	echo "Login Successful";
}
else
{
	echo "Mis match in credientials"
}
?>