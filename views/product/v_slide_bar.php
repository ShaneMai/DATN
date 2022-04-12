<div class="product-list">
    <h6 class="shop-title mb-3">Sản phẩm bán chạy</h6>

    <div class="single-brand">

            <div class="sb-img">
                <?php foreach ($m_products as $key => $value){?>
                <img src="public/assets/img/product/<?php echo $value->hinh ?>" alt="">
            </div>
            <div class="sb-text">
                <a href='single_product.php?ma_san_pham=<?php echo $value->ma_san_pham ?>'>
                    <h6> <?php echo $value->ten_san_pham ?></h6>
                </a>
                <p><?php echo number_format($value->don_gia) . " VNĐ" ?></p>
            </div>
        <?php } ?>
    </div>
</div>