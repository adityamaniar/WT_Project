<!DOCTYPE html>
<html>
<head>
<title>Aditya | Buy</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../../layout/styles/buy.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body id="top">
  <?php 
    session_start();
    require_once('connection.php');
  ?>
<!-- Top Background Image Wrapper -->
<div class="bgded overlay"> 
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <div class="fl_left">
        <ul class="nospace">
          <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">
          <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">Login/Register</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="../../index.html">Aditya</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../../index.html">Home</a></li>
          <li class="active"><a href="#">Buy</a>
          </li>
          <li><a class="drop" href="#">Dropdown</a>
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
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li>
        </ul>
      </nav>
    </header>
  </div>
</div>
<!-- End Top Background Image Wrapper -->

<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="../index.html">Home</a></li>
      <li><a href="#">Buy</a></li>
    </ul>
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <?php
      
    for ($rows = 0; $rows<5; $rows++) {
      # code...
      $sql = "SELECT * FROM buy WHERE id=$rows+1";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result);
    
      echo '<div class="row" id="box">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="picture"></div>
       <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <address>
       <span class="address pull-left">';
              
                 echo $row['address']."<br />";
              
      echo       '</span>
          </address>
        </div>
      </div>';
    }
          ?>
          <!--<div class="row propDetails hidden-xs">
            <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 text-center paddingLR0 propDetails">
              <span class="sfTxt pull-left robotoregular">
                <?php
                  //echo $row->house_type;
                ?>
              </span>
              <span class="poolTxt hidden-sm pull-left">
                <?php
                 // $a = $row->bank_owned;
                  //if($a == 1)
                    //echo "Bank Owned";
                  //else
                    //echo "Self Owned";
                ?>
              </span>
              <div class="clearfix"></div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 beds">
                <div>
                  <?php 
                   // echo $row->beds;
                  ?></div>
                <div class="srpTxt ">Beds</div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 baths">
                <?php 
                 // echo $row->baths;
                ?>
              <br/><span class="srpTxt">Bath</span></div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 sqFeet">
                <?php 
                 // echo $row->sq_ft;
                ?><br/><span class="srpTxt ">Sq Ft</span></div>
              <div class="clearfix"></div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 text-center timer">
              <?php
                //$end_date = $row->end_date;
              ?>
              <script>
                //var deadline = "<?php $end_date ?>";
              </script>
              <div class="srpTxt timeLeftTxt">Time Left</div>
              <table width="100%">
              <tr class="counter Red">
                <td id="days"></td>
                <td valign="top">:</td>
                <td id="hrs"></td>
                <td valign="top">:</td>
                <td id="mins"></td>
              </tr>
              <tr>
                <td>DAYS</td>
                <td>&nbsp;</td>
                <td>HRS</td>
                <td>&nbsp;</td>
                <td>MINS</td>
              </tr>
              </table>
              <table width="100%" class="borderT">
              <tr>
                <td>
                  <div class="srpTxt reserveMet text-left ">Reserve Met : No</div>
                </td>
              </tr>
              </table>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center paddingLR0 " >
              <div class="srpTxt timeLeftTxt">Starting Bid</div>
              <div class="bidAmd robotoregular">$29,000</div>
              <a href="/property/870965992-305-W-Jenny-Street-Bay-City-MI-48706" type="button" class="btn btn-default textFade viewDetails robotoregular pdpLink" pg="1" currentPropId="870965992" currentPosition="1">View Details</a>
            </div>
          </div>
        </div>
      </div>-->
    
      
    <!--<script>
      function multiplyNode(node, count, deep) {
          for (var i = 0, copy; i < count - 1; i++) {
              copy = node.cloneNode(deep);
              node.parentNode.insertBefore(copy, node);
          }
      }

      multiplyNode(document.querySelector('.row'), 5, true);
    </script>-->
  </main>
</div>

<div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
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
<script src="../../layout/scripts/jquery.min.js"></script>
<script src="../../layout/scripts/jquery.backtotop.js"></script>
<script src="../../layout/scripts/jquery.mobilemenu.js"></script>
<script src="../../layout/scripts/countdown.js"></script>
</body>
</html>