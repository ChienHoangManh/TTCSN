<?php
    $ten = $_POST['TenCongTrinh'];
    $nguoi = $_POST['NguoiQuanLy'];
    $ngaybd = $_POST['NgayBatDau'];
    $ngaydk = $_POST['NgayDuKien'];
    $duchi = $_POST['NganSachDuChi'];

    require_once('ketnoi.php');

    $them_sql = "INSERT INTO tiendo(TenCongTrinh, FK_ID_NguoiQuanLy,NgayBatDau,NgayHoanThanhDuKien, NganSachDuChi)
    VALUES ('$ten','$nguoi','$ngaybd','$ngaydk','$duchi')
    ON DUPLICATE KEY UPDATE 
    TenCongTrinh='$ten', FK_ID_NguoiQuanLy='$nguoi', NgayBatDau='$ngaybd', NgayHoanThanhDuKien='$ngaydk', NganSachDuChi='$duchi'";


   if(mysqli_query($conn, $them_sql)){
       //  echo "them thanh cong";
       header("Location: THEODOICONGTRINH_QUANTRIVIEN.php");
   }
?>