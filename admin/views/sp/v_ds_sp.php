<?php
include("../lib/product.php");

$product = new Product();
$ds_san_pham = $product->Doc_tat_ca_san_pham();

// Số sản phẩm trên mỗi trang
$so_san_pham_tren_trang = 10;

// Tính toán số trang
$tong_so_trang = ceil(count($ds_san_pham) / $so_san_pham_tren_trang);

// Xác định trang hiện tại
$trang_hien_tai = isset($_GET['page']) ? $_GET['page'] : 1;

// Chia danh sách thành các trang
$ds_san_pham_theo_trang = array_chunk($ds_san_pham, $so_san_pham_tren_trang);

// Lấy danh sách sản phẩm cho trang hiện tại
$ds_san_pham_hien_tai = isset($ds_san_pham_theo_trang[$trang_hien_tai - 1]) ? $ds_san_pham_theo_trang[$trang_hien_tai - 1] : [];
?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table"></i> Danh Sách Sản Phẩm</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="quan_tri.php">Trang Chủ</a></li>
            <li><i class="fa fa-table"></i>Quản Lý Sản Phẩm</li>
            <li><i class="fa fa-th-list"></i>Danh Sách Sản Phẩm</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <table class="table table-striped table-advance table-hover">
                <thead>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>ID Loại</th>
                        <th>Đơn Giá</th>
                        <th>Hình Ảnh</th>
                        <th>Tác Vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ds_san_pham_hien_tai as $san_pham) : ?>
                        <tr>
                            <td><?php echo $san_pham['ten_sp']; ?></td>
                            <td><?php echo $san_pham['id_loai']; ?></td>
                            <td><?php echo number_format($san_pham['don_gia'], 2); ?> VND</td>
                            <td><img src="img/<?php echo $san_pham['hinh']; ?>" alt="Hình sản phẩm"></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-success" href="cap_nhat_san_pham.php?id=<?php echo $san_pham['id_sp']; ?>"><i class="glyphicon glyphicon-wrench"></i></a>
                                        <a class="btn btn-danger" href="javascript:var result = confirm('Bạn thực sự muốn xóa dữ liệu này?\n Việc này sẽ mất dữ liệu của bạn.\n Bạn chắc chứ?');
                                        if (result) {
                                            window.location='xoasp.php?id=<?php echo $san_pham['id_sp']; ?>'
                                        }"><i class="icon_close_alt2"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- Phân trang -->
            <ul class="pagination justify-content-center" style="margin-top: 10px;">
                <?php for ($i = 1; $i <= $tong_so_trang; $i++) : ?>
                    <li class="<?php echo ($i == $trang_hien_tai) ? 'active' : ''; ?>"><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </section>
    </div>
</div>
