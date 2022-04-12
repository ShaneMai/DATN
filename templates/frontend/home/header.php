<body>

<div id="preloader"></div>


<button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up scrollup-icon"></i>
</button>


<header class="header-area">
    <div class="container-fluid custom-container">
        <div class="row align-items-center">
            <div class="col-4 col-md-2">
                <div class="logo-wrapper">
                    <a href="index.php">
                        <img src="public/layout/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-2 col-md-8 order-md-2 order-3">
                <div class="boomrom-nav">
                    <div class="menu-wrapper">
                        <nav class="main-nav">

                            <input id="main-menu-state" type="checkbox" />
                            <label class="main-menu-btn" for="main-menu-state">
                                <span class="main-menu-btn-icon"></span>
                            </label>

                            <ul id="main-menu" class="sm sm-mint">
                                <li><a href="index.php">Trang chủ</a></li>
                                <li><a href="about.php">Giới thiệu</a></li>
                                <li><a href="product.php">Sản phẩm</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="checkout.php">Thanh toán</a></li>
                                <li><a href="contact.php">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-2 order-md-3 order-2">
                <div class="header-extra-features">
                    <div class="search">
                        <i class="flaticon-search-interface-symbol" id="search-btn"></i>
                    </div>
                    <div class="cart">
                        <a href="checkout.php"><i class="flaticon-shopping-bags"></i></a>
                    </div>
                    <div id="search-overlay" class="block">
                        <div class="centered">
                            <div id='search-box'>
                                <i id="close-btn" class="fa fa-times fa-2x"></i>
                                <form action='https://demo.voidcoders.com/search' id='search-form' method='get' target='_top'>
                                    <input id='search-text' name='q' placeholder='Search' type='text' />
                                    <button id='search-button' class="search-button" type='submit'>
                                        <span>Search</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>