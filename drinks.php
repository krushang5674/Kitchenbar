<!DOCTYPE html>
<html>
<title>Drinks Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"><link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
.bgimg-1 {
        opacity: 0.9;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url('123.jpg');
    min-height: 800px;
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
<body class="w3-light-grey">
  <div class="w3-row">
<div class="col">
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="food.php">Eat</a></li>
  <li><a href="desert.php">Desert</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="contact.php">Contact us</a></li>
  <li><a href="logout.php?logout">Logout</a></li>
</ul>
</div>
</div>
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;color:#ffffff;font-family:Freestyle Script; font-size:100px">Drinks
  </div>
</div>
<br>
<p style="font-family:Freestyle Script; font-size:100px" align="center">Choose Yor Drink!</p>
<hr class="w3-center">
<div class="w3-row-padding w3-container">
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="martini_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>Martini Cocktail</b></p>
        <p>Unleash the bold spirit of Martini Cocktail, a premium bourbon with depth and complexity that comes from liquid extracted from inside the barrel wood</p>
      	<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction1()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="margarita_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>Margarita Cocktail</b></p>
        <p>Commemorates the year Kentucky became our 15th state. Handcrafted, 8-year old, small batch bourbon. Rich and velvety, it's aged in new charred oak barrels.</p>
        <br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction2()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
  </div>
  <div class="w3-row-padding w3-container">
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="cosmopolitan_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>Cosmopolitan Cocktail</b></p>
        <p>With a taste profile of cinnamon, clove, anise, eucalyptus buttons, evergreen “gin-like” flavors and a vibrant finish, Double Rye! is absolutely superb for sipping alone or sha</p>
		<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction3()">Get Receipe</button>
      	<br><br>      
      </div>
    </div>
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="manhattan_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>Manhattan Cocktail</b></p>
        <p>Bright orange amber color. Intriguing aromas of orange marmalade, dried apricot, spice cake, pineapple blossoms and suede with a vibrant, dry-yet-fruity medium-to-full body and a l</p>
      	<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction4()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
  </div>
   <div class="w3-row-padding w3-container">
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="sangria_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>Sangria Cocktail</b></p>
        <p>From Lodi, California, the color of this wine is truly Immortal. Its rich dark color goes on and on and on. The deceptively subtle aromas of this wine combine red current, raspberr.</p>
      	<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction5()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="tequilasunrise_rez.jpeg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>Tequilasunrise Cocktail</b></p>
        <p>This Merlot opens with aromas of blueberry, subtle spice and rose petals with hints of cocoa. Balanced in style, this wine is structured yet lively.</p>
      	<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction6()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
  </div>
  <script>
    function myFunction1()
      {
        window.open("martini.html");
      }
          function myFunction2()
      {
        window.open("margarita.html");
      }
          function myFunction3()
      {
        window.open("cosmopolitan.html");
      }
          function myFunction4()
      {
        window.open("manhattan.html");
      }
          function myFunction5()
      {
        window.open("sangria.html");
      }
          function myFunction6()
      {
        window.open("tequilasunrise.html");
      }
  </script>
</body>
</html>