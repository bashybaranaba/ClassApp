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

        <br/>
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
                <h4> Price: Kes <?php echo $row['PRICE']; ?></h4>
                <div style="display:flex">
                  <form name="delete" method="post" action="updateDish.php">
                    <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID" required />
                    <button type="submit" class="icon-btn">Edit Dish</button>
                  </form>
                  <form name="delete" method="post" action="../process/deleteDish.php">
                    <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID" required />
                    <button type="submit" class="icon-btn">Delete</button>
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
      </div>
    </div>
  </body>
</html>
