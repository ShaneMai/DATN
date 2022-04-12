<?php
$gtDau =  $_POST['leftPrice'];
$gtCuoi =  $_POST['rightPrice'];
include("models/m_product.php");
$m_product=new m_product();
$products =$m_product->search_product_by_price($gtDau,$gtCuoi);
?>
<?php
if(count($products) == 0)
{
    echo "<div class='alert alert-info'>Hiện vẫn chưa có sản phẩm trong mục này. Nhấn vào <a class='thongbao' href='index.php'>đây</a> để quay lại trang chủ</div>";
}
else{
    for($i = 0;$i<count($products);$i+=4) {
        ?>
        <?php
        for ($j = $i; $j < $i + 4; $j++) {
            ?>
            <div class="col-md-3 product-men">
                <div class="men-pro-item simpleCart_shelfItem">
                    <div class="men-thumb-item product_max">
                        <img src="public/layout/images1/<?php echo $products->hinh ?>" alt=""
                             class="pro-image-front">
                        <img src="public/layout/images/<?php echo $products->hinh ?>" alt=""
                             class="pro-image-back">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="single_product.php?ma_san_pham=<?php  echo $products->ma_san_pham;?>" class="link-product-add-cart">Xem nhanh</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    <div class="item-info-product ">
                        <h4 id="heightMax"><a href="single.php?ma_san_pham=<?php echo $products->ma_san_pham; ?>"><?php echo $products->ten_san_pham;?></a></h4>
                        <div class="info-product-price">
                            <span class="item_price"><?php echo number_format($products->don_gia);?> VNĐ</span>

                        </div>
                        <input type="hidden" value="<?php echo $products->don_gia;?>" id="dongia<?php echo $products->ma_san_pham;?>"/>
                        <input type="hidden" value="1" id="soluong<?php echo $products->ma_san_pham;?>" />
                        <a   class="item_add single-item hvr-outline-out button2" href="javascript:void(0)" id ="<?php echo $products->ma_san_pham;?>">Thêm vào giỏ hàng</a>
                        <!--    <input type="hidden" id="dongia{$mon->ma_mon}" value="{$mon->don_gia}"/>
                            <input type="text" value="1" id="soluong{$mon->ma_mon}"/>&nbsp;<a class="button-1" href="javascript:void(0)" id="{$mon->ma_mon}">Mua</a>-->
                    </div>

                </div>

            </div>
            <?php
            if ($j == count($products) - 1) {
                break;
            }
        }
        ?>

        <div class="clearfix"></div>
        <?php
    }
}
?>

