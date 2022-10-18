<?php
session_start();

if(!isset($_SESSION["clientLoggedin"]) || $_SESSION["clientLoggedin"] !== true){
    header("location: loginClient.php");
    exit;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <div class="sticky-nav">
      <ul>
        <li><a class="active" href=""><img src="../../images/logo.png" style="width:15px"></a></li>
        <li><a href="welcome.php">Home</a></li>
        <li><a href="orderHistory.php">Order History</a></li>
        <div style="float: right;">
          <li><a href="userdetails.php"><?php echo $_SESSION["name"]; ?></a></li>
          <li><a href="cart.php"><i class="fa fa-shopping-cart"> <?php echo count($_SESSION[cart]); ?></i></a></li>
          <li><a href="cart.php"></a></li>
        </div>
      </ul>
    </div>
    <br/><br/><br/>
  </div>
  <br/>

  <div align="center">

    <form name="register" method="post" action="../process/updateUser.php">
      <div align="center">
        <h2>My profile</h2>
        <br/>
        <div class="container" style="background-color:white">

          <input type="text" placeholder="Full Name" value="<?php echo $_SESSION["name"]; ?>" name="name" required>
          <input type="text" placeholder="Email address" value="<?php echo $_SESSION["email"]; ?>" name="email" required>
          <input type="text" placeholder="Telephone" value="<?php echo $_SESSION["telephone"]; ?>" name="telephone" required>
          <input type="text" placeholder="Physical address" value="<?php echo $_SESSION["address"]; ?>" name="address" required>

        </div>
        <div style='width:70%'>
          <div style='display:flex'>
            <button type='submit' class="icon-btn">Update My Details</button>
          </div>
        </div>
      </div>
    </form>
    <div style='width:63%'>
      <div style='display:flex'>
        <button onclick="window.location.href='loginClient.php'" class="icon-btn">Logout </button>
      </div>
    </div>

  </div>


  <div class="row">

  </div>

</body>
</html>
