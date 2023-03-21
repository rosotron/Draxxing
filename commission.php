<?php
$servername="localhost";
$username="root";
$password="BerZ707&";
$dbname="draxx";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
$sql="INSERT INTO commission(originality,size,colour,email,address,number,rough_sketch,description,username)
	VALUES('$_POST[oc]',
	'$_POST[size]',
	'$_POST[colour]',
	'$_POST[email]',
	'$_POST[address]',
	'$_POST[number]',
	'$_POST[rough]',
	'$_POST[desc]',
	'$_POST[uname]');";
if($conn->query($sql)==TRUE)
{
echo '<script>alert("Commissioned succesfully")</script>';
}
else
{
echo '<script>alert("Error: .$sql."<br>". $conn->error")</script>';
}
$conn->close();
echo '<script>setTimeout(function(){window.location.href ="index.php";}, 1);</script>';
?>