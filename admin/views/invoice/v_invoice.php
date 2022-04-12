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
                        <h5 class="card-title">Quản lý hóa đơn</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Số hóa đơn</th>
                                    <th>Tên khách hàng</th>
                                    <th>Ngày hóa đơn</th>
                                    <th>Tổng tiền</th>
                                    <th>Tình trạng thanh toán</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($khhds as $kh) { ?>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1"> <?php echo $kh->so_hoa_don; ?></td>
                                        <td class="sorting_1"> <?php echo $kh->ten_khach_hang; ?></td>
                                        <td class="sorting_1"> <?php echo $kh->ngay_hd; ?></td>
                                        <td class="sorting_1"> <?php echo $kh->tri_gia; ?></td>
                                        <td>  <select name="ds[]">
                                                <option value="1" <?php echo($kh->tinh_trang==1)?"selected":"" ?> >Chưa thanh toán</option>
                                                <option value="0" <?php echo($kh->tinh_trang==0)?"selected":"" ?>>Đã thanh toán</option>

                                            </select>  </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Số hóa đơn</th>
                                    <th>Tên khách hàng</th>
                                    <th>Ngày hóa đơn</th>
                                    <th>Tổng tiền</th>
                                    <th>Tình trạng thanh toán</th>
                                </tr>
                                </tfoot>
                            </table>
                            <p>
                                <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="" />
                                <input class="button" type="button" value="Bỏ qua" onclick="window.location='customers.php'" />
                            </p>
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
