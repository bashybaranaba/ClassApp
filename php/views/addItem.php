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
      <form action="../process/uploadItem.php" method="post" enctype="multipart/form-data">
        <div align="center">
          <h2>Add new item</h2>
          <br/>
          <div class="container" style="background-color:white">
            <input type="text" placeholder="Title" name="title" required>
            <input type="text" placeholder="Price" name="price" required>
            <h5>Image</h5>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input class="paragraph-input" placeholder="Description" name="description" required>
            <input class="paragraph-input" placeholder="Recipe" name="recipe" rows="5" required>
            <input type="submit" value="ADD">
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
