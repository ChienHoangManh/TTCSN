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
                    <a href="#" class="logo">
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
								<h3 class="page-title">Quản Lý Thông Tin Nhân Viên</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
									<li class="breadcrumb-item active">Thông Tin Nhân Viên</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i>Thêm Mới Nhân Viên</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                    
                    <!-- Add Salary Modal -->
                    <div id="add_salary" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Tạo Nhân Viên</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>

							<div class="modal-body">
                                <form action="THEM_QLNHANVIEN.php" method="post">
                                    <div class="mb-3 mt-3">
                                        <label for="HoTen" class="form-label">Họ Tên</label>
                                        <input type="text" class="form-control" id="HoTen" name="HoTen" required>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="Email" name="Email" required>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="SDT" class="form-label">Số Điện Thoại</label>
                                        <input type="text" class="form-control" id="SDT" name="SDT" required>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="DiaChi" class="form-label">Địa Chỉ</label>
                                        <input type="text" class="form-control" id="DiaChi" name="DiaChi" required>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="HoTen" class="form-label">Tên Đăng Nhập</label>
                                        <input type="text" class="form-control" id="TenDangNhap" name="TenDangNhap" required>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="HoTen" class="form-label">Mật Khẩu</label>
                                        <input type="text" class="form-control" id="MatKhau" name="MatKhau" required>
                                    </div>
                                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                        <label class="form-label">Chức Vụ: </label>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="ChucVu" id="NhanVien"
                                            value="NhanVien" />
                                            <label class="form-check-label" for="NhanVien">Nhân Viên</label>
                                        </div>

                                        <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="ChucVu" id="QuanTriVien"
                                            value="QuanTriVien" />
                                            <label class="form-check-label" for="QuanTriVien">Quản Trị Viên</label>
                                        </div>
                                </div>
                                    <div class="submit-section">
                                        <button class="btn btn-primary submit-btn">Thêm</button>
                                    </div>
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
                                            <th>Họ Tên</th>
                                            <th>Email</th>
                                            <th>Số Điện Thoại</th>
                                            <th>Địa Chỉ</th>
                                            <th>Tên Đăng Nhập</th>
                                            <th>Mật Khẩu</th>
                                            <th>Chức vụ</th>
                                            <th>Hành động</th>
                                        </tr>
									</thead>
									<tbody>
                                        <?php
                                            //ket noi co so du lieu
                                            require_once("ketnoi.php");

                                            //cau lenh sql
                                            $lietke_sql = "SELECT * FROM nguoidung WHERE ChucVu = 'NhanVien'";

                                            //thuc thi cai lenh
                                            $result = mysqli_query($conn, $lietke_sql);

                                            //duyet qua result va in ra
                                            while ($r = mysqli_fetch_assoc($result)){
                                                // echo "<tr>";
                                        ?>

                                                <tr>
                                                    <td><?php echo $r['HoTen']; ?></td>
                                                    <td><?php echo $r['Email']; ?></td>
                                                    <td><?php echo $r['SDT']; ?></td>
                                                    <td><?php echo $r['DiaChi']; ?></td>
                                                    <td><?php echo $r['TenDangNhap']; ?></td>
                                                    <td><?php echo $r['MatKhau']; ?></td>
                                                    <td><?php echo $r['ChucVu']; ?></td>
                                                    <td>
                                                        <div class="btn-group" style="text-align: right;">
                                                        <a class="btn btn-secondary" href="SUA_QLNHANVIEN.PHP?sid=<?php echo $r['ID_NguoiDung']; ?>">Sửa</a>
                                                        <a class="btn btn-danger" href="#" onclick="openConfirmDeleteModal('<?php echo $r['ID_NguoiDung']; ?>')">Xóa</a>
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

			<!-- Modal xoa -->
            <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmDeleteModalLabel">Xác nhận xóa nhân viên</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn muốn xóa nhân viên này không?
                        </div>
                        <div class="modal-footer">
                            <a href="#" id="confirmDeleteButton" class="btn btn-danger">Xóa</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
		<!-- /Main Wrapper -->
        <script>
            function openConfirmDeleteModal(studentId) {
                // Thiết lập href cho nút xác nhận trong modal
                var confirmDeleteButton = document.getElementById('confirmDeleteButton');
                confirmDeleteButton.href = 'XOA_QLNHANVIEN.php?sid=' + studentId;

                // Hiển thị modal
                var confirmDeleteModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
                confirmDeleteModal.show();
            }
        </script>
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