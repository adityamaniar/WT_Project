<!DOCTYPE html>
<?php 
  session_start();
  if (isset($_SESSION['user'])) {
      $username = $_SESSION['user'];
  }
?>
<html>
   <head>
    <title>WT Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="layout/styles/feedback.css" rel="stylesheet" type="text/css" media="all">
  </head>
  <body id="top">
    <!-- Top Background Image Wrapper -->
    <div class="bgded overlay" style="background-image:url('images/dkam.jpg');">
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
              <li><?php echo $username ?></li>
              <li><a href="pages/logout.php">Logout</li>
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
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="pages\buy\buy.php">Buy</a></li>
              <li><a href="pages\sell.php">Sell</a></li>
              <li><a href="pages\about_us.html">About Us</a></li>
              <li><a href="pages\faq.html">FAQ</a></li>
              <li><a id="tocontactus" href="#contact_us">Contact Us</a></li>
            </ul>
          </nav>
        </header>
      </div>
      
      <div id="pageintro" class="hoc clear"> 
        <div class="flexslider basicslider">
          <ul class="slides">
            <li>
              <article>
                <p>Trident</p>
                <h3 class="heading">Online Auction</h3>
                <p>Find the extraordinary!</p>
               
              </article>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Background Image Wrapper -->
    
    <div class="wrapper row3">
      <main class="hoc container clear"> 
        <!-- main body -->
        <section class="feedback" id="feedback">
            <div class="container abc">
    <div class="heading">
      <img src="images/sep.png" alt="">
      <h7>Clients Say</h7>
      <img src="images/sep.png" alt="">
    </div>
    <div class="row">
    <blockquote>I joined Online Auction on a whim in '08 then forgot all about it. I began selling online but was hindered in what I could do in my "store" so I came back to Online Auction in 2010 and haven't looked back! The site is being totally revamped and is great! The owners listen to the members! We have live customer service people! What more could I ask for? I love it here! <cite>Jogn De.<br/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></cite> </blockquote>
    <blockquote>The best darn place for sellers, run by progressive humans with your happiness in mind. Fair and honest for sellers and buyers. No upfront fees. <cite>Marta Kay<br/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></cite> </blockquote>
    </div>
  </div>
        <!-- / main body -->
        </section>
        <div class="clear"></div>
      </main>
    </div>
    
    <div class="wrapper bgded" style="background-image:url('images/us.jpg');">
      <div class="hoc split clear">
        <section> 
          <h2 class="heading">Why choose us?</h2>
          <p class="btmspace-50">We have the designed the site such that, it is convenient for everyone.</p>
          <article><a href="#"><i class="icon fa fa-odnoklassniki"></i></a>
            <h6 class="heading font-x1">People's Choice</h6>
            <p>Did you know 50,000 sellers voted Online Auction “Best Overall Marketplace” over eBay, Amazon, and Etsy?</p>
          </article>
          <article><a href="#"><i class="icon fa fa-object-ungroup"></i></a>
            <h6 class="heading font-x1">24*7 Services</h6>
            <p>We've made it a breeze to buy properties all day long conveniently, without ever leaving your home</p>
          </article>
          <article><a href="#"><i class="icon fa fa-signing"></i></a>
            <h6 class="heading font-x1">Exclusive Connections</h6>
            <p>One of the easiest and convenient ways for the buyers to meet sellers.</p>
          </article>
        </section>
      </div>
    </div>
    
 
    <div class="wrapper row2">
      <article class="hoc container clear"> 
        <div class="one_quarter first">
          <h3 class="heading font-x2">We have featured in</h3>
        </div>
        <div class="three_quarter">
          <p class="nospace btmspace-30">Many of the world's most recognized companies have taken notice of how quick and easy Online Auction makes it to sell online.</p>
          <ul class="nospace group stats">
            <li><!--<i class="fa fa-3x fa-user-secret"></i>-->
              <img src="images/cnn.png" alt="">
              <!--<p><a href="#">Laoreet</a></p>-->
            </li>
            <li><!--<i class="fa fa-3x fa-ils"></i>-->
              <img src="images/toi.jpg" alt="">
              <!--<p><a href="#">Elementum</a></p>-->
            </li>
            <li><!--<i class="fa fa-3x fa-fire"></i>-->
              <img src="images/dna.png" alt="">
              <!--<p><a href="#">Euismod</a></p>-->
            </li>
          </ul>
        </div>
      </article>
    </div>
    
    <div class="wrapper coloured">
      <article class="hoc cta clear"> 
        <h6 class="three_quarter first">Subscribe to our Newspaper</h6>
        <footer class="one_quarter"><a class="btn" href="#">Subscribe &raquo;</a></footer>
      </article>
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
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.tocontactus.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
    <script src="layout/scripts/jquery.flexslider-min.js"></script>
  </body>
</html>