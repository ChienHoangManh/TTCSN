<?php
    session_start();
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
		
        <!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		

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
                            <a class="dropdown-item" href="TAIKHOAN_QUANTRIVIEN.php">My Profile</a>
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
						<a class="dropdown-item" href="TAIKHOAN_QUANTRIVIEN.php">My Profile</a>
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
								<a href="THEODOICONGTRINH_QUANTRIVIEN.php"><i class="la la-user-plus"></i> <span>Tiến Độ Công Trình</span></a>
							</li>
							<li> 
								<a href="BAOCAOTIENTRINH_QUANTRIVIEN.php"><i class="la la-user-plus"></i> <span>Tạo Báo Cáo Tiến Trình</span></a>
							</li>
							<li> 
								<a href="QLNGUONLUC.php"><i class="la la-user-plus"></i> <span>Quản Lý Nguồn Lực</span></a>
							</li>
							<li> 
								<a href="QLNGANSACH.php"><i class="la la-user-plus"></i> <span>Ngân Sách Dự Án</span></a>
							</li>
							<li> 
								<a href="QLNHANVIEN.php"><i class="la la-user-plus"></i> <span>Thông Tin Nhân Viên </span></a>
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
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Quản Lý Ngân Sách Dự Án</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
									<li class="breadcrumb-item active">Ngân Sách Dự Án</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i>Thêm Mới Ngân Sách</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                    
                    <!-- Add Salary Modal -->
                    <div id="add_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Tạo Ngân Sách</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<div class="modal-body">
								<form action="THEM_QLNGANSACH.php" method="post">
									<div class="mb-3 mt-3">
										<label for="MaNganSach" class="form-label">Mã Ngân Sách</label>
										<input type="text" class="form-control" id="MaNganSach" name="MaNganSach" required>
									</div>
									<div class="mb-3 mt-3">
										<label for="NganSachBanDau" class="form-label">Ngân Sách Ban Đầu</label>
										<input type="text" class="form-control" id="NganSachBanDau" name="NganSachBanDau" required>
									</div>
                                    <div class="mb-3 mt-3">
                                        <div class="form-group">
                                            <label for="MaCongTrinh" class="form-label">Công Trình</label>
                                            <select class="select" id="MaCongTrinh" name="MaCongTrinh">
                                                <?php
                                                    require_once("ketnoi.php");
                                                    $edit2_sql = "SELECT * FROM tiendo";

                                                    $result2 = mysqli_query($conn ,$edit2_sql);
                                                    while ($r2 = mysqli_fetch_assoc($result2)){
                                                ?>
                                                    <option value="<?php echo $r2['ID_CongTrinh'] ?>"><?php echo $r2['TenCongTrinh'] ?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
									<button class="btn btn-primary">Thêm Ngân Sách Dự Án</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Add Salary Modal -->
                 
                <div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								
								<table class="table table-striped custom-table datatable">
									<thead>
                                        <tr>
                                            <th>Mã Ngân Sách</th>
                                            <th>Tên Công Trình</th>
                                            <th>Ngân Sách Ban Đầu</th>
                                            <th>Các Khoản Chi Phí</th>
                                            <th>Các Khoản Thu</th>
                                            <th>Tổng Số Dư Hiện Tại</th>
                                        </tr>
									</thead>
									<tbody>
                                        <?php
                                            //ket noi co so du lieu
                                            require_once("ketnoi.php");

                                            //cau lenh sql
                                            $lietke_sql = "SELECT * FROM ngansach";

                                            //thuc thi cai lenh
                                            $result = mysqli_query($conn, $lietke_sql);

                                            //duyet qua result va in ra
                                            while ($r = mysqli_fetch_assoc($result)){
                                                // echo "<tr>";
												$ma = $r["FK_ID_TienDo"];
                                        ?>

                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="SUA_QLNGANSACH.PHP?sid=<?php echo $r['ID_NganSach']; ?>"><?php echo $r['MaNganSach']; ?></a>
                                                        </h2>
                                                    </td>

                                                    <td>
														<?php
															$lietke_sql2 = "SELECT * FROM tiendo WHERE ID_CongTrinh = '$ma'";
															//thuc thi cai lenh
															$result2 = mysqli_query($conn, $lietke_sql2);
															$r2 = mysqli_fetch_assoc($result2);	
														?>
														<?php echo $r2['TenCongTrinh']; ?>
													</td>
                                                    <td>
														<div style="display: flex;">
															<?php echo $r['NganSachBanDau']; ?>
															<pre> VND</pre>
														</div>
													</td>
                                                    <td class="text-danger">
														<div style="display: flex;">
															<?php echo $r['CacKhoanChiPhi']; ?>
															<pre> VND</pre>
														</div>
													</td>
                                                    <td style="color: blue;">
														<div style="display: flex;">
															<?php echo $r['CacKhoanThu']; ?>
															<pre> VND</pre>
														</div>
													</td>
                                                    <td>
														<div style="display: flex;">
															<?php echo $r['TongSoDuHienTai']; ?>
															<pre> VND</pre>
														</div>
													</td>
                                                </tr>

                                        <?php
                                            }
                                        ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>

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
		
        <!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>	

		<!-- Chart JS -->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael.min.js"></script>
		<script src="assets/js/chart.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>