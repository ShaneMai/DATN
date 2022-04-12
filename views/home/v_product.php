<div class="product" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="section-top">
            <span>Cửa hàng</span>
            <h2>Sản phẩm mới của chúng tôi</h2>
        </div>
        <div class="row">
            <?php foreach ($new_products as $key => $value) { ?>
                <div class="col-md-4">
                    <div class="single-product">
                        <div class="sp-img">
                            <img src="public/layout/img/product/<?php echo $value->hinh ?>" alt="">
                        </div>
                        <div class="sp-text">
                            <a href='single_product.php?ma_san_pham=<?php echo $value->ma_san_pham ?>'>
                                <h6> <?php echo $value->ten_san_pham ?></h6>
                            </a>
                            <p><?php echo number_format($value->don_gia) . " VNĐ" ?></p>

                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>