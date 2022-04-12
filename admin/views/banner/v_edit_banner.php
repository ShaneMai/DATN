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
                            <h4 class="card-title">Sửa tiêu đề</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Tên tiêu
                                    đề</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" placeholder="Nhập tên tiêu đề"
                                           name="ten_tieu_de" value="<?php echo $banner_detail->ten_tieu_de; ?>">
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
                                        <img src="../public/layout/img_banner/<?php echo $banner_detail->hinh; ?>"
                                             width="80">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Trạng
                                    thái</label>
                                <div class="col-sm-9">
                                    <select name="trang_thai" class="select2 form-control custom-select"
                                            style="width: 100%; height:36px;">
                                        <option>---Chọn---</option>
                                        <option value="1" <?php echo $banner_detail->trang_thai == 1 ? "select" : "" ?>>Mở</option>
                                        <option value="0" <?php echo $banner_detail->trang_thai == 0 ? "select" : "" ?>>Khóa</option>
                                        </optgroup>
                                    </select>
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