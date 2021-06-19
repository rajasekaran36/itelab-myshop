<?php
session_start();
$cart = $_SESSION["cart"];
if(!empty($cart)){
    array_push($cart,$_GET["product"]);
    echo "not empty";
}
else{
    $cart = array();
    array_push($cart,$_GET["product"]);
    $_SESSION["cart"] = $cart;
    echo "empty";
}
print_r($cart);
?>