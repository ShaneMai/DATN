<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Tables</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách sản phầm</h5>
                        <button type="button" class="btn btn-info"
                                onclick="window.location.href='add_product.php'">
                            THÊM MỚI
                        </button>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Mã loại sản phẩm</th>
                                    <th>Mô tả tóm tắt</th>
                                    <th>Đơn giá</th>
                                    <th>Images</th>
                                    <th>Ngày tạo</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($product as $key => $value) { ?>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1"> <?php echo $value->ten_san_pham; ?></td>
                                        <td class="sorting_1"> <?php echo $value->ma_loai; ?></td>
                                        <td class="sorting_1"> <?php echo $value->mo_ta_tom_tat; ?></td>
                                        <td class="sorting_1"> <?php echo $value->don_gia; ?></td>
                                        <td class="sorting_1"><img
                                                    src="../public/layout/img/product/<?php echo $value->hinh; ?>"
                                                    width="100px"</td>
                                        <td class="sorting_1"> <?php echo $value->ngay_tao; ?></td>
                                        <td class="sorting_1">
                                            <button type="button" class="btn btn-info"
                                                    onclick="window.location.href='edit_product.php?ma_san_pham=<?php echo $value->ma_san_pham ?>'">
                                                Sửa
                                            </button>
                                            <button type="button" class="btn btn-danger"
                                                    onclick="window.location.href='delete_product.php?ma_san_pham=<?php echo $value->ma_san_pham?>'">
                                                Xóa
                                            </button>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Mã loại sản phẩm</th>
                                    <th>Mô tả tóm tắt</th>
                                    <th>Đơn giá</th>
                                    <th>Images</th>
                                    <th>Ngày tạo</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
