<?php
include("../lib/product.php");

$product = new Product();

if (isset($_POST['them_san_pham'])) {
    // Lấy dữ liệu từ form
    $ten_sp = $_POST['ten_sp'];
    $id_loai = $_POST['id_loai'];
    $don_gia = $_POST['don_gia'];

    // Xử lý upload hình ảnh (chú ý: cần thêm phần xử lý upload)
    $hinh_anh = $_FILES['hinh_anh']['name'];
    $target_path = "img/"; // Đường dẫn lưu trữ hình ảnh
    $target_file = $target_path . basename($_FILES['hinh_anh']['name']);

    // Nếu muốn xử lý upload hình ảnh, bạn cần thêm phần xử lý tại đây

    // Thêm sản phẩm vào database
    $result = $product->Them_san_pham($ten_sp, $id_loai, $don_gia, $hinh_anh);
    
    if ($result) {
        echo '<script>alert("Thêm sản phẩm thành công!");</script>';
    } else {
        echo '<script>alert("Thêm sản phẩm thất bại!");</script>';
    }
}
?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-files-o"></i> Thêm Sản Phẩm</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="quan_tri.php">Trang Chủ</a></li>
            <li><i class="icon_document_alt"></i>Sản Phẩm</li>
            <li><i class="fa fa-files-o"></i>Thêm Sản Phẩm</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thông Tin Tạo Mới:
            </header>
            <div class="panel-body">
                <div class="form">
                    <form class="form-validate form-horizontal" id="add_product_form" method="post" action="" enctype="multipart/form-data">
                        <!-- Các trường thông tin sản phẩm -->
                        <!-- Tên sản phẩm -->
                        <div class="form-group">
                            <label for="ten_sp" class="control-label col-lg-2">Tên Sản Phẩm <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="ten_sp" name="ten_sp" type="text" required />
                            </div>
                        </div>

                        <!-- ID Loại -->
                        <div class="form-group">
                            <label for="id_loai" class="control-label col-lg-2">ID Loại <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="id_loai" name="id_loai" type="text" required />
                            </div>
                        </div>

                        <!-- Đơn giá -->
                        <div class="form-group">
                            <label for="don_gia" class="control-label col-lg-2">Đơn Giá <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control" id="don_gia" name="don_gia" type="text" required />
                            </div>
                        </div>

                        <!-- Hình ảnh -->
                        <div class="form-group">
                            <label for="hinh_anh" class="control-label col-lg-2">Hình Ảnh</label>
                            <div class="col-lg-10">
                                <input type="file" name="hinh_anh" id="hinh_anh" accept="image/*" />
                            </div>
                        </div>

                        <!-- Nút Thêm -->
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit" name="them_san_pham">Thêm</button>
                                <button class="btn btn-default" type="button">Quay Lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
