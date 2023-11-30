<?php
session_start();
include("process/xemVoucher.php");
$vModel=new vModel();
$voucher_code = $_POST["voucher_code"];
$code = $vModel -> Check_vouchercode($voucher_code);
echo json_encode(arr($code->voucher_value));
// if (isset($_SESSION["discount"])){
//     echo json_encode(array(1));
// }
// $_SESSION["discount"]=$code->voucher_value*10000;