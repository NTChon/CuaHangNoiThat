<?php
if(isset($_POST['them_user']))
{
	$ho_ten=$_POST['fullname'];
	$dia_chi=$_POST['address'];
	$sdt=$_POST['phone'];
	$email=$_POST['email'];
	$pass=$_POST['password'];	
	$role=$_POST['role'];
	
	if($ho_ten!="" && $dia_chi !="" && $sdt !="" && $email !="" && $pass!="")
	{
		include("../lib/user.php");
		$user=new User();
		$kq=$user->Them_user($email,md5($pass),$ho_ten,$sdt,$dia_chi,$role);
		if($kq)
		{
			echo "<script>alert('Đã Thêm!!'); window.location='ds_user.php'</script>";
		}	
	}
	else
	{
		echo "<script>alert('Vui lòng điền đủ thông tin!');</script>";	
	}
}



//Chèn view hiện thị
$view="views/users/v_them_user.php";
include("templates/layout.php");


?>