<?php
include_once("lib/database.php");
class tModel extends database
{
	public function Xem_tat_ca()
	{
		$sql="SELECT * FROM loai_san_pham";
		$this->setQuery($sql);
		
		return $this->loadAllRows();	
	}
	
	public function Xem_chi_tiet($id_loai)
	{
		$sql="SELECT * FROM loai_san_pham ";
		$sql.="WHERE id_loai=?";
		$this->setQuery($sql);
		$parram=array($id_loai);
		return $this->loadRow($parram);	
	}	
}

?>