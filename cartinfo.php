<?php
session_start();
if(isset($_GET["donhang"])){

$donhang=$_GET["donhang"];

include("process/xemSanPham.php");
$pmodel=new pModel();
include("process/xemDonHang.php");
$dmodel=new dModel();
$tong = 0;
$xemdonhang = $dmodel->Xem_chi_tiet($donhang);

$view="views/cartinfo/vCartInfo.php";
include("templates/layout.php");
}	
?>