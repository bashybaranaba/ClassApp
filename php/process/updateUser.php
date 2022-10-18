<?php
include 'connect.php';

$email=$_POST['email'];
$name=$_POST['name'];
$telephone=$_POST['telephone'];
$address=$_POST['address'];
$id=$_POST['ID'];

$sql = "UPDATE customers SET NAME='$name' , EMAIL='$email' , TELEPHONE= '$telephone', ADDRESS='$address' WHERE ID='$id' ";

if ($conn->query($sql) === TRUE) {
  echo "User with id No:$id Record updated successfully";
  header("Location: ../views/users.php");

} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
