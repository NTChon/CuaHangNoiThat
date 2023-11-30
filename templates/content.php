<div class="main">
<!--Form đăng ký - đăng nhập - đổi mật khẩu-->

  <!-- The Modal -->
  <!--Đăng nhập --->
  <div class="modal" id="myDangNhap">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Đăng Nhập</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
         <form method="post" action="dang_nhap.php">
        <div class="modal-body">
       
         	<div class="form-group">
              <label for="email_dang_nhap">Email:</label>
              <input type="text" class="form-control" id="email_dang_nhap" name="email_dang_nhap">
            </div>
            <div class="form-group">
              <label for="password_dang_nhap">Password:</label>
              <input type="password" class="form-control" id="password_dang_nhap" name="password_dang_nhap">
			</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer" style="text-align:center">
          <button type="submit" class="btn btn-danger" name="btn_submit_login" >Đăng Nhập</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--ENd Đăng Nhập--->
  <!-- Đăng Kí-->
  <div class="modal" id="myDangkY">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Đăng Ký</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        	<form action="dang_ki.php" method="post">
         	<div class="form-group">
              <label for="email_dang_ky">Email:</label>
              <input type="text" class="form-control" id="email-dang_ky" name="email_dang_ky"/>
            </div>
            <div class="form-group">
              <label for="password_dang_ky">Password:</label>
              <input type="password" class="form-control" id="password_dang_ky" name="password_dang_ky"/>
			</div>
            <div class="form-group">
              <label for="ho_ten_dang_ky">Họ tên:</label>
              <input type="text" class="form-control" id="ho_ten_dang_ky" name="ho_ten_dang_ky"/>
            </div>
            <div class="form-group">
              <label for="sdt_dang_ky">Số điện thoại:</label>
              <input type="text" class="form-control" id="sdt_dang_ky" name="sdt_dang_ky"/>
            </div>
            <div class="form-group">
              <label for="dia_chi_dang_ky">Địa chỉ:</label>
              <input type="text" class="form-control" id="dia_chi_dang_ky" name="dia_chi_dang_ky"/>
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer" style="text-align:center">
          <button type="submit" class="btn btn-danger"  name="btn_submit_signup">Đăng Ký</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Đăng Kí -->
  
  
  <!--Đổi mật khẩu--->
 <div class="modal" id="myDoiMatKhau">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Đổi mật khẩu</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
         <form method="post" action="doi_mat_khau.php">
        <div class="modal-body">
            <div class="form-group">
              <label for="old_password">Current password:</label>
              <input type="password" class="form-control" id="old_password" name="old_password">
			</div>
            <div class="form-group">
              <label for="new_password">New password:</label>
              <input type="password" class="form-control" id="new_password" name="new_password">
			</div>
            <div class="form-group">
              <label for="confirm_new_password">Confirm new password:</label>
              <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password">
			</div>
        </div>
        <div class="row">
            <div class="col-sm-12">
            	<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;margin-left:10px"></span> Trùng khớp
            </div>
		</div>
        <!-- Modal footer -->
        <div class="modal-footer" style="text-align:center">
          <button type="submit" class="btn btn-danger" name="btn_submit_change_password" >Đổi mật khẩu</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--End Đổi mật khẩu--->
</div>    
<script>
$("input[type=password]").keyup(function(){

	if($("#new_password").val() == $("#confirm_new_password").val()){
		$("#pwmatch").removeClass("glyphicon-remove");
		$("#pwmatch").addClass("glyphicon-ok");
		$("#pwmatch").css("color","#00A41E");
	}else{
		$("#pwmatch").removeClass("glyphicon-ok");
		$("#pwmatch").addClass("glyphicon-remove");
		$("#pwmatch").css("color","#FF0004");
	}
});
</script>
<!--Form đăng ký - đăng nhập - đổi mật khẩu-->


<!-- <div id="chinh_sach_doi_tra" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:80%;"> -->

    <!-- Modal content-->
    <!-- <div class="modal-content" style="width:100%;">
      
      <div class="modal-body">
        <embed src="public/document/CHÍNH SÁCH ĐỔI TRẢ.pdf" width="100%" height="600px"> 
      </div>
      
    </div>

  </div>
</div> -->
<?php 
//Thay đổi view
if(isset($view))
{
	include($view); 
}
?>
</div>