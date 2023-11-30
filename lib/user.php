<?php
class User
{
	private $conn="";
	public function __construct()
	{
		$this->conn=mysqli_connect('localhost','root','','noi_that');
		mysqli_set_charset($this->conn,"utf8");
	}
	
	//Thêm user
	public function Them_user($email,$password,$ho_ten,$sdt,$dia_chi,$role)
	{
		$sql="INSERT INTO user ";
		$sql.="VALUES(NULL,'$email','$password','$ho_ten','$sdt','$dia_chi','$role')";
		
		$result=mysqli_query($this->conn,$sql);  //Thực thi được trả về true, ngược lại false
		if($result)   //Nếu thực thi được trả về 1
		{
			return 1;
		}
		return 0;
	}
	
	//Check Tài khoản
	public function Check_user($email,$pass)
	{
		$sql="SELECT * FROM user ";
		$sql.="WHERE email='$email' AND password='$pass'";
		
		$result=mysqli_query($this->conn,$sql);
		if($result) return mysqli_fetch_all($result,MYSQLI_ASSOC);
		return 0;
	}

	public function Check_admin($email,$pass,$role=1)
	{
		$sql="SELECT * FROM user ";
		$sql.="WHERE email='$email' AND password='$pass' AND role='$role'"; 
		
		$result=mysqli_query($this->conn,$sql);
		if($result) return mysqli_fetch_all($result,MYSQLI_ASSOC);
		return 0;
	}
	
	
	//Đọc tất cả user đang có trong database
	public function Doc_tat_ca_user()
	{
		$sql="SELECT * FROM user";
		$result=mysqli_query($this->conn,$sql);// thực thi được $result là true, ngược lại là false
		
		if($result)  //Nếu thực thi được trả về mảng ds các user, trong đó mỗi lần tử là một mảng ---> MẢng 2 chiều  , MYSQLI_ASSOC: đọc theo tên cột
			return mysqli_fetch_all($result,MYSQLI_ASSOC);  
			
	}
	
	
	public function Doc_user_theo_id($id)
	{
		$sql="SELECT * FROM user ";
		$sql.="WHERE id='$id'";
		
		$result=mysqli_query($this->conn,$sql);
		if($result) 
			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		
	}
	
	public function Cap_nhat_user($id,$email,$password,$ho_ten,$sdt,$dia_chi,$role)
	{
		$sql="UPDATE user SET email='$email',password='$password',ho_ten='$ho_ten',so_dien_thoai='$sdt',dia_chi='$dia_chi',role='$role' ";
		$sql.="WHERE id='$id'"; 
		$result=mysqli_query($this->conn,$sql);
		
		if($result) return 1;
		return 0;	
	}
	
	public function Xoa_user($id)
	{
		$sql="DELETE FROM user WHERE id='$id'";
		$result=mysqli_query($this->conn,$sql);
		if($result) return 1;
		return 0;	
	}
	
		
}


//Kiểm tra
/*$user=new User();
$arr=$user->Doc_tat_ca_user();
echo "<pre>";
print_r($arr);
echo "</pre>";
*/
?>