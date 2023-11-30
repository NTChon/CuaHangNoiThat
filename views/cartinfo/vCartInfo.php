<div class="container">
    <div class="col-md-12">
                        <div class="woocommerce">
                            <form method="post" style="padding-top: 40px;">
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
foreach($xemdonhang as $dh){
    $san_pham = $pmodel->Xem_chi_tiet($dh->id_san_pham);
    $so_luong = $dh->so_luong;
    $tong += $so_luong*$san_pham->don_gia;
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
                                                <p type="hidden" name="dongia<?php echo $san_pham->id_sp; ?>" value="<?php echo $san_pham->don_gia; ?>" />
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">

                                                    <p size="4" id="quantity<?php echo $san_pham->id_sp; ?>" class="p-text qty text"><?php echo $so_luong ?></p>
                                                    
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount" id="sum<?php echo $san_pham->id_sp; ?>"><?php echo number_format($so_luong * $san_pham->don_gia); ?></span>đ
                                            </td>
                                        </tr>
                                        <?php
}
?>
</tbody>
                                </table>
                            </form>
                            
                                <div class="cart-collaterals">
                                    

                                <div class="cart_totals" style="width: 25%">
                                    <h2>Tổng đơn hàng</h2>

                                    <table cellspacing="0">
                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>
                                                    Tổng cộng</th>
                                                <td>
                                                    <span class="cart-amunt"><?php echo number_format($tong); ?> đ</span>
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
            <div style="clear:both"></div>