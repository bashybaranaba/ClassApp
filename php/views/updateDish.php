<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="../../css/style.css">
    </head>
  </body>
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
    </div>
    <div>
      <form action="../process/updateDish.php" method="post" enctype="multipart/form-data">
        <div align="center">
          <h2>Edit Dish</h2>
          <br/>
          <?php
            include '../process/connect.php';

            $id=$_POST['ID'];

            $sql = "SELECT * FROM dishes O WHERE ID='$id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
          ?>
          <div class="container" style="background-color:white">
            <input type="text" value="<?php echo $row['NAME']; ?>" name="title" required>
            <input type="text" value="<?php echo $row['PRICE']; ?>" name="price" required>
            <input class="paragraph-input" value="<?php echo $row['DESCRIPTION']; ?>" name="description" required>
            <h5>Image</h5>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input class="paragraph-input" value="<?php echo $row['RECIPE']; ?>" name="recipe" required>
            <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID" required />
            <input type="submit" value="UPDATE">
          </div>
          <?php
            }}else {
              echo "Something went wrong";
            }

            $conn->close();
          ?>
        </div>
      </form>
    </div>
  </body>
</html>
