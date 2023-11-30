<?php
include_once("lib/database.php");
class uModel extends database
{
	public function Xem_chi_tiet($id)
	{
		$sql="SELECT * FROM user ";
		$sql.="WHERE id=?";
		$this->setQuery($sql);
		$parram=array($id);
		
		return $this->loadRow($parram);	
	}
	
}
?>