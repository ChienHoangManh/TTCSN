<?php
    session_start();
    //lay ra du lieu tu form
    $hoten = $_POST['HoTen'];
    $email = $_POST['Email'];
    $SDT = $_POST['SDT'];
    $DiaChi = $_POST['DiaChi'];
    $tendangnhap = $_POST['TenDangNhap'];
    $password = $_POST['MatKhau'];
    $ChucVu = $_POST['ChucVu'];

    //ket noi database
    require_once('ketnoi.php');

    $update_sql = "INSERT INTO nguoidung(HoTen, Email,SDT,DiaChi,TenDangNhap,MatKhau, ChucVu) VALUES ('$hoten','$email','$SDT','$DiaChi','$tendangnhap','$MatKhau', '$ChucVu')";

        //thuc hien cau lenh them
        if (mysqli_query($conn, $update_sql)){
            //in thong bao thanh cong
            // echo "<h1>Sua thanh cong</h1>";
            header("Location: QLNHANVIEN.php");
        }
?>