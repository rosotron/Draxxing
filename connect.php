<?php
$servername="localhost";
$username="root";
$password="BerZ707&";
$dbname="draxx";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
$sql="INSERT INTO users(firstname,lastname,email,password,number,address,username)
	VALUES('$_POST[fname]',
	'$_POST[lname]',
	'$_POST[email]',
	'$_POST[password]',
	'$_POST[number]',
	'$_POST[address]',
	'$_POST[uname]');";
if($conn->query($sql)==TRUE)
{
echo '<script>alert("Your Account Has Been Created")</script>';
}
else
{
echo '<script>alert("Error: .$sql.<br>. $conn->error")</script>';
}
$conn->close();
echo '<script>setTimeout(function(){window.location.href ="index.php";}, 1);</script>';
?>