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
                            <h4 class="card-title">Chỉnh sửa thông tin khách hàng</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên khách
                                    hàng</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_khach_hang"
                                           placeholder="Nhập tên khách hàng" name="ten_khach_hang"
                                           value="<?php echo $customer_detail->ten_khach_hang; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Giới
                                    tính</label>
                                <div class="col-sm-9">
                                    <select name="gioi_tinh" id="gioi_tinh" class="select2 form-control custom-select"
                                            style="width: 100%; height:36px;">
                                        <option>---Chọn---</option>
                                        <option value="1" <?php echo $customer_detail->gioi_tinh == 1 ? "select" : "" ?>>
                                            Nữ
                                        </option>
                                        <option value="0" <?php echo $customer_detail->gioi_tinh == 0 ? "select" : "" ?>>
                                            Nam
                                        </option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày
                                    sinh</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="ngay_sinh"
                                           name="ngay_sinh"
                                           value="<?php echo $customer_detail->ngay_sinh; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Địa
                                    chỉ</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="dia_chi" name="dia_chi"
                                           value="<?php echo $customer_detail->dia_chi; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Điện thoại</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="dien_thoai" name="dien_thoai"
                                           value="<?php echo $customer_detail->dien_thoai; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email"
                                           value="<?php echo $customer_detail->email; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ghi chú</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ghi_chu" name="ghi_chu"
                                           value="<?php echo $customer_detail->ghi_chu; ?>">
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