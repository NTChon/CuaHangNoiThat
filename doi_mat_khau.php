<?php
session_start();
include("lib/user.php");

	
	if(isset($_POST['btn_submit_change_password']))
	{
		$user=new User();
		$user_checker=$user->Doc_user_theo_id($_SESSION['user']['id']);
		
		$mat_khau_hien_tai=$_POST['old_password'];
		$mat_khau_moi=$_POST['new_password'];
		$mat_khau_xac_nhan=$_POST['confirm_new_password'];
		
		
		if($mat_khau_hien_tai!="" && $mat_khau_moi!="" && $mat_khau_xac_nhan!="")
		{
			if(md5($mat_khau_hien_tai) == ($user_checker[0]['password']))
			{
				if($mat_khau_moi == $mat_khau_xac_nhan)
				{
					$kq=$user->Cap_nhat_user($user_checker[0]['id'],$user_checker[0]['email'],md5($mat_khau_moi),$user_checker[0]['ho_ten'],$user_checker[0]['so_dien_thoai'],$user_checker[0]['dia_chi'],$user_checker[0]['role']);
					if($kq)
					{
						echo "<script>alert('Đổi mật khẩu thành công!');window.location='index.php'</script>";
					}
				}//end if check khớp mật khẩu mới và mật khẩu xác nhận
				else
				{
					echo "<script>alert('Mật khẩu mới và mật khẩu xác nhận không khớp!!');window.location='index.php'</script>";	
				}
			}// end if check khớp mật khẩu hiện tại	
			else
			{
				echo "<script>alert('Mật khẩu hiện tại không khớp!');window.location='index.php'</script>";	
			}
		}//end if check null
		else
		{
			echo "<script>alert('Vui lòng điền đầy đủ thông tin để thay đổi mật khẩu!');window.location='index.php'</script>";	
		}
	}

?>