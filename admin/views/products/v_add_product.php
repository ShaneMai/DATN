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
                            <h4 class="card-title">Thêm sản phẩm</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên sản
                                    phẩm</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_san_pham" placeholder="Nhập tên sản phẩm"
                                           name="ten_san_pham">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Hình
                                    ảnh</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" name="f_hinh_anh" class="custom-file-input"
                                               id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">Choose
                                            file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Loại sản phẩm</label>
                                <div class="col-sm-9">
                                    <select class="select2 form-control custom-select" id="ma_loai" name="ma_loai">
                                        <option>---Chọn---</option>
                                        <option value="1">Beauty</option>
                                        <option value="2">BB Creams</option>
                                        <option value="3">Make Up</option>
                                        <option value="4">Spa</option>
                                        <option value="5">Skin Care</option>
                                        <option value="6">Baby Care</option>
                                        <option value="7">Body Spray</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thông tin
                                    tóm tắt</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="mo_ta_tom_tat"
                                           placeholder="Nhập thông tin tóm tắt về sản phẩm"
                                           name="mo_ta_tom_tat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Thông tin
                                    chi tiết</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="mo_ta_chi_tiet"
                                           placeholder="Nhập thông tin chi tiết về sản phẩm"
                                           name="mo_ta_chi_tiet">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Đơn
                                    giá</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="don_gia" placeholder="Nhập đơn giá"
                                           name="don_gia">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Ngày
                                    tạo</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="ngay_tao" name="ngay_tao">
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" id="btn-submit" name="btn-submit" class="btn btn-primary">Thêm mới</button>
                                <button type="button" id name="btn-cancell" name="btn-cancell" class="btn btn-primary" onclick="window.location='products.php'">Bỏ qua</button>
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