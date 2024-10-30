<?php
    session_start();
    //lay id trang can sua
    $id = $_GET['sid'];

    //ket noi sql
    require_once('ketnoi.php');

    //cau lenh lay thong tin ve sinh vien
    $edit_sql = "SELECT * FROM tiendo WHERE ID_CongTrinh=$id";

    $result = mysqli_query($conn ,$edit_sql);
    $row = mysqli_fetch_assoc($result);

    $id2 = $row["FK_ID_NguoiQuanLy"];
    $edit_sql2 = "SELECT * FROM nguoidung WHERE ID_NguoiDung=$id2";

    $result2 = mysqli_query($conn ,$edit_sql2);
    $row2 = mysqli_fetch_assoc($result2);
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
								<h3 class="page-title">Theo Dõi Tiến Độ Công Trình</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
									<li class="breadcrumb-item active">Tiến Độ Công Trình</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<form action="XEM2_THEODOICONGTRINH_QTV.php" method="post">
						<table class="table table-borderless">
							<input type="hidden" name="sid" value="<?php echo $id; ?>" id="">
							<tr class="col-sm-6">
								<td>
									<div class="mb-3 mt-3">
										<label for="TenCongTrinh" class="form-label">Tên Công Trình</label>
										<input type="text" class="form-control" id="TenCongTrinh" name="TenCongTrinh" value="<?php echo $row['TenCongTrinh'] ?>" required>
									</div>
								</td>
								<td>
									<div class="mb-3 mt-3">
										<label for="NguoiQuanLy" class="form-label">Người Quản Lý</label>
										<input type="text" class="form-control" id="NguoiQuanLy" name="NguoiQuanLy" value="<?php echo $row2['HoTen'] ?>" required>
									</div>
								</td>
								<td>
									<div class="mb-3 mt-3">
										<label for="NguoiQuanLy" class="form-label">Ngân Sách Dự Chi</label>
										<input type="text" class="form-control" id="NganSachDuChi" name="NganSachDuChi" value="<?php echo $row['NganSachDuChi'] ?> VND" required>
									</div>
								</td>
							</tr>
							<tr class="col-sm-6">
								<td>
								<div class="mb-3 mt-3">
										<label for="NgayBatDau" class="form-label">Ngày Bắt Đầu</label>
										<input type="date" class="form-control" id="NgayBatDau" name="NgayBatDau" value="<?php echo $row['NgayBatDau'] ?>" required>
									</div>
								</td>
								<td>
									<div class="mb-3 mt-3">
										<label for="NgayHoanThanhDuKien" class="form-label">Ngày Hoàn Thành Dự Kiến</label>
										<input type="date" class="form-control" id="NgayHoanThanhDuKien" name="NgayHoanThanhDuKien" value="<?php echo $row['NgayHoanThanhDuKien'] ?>" required>
									</div>	
								</td>
							</tr>
						</table>

						<section class="review-section">
							<div class="review-header text-center">
								<h3 class="review-title">Chi Tiết Tiến Độ</h3>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="table-responsive">
										<table class="table table-bordered table-review review-table mb-0" id="table_alterations">
											<thead>
												<tr>
													<th style="width:150px;">Ngày</th>
													<th style="width:200px;">Người Báo Cáo</th>
													<th class="text-center">Chi Tiết Công Việc</th>
													<th style="width: 64px;"><button type="button" class="btn btn-primary btn-add-row"><i class="fa fa-plus"></i></button></th>
												</tr>
											</thead>
											<tbody id="table_alterations_tbody">
												<?php
													//ket noi co so du lieu
													require_once("ketnoi.php");

													//cau lenh sql
													$lietke_sql = "SELECT * FROM chitiettiendo WHERE FK_ID_TienDo = $id";
									
													//thuc thi cai lenh
													$result = mysqli_query($conn, $lietke_sql);
									
													//duyet qua result va in ra
													while ($r = mysqli_fetch_assoc($result)){
														// echo "<tr>";
												?>      
													<tr>
														<td>
															<a><?php echo $r['Ngay'] ?></a>
														</td>
														<td>
															<a><?php echo $r['NguoiBaoCao'] ?></a>
														</td>
														<td>
															<a><?php echo $r['ChiTietCongViec'] ?></a>
														</td>
														<td></td>
													</tr>   
												<?php
													}
												?>	
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</section>
						
						<div class="submit-section">
							<button class="btn btn-primary submit-btn">Cập Nhật</button>
						</div>
					</form>





				</div>	
				<!-- /Page Content -->

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

		<!-- Add Table Row JS -->
		<script>
			$(function () {
				$(document).on("click", '.btn-add-row', function () {
					var id = $(this).closest("table.table-review").attr('id');  // Id of particular table
					console.log(id);
					var div = $("<tr />");
					div.html(GetDynamicTextBox(id));
					$("#"+id+"_tbody").append(div);
				});
				$(document).on("click", "#comments_remove", function () {
					$(this).closest("tr").prev().find('td:last-child').html('<button type="button" class="btn btn-danger" id="comments_remove"><i class="fa fa-trash-o"></i></button>');
					$(this).closest("tr").remove();
				});
				function GetDynamicTextBox(table_id) {
					$('#comments_remove').remove();
					return '<td><input type="date" name = "Ngay" class="form-control" value = "" ></td>' + '<td><input type="text" name = "NguoiBaoCao" class="form-control" value = "" ></td>' + '<td><input type="text" name = "ChiTietCongViec" class="form-control" value = "" ></td>' + '<td><button type="button" class="btn btn-danger" id="comments_remove"><i class="fa fa-trash-o"></i></button></td>'
				}
			});
		</script>

    </body>
</html>