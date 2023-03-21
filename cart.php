<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Shopping Cart</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style>
         body {
         font: 400 15px/1.8 Lato, sans-serif;
         color: #777;
         }
         h3, h4 {
         margin: 10px 0 30px 0;
         letter-spacing: 10px;      
         font-size: 20px;
         color: #111;
         }
         .container {
         padding: 80px 120px;
         }
         .bg-1 {
         background: #2d2d30;
         color: #bdbdbd;
         }
         .bg-1 h3 {color: #fff;}
         .bg-1 p {font-style: italic;}
         .list-group-item:first-child {
         border-top-right-radius: 0;
         border-top-left-radius: 0;
         }
         .btn {
         padding: 10px 20px;
         background-color: #333;
         color: #f1f1f1;
         border-radius: 0;
         transition: .2s;
         }
         .btn:hover, .btn:focus {
         border: 1px solid #333;
         background-color: #fff;
         color: #000;
         }
         .modal-header, h4, .close {
         background-color: #333;
         color: #fff !important;
         text-align: center;
         font-size: 30px;
         }
         .modal-header, .modal-body {
         padding: 40px 50px;
         }
         .nav-tabs li a {
         color: #777;
         }
         .navbar {
         font-family: Montserrat, sans-serif;
         margin-bottom: 0;
         background-color: #2d2d30;
         border: 0;
         font-size: 11px !important;
         letter-spacing: 4px;
         opacity: 0.9;
         }
         .navbar li a, .navbar .navbar-brand { 
         color: #d5d5d5 !important;
         }
         .navbar-nav li a:hover {
         color: #fff !important;
         }
         .navbar-nav li.active a {
         color: #fff !important;
         background-color: #29292c !important;
         }
         .navbar-default .navbar-toggle {
         border-color: transparent;
         }
         .open .dropdown-toggle {
         color: #fff;
         background-color: #555 !important;
         }
         .dropdown-menu li a {
         color: #000 !important;
         }
         .dropdown-menu li a:hover {
         background-color: red !important;
         }
         footer {
         background-color: #2d2d30;
         color: #f5f5f5;
         padding: 32px;
         }
         footer a {
         color: #f5f5f5;
         }
         footer a:hover {
         color: #777;
         text-decoration: none;
         }  
         .form-control {
         border-radius: 0;
         }
         textarea {
         resize: none;
         }
         .login
         {color: black;}
         .login:hover{color:#696969;}
      </style>
   </head>
   <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>                        
               </button>
               <a class="navbar-brand" href="index.php">Draxxing</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="index.php#aboutme">ABOUT ME</a></li>
                  <li><a href="index.php#portfolio">PORTFOLIO</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">STORE
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="commission.html">COMMISSION</a></li>
                        <li><a href="original wok.html">ORIGINAL WORK</a></li>
                        <li><a href="printed.html">PRINTED MERCH</a></li>
                     </ul>
                  </li>
                  <li><a href="index.php#contact">CONTACT US</a></li>
                  <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN<span class="glyphicon glyphicon-log-in"></span></a>
                     <div class="dropdown-menu">
                        <form id="formLogin" class="form container-fluid" method="post" action="login.php">
                           <div class="form-group">
                              <label for="usr">User Name:</label>
                              <input type="text" class="form-control" id="usr" name="username">
                           </div>
                           <div class="form-group">
                              <label for="pwd">Password:</label>
                              <input type="password" class="form-control" id="pwd" name="pwd">
                           </div>
                           <input type="submit" id="btnLogin" class="btn btn-block" value="Login">
                        </form>
                        <div class="container-fluid">
                           <br>
                           <a href="#"><span class="login">Forgot Password?</span></a>A
                           <br>
                           <a href="signup.html"><span class="login">New Here? Sign Up</span></a>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div id="shopping cart" class="container text-center">
      <h3>Shopping Cart</h3>
<?php
$servername="localhost";
$username="root";
$password="BerZ707&";
$dbname="draxx";
$conn=new mysqli($servername,$username,$password,$dbname);
$count=0;
if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
$sum=0;
$sql="SELECT * from cart where username='$_POST[username]';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
        echo "Product Name: " . $row["product_name"]."<br>"." Quantity: " . $row["quantity"]."<br>". " Price: " . $row["price"]."<br>"." Total: " . $row["total"]. "<br>";
    $sum+=$row["total"]  ;
    }
    } else {
      echo "Your Cart wasn't found";
    }
echo "<br><br><h3>Total: $sum USD</h3>";
$conn->close();
?>
<a href="https://www.paytm.com" target="_blank"><button class="btn">Pay Now on PayTM</button></a>

</body>
</html>