<!DOCTYPE html>
<html>
<title>Food Menu</title>
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
    background-image: url('food.jpg');
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
  <li><a href="drinks.php">Drink</a></li>
  <li><a href="desert.php">Desert</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="contact.php">Contact us</a></li>
  <li><a href="logout.php?logout">Logout</a></li>
</ul>
</div>
</div>
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;color:#ffffff;font-family:Freestyle Script; font-size:100px">Eat
  </div>
</div>
<br>
<p style="font-family:Freestyle Script; font-size:100px" align="center">Choose To Eat!</p>
<hr class="w3-center">
<div class="w3-row-padding w3-container">
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="bruschetta_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>APPLE BRUSCHETTA</b></p>
        <p>Aged Prosciutto | Blue Cheese Spread | Granny Smith Apple | Local Honey</p>
      	<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction1()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="caprese-13.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>CAPRESE SALAD</b></p>
        <p>Buffalo Mozzarella | Vine Ripe Tomato | EVOO | Basil | Balsamic Reduction</p>
        <br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction2()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
  </div>
  <div class="w3-row-padding w3-container">
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="macncheese_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>MAC & CHEESE BITES</b></p>
        <p>Spring Mix | Chipotle Aioli Dipping Sauce</p>
		<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction3()">Get Receipe</button>
      	<br><br>      
      </div>
    </div>
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="mushroom_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>RICOTTA RAVIOLI</b></p>
        <p>Homemade white wine wild mushroom sauce, topped with herb mix and parmesan cheese.</p>
      	<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction4()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
  </div>
   <div class="w3-row-padding w3-container">
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="pita_wrap_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>GRILLED CHICKEN PITA</b></p>
        <p>Avocado | Roasted Bell Peppers | Grilled Onions | Provolone | Arugula | Garlic Aioli | Pita Bread</p>
      	<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction5()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="tacos_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>MEDITERRANEAN TACOS</b></p>
        <p>Blackened Grilled Shrimp | Feta | Pineapple Salsa | Romaine | Tzatziki | Corn Tortilla GLUTEN FREE</p>
      	<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction6()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
  </div>
  <script>
    function myFunction1() {
    window.open("AppleBrushchetta.html");
}
function myFunction2() {
    window.open("capresesalad.html");
}
function myFunction5() {
    window.open("grilledchickenpita.html");
}
function myFunction3() {
    window.open("MacNChesseBites.html");
}
function myFunction6() {
    window.open("Mediterraneantacos.html");
}
function myFunction4() {
    window.open("ricottaravioli.html");
}

  </script>
</body>
</html>
