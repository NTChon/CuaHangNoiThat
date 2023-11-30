<?php
include("../lib/product.php");

$id_sp = "";
if (isset($_GET['id'])) {
    $id_sp = $_GET['id'];
    $san_pham = new Product();
    $san_pham_info = $san_pham->Doc_san_pham_theo_id($id_sp);

    if (isset($_POST['cap_nhat_san_pham'])) {
        $ten_sp = $_POST['ten_sp'];
        $id_loai = $_POST['id_loai'];
        $don_gia = $_POST['don_gia'];
        $current_image = $_FILES['hinh']['name'];
        $image_tmp = $_FILES['hinh']['tmp_name'];
        // if ($_FILES['hinh']['size'] > 0) {
        //     $new_image = $_FILES['hinh']['name'];
        //     $upload_path = "img/" . $new_image;
        //     // Di chuyển tệp tin hình ảnh mới vào thư mục lưu trữ
        //     move_uploaded_file($_FILES['hinh']['tmp_name'], $upload_path);
        //     $hinh = $new_image;  // Cập nhật tên hình ảnh mới
        // }

        // Validate input data
        if ($ten_sp != "" && $id_loai != "" && $don_gia != "") {
            if ($_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
                $upload_path = "img/" . $current_image;
                move_uploaded_file($image_tmp, $upload_path);
                $result = $san_pham->Doc_tat_ca_san_pham();
                if (!empty($result['hinh'])) {
                    unlink('img/' . $row['logo']);
                }
                // Use prepared statement to update product information
                $kq = $san_pham->Cap_nhat_san_pham($id_sp, $ten_sp, $id_loai, $don_gia, $current_image);

                if ($kq) {
                    echo "<script>alert('Đã cập nhật thông tin sản phẩm.'); window.location='ds_sanpham.php'</script>";
                } else {
                    echo "<script>alert('Có lỗi xảy ra trong quá trình cập nhật.');</script>";
                }
            } else {
                // Use prepared statement to update product information
                $kq = $san_pham->Cap_nhat_san_pham_khong_hinh($id_sp, $ten_sp, $id_loai, $don_gia);

                if ($kq) {
                    echo "<script>alert('Đã cập nhật thông tin sản phẩm.'); window.location='ds_sanpham.php'</script>";
                } else {
                    echo "<script>alert('Có lỗi xảy ra trong quá trình cập nhật.');</script>";
                }
            }
        } else {
            echo "<script>alert('Vui lòng điền đủ thông tin cần thiết.');</script>";
        }
    }
}


$view = "views/sp/v_cap_nhat_sp.php";
include("templates/layout.php");
