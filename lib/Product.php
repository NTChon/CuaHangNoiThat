<?php
class Product
{
    private $conn = "";

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', '', 'noi_that');
        mysqli_set_charset($this->conn, "utf8");
    }

    // Thêm sản phẩm
    public function Them_san_pham($ten_sp, $id_loai, $don_gia, $hinh)
    {
        $sql = "INSERT INTO san_pham (ten_sp, id_loai, don_gia, hinh) ";
        $sql .= "VALUES('$ten_sp', '$id_loai', '$don_gia', '$hinh')";

        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            return 1;
        }
        return 0;
    }

    // Đọc tất cả sản phẩm
    public function Doc_tat_ca_san_pham()
    {
        $sql = "SELECT * FROM san_pham";
        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
    }

    // Đọc sản phẩm theo ID
    public function Doc_san_pham_theo_id($id)
    {
        $sql = "SELECT * FROM san_pham ";
        $sql .= "WHERE id_sp='$id'";

        $result = mysqli_query($this->conn, $sql);
        if ($result)
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    // Cập nhật sản phẩm
    public function Cap_nhat_san_pham($id, $ten_sp, $id_loai, $don_gia, $hinh)
    {
        $sql = "UPDATE san_pham SET ten_sp='$ten_sp', id_loai='$id_loai', don_gia='$don_gia', hinh='$hinh' ";
        $sql .= "WHERE id_sp='$id'";
        $result = mysqli_query($this->conn, $sql);

        if ($result) return 1;
        return 0;
    }
    public function Cap_nhat_san_pham_khong_hinh($id, $ten_sp, $id_loai, $don_gia)
    {
        $sql = "UPDATE san_pham SET ten_sp='$ten_sp', id_loai='$id_loai', don_gia='$don_gia'";
        $sql .= "WHERE id_sp='$id'";
        die($sql);
        $result = mysqli_query($this->conn, $sql);

        if ($result) return 1;
        return 0;
    }

    // Xóa sản phẩm
    public function Xoa_san_pham($id)
    {
        $sql = "DELETE FROM san_pham WHERE id_sp='$id'";
        $result = mysqli_query($this->conn, $sql);
        if ($result) return 1;
        return 0;
    }
}

// Kiểm tra
/*$product = new Product();
$arr = $product->Doc_tat_ca_san_pham();
echo "<pre>";
print_r($arr);
echo "</pre>";*/
