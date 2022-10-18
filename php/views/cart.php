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
        <li><a class="active" href="">Home</a></li>
        <li><a href="../../index.php#favourites">Favourites</a></li>
        <li><a href="../../index.php#contact">Contact</a></li>
        <li><a href="../../index.php#updates">Updates</a></li>
        <div style="float: right;">
          <li><a href="#userdetaiils"><?php echo $_SESSION["name"]; ?></a></li>
          <li><a href="cart.php"><i class="fa fa-shopping-cart"> <?php echo count($_SESSION[cart]); ?></i></a></li>
          <li><a href="cart.php"></a></li>
        </div>
      </ul>
    </div>
    <br/><br/><br/>
  </div>
  <br/>

  <div align="center">
    <h2>Your Cart</h2>

    <br/>

  </div>


  <div align="center">
  <?php
    include '../process/connect.php';
    
    foreach($_SESSION[cart] as $item) {
      $sql = "SELECT * FROM dishes WHERE ID ='$item' ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
  ?>

    <div class="card">
      <div style="display:flex">
        <div style="width:15%">
          <img src="../../images/<?php echo $row['IMAGE']; ?>" style="width:100%; ">
        </div>

        <div style="padding-left:2%; width:20%;" >
          <div style="display:flex; padding-left:2%">
            <h2><?php echo $row['NAME']; ?></h2>
          </div>
          <div style="display:flex; padding-left:2%">
            <h4> Price: Kes <?php echo $row['PRICE']; ?></h4>
          </div>
        </div>

        <div style="padding:1.4%; width:25%;">
          <label for="quantity">Quantity:</label>
          <input type="number" style="height:30%; width:40%"  value="1" id="quantity" name="quantity" step="1"/>
        </div>

        <div style="width:25%;">
          <form name="removeFromCart" method="post" action="../process/removeFromCart.php">
            <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID" required />
            <button type="submit" class="icon-btn">Remove </button>
          </form>
        </div>

      </div>
    </div>
    <br/>

  <?php
    }} }

    $conn->close();
  ?>
  <div style='width:90%'>
    <div style='display:flex'>
      <button onclick="window.location.href='welcome.php'" class="icon-btn">Continue Shopping </button>
    </div>
  </div>
    <form name="completeOrder" method="post" action="../process/completeOrder.php">
      <input type="submit" value="COMPLETE ORDER">
    </form>

  </div>

</body>
</html>
