<?php
    //nhap du lieu tu form
    $manl = $_POST['MaNguonLuc'];
    $tennl = $_POST['TenNguonLuc'];
    $mact = $_POST['MaCongTrinh'];
    $loainl = $_POST['LoaiNguonLuc'];
    $trangthai = $_POST['TrangThai'];
    $mota = $_POST['MoTa'];
    $ttkhac = $_POST['ThongTinKhac'];
    $id = $_POST['sid'];

    //ket noi csdl
    require_once('ketnoi.php');

    //viet lenh sql de them du lieu
    $updatesql = "UPDATE nguonluc
                SET MaNguonLuc = '$manl',
                    FK_ID_TienDo = '$mact',
                    TenNguonLuc = '$tennl',
                    LoaiNguonLuc = '$loainl',
                    TrangThai = '$trangthai',
                    MoTa = '$mota',
                    ThongTinKhac = '$ttkhac'
                WHERE ID_NguonLuc = $id
                    AND EXISTS (SELECT 1 FROM tiendo WHERE ID_CongTrinh = '$mact');
                ";
    // echo $themsql; exit; kiem tra xem cau lenh viet co dung ko

    //thuc hien cau lenh them
    if (mysqli_query($conn, $updatesql)){
        //in thong bao thanh cong
        // echo "<h1>Sua thanh cong</h1>";
        header("Location: QLNGUONLUC.php");
    }
?>