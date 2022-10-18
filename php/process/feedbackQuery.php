<?php
  include 'connect.php';

  $name=$_POST['name'];
  $email=$_POST['email'];
  $content=$_POST['content'];

  $sql = "INSERT INTO feedback (CUSTOMER_NAME, CUSTOMER_EMAIL, CONTENT ) VALUES ('$name', '$email', '$content')";


  if ($conn->query($sql) === TRUE) {
    echo "Feedback sent successfully ";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
