<?php
    session_start(); 
    $tenbc = $_POST["TenBaoCao"];
    $nguoibc = $_SESSION["ID"];
    $congtrinh = $_POST["MaCongTrinh"];
    $ngay = $_POST["Ngay"];
    $loai = $_POST["LoaiBaoCao"];
    $ndbc = $_POST["NoiDungBaoCao"];

    //ket noi csql
    require_once('ketnoi.php');
    //cau lenh sql
    $them_sql = "INSERT INTO baocao(TenBaoCao, FK_ID_NguoiBaoCao, FK_ID_TienDo, Ngay, LoaiBaoCao, NoiDungBaoCao)
    VALUES ('$tenbc', '$nguoibc', '$congtrinh', '$ngay', '$loai', '$ndbc')
    ON DUPLICATE KEY UPDATE 
    FK_ID_NguoiBaoCao = '$nguoibc', FK_ID_TienDo = '$congtrinh', Ngay = '$ngay', LoaiBaoCao = '$loai', NoiDungBaoCao = '$ndbc'";

    if(mysqli_query($conn, $them_sql)){
        //  echo "them thanh cong";
        header("Location: BAOCAOTIENTRINH_NHANVIEN.php");
    }
?>