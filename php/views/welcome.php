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
    <?php
    if($_SESSION["firstlogin"] == 0){
    ?>
      <h2> Welcome <?php echo $_SESSION["name"]; ?>!<br/><br/> Check out our most loved dishes</h2>
    <?php
    }else{
    ?>
      <h2> Welcome back <?php echo $_SESSION["name"];  ?>!<br/><br/></h2>
    <?php
      }
    ?>
    <br/>

  </div>


  <div class="row">
  <?php
    include '../process/connect.php';

    $sql = "SELECT * FROM dishes ORDER BY ID DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
  ?>

  <div class="column" >
  <div class="card">
      <img src="../../images/<?php echo $row['IMAGE']; ?>" style="width:100%">
      <br/>
      <div style="padding:5%">
      <h2><?php echo $row['NAME']; ?></h2>
      <div>
          <p><?php echo $row['DESCRIPTION']; ?></p>
          <br/>
        </div>
        <div style="display:flex">
          <h4> Price: Kes <?php echo $row['PRICE']; ?></h4>
            <form name="addTocart" method="post" action="../process/addToCart.php">
              <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID" required />
              <button type="submit" style="height:20px; margin:6%"><i class="fa fa-shopping-cart"></i></button>
            </form>

        </div>
      </div>
  </div>
  <br/><br/>
  </div>


  <?php
    }}else {
  ?>
    <br/>
    <p>No items yet</p>
    <br/><br/>
  <?php
    }
    $conn->close();
  ?>
  </div>

  <form name="feedback" method="post" action="../query/feedbackQuery.php">
    <div align="center">
      <h2>Share your feedback on our service</h2>
      <br/>
      <div class="container" style="background-color:white">
        <input type="text" placeholder="Name" name="name" required>
        <input type="text" placeholder="Email" name="email" required>
        <input  class="paragraph-input" placeholder="Type your feedback" name="content" required>
        <input type="submit" value="SEND">
      </div>
    </div>
  </form>

</body>
</html>
