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
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                        <h5 class="card-title">DANH MỤC SẢN PHẨM</h5>
                        <button type="button" class="btn btn-info"
                                onclick="window.location.href='add_category.php'">
                            THÊM MỚI
                        </button>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Mã loại</th>
                                    <th>Tên loại</th>
                                    <th>Mô tả</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($category as $key => $value) { ?>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1"> <?php echo $value->ma_loai; ?></td>
                                        <td class="sorting_1"> <?php echo $value->ten_loai; ?></td>
                                        <td class="sorting_1"> <?php echo $value->mo_ta; ?></td>
<!--                                        <td class="sorting_1"> --><?php //echo $value->ma_loai_cha; ?><!--</td>-->

                                        <td class="sorting_1">
                                            <button type="button" class="btn btn-info"
                                                    onclick="window.location.href='edit_category_product.php?ma_loai=<?php echo $value->ma_loai ?>'">
                                                Sửa
                                            </button>
                                            <button type="button" class="btn btn-danger"
                                                    onclick="window.location.href='delete_category_product.php?ma_loai=<?php echo $value->ma_loai?>'">
                                                Xóa
                                            </button>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Mã loại</th>
                                    <th>Tên loại</th>
                                    <th>Mô tả</th>
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
