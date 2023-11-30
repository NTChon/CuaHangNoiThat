<?php
session_start();

include("process/xemSanPham.php");
include("process/xemUser.php");
$pModel=new pModel();
$uModel=new uModel();
if(isset($_SESSION['user'])){
    $user_check = $uModel->Xem_chi_tiet($_SESSION['user']['id']);
}
$timsp = new pModel();
$ds_sp=$timsp->Xem_tat_ca();
$arrtensp = array();
foreach($ds_sp as $sp){
    $arrtensp[]=$sp->ten_sp;
}
$view="views/checkout/vCheckout.php";
include("templates/layout.php");	
?>