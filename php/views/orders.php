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
      </div>

      <div align="center">
        <input type="text" placeholder="Search Order..">
        <br/><br/><br/>

        <div class="card" align="center">
          <br/>
          <table>
            <tbody>
              <tr>
                <th>Name</th>
                <th>Telephone</th>
                <th>Address</th>
                <th>Cost</th>
                <th>Status</th>
                <th></th>
                <th></th>
              </tr>

              <?php
                include '../process/connect.php';

                $results_per_page = 10;

                $sql = "SELECT * FROM orders ORDER BY ID DESC";
                $result = $conn->query($sql);

                $number_of_result = $result->num_rows;

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
              ?>
                <tr align="center">
                  <td><?php echo $row['CUSTOMER_NAME']; ?></td>
                  <td><?php echo $row['CUSTOMER_TELEPHONE']; ?></td>
                  <td><?php echo $row['CUSTOMER_ADRESS']; ?></td>
                  <td><?php echo $row['COST']; ?></td>
                  <td><?php echo $row['STATUS']; ?></td>
                  <td>
                    <form name="details" method="post" action="viewOrderDetails.php">
                      <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID" required />
                      <button type="submit" class="icon-btn">View Details</button>
                    </form>
                  </td>
                  <td>
                    <?php
                      if ($row['STATUS']=== "completed"){
                    ?>
                    <form name="delete" method="post" action="../process/deleteOrder.php">
                      <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID" required />
                      <button type="submit" class="icon-btn">Delete</button>
                    </form>
                    <?php
                      }
                      else{
                    ?>
                    <form name="delete" method="post" action="../process/processOrder.php">
                      <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID" required />
                      <button type="submit" class="icon-btn">Complete</button>
                    </form>
                    <?php
                      }
                    ?>
                  </td>
                </tr>
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
            </tbody>
          </table>
          <br/>
        </div>
      </div>

    </div>
  </body>
</html>
