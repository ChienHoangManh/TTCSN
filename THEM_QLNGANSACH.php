<?php
    $mans = $_POST['MaNganSach'];
    $nsbandau = $_POST['NganSachBanDau'];
    $cackhoancp = '0';
    $cackhoanthu = '0';
    $mact = $_POST['MaCongTrinh'];
    $sodu = $_POST['NganSachBanDau'] - $_POST['CacKhoanChiPhi'] + $_POST['CacKhoanThu'];

    //ket noi csql
    require_once('ketnoi.php');
    //cau lenh sql
    $them_sql = "INSERT INTO ngansach(MaNganSach, NganSachBanDau,CacKhoanChiPhi,CacKhoanThu,TongSoDuHienTai, FK_ID_TienDo)
     VALUES ('$mans','$nsbandau','$cackhoancp','$cackhoanthu','$sodu', '$mact')
     ON DUPLICATE KEY UPDATE 
     MaNganSach='$mans', NganSachBanDau='$nsbandau', CacKhoanChiPhi='$cackhoancp', CacKhoanThu='$cackhoanthu', TongSoDuHienTai='$sodu', FK_ID_TienDo='$mact'";


    if(mysqli_query($conn, $them_sql)){
        //  echo "them thanh cong";
        header("Location: QLNGANSACH.php");
    }
?>