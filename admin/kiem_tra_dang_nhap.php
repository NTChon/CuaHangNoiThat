<?php
session_start();

if (isset($_POST['btn_dang_nhap'])) {
    $email = $_POST['email_admin'];
    $password = $_POST['pass_admin'];

    // Thông tin đăng nhập cứng (thay đổi theo yêu cầu của bạn)
    $expected_email = "admin@gmail.com";
    $expected_password = "admin";

    if ($email === $expected_email && $password === $expected_password) {
        // Đăng nhập thành công - Lưu thông tin người dùng vào session
        $_SESSION['admin']['ho_ten'] = "Admin";
        $_SESSION['admin']['email'] = $expected_email;
        $_SESSION['admin']['role'] = 1;

        // Chuyển hướng người dùng đến trang quan_tri.php
        header('location: quan_tri.php');
        exit();
    } else {
        // Đăng nhập không thành công
        echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng'); window.location='index.php'</script>";
    }
} else {
    // Nếu không có yêu cầu POST, chuyển hướng về trang đăng nhập
    header('location: index.php');
    exit();
}
?>
