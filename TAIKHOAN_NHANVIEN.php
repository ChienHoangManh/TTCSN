<?php
    session_start();
    include("ketnoi.php");

    $check_sql = "SELECT * FROM nguoidung WHERE TenDangNhap = '" . $_SESSION['TaiKhoan'] . "'";

    $result = mysqli_query($conn ,$check_sql);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>



<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
    <a class="navbar-brand" href="NHANVIEN.php">Trang Chủ</a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#">Theo Dõi Tiến Độ Công Trình</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Tạo Báo Cáo Tiến Trình</a>
            </li>
        </ul>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-end">
        <span class="ms-2" style='color: white; padding-right: 20px;'>Xin chào, <?php echo $_SESSION['TaiKhoan'] ?></span>
        <a class="navbar-brand" href="#" data-bs-toggle="popover" title="Quản Lý tài khoản" data-bs-html="true" data-bs-content="<a class='dropdown-item' href='TAIKHOAN_NHANVIEN.php'>Thông Tin Tài Khoản</a><a class='dropdown-item' href='#'>Cài Đặt</a><a class='dropdown-item' href='logout.php'>Đăng Xuất</a>">
        <img src="c1.png" alt="Avatar Logo" style="width:40px; height: 40px;" class="rounded-pill"> 
        </a>
    </div>
    </div>
</nav>
<div class="container" style="padding-left: 20%; padding-right: 20%; padding-top: 3%; padding-bottom: 10%;">
        <h1 style="text-align: center;">Thông Tin Tài Khoản </h1>
        <form action="TAIKHOAN2_NHANVIEN.php" method="post">
            <div class="mb-3 mt-3">
                <label for="HoTen" class="form-label">Họ Tên</label>
                <input type="text" class="form-control" id="HoTen" name="HoTen" value="<?php echo $row['HoTen'] ?>" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $row['Email'] ?>" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="SDT" class="form-label">Số Điện Thoại</label>
                <input type="text" class="form-control" id="SDT" name="SDT" value="<?php echo $row['SDT'] ?>" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="DiaChi" class="form-label">Địa Chỉ</label>
                <input type="text" class="form-control" id="DiaChi" name="DiaChi" value="<?php echo $row['DiaChi'] ?>" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="HoTen" class="form-label">Tên Đăng Nhập</label>
                <input type="text" class="form-control" id="TenDangNhap" name="TenDangNhap" value="<?php echo $row['TenDangNhap'] ?>" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label for="HoTen" class="form-label">Mật Khẩu</label>
                <input type="text" class="form-control" id="MatKhau" name="MatKhau" value="<?php echo $row['MatKhau'] ?>" required>
            </div>
            <div class="mb-3 mt-3">
                <label for="ChucVu" class="form-label">Chức vụ</label>
                <input type="text" class="form-control" id="ChucVu" name="ChucVu" value="<?php echo $row['ChucVu'] ?>" disabled>
            </div>
           
            <button class="btn btn-primary" type="submit">Cập Nhật</button>
        </form>
    </div>

</body>


<script>
    // Enable Bootstrap Popover
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    });
</script>
</html>