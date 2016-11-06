<?php
  session_start();
  require("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Sell</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/sell.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');"> 
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <div class="fl_left">
        <ul class="nospace">
          <li><i class="fa fa-phone"></i> (022) 28991988</li>
          <li><i class="fa fa-envelope-o"></i> onlineauction@gmail.com</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">
          <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#"><?php if (isset($_SESSION['user'])) {
            echo $_SESSION['user'];
          } else {
            echo "Login";
          } ?></a></li>
          <li>Logout</li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="../index.php">Homeland</a></h1>
      </div>
     <nav id="mainav" class="fl_right">
            <ul class="clear">
              <li><a href="..\index.php">Home</a></li>
              <li><a href="buy\buy.php">Buy</a></li>
              <li class="active"><a href="sell.php">Sell</a></li>
              <li><a href="about_us.html">About Us</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a id="tocontactus" href="#contact_us">Contact Us</a></li>
            </ul>
          </nav>
        </header>
      </div>
</div>
<!-- End Top Background Image Wrapper -->

<div class="wrapper row3" style="background-color: grey">
  <main class="hoc container clear"> 

    <!-- main body -->
  <form action="sellprop.php" method="post" enctype="multipart/form-data">
    <div>
      <h1>Details :</h1>
        <span class="req">Name*:</span>
        <input id="name" type="text"required autocomplete="off" name="fname" />
        <span class="req">Surname*:</span>
        <input id="name" type="text"required autocomplete="off" name="lname" />
        <span class="req">Email Address*:</span>
        <input id="email" type="text"required autocomplete="off" name="email" />
        <span class="req">Address of the Property*:</span>
        <textarea id="feedback" type="text"required name="address" autocomplete="off" style="margin-left: 350px;"></textarea>
        <span class="req">Area of the Property(in sq ft.)*:</span>
        <input type="text"required autocomplete="off" name="area" />
        <span class="req">Beds*:</span>
        <input type="text"required autocomplete="off" name="bedrooms" />
        <span class="req">Baths*:</span>
        <input type="text"required autocomplete="off" name="bathrooms" />
        <span class="req">Initial Bid*:</span>
        <input type="number"required autocomplete="off" name="inibid" /><br>
        <span class="req">Minimum Bid*:</span>
        <input type="number"required autocomplete="off" name="minibid" /><br>
        <span class="req">End date*:</span>
        <input type="date"required autocomplete="off" name="end_date" /><br>
        <span class="req">Upload images of your property*:</span>
        <input required name="userfile" type="file" multiple>
        <span class="req">Upload documents of your property*:</span>
        <input type="file"required autocomplete="off" name="docs" multiple><br>
        <span class="req">Type of property*:</span><br><br>
        Single Family<input type="radio"required name="chooseone" value="Single Family"><br>
 		    Double family<input type="radio"required name="chooseone" value="Double Family"><br>
        <button type="submit" class="button button-block"/>Register</button><br>
      </div>
    </form>
    <div class="clear"></div>
  </main>
</div>

    <div id="contact_us" class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
  <footer id="footer" class="hoc clear">
    <div class="one_third first">
      <h6 class="title">Happy to help!</h6>
      <p>If you have general questions regarding the related to the website or bid/offer process, contact us!</p>
      <p class="btmspace-15">Your questions and comments are important to us. You can reach us by phone or e-mail. We have got everything covered for your needs.</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Contact Us</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> (022) 28991988</li>
        <li><i class="fa fa-envelope-o"></i> onlineauction@gma.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Our Branches</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Mumbai</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Office Timimgs: 8am-8pm </time>
            <p class="nospace">A/303, Rosewood Heights, Oshiwara.</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Bangalore</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Office Timimgs: 8am-6pm </time>
            <p class="nospace">B/506, Mistique Wood, Old Race Course Rd, Yellagondanpalya.</p>
          </article>
        </li>
      </ul>
    </div>
  </footer>
</div>

    
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
 <script src="../layout/scripts/jquery.tocontactus.js"></script>
</body>
</html>