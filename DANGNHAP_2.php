<?php
    session_start();
    ob_start();
    if (isset($_POST['DangNhap'])) 
{
    //Kết nối tới database
    include('ketnoi.php');
     
    //Lấy dữ liệu nhập vào
    $TaiKhoan = $_POST['TaiKhoan'];
    $MatKhau = $_POST['MatKhau'];
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa

     
    $check_sql = "SELECT * FROM nguoidung WHERE TenDangNhap= '$TaiKhoan' AND MatKhau = '$MatKhau'";

    $result = mysqli_query($conn ,$check_sql);
    if ($result) {
        // Lấy một hàng từ kết quả
        $row = mysqli_fetch_assoc($result);
    
        if ($row) {
            // Đăng nhập thành công
            echo "Đăng nhập thành công!";
            $_SESSION['TaiKhoan'] = $TaiKhoan;
            $_SESSION['TenTaiKhoan'] = $row['HoTen'];
            $_SESSION['ID'] = $row['ID_NguoiDung'];
            // $_SESSION['ChucVu'] = $row['ChucVu'];
            echo $_SESSION['ChucVu'];
            if($row['ChucVu'] == 'QuanTriVien'){
                header("Location: QUANTRIVIEN.php");
            }
            else{
                header("Location: NHANVIEN.php");
            }
            
        } else {
            // Sai tên đăng nhập hoặc mật khẩu
            echo "Sai tên đăng nhập hoặc mật khẩu!";
        }
    }
}
?>