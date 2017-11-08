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
            <ul class="tabs">
                <li class="tab"><a class="active" href="#yourcart">Your Cart</a></li>
                <li class="tab"><a href="#latestblog">Latest blog</a></li>
            </ul>
            <!-- End Tabs Menu -->

        </div>

        <!-- Right Sidebar Tabs Content -->
        <div class="sidebar-tabs_content">

            <!-- Your Cart Tabs -->
            <div id="yourcart">

                <ol class="cart-item">
                    <li>
                        <div class="thumb">
                            <img src="images/80x80.png" alt="">
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
                            <img src="images/80x80.png" alt="">
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
                            <img src="images/80x80.png" alt="">
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
            <!-- End Your Cart Tabs -->

            <!-- Latest Blog Tabs -->
            <div id="latestblog">

                <div class="latest-blog-featured">
                    <div class="thumb">
                        <img src="images/500x400-white.jpg" alt="">
                    </div>
                    <span class="meta">05.10.2016 - Natalie Amyllia</span>
                    <h3 class="blog-title"><a href="#">End of year great discount at Shofy</a></h3>
                    <p>Until we open the shop, we always loose and like nothing to win...</p>
                </div>

                <ol class="latest-blog">
                    <li>
                        <span class="meta">05.10.2016 - Natalie Amyllia</span>
                        <h3 class="blog-title"><a href="#">End of year great discount at Shofy</a></h3>
                    </li>
                    <li>
                        <span class="meta">05.10.2016 - Natalie Amyllia</span>
                        <h3 class="blog-title"><a href="#">Happy Discount For All Our Customer</a></h3>
                    </li>
                    <li>
                        <span class="meta">05.10.2016 - Natalie Amyllia</span>
                        <h3 class="blog-title"><a href="#">Buy 1 Get 1 Free for all electronics product</a></h3>
                    </li>
                </ol>
            </div>
            <!-- End Latest Blog Tabs -->

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
                <a href="#" class="dropdown-button" data-activates="dropdown1">
                    <i class="fa fa-user-circle-o"></i>
                </a>
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="panel-account.html"><i class="fa fa-server"></i> Panel Account</a></li>
                    <li><a href="form-account.html"><i class="fa fa-user"></i> My Profile</a></li>
                    <li><a href="order-history.html"><i class="fa fa-history"></i> Order History</a></li>
                    <li class="divider"></li>
                    <li><a href="tracking-order.html"><i class="fa fa-search"></i> Tracking Order</a></li>
                </ul>

                <a href="#" id="menu-right" data-activates="slide-out-right">
                    <span class="cart-badge">3</span>
                    <i class="fa fa-shopping-basket"></i>
                </a>
            </div>
            <div class="site-title">
                <h1>Shofy</h1>
            </div>
        </div>
        <!-- End FIXED Top Navbar -->


        <!-- CONTENT CONTAINER -->
        <div class="content-container animated fadeInUp">

            <!-- Category Section -->
            <div class="page-block margin-bottom">

                <h2 align="center" class="block-title">
                    <span>Select the category to which you want to add your listing!</span><!-- <span> tag to make blue border on this text only -->
                </h2>

                <!-- Category Listing -->
                <ol class="category-list">


                    <li><!-- Category list item #1 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/vehicles">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/vehicles">Vehicles</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #1 -->

                    <li><!-- Category list item #2 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/properties">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/properties">Properties</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #2 -->

                    <li><!-- Category list item #3 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/adult">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/adult">Adult</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #3 -->

                    <li><!-- Category list item #3 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/mobile-phones-accessories">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/mobile-phones-accessories">Mobile Phones &
                                    Accessories</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #3 -->

                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/electronics-home-appliances">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/electronics-home-appliances">Electronics & Home
                                    Appliances</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li>

                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/home-garden">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/home-garden">Home & Garden</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li>

                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/fashion-beauty">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/fashion-beauty">Fashion & Beauty</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li>
                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/pets">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/pets">Pets</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->

                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/kids-babies">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/kids-babies">Kids & Babies</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->

                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/sporting-goods-bikes">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/sporting-goods-bikes">Sporting Goods & Bikes</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->


                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/hobbies-music-art-books">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/hobbies-music-art-books">Hobbies, Music, Art &
                                    Books</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->


                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/jobs">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/jobs">Jobs</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->


                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/business-industrial">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/business-industrial">Business & Industrial</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->


                    <!-- End Category list item #4 -->
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/new-ads/services">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/new-ads/services">Services</a>
                            </div>
                            <div class="cat-desc">
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->

                </ol>

                <div class="clear"></div><!-- Use this class (.clear) to clearing float -->

            </div>
        </div>
        <!-- END CONTENT CONTAINER -->

        <?php include ROOT . '/views/layout/footer.php'; ?>

        <!-- Back to top Link -->
        <div id="to-top" class="main-bg"><i class="fa fa-long-arrow-up"></i></div>

    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->


<script type="text/javascript" src="/template/js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="/template/js/materialize.min.js"></script>
<script type="text/javascript" src="/template/js/slick.min.js"></script>
<script type="text/javascript" src="/template/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="/template/js/jquery.swipebox.js"></script>
<script type="text/javascript" src="/template/js/custom.js"></script>

</body>
</html>