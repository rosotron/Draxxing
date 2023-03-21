<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Home</title>
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
         .person {
         border: 10px solid transparent;
         margin-bottom: 25px;
         width: 80%;
         height: 80%;
         opacity: 0.7;
         }
         .person:hover {
         border-color: #f1f1f1;
         }
         .carousel-inner img {
         width: 100%; /* Set width to 100% */
         height: 50%;
         margin: auto;
         }
         .carousel-caption h3 {
         color: #fff !important;
         }
         @media (max-width: 600px) {
         .carousel-caption {
         display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
         }
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
         .list-group-item:last-child {
         border-bottom-right-radius: 0;
         border-bottom-left-radius: 0;
         }
         .thumbnail {
         padding: 0 0 15px 0;
         border: none;
         border-radius: 0;
         }
         .thumbnail p {
         margin-top: 15px;
         color: #555;
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
         .width
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
               <a class="navbar-brand" href="#myPage">Draxxing</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#myPage">HOME</a></li>
                  <li><a href="#aboutme">ABOUT ME</a></li>
                  <li><a href="#portfolio">PORTFOLIO</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">STORE
                     <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="commission.html">COMMISSION</a></li>
                        <li><a href="original wok.html">ORIGINAL WORK</a></li>
                        <li><a href="printed.html">PRINTED MERCH</a></li>
                     </ul>
                  </li>
                  <li><a href="#contact">CONTACT US</a></li>
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
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
         </ol>
         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">
            <div class="item active">
               <img src="1.jpg" alt="Attack On Titan" width="100%" height="50%">
               <div class="carousel-caption">
                  <h3>Attack On Titan</h3>
                  <p>A collage drawing of all the characters from Attack On Titan</p>
                  <a href="original wok.html"><button class="btn">Buy Now</button></a>
               </div>
            </div>
            <div class="item">
               <img src="astraunaut.jpg" alt="Astronaut" width="100%" height="50%">
               <div class="carousel-caption">
                  <h3>Drippy Astronaut</h3>
                  <p>A concept art of what fashion would look like in outer space</p>
                  <a href="original wok.html"><button class="btn">Buy Now</button></a>
               </div>
            </div>
            <div class="item">
               <img src="tshirt.jpeg" alt="Tshirt" width="100%" height="50%">
               <div class="carousel-caption">
                  <h3>Printed Tshirt</h3>
                  <p>A printed Tshirt with your favourite artwork of mine.</p>
                  <a href="original wok.html"><button class="btn">Buy Now</button></a>
               </div>
            </div>
            <div class="item">
               <img src="com.jpg" alt="Commission" width="100%" height="50%">
               <div class="carousel-caption">
                  <h3>Commission an Art From Me</h3>
                  <p>I will make your imagination come to reality in a paper or screen.</p>
                  <a href="commission.html"><button class="btn">Buy Now</button></a>
               </div>
            </div>
         </div>
         <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
      <!-- Container (The Band Section) -->
      <div id="aboutme" class="container text-center">
         <h3>ABOUT THE ARTIST</h3>
         <p>I am an emerging artist who hails from the foothills of the mighty Himalaya. I have been interested in art since my childhood
            and have been taking parts in art competitions where I usually finish in the top half half. Now I am looking to provide for myself with this 
            talent of mine. So any contribution from my customers is appreciated. Thank you for you support<br>You can find me at these links:<br>
            <a href="https://www.instagram.com/sakshyam_grg/" target="_blank"><button class="btn">Instagram</button></a><a href="https://www.picuki.com/media/2391620769308079252" target="_blank"><button class="btn">Picuki</button></a>
         </p>
         <br>
         <center>
         <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
               <p class="text-center"><strong>Yash Rana</strong></p>
               <br>
               <a href="#demo2" data-toggle="collapse">
               <img src="photo.jpg" class="img-circle person" alt="Click Me For a Surprise" width="255" height="255">
               </a>
               <div id="demo2" class="collapse">
                  <p>Painting</p>
                  <p>Drawing</p>
                  <p>Sketches</p>
                  <p>And more......</p>
               </div>
            </div>
            <div class="col-sm-4">
            </div>
         </div>
      </div>
      <div id="portfolio" class="bg-1">
         <div class="container">
            <h3 class="text-center">PORTFOLIO</h3>
            <p class="text-center">I have been making art since my childhood.<br> These are some of my best works.</p>
            <div class="row text-center">
               <div class="col-sm-6">
                  <div class="thumbnail">
                     <img src="1.jpg" alt="AOT" width="400" height="300">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="thumbnail">
                     <img src="samurai.jpg" alt="Samurai" width="400" height="300">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="thumbnail">
                     <img src="astraunaut.jpg" alt="Astronaut" width="400" height="300">
                  </div>
               </div>
               <br><br><br>
               <div class="col-sm-6">
                  <div class="thumbnail">
                     <img src="vandebeek.jpg" alt="Van De Beek" width="400" height="300">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="thumbnail">
                     <img src="deku.jpg" alt="Deku" width="400" height="300">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="thumbnail">
                     <img src="hamilton.jpg" alt="Lewis Hamilton" width="400" height="300">
                  </div>
               </div>
               <br><br><br>
               <div class="col-sm-6">
                  <div class="thumbnail">
                     <img src="wall.jpg" alt="Wall Art" width="400" height="300">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="thumbnail">
                     <img src="pogba.jpg" alt="Paul Pogba" width="400" height="300">
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="thumbnail">
                     <img src="spiderman.jpg" alt="Spiderman" width="400" height="300">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Container (Contact Section) -->
      <div id="contact" class="container">
         <h3 class="text-center">Contact the developers</h3>
         <p class="text-center"><em>We welcome your suggestions.</em></p>
         <div class="row">
            <div class="col-md-4">
               <p>Want us to improve the website? Help us!</p>
               <p><span class="glyphicon glyphicon-map-marker"></span>Kathmandu, Nepal</p>
               <p><span class="glyphicon glyphicon-phone"></span>Phone: +977 10000000</p>
               <p><span class="glyphicon glyphicon-envelope"></span>Email: developer@mail.com</p>
            </div>
            <form method="post" action="email.php">
               <div class="col-md-8">
                  <div class="row">
                     <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                     </div>
                     <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                     </div>
                  </div>
                  <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                  <br>
                  <div class="row">
                     <div class="col-md-12 form-group">
                        <input class="btn pull-right" type="submit" value="Send" name="submit">
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <h2>What the customers say</h2>
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               <div class="item active">
                  <h4>"I commissioned from him and got the best work"<br><span>Ram Subedi, Kathmandu</span></h4>
               </div>
               <div class="item">
                  <h4>"I really liked the merch design and the quality wasn't compromised"<br><span>Shyam Sharma, Chitwan</span></h4>
               </div>
               <div class="item">
                  <h4>"Could I... BE any more happy with the artist?"<br><span>Kumar Sah, Rajbiraj</span></h4>
               </div>
               <div class="item">
                  <h4>"Very happy with the End Result"<br><span>Hari Shrestha, Bhaktapur</span></h4>
               </div>
            </div>
         </div>
         <br>
      </div>
      <!-- Image of location/map -->
      <img src="https://admin.buddhaair.com/upload/blog/mainimage/1566108952_16cxJ_kathmandu_flight_buddha_air.jpg" class="img-responsive" style="width:100%">
      <!-- Footer -->
      <footer class="text-center">
         <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
         <span class="glyphicon glyphicon-chevron-up"></span>
         </a><br><br>
      </footer>
      <script>
         $(document).ready(function(){
           // Initialize Tooltip
           $('[data-toggle="tooltip"]').tooltip(); 
           
           // Add smooth scrolling to all links in navbar + footer link
           $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
         
             // Make sure this.hash has a value before overriding default behavior
             if (this.hash !== "") {
         
               // Prevent default anchor click behavior
               event.preventDefault();
         
               // Store hash
               var hash = this.hash;
         
               // Using jQuery's animate() method to add smooth page scroll
               // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
               $('html, body').animate({
                 scrollTop: $(hash).offset().top
               }, 900, function(){
            
                 // Add hash (#) to URL when done scrolling (default click behavior)
                 window.location.hash = hash;
               });
             } // End if
           });
         })
      </script>
   </body>
</html>