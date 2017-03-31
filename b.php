
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<title>Vintage | Contact</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/superfish.css" media="screen">
<link rel="stylesheet" href="css/nivo-slider.css" media="all">
<link rel="stylesheet" href="css/tweet.css" media="all">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/lessframework.css" media="all">
<script src="js/modernizr-2.5.3.min.js"></script>

</head>
<body>
<!-- HEADER -->
<header>
  <!-- header wrapper 
  <div class="wrapper cf">
    <div id="logo"> <a href="index.html" ><img src="img/logo.png" alt=""></a> </div>
  </div>
  <!-- ENDS header wrapper -->
  <!-- nav -->
  <nav class="cf" style="margin-top: 50px;">
    <div class="wrapper cf" id="header">
      <ul id="nav" class="sf-menu">
        <li ><a href="index.html">HOME<i><b></b></i></a></li>
        <li><a href="gadgets.html">GADGETS<i><b></b></i></a>

        <li><a class="logo" href="index.html"></a></li>

          <ul>
            <li><a href="page.html">Columns</a></li>
            <li><a href="page-typography.html">Typography</a></li>
            <li><a href="page-elements.html">Elements</a></li>
          </ul>
        </li>
        <li><a href="tvshows.html">TV SHOWS<i><b></b></i></a></li>
        <li><a href="toysandgames.html">TOYS and GAMES<i><b></b></i></a></li>
        <li class="current-menu-item"><a href="b.php">TRENDS<i><b></b></i></a></li>
      </ul>
      <div id="combo-holder"></div>
    </div>
  </nav>
  <!-- ends nav -->
</header>
<!-- ENDS HEADER -->
<!-- MAIN -->
<div role="main" id="main">
  <div class="wrapper" style="margin-top: 80px">
    <!-- page-content -->
    <div class="page-content">
    <h1 style="font-family: mensch; text-align: center;">1990s Major Events</h1>
      <?php

$user = 'root';
$pass = '';
$servername = 'localhost';
$db = 'test';

$conn = mysqli_connect($servername, $user, $pass);

mysqli_select_db($conn, $db);

$RetValues=mysqli_query($conn, "SELECT * FROM final");

echo '<table style = "border: 1px solid black; margin-left: 10px; font-family: mensch; font-size: 20px;">
      <tr style = "border: 1px solid black;">
        <td style = "border: 1px solid black; padding: 10px;">Year</td>
        <td style = "border: 1px solid black; padding: 10px;">Month</td>
        <td style = "border: 1px solid black; padding: 10px;">Headline</td>
        <td style = "border: 1px solid black; padding: 10px;">Place</td>
        <td style = "border: 1px solid black; padding: 10px;">Highlight</td>
      </tr>';

