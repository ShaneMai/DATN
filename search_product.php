<?php
$gtTim=$_POST["valueSearch"];
include("models/m_product.php");
$m_product=new m_product();
$products=$m_product->search_product($gtTim);
?>
<div id="kq1">

</div>
<div class="single-pro">
    <?php
    foreach ($products as $sp)
    {
        ?>
        <div class="col-md-3 product-men">
            <div class="men-pro-item simpleCart_shelfItem">
                <div class="men-thumb-item product_max">
                    <img src="public/layout/images1/<?php echo $sp->hinh ?>" alt=""
                         class="pro-image-front">
                    <img src="public/layout/images/<?php echo $sp->hinh ?>" alt=""
                         class="pro-image-back">
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="single_product.php?ma_san_pham=<?php  echo $sp->ma_san_pham;?>" class="link-product-add-cart">Xem nhanh</a>
                        </div>
                    </div>
                    <span class="product-new-top">New</span>
                </div>
                <div class="item-info-product ">
                    <h4><a id="heightMax" href="single_product.php?ma_san_pham=<?php echo $sp->ma_san_pham; ?>"><?php echo $sp->ten_san_pham;?></a></h4>
                    <div class="info-product-price">
                        <span class="item_price"><?php echo number_format($sp->don_gia);?> VNĐ</span>

                    </div>
                    <a href="#" class="item_add single-item hvr-outline-out button2">Thêm vào giỏ hàng</a>
                </div>
            </div>

        </div>
        <?php
    }
    ?>
</div>