<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: home.php");
  exit;
 }
 // select loggedin users detail
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {
  font-family: "forte", sans-serif;
  color: #ffff66;
  font-size: 72px;
}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
    opacity: 0.9;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.bgimg-1 {
    background-image: url('homepage.jpg');
    min-height: 100%;
}
.bgimg-2 {
    background-image: url("icecream2.jpg");
    min-height: 600px;
}
.bgimg-3 {
    background-image: url("map.jpg");
    min-height: 600px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

#googleMap {
    width: 100%;
    height: 600px;
    -webkit-filter: grayscale(90%);
    filter: grayscale(50%);
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ff4d4d;
}

li {
    float:left;
    border-right:1px solid #ff4d4d;
    border-bottom: 1px solid #ff4d4d;
}
li a {
    display: inline-block;
    color: black;
    font-family: Freestyle Script;
    font-size:28px;
    text-align: center;
    padding: 14px 115.5px;
    text-decoration: none;
}

li a:hover {
    background-color: white;
    -webkit-transition-duration: 0.8s;
    transition-duration: 0.8s;
}
</style>
<body>
<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
  </div><img src="kitchenlogo4.png" class="w3-display-topmiddle">
    <div class="w3-display-middle"><marquee><h3>WELCOME ~ <?php echo $userRow['userName']; ?></h3></marquee></div>
    <div class="w3-display-middle1">
    <button class="ghost-button-full-color" onclick="window.location.href='food.php'">Food Blog</button>&nbsp&nbsp&nbsp&nbsp&nbsp
    <button class="ghost-button-full-color" onclick="window.location.href='drinks.php'">Drinks Blog</button>&nbsp&nbsp&nbsp&nbsp&nbsp
    <button class="ghost-button-full-color" onclick="window.location.href='desert.php'">Desert Blog</button>
    </div>
</div>
  <!--Navigation Bar -->
<div class="w3-row">
<div class="col">
<ul>
  <li><a href="food.php">Eat</a></li>
  <li><a href="drinks.php">Drink</a></li>
  <li><a href="desert.php">Desert</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="contact.php">Contact us</a></li>
  <li><a href="logout.php?logout">Logout</a></li>
</ul>
</div>
</div>
<br><br>
<div class="w3-row">
<div class="w3-third">
  <p style="font-family: Mistral;font-size:48px;color: black;"> Food Blog</p>
  <img src="caprese-13.jpg" class="w3-circle pic" onclick="window.location.href='food.php'" alt="Photo of Me"><br>
  <p style="font-size: 18px;font-family: Myanmar" class="w3-padding-32">For those with pure food indulgence in mind,come<br>satisfy your desires with our ever changing<br>internationally and seasonally inspired <br>small plates.We are a scratch kitchen and love food,<br>lots of different food, just like you.</p>
</div>
<div class="w3-third">
  <p style="font-family: Mistral;font-size:48px;color: black;"> Drink's Blog</p>
  <img src="coctails12.jpg" class="w3-circle pic" onclick="window.location.href='drinks.php'" alt="Photo of Me">
  <p style="font-size: 18px;font-family: Myanmar" class="w3-padding-32">Our Sommelier has handpicked some of the most<br>delightful wines from across the world. If you are<br>looking for something a little more stiff, choose from<br>our selection of 50+ whiskeys. When it comes to Beer<br>we have you covered as well, with 14 craft beers to<br>choose from, we have something for everyone.</p>
</div>
<div class="w3-third">
  <p style="font-family: Mistral;font-size:48px;color: black;"> Desert Blog</p>
  <img src="icecream31.jpg" class="w3-circle pic" onclick="window.location.href='desert.php'" alt="Photo of Me">
  <p style="font-size: 18px;font-family: Myanmar" class="w3-padding-32">Albatross Kitchen Bar is here to help you plan your<br>special desert. From our private dining room to our<br>beautiful patio we can accommodate up to 250<br>guests. Our service and menu all come together to<br>create your perfect dining place.</p>
</div>
</div>
<br>
<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container">
  <div class="w3-display-middle">
  <p align="center">
    <span class="w3-large w3-text-light-grey" style="font-family:Arial;">THE EXPERIENCE</span><BR>
    <span class="w3-jumbo w3-text-light-grey" style="font-family:forte;">CULINARY DELIGHT</span>
  </p>
  </div>
</div>
<div class="w3-row">
<div class="w3-col">
<p align="center" style="color: black;font-family: Freestyle Script;font-size: 90px">Specials</p>
<hr>
<img src="special.jpg" style="float: middle">
<hr>
</div>
</div>
<br>
<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container">
  <div class="w3-display-middle">
     <span class="w3-jumbo w3-wide" style="font-family: Freestyle Script;">Locate Us</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64">
    <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m9 w3-container w3-section">
      <div class="w3-large">
        <i class="fa fa-map-marker w3-hover-text-black" style="width:30px; color:#b30000;"></i> Goa, India<br>
        <i class="fa fa-phone" style="width:30px;color: #00ff00;"></i> Phone: +0832 480-625-3600<br>
        <i class="fa fa-envelope" style="width:30px; color: #002db3"> </i> Email: AlbatrossKB@kitcheninfo.com<br>
      </div>
      </div>
    <div class="w3-col m9 w3-section w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-card-12" style="width:100%;"></div>
    </div>
    </div>
  </div>
<!-- Bottom Nav Bar -->
<div class="w3-row">
<div class="col">
<ul>
  <li><a href="food.php">Eat</a></li>
  <li><a href="drinks.php">Drink</a></li>
  <li><a href="desert.php">Desert</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="contact.php">Contact us</a></li>
  <li><a href="logout.php?logout">Logout</a></li>
</ul>
</div>
</div><!-- Footer -->
<footer class="w3-center w3-dark-grey w3-padding-48 w3-hover-black">
  <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">Krushang Patel</a></p>
</footer>
<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
<!-- Google Map Location -->
var myCenter = new google.maps.LatLng(15.385960, 73.906134);
function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 12,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({
  position: myCenter,
});
marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>
<?php ob_end_flush(); ?>
