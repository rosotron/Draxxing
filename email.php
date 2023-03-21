<?php
{
	$to="binit20021212@gmail.com";
	$subject="Draxxing comment";
	$message=$_POST['name']." gave the following comment"."/n/n/n".$_POST['comments'];
	$headers="From:".$_POST['email'];
	mail($to,$subject,$message,$headers);
}
echo '<script>setTimeout(function(){window.location.href ="index.php";}, 1);</script>';
?>