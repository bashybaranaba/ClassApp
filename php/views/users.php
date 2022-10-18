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
              <th>Telephone</th>
              <th>Address</th>
              <th></th>
              <th></th>
            </tr>

            <?php
              include '../process/connect.php';

              $sql = "SELECT ID, NAME, EMAIL, TELEPHONE, ADDRESS FROM customers ORDER BY ID DESC";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
            ?>
                  <tr align="center">
                    <form name="update" method="post" action="../process/updateUser.php">
                      <td><input type="text" value="<?php echo $row['NAME']; ?>" name="name" required /></td>
                      <td><input type="text" value="<?php echo $row['EMAIL']; ?>" name="email" required /></td>
                      <td><input type="text" value="<?php echo $row['TELEPHONE']; ?>" name="telephone" required /></td>
                      <td><input type="text" value="<?php echo $row['ADDRESS']; ?>" name="address" required /></td>
                      <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID" required />
                      <td><button type="submit" class="icon-btn">Update</button></td>
                    </form>
                    <td>
                      <form name="delete" method="post" action="../process/deleteUser.php">
                        <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID" required />
                        <button type="submit" class="icon-btn">Delete</button>
                      </form>
                    </td>
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
