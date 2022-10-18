<?php
$host="localhost";
$user="root";
$password="x20g*K24RtZ1Cq@A";
$db="foodApp";

// Create connection
$conn = new mysqli($servername, $user, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
