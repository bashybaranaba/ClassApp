<?php
session_start();

$itemId = $_POST['ID'];
$remove = array ($itemId);

echo 'Item removed cart:',$itemId , '<br>';



$_SESSION[cart] = array_diff($_SESSION[cart],$remove);

echo 'Cart Items: <br>';

foreach($_SESSION[cart] as $result) {
    echo $result, '<br>';
}

header("Location: ../views/cart.php");

?>
