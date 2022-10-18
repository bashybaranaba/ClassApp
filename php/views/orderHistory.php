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
    <h2> Your order history</h2>

    <br/>

  </div>


  <div align='center'>
  <?php
    include '../process/connect.php';

    $userId = $_SESSION["userId"];
    $sql = "SELECT * FROM orders WHERE CUSTOMER_ID = '$userId' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

  ?>


  <div class="card">

      <div style="padding:1%; display:flex;">
        <div style="padding:3%; display:flex;"><p><b>Date: <?php echo $row['ORDER_DATE']; ?></b></p></div>
        <div style="padding:3%; display:flex;"><p><b>Kes: </b> <?php echo $row['COST']; ?></p></div>
        <div style="padding:3%; display:flex;"><p><b>Status: </b> <?php echo $row['STATUS']; ?></p></div>

        <div style="padding:2.5%; display:flex;">
          <form name="details" method="post" action="orderDetails.php">
            <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID" required />
            <button type="submit" class="icon-btn">View Details</button>
          </form>
        </div>

      </div>
  </div>
  <br/><br/>



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

</body>
</html>
