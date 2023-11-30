<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
            <div class="col-md-3">
            </div>
                    <div class="col-md-9">
                        <div class="product-breadcroumb">
                            <ul class="breadcrumb">
                                <li><a href=".">Trang Chủ</a></li>
                                <li><a href="product.php">Danh mục</a></li>
                                <li class="active"><?php echo isset($loai)?$loai->ten_loai:"Tất cả sản phẩm";?></li> 
                            </ul>
                        </div>
                    </div>
                </div>
            <div class="row">
                <?php include("list-group.php")?>
            	<?php include("product_list.php")?>
            </div>
            
            <?php include("pagination.php")?>
        </div>
    </div>