<?php
  include 'connect.php';

  $email=$_POST['email'];
  $password=$_POST['password'];
  $name=$_POST['name'];
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $telephone=$_POST['telephone'];
  $address=$_POST['address'];


  $sql = "INSERT INTO customers (NAME, EMAIL, PASSWORD, TELEPHONE, ADDRESS) VALUES ('$name', '$email', '$hashed_password', '$telephone', '$address')";


  if ($conn->query($sql) === TRUE) {
    echo "Reistration successfull ";
      header("Location: ../views/loginClient.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
