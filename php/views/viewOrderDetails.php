

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
        <li><a class="active" href="">Admin Dashboard</a></li>
        <li><a href="orders.php">Orders</a></li>
        <li><a href="users.php">Users</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="dishes.php">Dishes</a></li>
        <li><a href="additem.php">Add new Item</a></li>
        <li><a href="analytics.php">Analytics</a></li>
        <li><a href="registerAdmin.php">Register Admin</a></li>
      </ul>
    </div>
    <br/><br/><br/><br/>
  </div>
  <br/>

  <div align="center">
    <h2> Order Details</h2>

    <br/>
  </div>

  <div align='center'>
    <div class="card">
    <?php
      include '../process/connect.php';

      $orderID =$_POST['ID'];
      $sql = "SELECT * FROM orderItems WHERE ORDER_ID = '$orderID' ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

    ?>
      <div style="display:flex;">
          <div style="padding:1%; display:flex;">
            <div style="padding:1%; display:flex;"><p><b>Dish: </b><?php echo $row['DISH']; ?></p></div>
            <div style="padding:1%; display:flex;"><p><b>Quantity: </b> <?php echo $row['QUANTITY']; ?></p></div>
            <div style="padding:1%; display:flex;"><p><b>Price: </b> <?php echo $row['PRICE']; ?></p></div>
          </div>
      </div>
    <?php
      }}

      $conn->close();
    ?>
    </div>
  </div>

</body>
</html>
