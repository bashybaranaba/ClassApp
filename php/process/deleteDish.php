<?php
include 'connect.php';

$id=$_POST['ID'];
// sql to delete a record
$sql = "DELETE FROM dishes WHERE ID= '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Dish with id No:$id deleted successfully";
  header("Location: ../views/dishes.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
