<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Shofy - Mobile Shop Template</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="x-ua-compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">

    <link rel="stylesheet" type="text/css" href="/template/css/style.css">
    <link rel="stylesheet" type="text/css" href="/template/css/responsive.css">
    <link rel="shortcut icon" href="/template/images/favicon.png">
</head>

<body>

<div id="main">

    <!-- LEFT SIDEBAR -->
    <div id="slide-out-left" class="side-nav">

        <!-- Form Search -->
        <div class="top-left-nav">
            <div class="searchbar">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search">
            </div>
        </div>
        <!-- End Form Search -->

        <?php include ROOT . '/views/layout/main-menu.php'; ?>

    </div>
    <!-- END LEFT SIDEBAR -->

    <!-- RIGHT SIDEBAR -->
    <div id="slide-out-right" class="side-nav">

        <!-- TABS -->
        <div class="sidebar-tabs">

            <!-- Tabs Menu -->
            <!--<ul class="tabs">
                <li class="tab"><a href="#latestblog">Latest blog</a></li>
            </ul>-->
            <!-- End Tabs Menu -->

        </div>

        <!-- Right Sidebar Tabs Content -->
        <div class="sidebar-tabs_content">

            <!-- Your Cart Tabs -->
            <!--			<div id="yourcart">

                            <ol class="cart-item">
                                <li>
                                    <div class="thumb">
                                        <img src="/template/images/80x80.png" alt="">
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="cart-detail">
                                        <h3 class="product-name"><a href="product.html">Tablet Mini 2</a></h3>
                                        <div class="price">
                                            <span>Price</span> $ 472.5
                                        </div>
                                        <div class="qty">
                                            <span>Qty</span> <input type="number" value="1">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="/template/images/80x80.png" alt="">
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="cart-detail">
                                        <h3 class="product-name"><a href="product.html">Modern Watch</a></h3>
                                        <div class="price">
                                            <span>Price</span> $ 260.9
                                        </div>
                                        <div class="qty">
                                            <span>Qty</span> <input type="number" value="1">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="/template/images/80x80.png" alt="">
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                    <div class="cart-detail">
                                        <h3 class="product-name"><a href="product.html">Camping Tent</a></h3>
                                        <div class="price">
                                            <span>Price</span> $ 102.8
                                        </div>
                                        <div class="qty">
                                            <span>Qty</span> <input type="number" value="1">
                                        </div>
                                    </div>
                                </li>
                            </ol>

                            <div class="cart-action">
                                <div class="subtotal">
                                    <span class="title">Subtotal</span>
                                    <span class="price">$ 835.2</span>
                                </div>
                                <div class="subtotal">
                                    <span class="title">Tax</span>
                                    <span class="price">$ 4.0</span>
                                </div>
                                <div class="total">
                                    <span class="title">Total</span>
                                    <span class="price">$ 839.2</span>
                                </div>
                                <a href="#" class="btn green btn-block">Proceed to checkout</a>
                            </div>

                        </div>
            -->            <!-- End Your Cart Tabs -->

        </div>
        <!-- End Right Sidebar Tabs Content -->

    </div>
    <!-- END RIGHT SIDEBAR -->

    <!-- MAIN PAGE -->
    <div id="page">

        <!-- FIXED Top Navbar -->
        <div class="top-navbar">
            <div class="top-navbar-left">
                <a href="#" id="menu-left" data-activates="slide-out-left">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="top-navbar-right">
                <a href="#" class="dropdown-button"><i class="fa fa-plus"></i>
                </a>
                <a href="#" class="dropdown-button" data-activates="dropdown1">
                    <i class="fa fa-user-circle-o"></i>
                </a>
                <?php if (UserMobile::isGuest()): ?>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="panel-account.html"><i class="fa fa-server"></i> Panel Account</a></li>
                        <li><a href="form-account.html"><i class="fa fa-user"></i> My Profile</a></li>
                        <li><a href="order-history.html"><i class="fa fa-history"></i> Order History</a></li>
                        <li class="divider"></li>
                        <li><a href="http://m.adtoday.co.uk/account/logout/"><i class="fa fa-user"></i>Logout</a></li>

                    </ul>
                <?php else: ?>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="http://m.adtoday.co.uk/login"><i class="fa fa-user"></i> My Profile</a></li>
                        <li><a href="http://m.adtoday.co.uk/register"><i class="fa fa-user"></i> Register</a></li>
                        <li class="divider"></li>
                    </ul>
                <?php endif; ?>

                <!--<a href="#" id="menu-right" data-activates="slide-out-right">
                    <span class="cart-badge">3</span>
                    <i class="fa fa-shopping-basket"></i>
                </a>-->
            </div>
            <div class="site-title">
                <h1>AdToday - Buy & Sell Anything</h1>
            </div>
        </div>
        <!-- End FIXED Top Navbar -->



        <!-- Featured Slider -->
        <div class="featured-slider animated fadeInRight">

            <div class="featured-item"><!-- 1. Featured Slider Item -->
                <div class="thumb">
                    <img src="/template/images/500x400-white.jpg" alt="">
                </div>
                <div class="overlay"></div>
                <div class="caption">
                    <h2><a href="#">Shofy! A Shop template.</a></h2>
                    <p>Large or demand will accurate nothing to see of the liquid gass.</p>
                    <a class="featured-btn blue" href="#">Learn more <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div><!-- 1. End Featured Slider Item -->

            <div class="featured-item"><!-- 2. Featured Slider Item -->
                <div class="thumb">
                    <img src="/template/images/500x400-white.jpg" alt="">
                </div>
                <div class="overlay"></div>
                <div class="caption">
                    <h2><a href="#">Happy Shop With Thausand Discount</a></h2>
                    <p>Only for you, loyal customer. With love.</p>
                    <a class="featured-btn blue" href="#">Learn more <i class="fa fa-angle-double-right"></i></a>
                    <a class="featured-btn orange" href="#">Checkout <i class="fa fa-mail-forward"></i></a>
                </div>
            </div><!-- 2. End Featured Slider Item -->

            <div class="featured-item"><!-- 3. Featured Slider Item -->
                <div class="thumb">
                    <img src="/template/images/500x400-white.jpg" alt="">
                </div>
                <div class="overlay"></div>
                <div class="caption">
                    <h2><a href="#">Get 1 Free for all electronic product...</a></h2>
                    <p>Large or demand will accurate nothing to see of the liquid gass.</p>
                    <a class="featured-btn green" href="#"><i class="fa fa-check-circle"></i> Discover Now</a>
                </div>
            </div><!-- 3. End Featured Slider Item -->

            <div class="featured-item"><!-- 4. Featured Slider Item -->
                <div class="thumb">
                    <img src="/template/images/500x400-white.jpg" alt="">
                </div>
                <div class="overlay"></div>
                <div class="caption">
                    <h2><a href="#">Celebrating our birthday</a></h2>
                    <p>Nothing impossible in the world. Come on to join us...</p>
                    <a class="featured-btn red" href="#">Lets go <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div><!-- 4. End Featured Slider Item -->

        </div>
        <!-- End Featured Slider -->

        <!-- CONTENT CONTAINER -->
        <div class="content-container animated fadeInUp">

            <!-- Category Section -->
            <div class="page-block margin-bottom">

                <h2 class="block-title">
                    <span>Category</span><!-- <span> tag to make blue border on this text only -->
                    <a href="#" class="list-all">
                        <i class="fa fa-th-list"></i>
                    </a>
                </h2>

                <!-- Category Listing -->
                <ol class="category-list">


                    <li><!-- Category list item #1 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/vehicles">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/vehicles">Vehicles</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #1 -->

                    <li><!-- Category list item #2 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/properties">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/properties">Properties</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #2 -->

                    <li><!-- Category list item #3 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/adult">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/adult">Adult</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #3 -->

                    <li><!-- Category list item #3 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/mobile-phones-accessories">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/mobile-phones-accessories">Mobile Phones &
                                    Accessories</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #3 -->

                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/electronics-home-appliances">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/electronics-home-appliances">Electronics & Home
                                    Appliances</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li>

                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/home-garden">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/home-garden">Home & Garden</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li>

                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/fashion-beauty">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/fashion-beauty">Fashion & Beauty</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li>
                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/pets">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/pets">Pets</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->

                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/kids-babies">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/kids-babies">Kids & Babies</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->

                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/sporting-goods-bikes">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/sporting-goods-bikes">Sporting Goods & Bikes</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->


                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/hobbies-music-art-books">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/hobbies-music-art-books">Hobbies, Music, Art &
                                    Books</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->


                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/jobs">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/jobs">Jobs</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->


                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/business-industrial">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/business-industrial">Business & Industrial</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->


                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/sub/services">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/sub/services">Services</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->

                </ol>

                <div class="clear"></div><!-- Use this class (.clear) to clearing float -->

            </div>
            <!-- End Category Section -->

            <!--			<div class="page-block margin-bottom">

                            <h2 class="block-title">
                                <span>Top Product</span>
                                <a href="#" class="list-all">
                                    <i class="fa fa-th-list"></i>
                                </a>
                            </h2>
                            <ol class="product-list-slider top-product">
                                <li>
                                    <div class="thumb">
                                        <a href="product.html">
                                            <img src="/template/images/240x240.png" alt="">
                                        </a>
                                    </div>
                                    <div class="product-ctn">
                                        <div class="product-name">
                                            <a href="product.html">
                                                Black Blazer
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span class="price-before">$ 178.23</span>
                                            <span class="price-current">$ 159.00</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="product.html">
                                            <img src="/template/images/240x240.png" alt="">
                                        </a>
                                    </div>
                                    <div class="product-ctn">
                                        <div class="product-name">
                                            <a href="product.html">
                                                Motorcycle 200cc
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span class="price-before">$ 1,021.33</span>
                                            <span class="price-current">$ 965.12</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="product.html">
                                            <img src="/template/images/240x240.png" alt="">
                                        </a>
                                    </div>
                                    <div class="product-ctn">
                                        <div class="product-name">
                                            <a href="product.html">
                                                Modern Watch
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                        </div>
                                        <div class="price">
                                            <span class="price-current">$ 260.9</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="product.html">
                                            <img src="/template/images/240x240.png" alt="">
                                        </a>
                                    </div>
                                    <div class="product-ctn">
                                        <div class="product-name">
                                            <a href="product.html">
                                                Hairbands
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span class="price-before">$ 20.00</span>
                                            <span class="price-current">$ 18.5</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="product.html">
                                            <img src="/template/images/240x240.png" alt="">
                                        </a>
                                    </div>
                                    <div class="product-ctn">
                                        <div class="product-name">
                                            <a href="product.html">
                                                Tablet Mini 2
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span class="price-before">$ 499.00</span>
                                            <span class="price-current">$ 472.5</span>
                                        </div>
                                    </div>
                                </li>
                            </ol>

                            <div class="clear"></div>

                        </div>
            -->            <!-- End Top Product Section -->


            <!-- Product (Static) Section -->
            <!--			<div class="page-block">

                            <h2 class="block-title">
                                <span>New coming</span>
                                <a href="#" class="list-all">
                                    <i class="fa fa-th-list"></i>
                                </a>
                            </h2>

                            <ol class="product-list">
                                <li>
                                    <div class="thumb">
                                        <a href="product.html">
                                            <img src="/template/images/240x240.png" alt="">
                                        </a>
                                    </div>
                                    <div class="product-ctn">
                                        <div class="product-name">
                                            <a href="product.html">
                                                Woman Pants
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span class="price-before">$ 68.00</span>
                                            <span class="price-current">$ 62.22</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="product.html">
                                            <img src="/template/images/240x240.png" alt="">
                                        </a>
                                    </div>
                                    <div class="product-ctn">
                                        <div class="product-name">
                                            <a href="product.html">
                                                Purple Eyeglass
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span class="price-current">$ 42.99</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="product.html">
                                            <img src="/template/images/240x240.png" alt="">
                                        </a>
                                    </div>
                                    <div class="product-ctn">
                                        <div class="product-name">
                                            <a href="product.html">
                                                Camping Tent
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span class="price-current">$ 102.8</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="product.html">
                                            <img src="/template/images/240x240.png" alt="">
                                        </a>
                                    </div>
                                    <div class="product-ctn">
                                        <div class="product-name">
                                            <a href="product.html">
                                                Hairbands
                                            </a>
                                        </div>
                                        <div class="rating">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <span class="price-before">$ 20.00</span>
                                            <span class="price-current">$ 18.5</span>
                                        </div>
                                    </div>
                                </li>
                            </ol>

                            <div class="clear"></div>

                        </div>
            -->            <!-- End Product (Static) Section -->

        </div>
        <!-- END CONTENT CONTAINER -->
        <?php include ROOT . '/views/layout/footer.php'; ?>
    </div>
    <!-- END MAIN PAGE -->
</div><!-- #main -->
</body>
</html>