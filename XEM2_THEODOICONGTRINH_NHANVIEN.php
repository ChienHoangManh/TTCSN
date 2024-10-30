<?php
    //nhap du lieu tu form

    $id = $_POST['sid'];
    //ket noi csdl
    require_once('ketnoi.php');
    if(isset($_POST['Ngay'], $_POST['sid'], $_POST['NguoiBaoCao'], $_POST['ChiTietCongViec'])){
        $ngay = $_POST["Ngay"];
        $nguoibc = $_POST["NguoiBaoCao"];
        $chitiet = $_POST["ChiTietCongViec"];
          //viet lenh sql de them du lieu
        $updatesql = "INSERT INTO chitiettiendo(FK_ID_TienDo ,NguoiBaoCao, Ngay, ChiTietCongViec)
        VALUES ('$id' ,'$nguoibc', '$ngay', '$chitiet')
        ON DUPLICATE KEY UPDATE 
        FK_ID_TienDo='$id', NguoiBaoCao='$nguoibc', Ngay='$ngay', ChiTietCongViec='$chitiet'";
        // echo $themsql; exit; kiem tra xem cau lenh viet co dung ko
        //thuc hien cau lenh them
        if (mysqli_query($conn, $updatesql)){
            //in thong bao thanh cong
            // echo "<h1>Sua thanh cong</h1>";
            header("Location: THEODOICONGTRINH_NHANVIEN.php");
        }
    }else{
        header("Location: THEODOICONGTRINH_NHANVIEN.php");
    }
?>