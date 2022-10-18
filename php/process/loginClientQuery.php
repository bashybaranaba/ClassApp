<?php
include 'connect.php';

$email=$_POST['email'];
$password=$_POST['password'];

$sql = "SELECT * FROM customers WHERE EMAIL= '$email'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()){
      if(password_verify($password, $row['PASSWORD'])) {
        session_start();
        echo "Login successfull ";
          $_SESSION["clientLoggedin"] = true;
          $_SESSION["userId"] = $row['ID'];
          $_SESSION["name"] = $row['NAME'];
          $_SESSION["telephone"] = $row['TELEPHONE'];
          $_SESSION["address"] = $row['ADDRESS'];
          $_SESSION["email"] = $row['EMAIL'];
          $_SESSION["firstlogin"] = $row['LOGGED_IN'];
          $_SESSION[cart] = array();

          $id= $row['ID'];
          $sql = "UPDATE customers SET LOGGED_IN=1 WHERE ID='$id' ";
          if ($conn->query($sql) === TRUE) {
            echo "User with id No:$id Record updated successfully";
          } else {
            echo "Error updating record: " . $conn->error;
          }
          header("Location: ../views/welcome.php");
        }else {
          echo "Invalid email or password "  . $conn->error;
          echo $row['PASSWORD'];
        }
    }

} else {
  echo "Invalid email or password "  . $conn->error;
}

$conn->close();

?>
