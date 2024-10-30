<?php
    //lay du lieu id can xoa
    $id = $_GET['sid'];
    // echo $id;

    //ket noi sql
    require_once('ketnoi.php');

    //caulenh sql
    $xoa_sql =  "DELETE FROM nguonluc WHERE ID_NguonLuc=$id";
    if(mysqli_query($conn, $xoa_sql)){
        // echo "<h1>Xoa thanh cong</h1>";
         //tro ve trang liet kr
        header("Location: QLNGUONLUC.php");
    }

    
    
?>  