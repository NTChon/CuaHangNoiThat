<?php
session_start();
$id_sp = $_POST["id"];
$soluong = $_POST["soluong"];
$dongia = $_POST["dongia"];

if ($soluong > 0) {
    if (isset($_SESSION["damua"][$id_sp])) {
        $_SESSION["soluong"][$id_sp] += $soluong;
        $_SESSION["dongia"][$id_sp] = $dongia;
        if (isset($_SESSION["cart"])) {
            $_SESSION["cart"] += ($dongia * $soluong);
        } else {
            $_SESSION["cart"] = ($dongia * $soluong);
        }

    } else {
        $_SESSION["damua"][$id_sp] = $id_sp;
        $_SESSION["soluong"][$id_sp] = $soluong;
        $_SESSION["dongia"][$id_sp] = $dongia;
        if (isset($_SESSION["cart"])) {
            $_SESSION["cart"] += ($dongia * $soluong);
        } else {
            $_SESSION["cart"] = ($dongia * $soluong);
        }

        if (isset($_SESSION["count"])) {
            $_SESSION["count"] += 1;
        } else {
            $_SESSION["count"] = 1;
        }
    }
}
$cart = number_format($_SESSION["cart"]);
$count = $_SESSION["count"];
echo json_encode(array($cart, $count));
