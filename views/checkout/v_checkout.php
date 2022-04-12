<div class="checkout" id="checkout">
    <div class="container">
        <?php if (isset($list_product)) { ?>
        <form action="checkout.php" method="post">
            <h3>Giỏ hàng của tôi </h3>
            <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
                <table class="timetable_sub">
                    <thead>
                    <tr>
                        <th>Xóa</th>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá tiền</th>
                    </tr>
                    </thead>
                    <?php
                    foreach ($list_product as $item) { ?>
                        <tr class="rem1">
                            <td class="invert-closeb">
                                <!--   <div class="rem">
                                       <div class="close1"></div>
                                   </div>
                                   <script>$(document).ready(function (c) {
                                           $('.close1').on('click', function (c) {
                                               $('.rem1').fadeOut('slow', function (c) {
                                                   $('.rem1').remove();
                                               });
                                           });
                                       });
                                   </script>-->


                                <input type="checkbox" name="<?php echo $item->ma_san_pham; ?>"
                                       value="<?php echo $item->don_gia; ?>"/>
                            </td>
                            <td id="imgCheckout" class="invert-image"><a
                                        href="single_product.php?ma_san_pham=<?php echo $item->ma_san_pham ?>"><img
                                            src="public/layout/img/product/<?php echo $item->hinh; ?>"
                                            alt=" " class="img-responsive"/></a>
                            </td>
                            <td class="invert">
                                <div class="quantity">
                                    <div>

                                        <input type="text" value="<?php echo $item->so_luong; ?>"
                                               name="soluong<?php echo $item->ma_san_pham; ?>"
                                               style="width:70px; text-align:center"/>
                                        <input type="hidden" value="<?php echo $item->don_gia; ?>"
                                               name="dongia<?php echo $item->ma_san_pham; ?>"/>

                                    </div>
                                </div>
                            </td>
                            <td class="invert"><?php echo $item->ten_san_pham; ?></td>
                            <td class="invert"><?php echo number_format($item->don_gia); ?></td>
                        </tr>

                    <?php }

                    ?>
                    <!--quantity-->
                    <script>
                        $('.value-plus').on('click', function () {
                            var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) + 1;
                            divUpd.text(newVal);
                        });

                        $('.value-minus').on('click', function () {
                            var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) - 1;
                            if (newVal >= 1) divUpd.text(newVal);
                        });
                    </script>
                    <!--quantity-->
                </table>
            </div>
            <div class="checkout-left">

                <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                    <a href="product.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Quay lại
                        mua sắm</a>
                </div>
                <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                    <h4>Danh sách giỏ hàng</h4>

                    <ul>
                        <?php $product_price = 0; ?>
                        <?php foreach ($list_product as $item) {
                            ?>
                            <li><?php echo $item->ten_san_pham; ?><i>-</i>
                                <span><?php echo number_format($item->don_gia * $item->so_luong); ?></span></li>
                            <?php
                            $product_price += $item->don_gia * $item->so_luong;
                        }

                        ?>

                        <li>Tổng tiền <i>-</i> <span><?php
                                echo number_format($product_price) . " VNĐ";
                                ?></span></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <p align="center">

                <input type="submit" name="btnCapnhat" value="Cập nhật" class="btn-danger"/>
                <input type="button" class="btn-primary"
                       onclick="window.location.href = 'customer.php?key=dat-hang'"
                       value="Đặt hàng"/>

                <input type="button" class="btn-success" id="btnxoa"
                       value="Xóa giỏ hàng" class="art-button"/>
            </p>
    </div>
    </form>
    <?php
    }
    //    else
    //    {
    //
    //        echo  '<h3 align="center">','Bạn chưa chọn sản phẩm nào','</h3>';
    //
    //    }

    ?>

</div>
</div>
<!-- //check out -->

