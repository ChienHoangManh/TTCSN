<?php
        $id = $_POST['sid'];
    // Kiểm tra xem tất cả các biến $_POST có tồn tại không
    if(isset($_POST['LoaiNganSach'], $_POST['sid'], $_POST['SoLuong'], $_POST['DonGia'], $_POST['ThongTinKhac'])) {
        
        $loains = $_POST['LoaiNganSach'];
        $sl = $_POST['SoLuong'];
        $dongia = $_POST['DonGia'];
        $thanhtien = $sl * $dongia;
        $ttkhac = $_POST['ThongTinKhac'];

        // Kiểm tra xem có kết nối đến cơ sở dữ liệu không
        require_once('ketnoi.php');

        // Kiểm tra xem có kết nối thành công không
        if($conn) {
            // Câu lệnh SQL thêm hoặc cập nhật
            $them_sql = "INSERT INTO chitietngansach(FK_ID_NganSach, LoaiNganSach, SoLuong, DonGia, ThanhTien, ThongTinKhac)
                VALUES ('$id', '$loains', '$sl', '$dongia', '$thanhtien', '$ttkhac')
                ON DUPLICATE KEY UPDATE 
                FK_ID_NganSach = '$id', LoaiNganSach = '$loains', SoLuong = '$sl', DonGia = '$dongia', ThanhTien = '$thanhtien', ThongTinKhac = '$ttkhac'";

            // Thực hiện thêm hoặc cập nhật
            if(mysqli_query($conn, $them_sql)) {
                echo "Thêm thành công";

                // Sau khi thêm dữ liệu, tính tổng ThanhTien
                $tinh_tong_sql = "SELECT 
                    FK_ID_NganSach,
                    SUM(CASE WHEN LoaiNganSach = 'Thu' THEN ThanhTien ELSE 0 END) AS TongThu,
                    SUM(CASE WHEN LoaiNganSach = 'Chi' THEN ThanhTien ELSE 0 END) AS TongChi
                    FROM chitietngansach
                    WHERE FK_ID_NganSach = '$id'
                    GROUP BY FK_ID_NganSach";

                $result_tong = mysqli_query($conn, $tinh_tong_sql);

                // Lấy giá trị tổng từ kết quả
                $row_tong = mysqli_fetch_assoc($result_tong);
                $tong_thu = $row_tong['TongThu'];
                $tong_chi = $row_tong['TongChi'];

                // Tính toán giá trị mới cho bảng ngansach
                $so_du_hien_tai = "NganSachBanDau + $tong_thu - $tong_chi";
                
                // Cập nhật giá trị mới vào bảng ngansach
                $updatesql = "UPDATE ngansach
                    SET CacKhoanChiPhi = '$tong_thu',
                        CacKhoanThu = '$tong_chi',
                        TongSoDuHienTai = $so_du_hien_tai
                    WHERE ID_NganSach = '$id'";

                // Thực hiện cập nhật
                if(mysqli_query($conn, $updatesql)) {
                    echo "Cập nhật thành công";
                    header("Location: QLNGANSACH.php");
                } else {
                    echo "Lỗi khi cập nhật: " . mysqli_error($conn);
                }

            } else {
                echo "Lỗi khi thêm: " . mysqli_error($conn);
            }
        } else {
            echo "Lỗi kết nối đến cơ sở dữ liệu.";
        }

        // Đóng kết nối
        mysqli_close($conn);
    } else {
                require_once('ketnoi.php');
                // Sau khi thêm dữ liệu, tính tổng ThanhTien
                $tinh_tong_sql = "SELECT 
                    FK_ID_NganSach,
                    SUM(CASE WHEN LoaiNganSach = 'Thu' THEN ThanhTien ELSE 0 END) AS TongThu,
                    SUM(CASE WHEN LoaiNganSach = 'Chi' THEN ThanhTien ELSE 0 END) AS TongChi
                    FROM chitietngansach
                    WHERE FK_ID_NganSach = '$id'
                    GROUP BY FK_ID_NganSach";

                $result_tong = mysqli_query($conn, $tinh_tong_sql);

                // Lấy giá trị tổng từ kết quả
                $row_tong = mysqli_fetch_assoc($result_tong);
                $tong_thu = $row_tong['TongThu'];
                $tong_chi = $row_tong['TongChi'];

                // Tính toán giá trị mới cho bảng ngansach
                $so_du_hien_tai = "NganSachBanDau + $tong_thu - $tong_chi";
                
                // Cập nhật giá trị mới vào bảng ngansach
                $updatesql = "UPDATE ngansach
                    SET CacKhoanChiPhi = '$tong_thu',
                        CacKhoanThu = '$tong_chi',
                        TongSoDuHienTai = $so_du_hien_tai
                    WHERE ID_NganSach = '$id'";

                // Thực hiện cập nhật
                if(mysqli_query($conn, $updatesql)) {
                    echo "Cập nhật thành công";
                    header("Location: QLNGANSACH.php");
                } else {
                    echo "Lỗi khi cập nhật: " . mysqli_error($conn);
                }    }
?>
