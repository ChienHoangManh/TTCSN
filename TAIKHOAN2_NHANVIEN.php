<?php
    session_start();
    //lay ra du lieu tu form
    $hoten = $_POST['HoTen'];
    $email = $_POST['Email'];
    $SDT = $_POST['SDT'];
    $DiaChi = $_POST['DiaChi'];
    $password = $_POST['MatKhau'];

    //ket noi database
    require_once('ketnoi.php');

    $update_sql = "UPDATE nguoidung SET Hoten='$hoten', Email='$email', SDT='$SDT', DiaChi='$DiaChi', MatKhau = '$password' WHERE TenDangNhap = '" . $_SESSION['TaiKhoan'] . "' ";

        //thuc hien cau lenh them
        if (mysqli_query($conn, $update_sql)){
            //in thong bao thanh cong
            // echo "<h1>Sua thanh cong</h1>";
            header("Location: NHANVIEN.php");
        }
?>