<?php
  include 'connect.php';

  $email=$_POST['email'];
  $password=$_POST['password'];
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $name=$_POST['name'];

  $sql = "INSERT INTO admin (NAME, EMAIL, PASSWORD) VALUES ('$name', '$email', '$hashed_password')";


  if ($conn->query($sql) === TRUE) {
    echo "Reistration successfull ";
    header("Location: ../views/adminUsers.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
