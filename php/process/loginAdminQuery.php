<?php

include 'connect.php';

$email=$_POST['email'];
$password=$_POST['password'];

$sql = "SELECT * FROM admin WHERE EMAIL= '$email'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()){
    $hashed_password = $row['PASSWORD'];
    if(password_verify($password, $hashed_password)) {
      session_start();
      echo "Login successfull ";
      $_SESSION["adminLoggedin"] = true;
      $_SESSION["adminName"] = $row['NAME'];
      $_SESSION["adminEmail"] = $row['EMAIL'];
      header("Location: ../views/users.php");
      }else {
        echo "Invalid  password "  . $conn->error;
      }
  }

} else {
  echo "Invalid email or password "  . $conn->error;
}

$conn->close();

?>
