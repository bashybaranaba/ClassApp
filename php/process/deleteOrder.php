<?php
include 'connect.php';

$id=$_POST['ID'];
// sql to delete a record
$sql = "DELETE FROM orders WHERE ID= '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Order with id No:$id deleted successfully";
  header("Location: ../views/orders.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
