<!DOCTYPE html>
<html>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
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

.bgimg-1{
    opacity: 0.9;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.bgimg-1 {
    background-image: url('map.jpg');
    min-height: 800px;
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
  <div class="w3-row">
<div class="col">
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="food.php">Eat</a></li>
  <li><a href="drinks.php">Drink</a></li>
  <li><a href="desert.php">Desert</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="logout.php?logout">Logout</a></li>
</ul>
</div>
</div>
<div class="bgimg-1 w3-display-container">
  <div class="w3-display-middle">
  <p align="center">
    <span class="w3-jumbo" style="font-family:Freestyle Script;color: black;">Contact Us</span>
  </p>
  </div>
</div>
<p style="font-family:Freestyle Script; font-size:100px" align="center">Contact Us!</p>
<hr>
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
      <div id="googleMap" class="w3-round-large w3-card-12" style="width: 100%;"></div>
    </div>
    </div>
  </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
<!-- Google Map Location -->
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

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

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}
</script>

</body>
</html>