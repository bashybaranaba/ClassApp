<?php
session_start();
$_SESSION["clientLoggedin"] = false;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bon Appetit!</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <div class="sticky-nav">
    <ul>
      <li><a class="active" href=""><img src="./images/logo.png" style="width:15px"></a></li>
      <li><a class="active" href="./views/welcome.php">Home</a></li>
      <li><a href="#favourites">Favourites</a></li>
      <li><a href="#contact">Contact</a></li>
      <div style="float: right;">
        <li><a href="#userdetaiils"><?php echo $_SESSION["name"]; ?></a></li>
      </div>
    </ul>
  </div>

  <div class="hero-image" align="center"><br/>
    <h1>BON APPETIT</h1>
    <hr class="hr"/>

    <h1 class="text">Healthy organic dinners<h1/>
    <br>
    <h3 class="text">Register to order now!<h3/>
    <button class="button" onclick="window.location.href='./views/registerClient.php'">REGISTER HERE</button>
  </div>

  <br><br><br><br><br><br>
  <div align='center'>
    <div class="row">
      <div class="column">
        <div >
          <img style="width:200px" src="https://img.icons8.com/ios-filled/250/000000/healthy-food.png"/>

          <div class="button2"></div>
          <div><h3  style="font-family:'Trebuchet MS', sans-serif">Fresh organic Meals</h3></div>
        </div>
      </div>

      <div class="column">
        <div >
          <img style="width:200px" src="https://img.icons8.com/ios-filled/250/000000/delivery--v2.png"/>

          <div class="button2"></div>
          <div><h3 style="font-family:'Trebuchet MS', sans-serif" >Timely Deliveries</h3></div>
        </div>
      </div>

      <div class="column">
        <div >
          <img style="width:200px" src="https://img.icons8.com/ios-glyphs/250/000000/service-bell.png"/>

          <div class="button2"></div>
          <div><h3  style="font-family:'Trebuchet MS', sans-serif">Great Service</h3></div>
        </div>
      </div>

    </div>
  </div>


  <div align="center" id="favourites">

    <br/><br/> <br/><br/>
    <h2>FAVOURITES</h2>
    <hr class="hr2"/>
    <br/><br/>

    <div align='center'>
      <div class="row">
        <div class="column">
          <div class="image-container">
            <img src="./images/images-3.jpg" style="width:100%">
            <div class="overlay"></div>
            <div class="button2"></div>
            <div class="button-text"><a href="mealDetails.html">Peaches Salad</a></div>
          </div>
          <div class="image-container">
            <img src="./images/images-2.jpg" style="width:100%">
            <div class="overlay"></div>
            <div class="button2"></div>
            <div class="button-text"><a href="mealDetails.html">Minty Lamb</a></div>
          </div>
          <div class="image-container">
            <img src="./images/lemon-chicken.jpg" style="width:100%">
            <div class="overlay"></div>
            <div class="button2"></div>
            <div class="button-text"><a href="mealDetails.html">Lemon Chicken</a></div>
          </div>
        </div>
        <div class="column">
          <div class="image-container">
            <img src="./images/summer-chopped-salad.jpg" style="width:100%">
            <div class="overlay"></div>
            <div class="button2"></div>
            <div class="button-text"><a href="mealDetails.html">Summer Salad</a></div>
          </div>
          <div class="image-container">
            <img src="./images/green-tea-noodles.jpg" style="width:100%">
            <div class="overlay"></div>
            <div class="button2"></div>
            <div class="button-text"><a href="mealDetails.html">Green-tea Noodles</a></div>
          </div>
          <div class="image-container">
            <img src="./images/tofuScramble.jpg" style="width:100%">
            <div class="overlay"></div>
            <div class="button2"></div>
            <div class="button-text"><a href="mealDetails.html">Tofu Scramble</a></div>
          </div>
        </div>
        <div class="column">
          <div class="image-container">
            <img src="./images/garlicky-fried-rice.jpg" style="width:100%">
            <div class="overlay"></div>
            <div class="button2"></div>
            <div class="button-text"><a href="mealDetails.html">Garlicky Rice</a></div>
          </div>
          <div class="image-container">
            <img src="./images/images-3.jpg" style="width:100%">
            <div class="overlay"></div>
            <div class="button2"></div>
            <div class="button-text"><a href="mealDetails.html">Raw Pad Thai</a></div>
          </div>
          <div class="image-container">
            <img src="./images/sesame-butter.jpg" style="height:100%">
            <div class="overlay"></div>
            <div class="button2"></div>
            <div class="button-text"><a href="mealDetails.html">Sesame Butter</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br><br><br><br><br>
  <div align="center">
    <h2>WHAT OTHERS SAY</h2>
    <br><br>
    <div class="row">
      <div class="column">
        <div >
          <img style="width:200px" src="./images/chef_mascot.jpg"/>


          <div>
            <h3 style="font-family:'Trebuchet MS', sans-serif" >Guilizzoni</h3>
            <h4>"Hands down the best orginc dinners in town!"</h4>
          </div>
        </div>
      </div>

      <div class="column">
        <div >
          <br>
          <img style="width:108px ;border-radius: 100%;border: 0; " src="./images/man.jpg"/>

          <div>
            <br>
            <h3 style="font-family:'Trebuchet MS', sans-serif" >Marco Botton</h3>
            <h4>"Freshly prepared tasty meals with excellent service"</h4>
          </div>
        </div>
      </div>

      <div class="column">
        <div >
          <br>
          <img style="width:111px ;border-radius: 100%;border: 0; " src="./images/woman.jpg"/>

          <div>
            <br>
            <h3 style="font-family:'Trebuchet MS', sans-serif" >Mariah Liberty</h3>
            <h4>"Amazing hidden gem - Delicious food!"</h4>
          </div>
        </div>
      </div>

    </div>
    <br><br><br><br>
    <h2>Register to order now!<h2/>
    <button class="button" onclick="window.location.href='./views/registerClient.php'">REGISTER HERE</button>
    <br><br><br><br>
  </div>




  <div class="footer" id="contact">
    <h2 class="text" >Get in touch</h2>
    <br>
    <div class="container2">
      <img class="icon" src="./images/icons8-facebook-48.png" alt=""/>
      <p class="text">Facebook</p>
    </div>
    <div class="container2">
      <img class="icon" src="./images/icons8-instagram-48.png" alt=""/>
      <p class="text">Instagram</p>
    </div>
    <div class="container2">
      <img class="icon" src="./images/icons8-twitter-48.png" alt=""/>
      <p class="text">Twitter</p>
    </div>
    <div class="container2">
      <img class="icon" src="./images/icons8-phone-48.png" alt=""/>
      <p class="text">+254-123456 89</p>
    </div>
  </div>

</body>
</html>
