<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Cập Nhật Tài Khoản</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="quan_tri.php">Trang Chủ</a></li>
              <li><i class="icon_document_alt"></i>Tài Khoản</li>
              <li><i class="fa fa-files-o"></i>Cập Nhật Tài Khoản</li>
            </ol>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Thông Tin Cập Nhật:
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="post" action="">
                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-2">Họ Tên <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="fullname" name="fullname" type="text"  value="<?php echo $user_cua_ID[0]['ho_ten']?>"/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Số Điện Thoại <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="phone" name="phone" type="text"value="<?php echo $user_cua_ID[0]['so_dien_thoai']?>" />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Địa chỉ <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="address" name="address" type="text" value="<?php echo $user_cua_ID[0]['dia_chi']?>" />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="email" name="email" type="email" value="<?php echo $user_cua_ID[0]['email']?>" />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-2">Password <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="password" name="password" type="password" value="<?php echo $user_cua_ID[0]['password']?>" />
                      </div>
                    </div>
                    
                    
                    <div class="form-group ">
                      <label for="agree" class="control-label col-lg-2 col-sm-3">Chức Vụ<span class="required">*</span></label>
                      <div class="col-lg-10 col-sm-9">
                      <?php
                      if($user_cua_ID[0]['role'] ==1 )
					  {
					  ?>
                        <input type="radio" style="width: 20px" class="checkbox form-control" id="agree" name="role" value="0"  />Khách Hàng
                        <input type="radio" style="width: 20px" class="checkbox form-control" id="agree" name="role" value="1" checked />Quản Lý
                        <?php
					  }else
					  {
						?>
                        <input type="radio" style="width: 20px" class="checkbox form-control" id="agree" name="role" value="0" checked />Khách Hàng
                        <input type="radio" style="width: 20px" class="checkbox form-control" id="agree" name="role" value="1"  />Quản Lý
                        <?php
					  }
						?>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit"  name="cap_nhat_user">Cập Nhật</button>
                        <button class="btn btn-default" type="button">Quay Lại</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!-- page end-->