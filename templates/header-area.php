<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-phone"></i> 0567872002</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>thachnam001@gmail.com</a></li>
                            <!-- <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li> -->
                            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <li><a href="checkout.php"><i class="fa fa-credit-card"></i> Thanh toán</a></li>
                            <!-- tài khoản -->
                            <?php
                            if(isset($_SESSION['user']['ho_ten']))
							{
							?>
							<li>
                                <ul class="list-unstyled list-inline">
                                        <li class="dropdown dropdown-small">
                                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#" id="hien_thi_tai_khoan"><i class="fa fa-user"></i> <?php echo "Chào,".$_SESSION['user']['ho_ten']?></a>
                                            <ul class="dropdown-menu con">
                                                <li><a data-toggle="modal" data-target="#myDoiMatKhau">Đổi mật khẩu</a></li>
                                                <li><a href="javascript:var r=confirm('Bạn muốn đăng xuất?');if(r==true) window.location='dang_xuat.php'">Đăng Xuất</a></li>
                                                
                                            </ul> 
                                        </li>
    
                                </ul>
                                </li>	
                                <?php	
                                }
                                else
                                {
                                ?>
                                <li>
                                    <ul class="list-unstyled list-inline">
                                        <li class="dropdown dropdown-small">
                                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-user"></i> Tài khoản</a>
                                            <ul class="dropdown-menu con">
                                                <li><a data-toggle="modal" data-target="#myDangNhap"><i class="fa fa-sign-in"></i> Đăng Nhập</a></li>
                                                <li><a data-toggle="modal" data-target="#myDangkY"><i class="fa fa-user-plus"></i> Đăng Ký</a></li>
                                                
                                            </ul> 
                                        </li>
    
                                </ul>
                            </li>
                            <?php
							}
							?>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>