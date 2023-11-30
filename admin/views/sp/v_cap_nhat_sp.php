<!-- Form HTML -->
<form class="form-validate form-horizontal" id="update_product_form" method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label for="ten_sp" class="control-label col-lg-2">Tên Sản Phẩm <span class="required">*</span></label>
        <div class="col-lg-10">
            <input class="form-control" id="ten_sp" name="ten_sp" type="text" value="<?php echo $san_pham_info[0]['ten_sp']; ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="id_loai" class="control-label col-lg-2">ID Loại <span class="required">*</span></label>
        <div class="col-lg-10">
            <input class="form-control" id="id_loai" name="id_loai" type="text" value="<?php echo $san_pham_info[0]['id_loai']; ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="don_gia" class="control-label col-lg-2">Đơn Giá <span class="required">*</span></label>
        <div class="col-lg-10">
            <input class="form-control" id="don_gia" name="don_gia" type="text" value="<?php echo $san_pham_info[0]['don_gia']; ?>" />
        </div>
    </div>

    <div class="form-group">
        <label for="hinh" class="control-label col-lg-2">Hình</label>
        <div class="col-lg-10">
            <input class="form-control" id="hinh" name="hinh" type="file" accept="image/*" />
            <input type="hidden" name="current_image" value="<?php echo $san_pham_info[0]['hinh']; ?>" />
            <img src="img/<?php echo $san_pham_info[0]['hinh']; ?>" alt="Current Image" width="100" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
            <button class="btn btn-primary" type="submit" name="cap_nhat_san_pham">Cập Nhật</button>
            <button class="btn btn-default" type="button">Quay Lại</button>
        </div>
    </div>
</form>