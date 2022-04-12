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
                            <h4 class="card-title">Sửa danh mục sản phẩm</h4>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Loại sản
                                    phẩm</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="ten_loai"
                                           placeholder="Nhập loại sản phẩm" name="ten_loai"
                                           value="<?php echo $category_detail->ten_loai; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mô
                                    tả</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="mo_ta" placeholder="Nhập mô tả"
                                           name="mo_ta"
                                           value="<?php echo $category_detail->mo_ta; ?>">
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