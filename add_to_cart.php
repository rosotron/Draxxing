<?php
    $servername="localhost";
    $username="root";
    $password="BerZ707&";
    $dbname="draxx";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed: ". $conn->connect_error);
    }

    if( !isset($_POST['quantity'])){
        return;
    }
    $total=$_POST['quantity']*$_POST['price'];

    $sql="insert into cart values('$_POST[username]','$_POST[product_name]', '$_POST[quantity]','$_POST[price]','$total');";
    
    if( $conn->query($sql) ){
        echo "<script>alert(\"Added to cart\");</script>";  
    }else{
        echo "<script>alert(\"Problem while adding to cart\");</script>";   
    }
    echo '<script>setTimeout(function(){window.location.href ="index.php";}, 1);</script>';

?>