while($result = mysqli_fetch_array($RetValues, MYSQLI_ASSOC)){
  echo '<tr style = "border: 1px solid black;">
      <td style = "border: 1px solid black; padding: 10px;">'.$result["Year"].'</td>
      <td style = "border: 1px solid black; padding: 10px;">'.$result["Month"].'</td>
      <td style = "border: 1px solid black; padding: 10px;">'.$result["Headline"].'</td>
      <td style = "border: 1px solid black; padding: 10px;">'.$result["Place"].'</td>
      <td style = "border: 1px solid black; padding: 10px;">'.$result["Highlight"].'</td>
    <tr>';}

  echo'</table>';
?>

      <!-- GOOGLE MAPS 
      <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
      <script>
      function initialize() {
          var latlng = new google.maps.LatLng(-34.397, 150.644);
          var myOptions = {
              zoom: 8,
              center: latlng,
              mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var map = new google.maps.Map(document.getElementById("map_canvas"),
          myOptions);
      }
      </script>
      <h2 class="heading">Location</h2>
      <div id="map_canvas"></div>
      <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet.</p>
      <!-- ENDS GOOGLE MAPS -
      <h2 class="heading">Contact Form</h2>
      <!-- form 
      <form id="contactForm" action="#" method="post">
        <fieldset>
          <p>
            <label for="name" >Name</label>
            <input name="name"  id="name" type="text" class="form-poshytip" title="Enter your full name">
          </p>
          <p>
            <label for="email" >Email</label>
            <input name="email"  id="email" type="text" class="form-poshytip" title="Enter your email address">
          </p>
          <p>
            <label for="web">Website</label>
            <input name="web"  id="web" type="text" class="form-poshytip" title="Enter your website">
          </p>
          <p>
            <label for="comments">Message</label>
            <textarea  name="comments"  id="comments" rows="5" cols="20" class="form-poshytip" title="Enter your comments"></textarea>
          </p>
          <p>
            <input type="button" value="Send" name="submit" id="submit">
            <span id="error" class="warning">Error Message</span></p>
        </fieldset>
      </form>
      <p id="sent-form-msg" class="success">Form data sent. Thanks for your comments.</p>
      <!-- ENDS form -->
      <div class="c-1"></div>
      <div class="c-2"></div>
      <div class="c-3"></div>
      <div class="c-4"></div>
    </div>
    <!-- ENDS page-content -->
  </div>
</div>
<!-- ENDS MAIN -->
<footer>
  <!-- wrapper -->
  <div class="wrapper cf">
    <!-- social -->
    <div class="sb-holder cf">
      <ul id="social-bar" class="cf">
        <li class="left-corner"><i></i></li>
        <li><a href="#" title="Become a fan"><img src="img/social/Facebook.png" alt=""></a></li>
        <li><a href="#" title="Follow my tweets"><img src="img/social/Twitter.png" alt=""></a></li>
        <li><a href="#" title="Add to the circle"><img src="img/social/Google+.png" alt=""></a></li>
        <li class="right-corner"><i></i></li>
      </ul>
    </div>
    <!-- ENDS social -->
    <!-- widgets 
    <ul  class="widget-cols cf">
      <li class="first-col">
        <div class="widget-block">
          <h4>RECENT POSTS</h4>
          <div class="recent-post cf"> <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt=""></a>
            <div class="post-head"> <a href="#">Pellentesque habitant morbi senectus </a><span> March 12, 2011</span> </div>
          </div>
          <div class="recent-post cf"> <a href="#" class="thumb"><img src="img/dummies/54x54b.gif" alt=""></a>
            <div class="post-head"> <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span> </div>
          </div>
          <div class="recent-post cf"> <a href="#" class="thumb"><img src="img/dummies/54x54c.gif" alt=""></a>
            <div class="post-head"> <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span> </div>
          </div>
        </div>
      </li>
      <li class="second-col">
        <div class="widget-block">
          <h4>ABOUT</h4>
          <p>Vintage Template it's completely free this means you don't have to pay anything.</p>
          <p>Placeholder images by twistedfork.me</p>
          <p>Visit our site and find the most beautiful free templates up to date.</p>
        </div>
      </li>
      <li class="third-col">
        <div class="widget-block">
          <div id="tweets" class="footer-col tweet">
            <h4>TWITTER WIDGET</h4>
            <ul class="tweet_list">
              <li class="tweet_first tweet_odd"><span class="tweet_time"><a href="#">about 12 hours ago</a></span> <span class="tweet_text">Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus <a href="#">domain.com</a></span></li>
              <li class="tweet_even"><span class="tweet_time"><a href="#">about a day ago</a></span> <span class="tweet_text">Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus <a href="#">domain.com</a></span></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="fourth-col">
        <div class="widget-block">
          <h4>CATEGORIES</h4>
          <ul>
            <li class="cat-item"><a href="#">Design</a></li>
            <li class="cat-item"><a href="#">Photo</a></li>
            <li class="cat-item"><a href="#">Art</a></li>
            <li class="cat-item"><a href="#">Game</a></li>
            <li class="cat-item"><a href="#">Film</a></li>
            <li class="cat-item"><a href="#">TV</a></li>
          </ul>
        </div>
      </li>
    </ul>
    <!-- ENDS widgets -->
    <div id="footer-bottom" style="margin-top: 40px;">&copy; Copyright 2017 <a href="#">Parchaso | Rosario | Nazarro</a> All Rights Reserved</div>
  </div>
  <!-- ENDS wrapper -->
</footer>
<!-- JavaScript at the bottom for fast page loading -->
<script src="js/jquery-1.7.1.min.js"></script>
<!-- scripts concatenated and minified via build script -->
<script src="js/custom.js"></script>
<!-- superfish -->
<script src="js/superfish-1.4.8/js/hoverIntent.js"></script>
<script src="js/superfish-1.4.8/js/superfish.js"></script>
<script src="js/superfish-1.4.8/js/supersubs.js"></script>
<!-- ENDS superfish -->
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.nivo.slider.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/tabs.js"></script>
<script src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
<!-- end scripts -->
<!-- Start google map -->
<script>initialize();</script>
</body>
</html>