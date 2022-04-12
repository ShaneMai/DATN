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
                        <h5 class="card-title">THÔNG TIN NGƯỜI DÙNG</h5>
                        <button type="button" class="btn btn-info"
                                onclick="window.location.href='add_user.php'">
                            THÊM MỚI
                        </button>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Tên người dùng</th>
                                    <th>Mã loại người dùng</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Mật khẩu</th>
                                    <th>Email</th>
                                    <th>Trạng thái</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($user as $key => $value) { ?>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1"> <?php echo $value->ho_ten; ?></td>
                                        <td class="sorting_1"> <?php echo $value->ma_loai_nguoi_dung; ?></td>
                                        <td class="sorting_1"> <?php echo $value->ten_dang_nhap; ?></td>
                                        <td class="sorting_1"> <?php echo $value->mat_khau; ?></td>
                                        <td class="sorting_1"> <?php echo $value->email; ?></td>
                                        <td>
                                            <span class="<?php echo $value->trang_thai ? "badge-seccess" : "badge-danger" ?>"><?php echo $value->trang_thai ? "Mở" : "Khóa" ?></span>
                                        </td>

                                        <td class="sorting_1">
                                            <button type="button" class="btn btn-info"
                                                    onclick="window.location.href='edit_user.php?ma_nguoi_dung=<?php echo $value->ma_nguoi_dung ?>'">
                                                Sửa
                                            </button>
                                            <button type="button" class="btn btn-danger"
                                                    onclick="window.location.href='delete_user.php?ma_nguoi_dung=<?php echo $value->ma_nguoi_dung?>'">
                                                Xóa
                                            </button>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Tên người dùng</th>
                                    <th>Chức vụ</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Mật khẩu</th>
                                    <th>Email</th>
                                    <th>Trạng thái</th>
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
