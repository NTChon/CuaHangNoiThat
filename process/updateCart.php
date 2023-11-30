<?php
session_start();
$id_sp = $_POST["id"];
$soluong = $_POST["soluong"];
$dongia = $_SESSION["dongia"][$id_sp];
if($soluong >0){
    if ($soluong > $_SESSION["soluong"][$id_sp] ) {
        $_SESSION["cart"] += ($dongia * ($soluong-$_SESSION["soluong"][$id_sp]));
        unset($_SESSION["soluong"][$id_sp]);
        $_SESSION["soluong"][$id_sp] = $soluong;      
    }
    else {
        $_SESSION["cart"] -= ($dongia * (($_SESSION["soluong"][$id_sp])-$soluong));
        unset($_SESSION["soluong"][$id_sp]);
        $_SESSION["soluong"][$id_sp] = $soluong;
    }
}
$cart = number_format($_SESSION["cart"]);
$count = $_SESSION["count"];
$total = number_format($soluong*$dongia);
echo json_encode(array($cart, $count, $total));
