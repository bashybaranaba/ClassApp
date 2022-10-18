<?php
include 'connect.php';

$id=$_POST['ID'];
// sql to delete a record
$sql = "DELETE FROM customers WHERE ID= '$id'";

if ($conn->query($sql) === TRUE) {
  echo "User with id No:$id deleted successfully";
  header("Location: ../views/users.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
