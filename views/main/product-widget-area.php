<div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Bán chạy hàng đầu</h2>
                        <a href="product.php" class="wid-view-more">Xem tất cả</a>
                        <?php
                        foreach($ds_sp_ban_chay as $sp_ban_chay)
						{
						?>
                        <div class="single-wid-product">
                            <a href="detail.php?id_sp=<?php echo $sp_ban_chay->id_sp;?>"><img src="img/<?php echo $sp_ban_chay->hinh;?>" alt="" class="product-thumb"></a>
                            <h2><a href="detail.php?id_sp=<?php echo $sp_ban_chay->id_sp;?>"><?php echo $sp_ban_chay->ten_sp?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($sp_ban_chay->don_gia)." "?>₫</ins>
                            </div>                            
                        </div>
                        <?php
						}
						?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Xem Gần Đây</h2>
                        <a href="product.php" class="wid-view-more">Xem tất cả</a>
                        <?php
                        foreach($ds_sp_xem_gan_day as $sp_gan_day)
						{
						?>
                        <div class="single-wid-product">
                            <a href="detail.php?id_sp=<?php echo $sp_gan_day->id_sp;?>"><img src="img/<?php echo $sp_gan_day->hinh;?>" alt="" class="product-thumb"></a>
                            <h2><a href="detail.php?id_sp=<?php echo $sp_gan_day->id_sp;?>"><?php echo $sp_gan_day->ten_sp;?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($sp_gan_day->don_gia)." ";?>₫</ins>
                            </div>                            
                        </div>
                        <?php
						}
						?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Sản phẩm mới</h2>
                        <a href="product.php" class="wid-view-more">Xem tất cả</a>
                        <?php
                        foreach($ds_sp_moi as $sp_moi)
						{
						?>
                        <div class="single-wid-product">
                            <a href="detail.php?id_sp=<?php echo $sp_moi->id_sp;?>"><img src="img/<?php echo $sp_moi->hinh;?>" alt="" class="product-thumb"></a>
                            <h2><a href="detail.php?id_sp=<?php echo $sp_moi->id_sp;?>"><?php echo $sp_moi->ten_sp;?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins><?php echo number_format($sp_moi->don_gia)." ";?>₫</ins> 
                            </div>                            
                        </div>
                        <?php
						}
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>