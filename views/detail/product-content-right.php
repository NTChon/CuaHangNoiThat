<div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <ul class="breadcrumb">
                                <li><a href=".">Trang Chủ</a></li>
                                <li><a href="product.php?loai=<?php echo $loai_san_pham->id_loai; ?>"><?php echo $loai_san_pham->ten_loai; ?></a></li>
                                <li class="active"><?php echo $san_pham->ten_sp; ?></li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-sm-5">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="img/<?php echo $san_pham->hinh; ?>" alt="">
                                    </div>
                                        </div>
                            </div>

                            <div class="col-sm-7">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $san_pham->ten_sp; ?></h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo number_format($san_pham->don_gia) . " "; ?>₫</ins>
                                    </div>

                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1" id="soluong<?php echo $san_pham->id_sp; ?>">
                                            <input type="hidden" id="dongia<?php echo $san_pham->id_sp; ?>" value="<?php echo $san_pham->don_gia; ?>" />
                                        </div>

                                        <button class="add_to_cart_button" type="button" id="<?php echo $san_pham->id_sp; ?>">Thêm vào giỏ</button>
                                    </form>

                                    <div class="product-inner-category">
                                        <p>Danh mục: <a href=""><?php echo $loai_san_pham->ten_loai; ?></a>.</p>
                                    </div>






                                        <!--Nội dung Đánh giá -->

                                            </div>
                                    </div>

                                </div>
                            </div>
                            <div class="submit-review">
                            <h3 role="presentation">Đánh giá</h3>
                                                <div class="fb-comments" data-href="http://www.nhdecor.tk/detail.php?id_sp=<?php echo $san_pham->id_sp;?>" data-numposts="5"></div>
                                                </div>
                                            </div>
                        </div>


                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Sản phẩm Khác</h2>
                            <div class="related-products-carousel">
                            <?php
foreach ($san_pham_khac as $sp_khac) {
    ?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/<?php echo $sp_khac->hinh; ?>" alt="">
                                        <div class="product-hover">
                                        <input type="hidden" id="soluong<?php echo $sp_khac->id_sp; ?>" value="1" />
                                        <input type="hidden" id="dongia<?php echo $sp_khac->id_sp; ?>" value="<?php echo $sp_khac->don_gia; ?>" />
                                            <a href="" class="add-to-cart-link" id="<?php echo $sp_khac->id_sp ?>"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
                                            <a href="detail.php?id_sp=<?php echo $sp_khac->id_sp; ?>" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                                        </div>
                                    </div>

                                    <h2><a href="detail.php?id_sp=<?php echo $sp_khac->id_sp; ?>"><?php echo $sp_khac->ten_sp; ?></a></h2>

                                    <div class="product-carousel-price">
                                        <ins><?php echo number_format($sp_khac->don_gia) . " "; ?>₫</ins>
                                    </div>
                                </div>
                            <?php
}
?>
                            </div>
                        </div>
                    </div>
                </div>