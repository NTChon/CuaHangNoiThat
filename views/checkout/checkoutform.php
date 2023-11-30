<div class="col-md-4">
  <div id="customer_details" class="col2-set">
    <div class="col-1">
      <div class="woocommerce-billing-fields">
        <h3>Thông tin giao hàng</h3>
        <form  method="post">
        
          <p id="billing_first_name_field" class="form-row form-row-first validate-required">
            <!--<label class="" for="billing_first_name">First Name <abbr title="required" class="required">*</abbr> </label>-->
            <input type="text" value="<?php echo isset($_SESSION['user'])?$user_check->ho_ten:""?>" placeholder="Họ và tên" id="billing_first_name" name="billing_name" class="input-text ">
          </p>
          
          <div class="clear"></div>
          <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
            <!--<label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr> </label>-->
            <input type="text" value="<?php echo isset($_SESSION['user'])?$user_check->email:""?>" placeholder="Email" id="billing_email" name="billing_email" class="input-text ">
          </p>
          <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
            <!--<label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr> </label>-->
            <input type="text" value="<?php echo isset($_SESSION['user'])?$user_check->so_dien_thoai:""?>" placeholder="Số điện thoại" id="billing_phone" name="billing_phone" class="input-text ">
          </p>
          <div class="clear"></div>
          <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
            <!--<label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr> </label>-->
            <input type="text" value="<?php echo isset($_SESSION['user'])?$user_check->dia_chi:""?>" placeholder="Địa chỉ" id="billing_address_1" name="billing_address" class="input-text ">
          </p>
            
          <p id="order_comments_field" class="form-row notes">
                        <textarea cols="5" rows="2" placeholder="Ghi chú đơn hàng" id="order_comments" class="input-text " name="order_comments"></textarea>
                      </p> 
            
            <button type="submit" name="btn_thanhtoan" formaction="process/thanhToan.php">Gửi</button>
          </form>
      </div>
    </div>
  </div>
</div>

                            