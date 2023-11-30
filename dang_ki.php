<?php
include("lib/user.php");
if(isset($_POST['btn_submit_signup']))
{
	$email=$_POST['email_dang_ky'];
	$pass=$_POST['password_dang_ky'];
	$ho_ten=$_POST['ho_ten_dang_ky'];
	$sdt=$_POST['sdt_dang_ky'];
	$dia_chi=$_POST['dia_chi_dang_ky'];
	
	
	//Kiểm tra người nhập có bỏ trống không
	if($email !="" && $pass !="" && $ho_ten !="" && $sdt !="" && $dia_chi !="")
	{
		$user=new User();
		$kq=$user->Them_user($email,md5($pass),$ho_ten,$sdt,$dia_chi,0); //Đăng kí mặc định 0:thành viên
		if($kq)//Nếu thực thi được thông báo
		{
			echo "<script>alert('Đăng Ký thành công!');window.location='index.php'</script>";	
		}
		else
		{
			echo "<script>alert('Email đã tồn tại!!');window.location='index.php'</script>";	
		}
	}
	else
	{
		echo "<script>alert('Vui lòng điền đầy đủ thông tin!');window.location='index.php'</script>";	
	}
}
?>