<?php
if ((isset($_SESSION["damua"])) && ($_SESSION["count"] != 0)) {
    ?>
<div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            
                                            <th class="product-thumbnail"></th>
                                            <th class="product-name">Tên sản phẩm</th>
                                            <th class="product-price">Đơn giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
foreach ($_SESSION["damua"] as $id_sp) {
        $san_pham = $pModel->Xem_chi_tiet($id_sp);
        ?>
                                        <tr id="tr1" class="cart_item">
                                            

                                            <td class="product-thumbnail">
                                                <a href="detail.php?id_sp=<?php echo $san_pham->id_sp; ?>">
                                                    <img width="145" height="145" alt="error" class="shop_thumbnail" src="img/<?php echo $san_pham->hinh; ?>">
                                                </a>
                                            </td>

                                            <td class="product-name">
                                                <a href="detail.php?id_sp=<?php echo $san_pham->id_sp; ?>"><?php echo $san_pham->ten_sp; ?></a>
                                            </td>

                                            <td class="product-price">
                                                <span id="don_gia" class="amount"><?php echo number_format($san_pham->don_gia) . " "; ?></span>đ
                                                <input type="hidden" name="dongia<?php echo $san_pham->id_sp; ?>" value="<?php echo $san_pham->don_gia; ?>" />
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">

                                                    <p  class="input-text qty text"><?php echo $_SESSION["soluong"][$san_pham->id_sp]; ?></p>
                                                    
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount" id="sum<?php echo $san_pham->id_sp; ?>"><?php echo number_format($_SESSION["soluong"][$san_pham->id_sp] * $san_pham->don_gia); ?></span>đ
                                            </td>
                                        </tr>
                                        <?php
}
    ?>
                                        
                                    </tbody>
                                </table>
                            </form>
                            
                                <div class="cart-collaterals">
                                    

                                <div class="cart_totals ">
                                    <h2>Tổng đơn hàng</h2>

                                    <table cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>
                                                    Tổng cộng</th>
                                                <td>
                                                    <span class="cart-amunt"><?php echo number_format($_SESSION["cart"]); ?> đ</span>
                                                </td>
                                            </tr>


                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
<?php
} else {
    ?>
<div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="checkout.php">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail"></th>
                                            <th class="product-name">Tên sản phẩm</th>
                                            <th class="product-price">Đơn giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <div class="nocart" style="text-align: center;">
                                                    <label>Chưa có sản phẩm trong giỏ hàng </label>
                                                    <a href="product.php">Click vào đây để tham khảo sản phẩm</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
<?php
}
?>
