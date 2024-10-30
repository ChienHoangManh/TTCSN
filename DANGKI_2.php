<?php
    //lay ra du lieu tu form
    $hoten = $_POST['HoTen'];
    $email = $_POST['Email'];
    $SDT = $_POST['SDT'];
    $DiaChi = $_POST['DiaChi'];
    $TenDangNhap = $_POST['TenDangNhap'];
    $password = $_POST['MatKhau'];
    $ChucVu = $_POST['ChucVu'];

    //ket noi database
    require_once('ketnoi.php');

    //cau lenh sql
    $them_sql = "INSERT INTO nguoidung(Hoten, Email, SDT, DiaChi, TenDangNhap, MatKhau, ChucVu) VALUES ('$hoten', '$email', '$SDT', '$DiaChi', '$TenDangNhap', '$password', '$ChucVu')";

    if(mysqli_query($conn, $them_sql)){
         echo "them thanh cong";
        header("Location: DANGNHAP.php");
    }
?>