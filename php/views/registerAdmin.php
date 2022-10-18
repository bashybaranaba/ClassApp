<?php

session_start();
if(!isset($_SESSION["adminLoggedin"]) || $_SESSION["adminLoggedin"] !== true){
    header("location: loginAdmin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
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
      <div align="center">
      <p>You are currently logged in as <?php echo $_SESSION["adminName"]; ?></p>
      </div>
      <form name="login" method="post" action="../process/registerAdminQuery.php">
        <div align="center">
          <h2>Register New Admin</h2>
          <br/>
          <div class="container" style="background-color:white">
            <input type="text" placeholder="Full Name" name="name" required>
            <input type="text" placeholder="Email address" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <input type="submit" value="REGISTER">
          </div>
          <p>View all admin users <a href="adminUsers.php">View<a></p>
        </div>
        </div>
      </form>
    </div>
  </body>
</html>
