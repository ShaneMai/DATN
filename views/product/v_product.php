<div class="inner-hero inner2">
    <div class="container">
        <div class="inner-hero-content">
            <h2>Shop</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Shop</li>
            </ul>
        </div>
    </div>
</div>


<div class="shoppage-product  sproduct-right">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="shop-elements">
                    <div class="searchbox">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"><i
                                                class="flaticon-search-interface-symbol"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="catagory">
                        <h6 class="shop-title">Bộ sưu tập sản phẩm</h6>
                        <ul>
                            <li>Beauty <span>5</span></li>
                            <li>BB Creams <span>6</span></li>
                            <li>Make Up <span>2</span></li>
                            <li>Spa <span>3</span></li>
                            <li>Skin Care <span>5</span></li>
                            <li>Baby Care <span>8</span></li>
                            <li>Body Spray <span>8</span></li>
                        </ul>
                    </div>
<!--                    <div class="bands">-->
<!--                        <h6 class="shop-title">Brands</h6>-->
<!--                        <ul>-->
<!--                            <li>Venia</li>-->
<!--                            <li>Ordlinary</li>-->
<!--                            <li>Estee Lauder</li>-->
<!--                            <li>Dior</li>-->
<!--                            <li>L’Oreal</li>-->
<!--                            <li>Lancome</li>-->
<!--                            <li>Clarins</li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--Sản phẩm bán chạy-->
<!--                    <div class="Tags">-->
<!--                        <h6 class="shop-title">Tags</h6>-->
<!--                        <ul>-->
<!--                            <li><a href="#">Venia</a></li>-->
<!--                            <li><a href="#">Olive</a></li>-->
<!--                            <li><a href="#">Face Creams</a></li>-->
<!--                            <li><a href="#">Skin Care</a></li>-->
<!--                            <li><a href="#">Rose</a></li>-->
<!--                            <li><a href="#">Alobara</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>
            </div>
            <div class="col-md-9">
<!--                <div class="sp-top spt-right">-->
<!--                    <p>Showing 1–12 of 24 results</p>-->
<!--                    <select class="form-select">-->
<!--                        <option selected>Sort by names</option>-->
<!--                        <option value="1">Price</option>-->
<!--                        <option value="2">Color</option>-->
<!--                        <option value="3">Brand</option>-->
<!--                    </select>-->
<!--                </div>-->
                <form method="post" action="product.php?key=them-gio-hang">
                <div class="row">
                    <?php foreach ($products as $key => $value) { ?>
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

                                    <input type="hidden" value="<?php echo $value->don_gia; ?>"
                                           id="dongia<?php echo $value->ma_san_pham; ?>"/>
                                    <input type="hidden" value="1"
                                           id="soluong<?php echo $value->ma_san_pham; ?>" />
                                    <a class="item_add single-item hvr-outline-out button2" href="javascript:void(0)"
                                       id="<?php echo $value->ma_san_pham; ?>">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="shop-pagination">
                        <nav>
                            <ul class="pagination">
                                <?php if ($count > 9) { ?>
                                    <li class="page-item"> <?php echo $lst; ?></li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="media">
    <div class="section-top">
        <h2>Instagram</h2>
    </div>
    <div class="instagram">
        <div class="single-post">
            <img src="public/layout/img/blog/media1.jpg" alt="">
            <a href="#" class="social-link"><i class="flaticon-instagram-1"></i> </a>
        </div>
        <div class="single-post">
            <img src="public/layout/img/blog/media2.jpg" alt="">
            <a href="#" class="social-link"><i class="flaticon-instagram-1"></i> </a>
        </div>
        <div class="single-post">
            <img src="public/layout/img/blog/media3.jpg" alt="">
            <a href="#" class="social-link"><i class="flaticon-instagram-1"></i> </a>
        </div>
        <div class="single-post">
            <img src="public/layout/img/blog/media4.jpg" alt="">
            <a href="#" class="social-link"><i class="flaticon-instagram-1"></i> </a>
        </div>
        <div class="single-post">
            <img src="public/layout/img/blog/media5.jpg" alt="">
            <a href="#" class="social-link"><i class="flaticon-instagram-1"></i> </a>
        </div>
    </div>
</div>