<?php
    $manl = $_POST['MaNguonLuc'];
    $tennl = $_POST['TenNguonLuc'];
    $loainl = $_POST['LoaiNguonLuc'];
    $trangthai = $_POST['TrangThai'];
    $mota = $_POST['MoTa'];
    $ttkhac = $_POST['ThongTinKhac'];
    $mact = $_POST['MaCongTrinh'];

    //ket noi csql
    require_once('ketnoi.php');
    //cau lenh sql
    $them_sql = "INSERT INTO nguonluc(MaNguonLuc, TenNguonLuc,LoaiNguonLuc,TrangThai,MoTa,ThongTinKhac, FK_ID_TienDo)
    VALUES ('$manl','$tennl','$loainl','$trangthai','$mota','$ttkhac', '$mact')
    ON DUPLICATE KEY UPDATE
    MaNguonLuc='$manl', TenNguonLuc='$tennl', LoaiNguonLuc='$loainl', TrangThai='$trangthai', MoTa='$mota', ThongTinKhac='$ttkhac', FK_ID_TienDo='$mact'";

    if(mysqli_query($conn, $them_sql)){
        //  echo "them thanh cong";
        header("Location: test.php");
    }
?>