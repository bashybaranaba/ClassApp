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
    </div>


    <div align="center">
      <input type="text" placeholder="Search User..">
      <br/>
      <br/>
      <br/>
      <div class="card" align="center">

        <br/>
        <table>
          <tbody>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th></th>
            </tr>

            <?php
              include '../process/connect.php';

              $sql = "SELECT NAME, EMAIL FROM admin ORDER BY ID DESC";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            ?>
                  <tr align="center">
                    <td><?php echo $row['NAME']; ?></td>
                    <td><?php echo $row['EMAIL']; ?></td>
                    <td><button class="icon-btn">Remove</button></td>
                  </tr>

            <?php
              }}else {
                echo "No customers yet";
              }

              $conn->close();
            ?>
          </tbody>
        </table>
        <br/>
      </div>
      <br/>
    </div>

  </body>
</html>
