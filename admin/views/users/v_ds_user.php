<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Danh Sách Tài Khoản</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="quan_tri.php">Trang Chủ</a></li>
              <li><i class="fa fa-table"></i>Quản Lý Users</li>
              <li><i class="fa fa-th-list"></i>Danh Sách Tài Khoản</li>
            </ol>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> Họ Tên</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_pin_alt"></i> Địa Chỉ</th>
                    <th><i class="icon_mobile"></i> Số Điện Thoại</th>
                    <th><i class="glyphicon glyphicon-info-sign"></i> Vai Trò</th>
                    <th><i class="icon_cogs"></i> Tác Vụ</th>
                  </tr>
                  
                  <?php
                  foreach($ds_user as $user)
				  {
				  ?>
                  
                  <tr>
                    <td><?php echo $user['ho_ten']?></td>
                    
                    <td><?php echo $user['email']?></td>
                    <td><?php echo $user['dia_chi']?></td>
                    <td><?php echo $user['so_dien_thoai']?></td>
                    <td><?php echo $user['role']==1?"Quản Lý":"Khách Hàng"?></td>
                    <td>
                      <div class="btn-group">
                        
                        <a class="btn btn-success" href="cap_nhat_user.php?id=<?php echo $user['id'] ?>"><i class="glyphicon glyphicon-wrench"></i></a>
                        <a class="btn btn-danger" href="javascript:var result = confirm('Bạn thực sự muốn xóa dữ liệu này?\n Việc này sẽ mất dữ liệu của bạn.\n Bạn chắc chứ?');
                        if (result) {
                            window.location='xoa_user.php?id=<?php echo $user['id']?>'
                        }"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  
                  <?php
				  }
				  ?>
                  
                  
                  
                  
                  
                  
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->