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
                            <h4 class="card-title">Chỉnh sửa thông tin người dùng</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên người
                                    dùng</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ho_ten"
                                           placeholder="Nhập tên người dùng" name="ho_ten"
                                           value="<?php echo $user_detail->ho_ten; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Chức vụ</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ma_loai_nguoi_dung"
                                           placeholder="Nhập tên chức vụ" name="ma_loai_nguoi_dung"
                                           value="<?php echo $user_detail->ma_loai_nguoi_dung; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên đăng nhập</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap"
                                           value="<?php echo $user_detail->ten_dang_nhap; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mật khẩu</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="mat_khau" name="mat_khau"
                                           value="<?php echo $user_detail->mat_khau; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email"
                                           value="<?php echo $user_detail->email; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Trạng thái</label>
                                <div class="col-sm-9">
                                    <select name="trang_thai" class="select2 form-control custom-select" style="width: 100%; height:36px;">
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
                        <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
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