<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css">
    <title>order</title>
  </head>
  <body>

      <?php
      include 'connect.php';

      session_start();

      $orderId = uniqid();
      $uid = $_SESSION["userId"];
      $name= $_SESSION["name"];
      $telephone= $_SESSION["telephone"];
      $address= $_SESSION["address"] ;
      $total=0;
      $date = date("d/m/Y");

      foreach($_SESSION[cart] as $item) {
        $sql = "SELECT * FROM dishes WHERE ID ='$item' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $price= $row['PRICE'];
            $quantity = $row['PRICE'];
            $cost= $price * $quantity;
            $total= $total + $cost;
          }
        }
      }

      $sql = "INSERT INTO orders (ID, CUSTOMER_ID, CUSTOMER_NAME, CUSTOMER_TELEPHONE, CUSTOMER_ADRESS, COST, ORDER_DATE, STATUS) VALUES ('$orderId','$uid', '$name', '$telephone','$address','$cost','$date','pending')";

      if ($conn->query($sql) === TRUE) {
      ?>
      <div align='center'>
        <br/><br/><br/>
        <h1 style="color:black">Order successfull!</h1>
        <h2>Total:<?php echo $cost ?></h2>
        <h3>Ordered Items:</h3>

      <?php
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      foreach($_SESSION[cart] as $item) {
        $sql = "SELECT * FROM dishes WHERE ID ='$item' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
            $dish = $row['NAME'];
            $price= $row['PRICE'];
            $sql = "INSERT INTO orderItems (ORDER_ID, DISH, QUANTITY, PRICE) VALUES ( '$orderId','$dish', '$quantity','$price')";

            if ($conn->query($sql) === TRUE) {
      ?>

      <div class="card">
        <div style="display:flex">
          <div style="width:12%">
            <img src="../../images/<?php echo $row['IMAGE']; ?>" style="width:100%; ">
          </div>

          <div style="padding:1.4%; width:20%;">
            <h2><?php echo $row['NAME']; ?></h2>
          </div>
          <div style="padding:1.4%; width:25%;">
            <h4> Price: Kes <?php echo $row['PRICE']; ?></h4>
          </div>

          <div style="padding:1.4%; width:25%;">
            <p>Quantity: <?php echo $quantity; ?></p>
          </div>


        </div>
      </div>
      <br/><br/>

      <?php
            }else{
              echo "Error: " . $sql . "<br>" . $conn->error;
            }

          }
        }
      }


      $_SESSION[cart] = array();
      ?>

      <div style='width:90%'>
        <div style='display:flex'>
          <button onclick="window.location.href='../views/welcome.php'" class="icon-btn"> Back to Home </button>
          <button onclick="window.location.href='../views/orderHistory.php'" class="icon-btn">Order history </button>
        </div>
      </div>
    </div>
  </body>
</html>
