<?php 
    session_start();
    include ("Mailer.php");
    if (isset($_SESSION["damua"])){
        if (isset($_POST['btn_thanhtoan']))
        {
            require_once("../lib/connect_db.php");

            $email = $_POST['billing_email'];
            $comment = $_POST['order_comments'];
            $name = $_POST['billing_name'];
            $sdt = $_POST['billing_phone'];
            $add = $_POST['billing_address'];
            $sql = "INSERT INTO khach_hang values(NULL, '$name', '$sdt', '$email', '$add')";
            $res=mysqli_query($conn, $sql);
            $last_id = mysqli_insert_id($conn);
            $sql = "INSERT INTO don_hang values(NULL, $last_id, '$comment', 'chưa thanh toán')";    
            $res=mysqli_query($conn, $sql);
            $last_id = mysqli_insert_id($conn);
            $id_donhang = $last_id;
            foreach ($_SESSION["damua"] as $id_sp) {
                $soluong = $_SESSION["soluong"][$id_sp];
                $sql = "INSERT INTO ct_don_hang values($last_id, $id_sp, $soluong)";
                $conn->query($sql);
            }
            $mail = Mailer::  Gui_lien_he("Thanh toán đơn hàng $id_donhang của bạn tại noithatpkc","Chào $name  <br> Cảm ơn bạn đã tham quan và mua hàng tại Nội thất PKC. <br> Vui lòng chuyển khoản số tiền cần thanh toán vào stk: <br>Ngân hàng Techcombank chi nhánh sài gòn <br>Stk: 19032071931013 <br>Tên tài khoản: Trần Thanh Phương <br> Xem lại giỏ hàng của bạn tại <br> http://www.noithatpkc.tk/cartinfo.php?donhang=$id_donhang <br> Sau khi chuyển khoản bạn sẽ nhận được email xác nhận của tiếp viên <br> Chúc bạn một ngày tốt lành.","$email");
            unset($_SESSION["damua"]);
            unset($_SESSION["soluong"]);
            unset($_SESSION["cart"]);
            unset($_SESSION["count"]);
        }
        header('location: ../');
    }

    else {
        echo "<script> alert('bạn chưa mua hàng');window.location='../product.php'</script>";
    }
?>