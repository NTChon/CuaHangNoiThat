<?php
$id="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	include("../lib/user.php");
	$user=new User();
	$user_cua_ID=$user->Doc_user_theo_id($id);
	
	if(isset($_POST['cap_nhat_user']))
	{
		$ho_ten=$_POST['fullname'];
		$dia_chi=$_POST['address'];
		$sdt=$_POST['phone'];
		$email=$_POST['email'];
		$pass=$_POST['password'];	
		$role=$_POST['role'];
		
		if($ho_ten!="" && $dia_chi !="" && $sdt !="" && $email !="" && $pass!="")
		{
			
			$kq=$user->Cap_nhat_user($id,$email,md5($pass),$ho_ten,$sdt,$dia_chi,$role);
			if($kq)
			{
				echo "<script>alert('Đã Cập nhật!!'); window.location='ds_user.php'</script>";
			}	
		}
		else
		{
			echo "<script>alert('Vui lòng điền đủ thông tin!');</script>";	
		}
	}
	
	
	
}
$view="views/users/v_cap_nhat_user.php";
include("templates/layout.php");
?>