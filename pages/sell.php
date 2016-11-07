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
<link href="../layout/styles/buy.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/sell.css" rel="stylesheet" type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body id="top">
    <div class="bgded overlay">
      <div class="wrapper row0">
        <div id="topbar" class="hoc clear"> 
          <div class="fl_left">
            <ul>
              <li style="font-size: 12px;"><i class="fa fa-phone"></i> (022) 28991988</li>
              <li style="font-size: 12px;"><i class="fa fa-envelope-o"></i> onlineauction@gmail.com</li>
            </ul>
          </div>
          <div class="fl_right">
            <ul>
              <li style="font-size: 12px;"><a href="../index.php"><i class="fa fa-lg fa-home"></i></a></li>
              <?php
                if (isset($_SESSION['user'])) {
                  echo '<li style="font-size: 12px;">';
                  echo $_SESSION['user'];
                  echo '</li> <li style="font-size: 12px;"><a href="../logout.php">Logout</a></li>';
                }
                else {
                  echo '<li style="font-size: 12px;"><a href="../login/login.php">Register</a></li>';
                  echo '<li style="font-size: 12px;"><a href="../login/signin.php">Login</a></li>';
                }
              ?>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="wrapper row1">
        <header id="header" class="hoc clear"> 
          <div id="logo" class="fl_left">
            <h1><a href="../index.html"></a>Homeland</h1>
          </div>
          <nav id="mainav" class="fl_right">
            <ul class="clear">
              <li><a href="../index.php">Home</a></li>
              <li><a href="buy/buy.php">Buy</a></li>
              <li class="active"><a href="sell.php">Sell</a></li>
              <li><a href="about_us.html">About Us</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a id="tocontactus" href="#contact_us">Contact Us</a></li>
            </ul>
          </nav>
        </header>
      </div>
<!-- End Top Background Image Wrapper -->

<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="../index.html">Home</a></li>
      <li><a href="#">Sell</a></li>
    </ul>
  </div>
</div>
<!-- End Top Background Image Wrapper -->

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <h1 class="well" style="text-align:center">Details of Property</h1>
      <div class="col-lg-12 well">
        <div class="row">
        <form action="sellprop.php" method="post" enctype="multipart/form-data">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label class="req">First Name</label>
                <input type="text"required name="fname" placeholder="Enter First Name Here.." class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label>Last Name</label>
                <input type="text"required name="lname" placeholder="Enter Last Name Here.." class="form-control">
              </div>
            </div>          
            <div class="form-group">
              <label >Email Address</label>
              <input type="text"required name="email" placeholder="Enter Email Address Here.." class="form-control">
            </div>  
            <div class="form-group">
              <label>Address of the Property</label>
              <textarea type="text"required name="address" placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
            </div>
            <div class="row">  
            <div class="col-sm-4 form-group">
              <label>Pincode</label>
              <input type="text"required name="pincode" placeholder="Enter Pincode Here.." class="form-control" />
            </div>
            </div>  
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Area of Property(in sq. ft.)</label>
                <input type="text"required name="area" placeholder="Enter Area in sq ft.." class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Beds</label>
                <input type="text"required name="bedrooms" placeholder="Enter number of bedrooms.." class="form-control">
              </div>  
              <div class="col-sm-4 form-group">
                <label>Baths</label>
                <input type="text"required name="bathrooms" placeholder="Enter number of bathrooms.." class="form-control">
              </div>    
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Initial Bid</label>
                <input type="text"required name="inibid" placeholder="Enter Initial Bid.." class="form-control">
              </div>    
              <div class="col-sm-6 form-group">
                <label>Minimum Bid</label>
                <input type="text"required name="minibid" placeholder="Enter Minimum Bid.." class="form-control">
              </div>  
            </div>            
          <div class="form-group">
            <label>End Date of the Auction</label>
            <input type="Date"required name="end_date" placeholder="Enter End Date" >
          </div>    
          <div class="form-group">
            <label>Upload documents of your property</label>
            <input type="file"required autocomplete="off" name="docs" multiple>
          </div>  
          <div class="form-group">
            <label>Enter photos of the Property</label>
            <input required name="userfile" type="file"required multiple>
          </div>
          <label>Type of Property</label>
          <div class="row">
          <div class="col-sm-6 form-group">
          Single Family<input type="radio"required name="chooseone" value="Single Family">
          </div>
          <div class="col-sm-6 form-group">
          Double family<input type="radio"required name="chooseone" value="Double Family"><br>
          </div>
          </div>
          <button type="submit" style="margin-left:250px" class="btn btn-lg btn-info">Submit</button>         
          </div>
        </form> 
        </div>
    </div>
  </main>
</div>

<div class="wrapper row4 bgded overlay">
  <footer id="footer" class="hoc clear">
    <div class="one_third first">
      <h6 class="title">Happy to help!</h6>
      <p>If you have general questions regarding the related to the website or bid/offer process, contact us!</p>
      <p class="btmspace-15">Your questions and comments are important to us. You can reach us by phone or e-mail. We have got everything covered for your needs.</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
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
            <h4 ><a href="#">Mumbai</a></h2>
            <time>Office Timimgs: 8am-8pm </time>
            <p class="nospace">A/303, Rosewood Heights, Oshiwara.</p>
          </article>
        </li>
        <li>
          <article>
            <h4 ><a href="#">Bangalore</a></h2>
            <time>Office Timimgs: 8am-6pm </time>
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