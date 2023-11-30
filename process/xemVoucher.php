<?php
include_once("lib/database.php");
class vModel extends database
{
	public function Xem_tat_ca_voucher()
	{
		$sql="SELECT * FROM voucher ";
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	
	
	public function Check_voucherid($id_voucher)
	{
		$sql="SELECT * FROM voucher ";
		$sql.="WHERE id_voucher=?";
		$this->setQuery($sql);
		$parram=array($id_voucher);
		return $this->loadRow($parram);	
    }
    
    public function Check_vouchercode($voucher_code)
	{
		$sql="SELECT * FROM voucher ";
		$sql.="WHERE voucher_code=?";
		$this->setQuery($sql);
		$parram=array($voucher_code);
		return $this->loadRow($parram);	
	}
	
	

}
?>