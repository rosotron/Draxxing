<?php
session_start();
$servername="localhost";
$username="root";
$password="BerZ707&";
$dbname="draxx";
$conn=new mysqli($servername,$username,$password,$dbname);
$count=0;
if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
$sql="SELECT id from users where username='$_POST[username]' AND password='$_POST[pwd]';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $count=$count+1;
  }
} 
if($count==1)
{
echo '<script>alert("Logged In Successfully")</script>';
}
else 
{
echo '<script>alert("Username/Password Error")</script>';
}
$conn->close();
echo '<script>setTimeout(function(){window.location.href ="index.php";}, 1);</script>';
?>