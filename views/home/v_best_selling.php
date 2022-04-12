<div class="best-selling" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="section-top">
            <h2>Sản phẩm bán chạy</h2>
        </div>
        <div class="row">
            <div class="bestsell-slider owl-carousel owl-theme">
                <?php foreach ( $best_product as $key => $value){?>
                <div class="item">
                    <div class="single-service-slide">
                        <div class="sss-img">
                            <img src="public/layout/img/product/<?php echo $value->hinh ?>" alt="">
                        </div>
                        <div class="sss-text">
                            <a href='single_product.php?ma_san_pham=<?php echo $value->ma_san_pham ?>'>
                                <h6> <?php echo $value->ten_san_pham ?></h6>
                            </a>
                            <p><?php echo number_format($value->don_gia) . " VNĐ" ?></p>
                            <div class="reviews">
                                <span><i class="flaticon-star"></i></span>
                                <span><i class="flaticon-star"></i></span>
                                <span><i class="flaticon-star"></i></span>
                                <span><i class="flaticon-star"></i></span>
                                <span><i class="flaticon-star no-color"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>