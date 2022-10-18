<?php
include 'connect.php';

$id=$_POST['ID'];

$sql = "UPDATE orders SET STATUS='completed' WHERE ID='$id' ";

if ($conn->query($sql) === TRUE) {
  echo "Order with id No:$id has been processed successfully";
  header("Location: ../views/orders.php");

} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
