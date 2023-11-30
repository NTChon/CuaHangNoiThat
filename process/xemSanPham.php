<?php
include_once("lib/database.php");
class pModel extends database
{
	public function Xem_tat_ca($vt=-1,$limit=-1)
	{
		$sql="SELECT * FROM san_pham ";
		if($vt>=0 && $limit>0)
		{
			$sql.="LIMIT $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}
	
	
	public function Xem_chi_tiet($id_sp)
	{
		$sql="SELECT * FROM san_pham ";
		$sql.="WHERE id_sp=?";
		$this->setQuery($sql);
		$parram=array($id_sp);
		
		return $this->loadRow($parram);	
	}
	
	public function Xem_theo_loai($id_loai)
	{
		$sql="SELECT * FROM san_pham ";
		
		$sql.="WHERE id_loai=?";
		$this->setQuery($sql);
		$parram=array($id_loai);
		return $this->loadAllRows($parram);	
	}	
	
	public function Tim_san_pham($ten_sp)
	{
		$sql="SELECT * FROM san_pham WHERE ten_sp like '%$ten_sp%'";
		$this->setQuery($sql);
		
		return $this->loadAllRows();	
	}

}
?>