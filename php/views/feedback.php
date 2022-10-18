<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../../css/style.css">
    <div id="nav"
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

    <div>
      <div align="center">
        <input type="text" placeholder="Search User..">
        <br/><br/><br/>
        <?php
          include '../process/connect.php';

          $sql = "SELECT CUSTOMER_NAME, CUSTOMER_EMAIL, CONTENT FROM feedback ORDER BY ID DESC";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
        ?>
          <div class="card">
            <div style="padding:20px;">
              <div class="card-container">
                <div class="card-container"><p><b>Feedback from: </b></p></div>
                <div class="card-container"><p><?php echo $row['CUSTOMER_NAME']; ?></p></div>
              </div>
              <div class="card-container">
                <div class="card-container"><p><b>Email: </b></p></div>
                <div class="card-container"><p><?php echo $row['CUSTOMER_EMAIL']; ?></p></div>
              </div>

                <div style="padding:5px;">
                  <p style="display:flex;"><b>Feedback: </b></p>
                  <p style="display:flex;"><?php echo $row['CONTENT']; ?></p>
                </div>

              <div class="card-container">
                <div class="card-container">
                  <button class="icon-btn">Delete</button>
                </div>
              </div>
            </div>
          </div>
          <br/>
        <?php
          }}else {
        ?>
          <br/>
          <p>No orders yet</p>
          <br/><br/>
        <?php
          }

          $conn->close();
        ?>

      </div>
    </div>
  </body>
</html>
