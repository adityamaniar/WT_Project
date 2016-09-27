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
        <h1><a href="../index.html">Aditya</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="../index.html">Home</a></li>
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
     
      <div class="row" id="box">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="picture"></div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
          <address>
            <span class="address pull-left">305 W Jenny StreetBay City, MI 48706</span>
          </address>
          
          <div class="row hidden-sm hidden-md hidden-lg">
            <div class="row">
              <span class="col-xs-7 text-left m-sgfamily robotoregular paddingR0">Single Family</span>
              <span class="col-xs-5 text-right m-timer">0d 0h 43m</span>
            </div>
          </div>
          <div class="row propDetails hidden-xs">
            <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 text-center paddingLR0 propDetails">
              <span class="sfTxt pull-left robotoregular">Single Family</span>
              <span class="poolTxt hidden-sm pull-left"> Bank Owned</span>
              <div class="clearfix"></div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 beds">
                <div>
                  <?php 
                    $sql = "SELECT beds FROM buy";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo $row["beds"];
                  ?></div>
                <div class="srpTxt ">Beds</div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 baths">
                <?php 
                  $sql = "SELECT baths FROM buy";
                  $result = mysqli_query($conn, $sql);
                  $row = mysqli_fetch_assoc($result);
                  echo $row["baths"];
                ?>
              <br/><span class="srpTxt">Bath</span></div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 sqFeet">
                <?php 
                  $sql = "SELECT sq_ft FROM buy";
                  $result = mysqli_query($conn, $sql);
                  $row = mysqli_fetch_assoc($result);
                  echo $row["sq_ft"];
                ?><br/><span class="srpTxt ">Sq Ft</span></div>
              <div class="clearfix"></div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 text-center timer">
              <div class="srpTxt timeLeftTxt">Time Left</div>
              <table width="100%">
              <tr class="counter Red">
              <td><?php 
                  $sql = "SELECT time_days FROM buy";
                  $result = mysqli_query($conn, $sql);
                  $row = mysqli_fetch_assoc($result);
                  $days = $row["time_days"];
                ?>
              <script type="text/javascript">
                var simple = '<?php echo $simple; ?>';
                var complex = <?php echo json_encode($complex); ?>;
              </script></td>
              <td valign="top">:</td>
              <td>0</td>
              <td valign="top">:</td>
              <td>43</td>
              </tr>
              <tr class="srpTxt">
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
              <td>
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
      </div>
    
  </main>
</div>

<div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
  <footer id="footer" class="hoc clear">
    <div class="one_third first">
      <h6 class="title">Sagittis metus odio</h6>
      <p>Ligula a placerat condimentum orci nulla feugiat odio vel felis lacinia interdum cras auctor purus ut hendrerit.</p>
      <p class="btmspace-15">Malesuada non sem quisque vulputate velit et nisi ullamcorper aliquet tincidunt ut id magna leo mattis in quam dapibus.</p>
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
      <h6 class="title">Fringilla arcu quis</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Venenatis ligula sem</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">In neque nam tortor</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">Facilisis ex facilisis curabitur euismod egestas mauris et ultricies mauris&hellip;</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Odio lobortis nec cursus</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">Cras consequat sem quis hendrerit interdum nunc diam volutpat&hellip;</p>
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
</body>
</html>