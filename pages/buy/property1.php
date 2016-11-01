<!DOCTYPE html>
<html lang="en">
<head>
  <title>Property</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../../layout/styles/property.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<body id="top">
<?php 
  session_start();
  require_once('connection.php');
?>
<!-- Top Background Image Wrapper -->
    <div class="bgded overlay" style="background-image:url('../../images/dkam.jpg');">
      <div class="wrapper row0">
        <div id="topbar" class="hoc clear"> 
          <div class="fl_left">
            <ul>
              <li><i class="fa fa-phone"></i> (022) 28991988</li>
              <li><i class="fa fa-envelope-o"></i> onlineauction@gmail.com</li>
            </ul>
          </div>
          <div class="fl_right">
            <ul>
              <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
              <li><a href="pages/login.html">Login/Register</a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="wrapper row1">
        <header id="header" class="hoc clear"> 
          <div id="logo" class="fl_left">
            <h1><a href="index.html">Aditya</a></h1>
          </div>
          <nav id="mainav" class="fl_right">
            <ul class="clear">
              <li class="active1"><a href="index.html">Home</a></li>
              <li><a href="pages/buy/buy.php">Buy</a>
                <!--<ul>
                  <li><a href="pages/gallery.html">Gallery</a></li>
                  <li><a href="pages/full-width.html">Full Width</a></li>
                  <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
                  <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                  <li><a href="pages/basic-grid.html">Basic Grid</a></li>
                </ul>-->
              </li>
              <li><a class="drop" href="#">Sell</a>
                <ul>
                  <li><a href="#">Level 2</a></li>
                  <li><a class="drop" href="#">Level 2 + Drop</a>
                    <ul>
                      <li><a href="#">Level 3</a></li>
                      <li><a href="#">Level 3</a></li>
                      <li><a href="#">Level 3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Level 2</a></li>
                </ul>
              </li>
              <li><a href="#">Calendar</a></li>
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
      <li><a href="#">Buy</a></li>
    </ul>
    <div class="row">
	    <div class="col-sm-6">
	      <h3>Column 1</h3>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
	      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	    </div>
	    <div class="col-sm-6">
	      <h3>Column 2</h3>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
	      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
	    </div>
  	</div>
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 

  	<div class="slideshow-container">
      <div class="mySlides">
        <img src="../../images/property/img1.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <img src="../../images/property/img2.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <img src="../../images/property/img3.jpg" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
    </div>

    <div class="row">
      <div class="col-sm-7">
        <h3>Column 1</h3>
        <div class="row">
          <div class="col-sm-3">
            <h3>Column 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          </div>
          <div class="col-sm-3">
            <h3>Column 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
          </div>
          <div class="col-sm-3">
            <h3>Column 2</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          </div>
          <div class="col-sm-3">
            <h3>Column 2</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            $13000<br>
            Starting Bid
          </div>
        </div>

        <div class="row">
          <div class="col-sm-2">
            <input type="button" value="-" id="minus">
          </div>
          <div class="col-sm-8">
            <input type="text" value="13000" maxlength="15" autocomplete="off" id="bid_amnt">
          </div>
          <div class="col-sm-2">
            <input type="button" value="+" id="plus">
          </div>
        </div>

        <div>
          <input type="button" value="PLACE BID" />
        </div>

        <div class="documents">
          <h3>Documents</h3>
          <p>The following documents have been provided</p>
        </div>
      </div>

      <div class="col-sm-5">
        <div class="features">
          <h3>Features</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>

        <div class="Other">
          <h3>Other</h3>
        </div>
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
<script src="../../layout/scripts/jquery.min.js"></script>
<script src="../../layout/scripts/jquery.backtotop.js"></script>
<script src="../../layout/scripts/jquery.mobilemenu.js"></script>
<script src="../../layout/scripts/property.js"></script>

</body>
</html>
