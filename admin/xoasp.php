<?php
$id = "";

// Kiểm tra nếu có tham số id truyền vào
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Include file chứa class Product
    include("../lib/product.php");
    
    // Tạo đối tượng Product
    $product = new Product();
    
    // Thực hiện hàm xóa sản phẩm
    $result = $product->Xoa_san_pham($id);
    
    if ($result) {
        echo "<script>alert('Đã Xóa!'); window.location='ds_sanpham.php'</script>";
    } else {
        echo "<script>alert('Xóa thất bại!'); window.location='ds_sanpham.php'</script>";
    }
} else {
    // Nếu không có tham số id, có thể xử lý hiển thị thông báo hoặc chuyển hướng về trang danh sách sản phẩm
    echo "<script>alert('Thiếu tham số id!'); window.location='ds_sanpham.php'</script>";
}
?>
