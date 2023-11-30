<div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <h1><a href="."><i class="fa fa-home"></i> <span>NH Decor<span></a></h1>
                    </div>
                </div>
                
                <?php include("search.php")?>
                
                <div class="col-sm-4">
                    <div class="shopping-item">
                        <a href="cart.php">Giỏ hàng - <span class="cart-amunt"><?php echo isset($_SESSION["cart"])?number_format($_SESSION["cart"]):0?> ₫</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo isset($_SESSION["count"])?$_SESSION["count"]:0?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>