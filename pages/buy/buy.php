<?php 
  session_start();
  require_once("connection.php");
?>
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
<!-- Top Background Image Wrapper -->
    <div class="bgded overlay">
      <div class="wrapper row0" style="margin-top:10px;">
        <div id="topbar" class="hoc clear"> 
          <div class="fl_left">
            <ul>
              <li style="font-size: 12px;"><i class="fa fa-phone"></i> (022) 28991988</li>
              <li style="font-size: 12px;"><i class="fa fa-envelope-o"></i> onlineauction@gmail.com</li>
            </ul>
          </div>
          <div class="fl_right">
            <ul>
              <li style="font-size: 12px;"><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
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
            <h1><a href="index.html"></a>Homeland</h1>
          </div>
          <nav id="mainav" class="fl_right">
            <ul class="clear">
              <li><a href="../../index.php">Home</a></li>
              <li class="active"><a href="buy.php">Buy</a></li>
              <li><a href="..\sell.php">Sell</a></li>
              <li><a href="..\about_us.html#point">About Us</a></li>
              <li><a href="..\faq.html">FAQ</a></li>
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
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <button class="search" style="float: left; height:40px; width:150px; margin-right:30px; margin-left:220px; background-color:orange; border-radius: 10px;">Search</button>
      <input type="text" name="pincode" placeholder="Enter pincode" class="search_box" style="height:40px; width:300px;padding-left:10px; margin-left:40px;" /><br/>
    </form>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <button name="unset" style="margin:auto; background-color:orange; height=30px; width:100px;">Unset Filter</button>
    </form>
    <?php
      if(isset($_POST['pincode'])) {
        $pincode = $_POST['pincode'];
        echo '<div>Filter set: Pincode '; echo $pincode; echo'</div>';
        $rows = "SELECT * from buy where pincode=$pincode";
        $result = mysqli_query($conn, $rows);
      }
      else {
        $rows = "SELECT * from buy";
        $result = mysqli_query($conn, $rows);
      }
      if(isset($_POST['unset'])) {
        unset($_SESSION['pincode']);
      }

      while ($row = mysqli_fetch_assoc($result)) 
      {  

        echo '<div class="row" id="box">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">';
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                echo '</div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="padding:10px;">
                  <address>
                    <span class="address pull-left">';
                
        echo '<h4>'.$row["address"].', '.$row["pincode"].'</h4>';

        echo '</span>
            </address><hr></hr>

            <div class="row propDetails hidden-xs" style="padding:13px,">
              <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 text-center paddingLR0 propDetails" style="padding-bottom:30px;border-right:0.5px solid #DCDCDC;">
                <span class="sfTxt pull-left robotoregular" style="background-color:#DCDCDC;padding:5px;">';
                
        echo $row["house_type"];
                
        echo  '</span>
              <span class="poolTxt hidden-sm pull-left"><hr></hr>';
        
                
                
        echo '</span>
              <div class="clearfix"></div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 beds" style="margin-top:10px;border-right:0.5px solid #DCDCDC" ><div>';
        echo $row["beds"];
        echo    '</div>
            <div class="srpTxt">Beds</div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 baths" style="margin-top:10px;border-right:0.5px solid #DCDCDC">';
           
        echo $row["baths"];
          
        echo '<br/><span class="srpTxt">Bath</span></div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 sqFeet" style="margin-top:10px;">';
          
        echo $row["sq_ft"];
        echo '<br/><span class="srpTxt ">Sq Ft</span></div>
            <div class="clearfix"></div>
          </div>



          <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 text-center timer" style="border-right:0.5px solid #DCDCDC;">';
        
          $end_date = $row["end_date"];
        
        echo '
          <div class="srpTxt timeLeftTxt" style="">Time Left</div>
          <table width="100%">
          <tr class="counter Red">
            <td id="days'.$row['id'].'"></td>
            <td valign="top">:</td>
            <td id="hrs'.$row['id'].'"></td>
            <td valign="top">:</td>
            <td id="mins'.$row['id'].'"></td>
          </tr>
          <tr>
            <td>DAYS</td>
            <td>&nbsp;</td>
            <td>HRS</td>
            <td>&nbsp;</td>
            <td>MINS</td>
          </tr>
          </table>
      
      <hr></hr>
          <table width="100%" class="borderT">
          <tr>
      
      
            <td>
              <div class="srpTxt reserveMet text-left ">Reserve Met : No</div>
            </td>
          </tr>
          </table>';
        ?>
        <script>
          var deadline = "<?php echo $end_date ?>";
          function getTimeRemaining(endtime) {
            var t = Date.parse(endtime) - Date.parse(new Date());
            var seconds = Math.floor((t / 1000) % 60);
            var minutes = Math.floor((t / 1000 / 60) % 60);
            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            var days = Math.floor(t / (1000 * 60 * 60 * 24));
            return {
              'total': t,
              'days': days,
              'hours': hours,
              'minutes': minutes,
              'seconds': seconds
            };
          }

          function initializeClock(endtime) {
            var daysSpan = document.getElementById('days'+<?php echo $row['id']?>);
            var hoursSpan = document.getElementById('hrs'+<?php echo $row['id']?>);
            var minutesSpan = document.getElementById('mins'+<?php echo $row['id']?>);

            function updateClock() {
              var t = getTimeRemaining(endtime);

              daysSpan.innerHTML = t.days;
              hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
              minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);

              if (t.total <= 0) {
                clearInterval(timeinterval);
              }
            }

            updateClock();
            var timeinterval = setInterval(updateClock, 1000);
          }

          initializeClock(deadline);
        </script>

        <?php 
            echo '</div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center paddingLR0 " >
              <div class="srpTxt timeLeftTxt">Current Bid</div>
              <div class="bidAmd robotoregular" style="padding-top:10px"><h3>Rs.';
              echo $row['current_bid'];
              echo '</h3></div>
              <a href="property.php?id='.$row['id'].'" type="button" class="view_details btn btn-default textFade viewDetails robotoregular pdpLink" style="background-color:orange">View Details</a>
            </div>
          </div>
          </div>
        </div>';
      }
      function debug_to_console( $data ) {

          if ( is_array( $data ) )
              $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
          else
              $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

          echo $output;
      }
    ?>
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

</body>
</html>