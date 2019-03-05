<!DOCTYPE html>
<html>
<title>Desert Menu</title>
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
    background-image: url('desertback.jpg');
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
  <li><a href="drinks.php">Drink</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="contact.php">Contact us</a></li>
  <li><a href="logout.php?logout">Logout</a></li>
</ul>
</div>
</div>
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;color:#ffffff;font-family:Freestyle Script; font-size:100px">Desert
  </div>
</div>
<br>
<p style="font-family:Freestyle Script; font-size:100px" align="center">Choose Yor Desert!</p>
<hr class="w3-center">
<div class="w3-row-padding w3-container">
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="apple-cupcakes_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>Amaretto Apple Streusel Cupcakes</b></p>
        <p>Top tender apple cupcakes with a sweet and crunchy topping of brown sugar and almonds, then drizzle with a powdered sugar glaze. The amaretto adds an even more distinct almond flavor to the cupcakes, but if you don't have it, you can use almond extract instead.I did weigh my flour, subbed plain yogurt for the sour cream and added a handful of flaked coconut.</p>
      	<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction1()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="caramel-icecream-rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>Caramel Icecream</b></p>
        <p>It's hard to beat the sweet-salty goodness of this indulgent yet light caramel ice cream. Light ice cream has evolved from its watery ice-milk days and in the Test Kitchen, we like to get creative with ingredients and flavors, but we hold fast to settling for nothing less than smooth, creamy, rich results.</p>
        <br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction2()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
  </div>
  <div class="w3-row-padding w3-container">
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="chocolate-mint_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>Chocolate-Mint Bars</b></p>
        <p>You'll love these Chocolate-Mint Bars if you're a big fan of the thin chocolate-mint Girl Scout cookies or Andes candies. Refrigerating the bars allows the mint layer and glaze to set properly. For a more grown-up taste, you can substitute dark chocolate chips for some or all of the semisweet chocolate chips in the glaze.</p>
		<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction3()">Get Receipe</button>
      	<br><br>      
      </div>
    </div>
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="lemon-cake_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>Lemon Cake</b></p>
        <p>This is a namesake because the recipe developer’s mom baked it for his birthday every year. We've adapted this recipe to trim the fat and calories, and it's still a moist, lemony treat.Wonderful texture, assertive lemon flavor, just enough richness and just enough icing. I'll be making this recipe for a long time</p>
      	<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction4()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
  </div>
   <div class="w3-row-padding w3-container">
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="vanila-cheesecake_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>Vanila Cheesecake with Cherry Topping</b></p>
        <p>In this rich cheesecake, we use the entire vanilla bean, so none of it is wasted: The seeds flavor the cheesecake, and the bean halves flavor the topping.I've never made a better cheesecake, low fat or otherwise. The texture was creamy perfection - silky, substantial, and, as my guests put it, DECADENT</p>
      	<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction5()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
    <div class="w3-half w3-container w3-margin-bottom">
      <img src="tiramisu_rez.jpg" alt="Norway" style="width:50%" class="w3-hover-opacity w3-circle">
      <div class="w3-container w3-white">
        <br><p><b>Tiramisu</b></p>
        <p>Tiramisu is Italian for "lift me up." And its indulgent creamy, mocha-tinged flavor is indeed uplifting. With layers of ladyfingers, coffee, mascarpone cheese, and shaved or grated chocolate, traditional tiramisu is a cross between a trifle and bread pudding. Our lightened version is less than 300 calories per serving, and makes for a sophisticated dinner-party treat.</p>
      	<br><button class="ghost-button-full-color1" style="font-family:forte;" onclick="myFunction6()">Get Receipe</button>
      	<br><br>
      </div>
    </div>
  </div>
  <script>
  function myFunction1()
      {
        window.open("AmarettoAppleStreuselCupcakes.html");
      }
          function myFunction2()
      {
        window.open("LoremIpsum.html");
      }
          function myFunction3()
      {
        window.open("Chocolate-MintBars.html");
      }
          function myFunction4()
      {
        window.open("LemonCake.html");
      }
          function myFunction5()
      {
        window.open("VanilaChesseCakeWithCherryTopping.html");
      }
          function myFunction6()
      {
        window.open("Tiramisu.html");
      }
      </script>
</body>
</html>