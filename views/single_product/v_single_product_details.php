<br>
<br>
<div class="single-product-details">
    <div class="container">
        <div class="row">
            <?php foreach ($product as $key => $value)?>
            <div class="col-md-6">
                <div class="owl-carousel product-d-info owl-theme">
                    <div class="item" data-hash="zero">
                        <div class="single-p-image">
                            <img src="public/layout/img/product/<?php echo $product->hinh ?>" alt="product photo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pd-content">
                    <h2><?php echo $product->ten_san_pham ?></h2>
                    <div class="product-price">
                        <span class="p-pricr"><?php echo number_format($product->don_gia)." VNĐ" ?></span>
                    </div>
                    <p><?php echo $product->mo_ta_tom_tat ?> </p>
                    <div class="p-qtn">
                        <div class="product-quantity p-details-qu">
                            <form>
                                <div class="value-button" id="decrease" onclick="decreaseValue()"><i class="fa fa-minus"></i></div>
                                <input type="number" id="number" value="0">
                                <div class="value-button" id="increase" onclick="increaseValue()"> <i class="fa fa-plus"></i></div>
                            </form>
                        </div>
                        <div class="btn-1">
                            <input type="hidden" value="<?php echo $product->don_gia;?>" id="dongia<?php echo $product->ma_san_pham;?>"/>

                            <a   class="item_add single-item hvr-outline-out button2" href="javascript:void(0)" id ="<?php echo $product->ma_san_pham;?>">Thêm vào giỏ hàng</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>