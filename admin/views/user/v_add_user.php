<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Thêm thông tin người dùng</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên người
                                    dùng</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ho_ten"
                                           placeholder="Nhập tên người dùng" name="ho_ten">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Chức vụ</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control custom-select" id="ma_loai_nguoi_dung" name="ma_loai_nguoi_dung">
                                        <option>---Chọn---</option>
                                        <option value="1">Giám đốc</option>
                                        <option value="2">Phó giám đốc</option>
                                        <option value="3">Kế toán trưởng</option>
                                        <option value="4">Kế toán</option>
                                        <option value="5">Nhân viên</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên đăng nhập</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label type="text" for="fname" class="col-sm-3 text-right control-label col-form-label">Mật khẩu</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="mat_khau" name="mat_khau">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                <div class="col-sm-9">
                                    <select id = "trang_thai" name="trang_thai" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                        <option>---Chọn---</option>
                                        <option value="1">Mở</option>
                                        <option value="0">Khóa</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" id="btn-submit" name="btn-submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>

<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>