<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng kí</title>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<style type="text/css">
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
</style>
</head>
<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">

                                <img src="c2.png"
                                alt="Sample photo" class="img-fluid"
                                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 100%" />

                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <form action="DANGKI_2.php" method="post">
                                        <h3 class="mb-5 text-uppercase">Form đăng kí tài khoản</h3>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="HoTen">Họ Tên</label>
                                            <input type="text" id="HoTen" class="form-control form-control-lg" name="HoTen" required>  
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="Email">Email</label>
                                            <input type="email" id="Email" class="form-control form-control-lg" name="Email" required/>  
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="SDT">Số Điện Thoại</label>
                                            <input type="text" id="SDT" class="form-control form-control-lg" name="SDT" required/>  
                                        </div>


                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="DiaChi">Địa Chỉ</label>
                                            <input type="text" id="DiaChi" class="form-control form-control-lg" name="DiaChi" required/>  
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="TenDangNhap">Tên Đăng Nhập</label>
                                                    <input type="text" id="TenDangNhap" class="form-control form-control-lg" name="TenDangNhap" required />
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="MatKhau">Mật Khẩu</label>
                                                    <input type="password" id="MatKhau" class="form-control form-control-lg" name="MatKhau" required />  
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                            <h6 class="mb-0 me-4">Chức Vụ: </h6>

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

                                        <div class="d-flex justify-content-end pt-3">
                                            <a href="DANGNHAP.php" class="btn btn-light btn-lg">Hủy</a>
                                            <button type="submit" class="btn btn-warning btn-lg ms-2">Đăng Kí</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
</body>
</html>