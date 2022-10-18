<?php
session_start();

$itemId=$_POST['ID'];

echo 'Item added to cart:',$itemId , '<br>';

if(!in_array($itemId, $_SESSION[cart]) ){
  array_push($_SESSION[cart],$itemId);
}

echo 'Cart Items: <br>';

foreach($_SESSION[cart] as $result) {
    echo $result, '<br>';
}

header("Location: ../views/cart.php");

?>
