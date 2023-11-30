<?php
@session_start();
$id_sp=$_POST["id_sp"];

if(isset($_SESSION["damua"][$id_sp])){
    unset($_SESSION["damua"][$id_sp]);

    $_SESSION["cart"] -= (($_SESSION["soluong"][$id_sp])*($_SESSION["dongia"][$id_sp]));
    unset($_SESSION["soluong"][$id_sp]);
    unset($_SESSION["dongia"][$id_sp]);
    $_SESSION["count"] -=1;

echo "<pre>";
print_r($_SESSION["damua"]);
}
?>