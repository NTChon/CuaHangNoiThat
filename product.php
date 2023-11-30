<?php
session_start();

include("process/xemSanPham.php");
include("process/xemLoaiSanPham.php");
$pmodel=new pModel();
$tmodel = new tModel();
$lmodel = new tModel();
$dssp = new pModel();
$allloai = $tmodel->Xem_tat_ca();


$pagecount=1;
$products=0;
$ds_sp=$pmodel->Xem_tat_ca();
$arrtensp = array();
$arrtenloaisp = array();
$arrsp = array();
$i = 0;
if(isset($_GET["search"])){
    $searchlist=$dssp->Tim_san_pham($_GET["search"]);
    foreach($searchlist as $sp){
        $arrtensp[]=$sp->ten_sp;
        $arrsp[$pagecount][] = $sp;
        $i++;
        if($i==8){
            $pagecount++;
            $i=0;
        }
    }
}
else{
    if(isset($_GET["loai"])){
        $loai = $lmodel->Xem_chi_tiet($_GET["loai"]);
        $sploai = $dssp->Xem_theo_loai($loai->id_loai);
        foreach($sploai as $sp){
            $arrtensp[]=$sp->ten_sp;
            $arrsp[$pagecount][] = $sp;
            $i++;
            if($i==8){
                $pagecount++;
                $i=0;
            }
        }
    }

    else{
    foreach($ds_sp as $sp){
        $arrtensp[]=$sp->ten_sp;
        $arrsp[$pagecount][] = $sp;
        $i++;
        if($i==8){
            $pagecount++;
            $i=0;
        }
    }
}
}

$view="views/products/vProduct.php";
include("templates/layout.php");	
?>