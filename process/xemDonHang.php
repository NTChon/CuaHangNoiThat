<?php
include_once("lib/database.php");
class dModel extends database
{
	public function Xem_chi_tiet($id_don_hang)
	{
		$sql="SELECT * FROM ct_don_hang ";
		$sql.="WHERE id_don_hang=?";
		$this->setQuery($sql);
		$parram=array($id_don_hang);
		
		return $this->loadAllRows($parram);	
	}
	
}
?>