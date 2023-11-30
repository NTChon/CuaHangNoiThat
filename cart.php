<?php
session_start();

include("process/xemSanPham.php");
$pModel=new pModel();

$timsp = new pModel();
$ds_sp=$timsp->Xem_tat_ca();
$arrtensp = array();
foreach($ds_sp as $sp){
    $arrtensp[]=$sp->ten_sp;
}
$view="views/cart/vCart.php";
include("templates/layout.php");	
?>