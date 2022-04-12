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
                        <h5 class="card-title">THÔNG TIN LOẠI NGƯỜI DÙNG</h5>
                        <button type="button" class="btn btn-info"
                                onclick="window.location.href='add_user_type.php'">
                            THÊM MỚI
                        </button>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Mã loại người dùng</th>
                                    <th>Loại người dùng</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($user_type as $key => $value) { ?>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1"> <?php echo $value->ma_loai_nguoi_dung; ?></td>
                                        <td class="sorting_1"> <?php echo $value->ten_loai_nguoi_dung; ?></td>

                                        <td class="sorting_1">
                                            <button type="button" class="btn btn-info"
                                                    onclick="window.location.href='edit_user_type.php?ma_loai_nguoi_dung=<?php echo $value->ma_loai_nguoi_dung ?>'">
                                                Sửa
                                            </button>
                                            <button type="button" class="btn btn-danger"
                                                    onclick="window.location.href='delete_user_type.php?ma_loai_nguoi_dung=<?php echo $value->ma_loai_nguoi_dung?>'">
                                                Xóa
                                            </button>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Email</th>
                                    <th>Ghi chú</th>
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
