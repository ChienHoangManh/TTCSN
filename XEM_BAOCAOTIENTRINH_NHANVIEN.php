<?php
    session_start();
    //lay id trang can sua
    $id = $_GET['sid'];

    //ket noi sql
    require_once('ketnoi.php');

    //cau lenh lay thong tin ve sinh vien
    $edit_sql = "SELECT * FROM baocao WHERE ID_BaoCao=$id";

    $result = mysqli_query($conn ,$edit_sql);
    $row = mysqli_fetch_assoc($result);

    $id3 = $row["FK_ID_TienDo"];
    $edit3_sql = "SELECT * FROM tiendo WHERE ID_CongTrinh = $id3";
    $result3 = mysqli_query($conn ,$edit3_sql);
    $r3 = mysqli_fetch_assoc($result3);

    $id2 = $row["FK_ID_NguoiBaoCao"];
    $edit2_sql = "SELECT * FROM nguoidung WHERE ID_NguoiDung = $id2";

    $result2 = mysqli_query($conn ,$edit2_sql);
    $r = mysqli_fetch_assoc($result2);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Quản Lý Dự Án Xây Dựng</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="c2.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
	<style>
		*{
			font-family: Arial, Helvetica, sans-serif;
		}
	</style>
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.html" class="logo">
						<img src="c2.png" width="40" height="40" alt="">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3>Website Quản Lý Dự Án Xây Dựng Công Trình</h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img src="c2.png" alt="">
							<span class="status online"></span></span>
							<span><?php echo $_SESSION['TenTaiKhoan'] ?></span>
						</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="TAIKHOAN_NHANVIEN.php">My Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="TAIKHOAN_NHANVIEN.php">My Profile</a>
						<a class="dropdown-item" href="#">Settings</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar">
				<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: 1055px;"><div class="sidebar-inner slimscroll" style="overflow: hidden; width: 100%; height: 1055px;">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title"> 
								<span>Menu</span>
							</li>
							<li> 
								<a href="THEODOICONGTRINH_NHANVIEN.php"><i class="la la-user-plus"></i> <span>Tiến Độ Công Trình</span></a>
							</li>
							<li> 
								<a href="BAOCAOTIENTRINH_NHANVIEN.php"><i class="la la-user-plus"></i> <span>Tạo Báo Cáo Tiến Trình</span></a>
							</li>
						</ul>
					</div>
				</div><div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 1055px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
			</div>

			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
                <h1 style="margin-top: 20px; margin-bottom: 20px">Thông Tin Chi Tiết Báo Cáo Tiến Trình </h1>
        <form action="XEM2_THEODOICONGTRINH_NHANVIEN.php" method="post">
            <div class="mb-3 mt-3">
                <label for="TenBaoCao" class="form-label">Tên Báo Cáo</label>
                <input type="text" class="form-control" id="TenBaoCao" name="TenBaoCao" value="<?php echo $row['TenBaoCao'] ?>" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label for="NguoiBaoCao" class="form-label">Mã Người Báo Cáo</label>
                <input type="text" class="form-control" id="NguoiBaoCao" name="NguoiBaoCao" value="<?php echo $row['FK_ID_NguoiBaoCao'] ?>" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label for="NguoiBaoCao" class="form-label">Tên Người Báo Cáo</label>
                <input type="text" class="form-control" id="NguoiBaoCao" name="NguoiBaoCao" value="<?php echo $r['HoTen'] ?>" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label for="TenCongTrinh" class="form-label">Tên Công Trình</label>
                <input type="text" class="form-control" id="TenCongTrinh" name="Ngay" value="<?php echo $r3['TenCongTrinh'] ?>" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label for="Ngay" class="form-label">Ngày</label>
                <input type="date" class="form-control" id="Ngay" name="Ngay" value="<?php echo $row['Ngay'] ?>" disabled>
            </div>

            <div class="mb-3 mt-3">
                <label for="LoaiBaoCao" class="form-label">Loại Báo Cáo</label>
                <input type="text" class="form-control" id="LoaiBaoCao" name="LoaiBaoCao" value="<?php echo $row['LoaiBaoCao'] ?>" disabled>
            </div>
            <div class="mb-3 mt-3">
                <label for="NoiDungBaoCao" class="form-label">Nội Dung Báo Cáo</label>
                <textarea type="text" class="form-control" id="NoiDungBaoCao" name="NoiDungBaoCao" disabled><?php echo $row['NoiDungBaoCao'] ?></textarea>
            </div>
        </form>
				</div>	

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael.min.js"></script>
		<script src="assets/js/chart.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>