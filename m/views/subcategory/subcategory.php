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

        <!-- App/Site Menu -->
        <div id="main-menu">
            <ul>
                <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                <li class="has-sub"><a href="#"><i class="fa fa-th-list"></i> Categories</a>
                    <ul>
                        <li><a href="category.html">Category Page</a></li>
                        <li class="has-sub"><a href="#">Computer & Laptop</a>
                            <ul>
                                <li><a href="#">Accesories</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Desktop Computer</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#">Handphone & Tablet</a>
                            <ul>
                                <li><a href="#">Tablet</a></li>
                                <li><a href="#">Handphone</a></li>
                                <li><a href="#">Phablet</a></li>
                                <li><a href="#">Accesories</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#">Otomotive</a>
                            <ul>
                                <li><a href="#">Motorcycle</a></li>
                                <li><a href="#">Car</a></li>
                                <li><a href="#">Car Interior</a></li>
                                <li><a href="#">Car Exterior</a></li>
                                <li><a href="#">Accesories</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#">Fashion</a>
                            <ul>
                                <li><a href="#">Male Pants</a></li>
                                <li><a href="#">Female Pants</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="#">Home & Living</a>
                            <ul>
                                <li><a href="#">Kitchen</a></li>
                                <li><a href="#">Living Room</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#"><i class="fa fa-briefcase"></i> Product</a>
                    <ul>
                        <li><a href="product-list.html">Product List</a></li>
                        <li><a href="product-small-list.html">Product Small List</a></li>
                        <li><a href="product.html">Product Detail</a></li>
                    </ul>
                </li>
                <li><a href="cart.html"><i class="fa fa-shopping-bag"></i> Shopping Cart</a></li>
                <li class="has-sub"><a href="#"><i class="fa fa-shopping-basket"></i> Checkout</a>
                    <ul>
                        <li><a href="checkout-sign.html">Sign Method</a></li>
                        <li><a href="checkout-shipping.html">Shipping</a></li>
                        <li><a href="checkout-payment.html">Payment</a></li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#"><i class="fa fa-google-wallet"></i> Order</a>
                    <ul>
                        <li><a href="payment-confirm.html">Payment Confirm</a></li>
                        <li><a href="tracking-order.html">Tracking Order</a></li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#"><i class="fa fa-users"></i> Member</a>
                    <ul>
                        <li><a href="panel-account.html">Panel Account</a></li>
                        <li><a href="form-account.html">Form Account</a></li>
                        <li><a href="order-history.html">Order History</a></li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#"><i class="fa fa-file-text-o"></i> Blog</a>
                    <ul>
                        <li><a href="blog-list.html">Blog List</a></li>
                        <li><a href="blog-inside.html">Blog Inside</a></li>
                    </ul>
                </li>
                <li class="has-sub"><a href="#"><i class="fa fa-file"></i> Pages</a>
                    <ul>
                        <li><a href="standard-page.html">Standard Page</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="styling-guide.html">Styling Guide</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                    </ul>
                </li>
                <li><a href="contact.html"><i class="fa fa-envelope"></i> Contact</a></li>
            </ul>
        </div>
        <!-- End Site/App Menu -->

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
                <h1>AdToday - Buy & Sell Anything</h1>
            </div>
        </div>
        <!-- End FIXED Top Navbar -->


        <!-- CONTENT CONTAINER -->
        <div class="content-container">

            <h1 class="page-title animated fadeIn">Category List</h1>

            <!-- Category List -->
            <ol class="category-list animated fadeLeft">
                <?php foreach ($subCategoryListElements as $subcategory) : ?>
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/<?php echo  $subcategory['url']; ?>/">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/<?php echo  $subcategory['url']; ?>/">
                                    <span><?php echo $subcategory['sub_category_title']; ?></span>
                            </div>
                        </div>
                    </li><!-- End Category list item #4 -->
                <?php endforeach; ?>
            </ol>
            <!-- End Category List -->

            <div class="clear"></div><!-- Use this class (.clear) to clearing float -->

        </div>
        <!-- END CONTENT CONTAINER -->


        <!-- FOOTER -->
        <div class="footer">

            <!-- Footer main Section -->
            <div class="footer-main">
                <p>
                    <span class="block text-small">Secure shopping at shofy via</span>
                    <i class="fa fa-cc-amex"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-credit-card"></i>
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                    <i class="fa fa-google-wallet"></i>
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-jcb"></i>
                </p>
                <p>
                    <span class="block text-small">Having problem? Contact us</span>
                    +44 567 89 | ours@example.com | <a href="#">Live Chat</a>
                </p>

                <div class="social-footer">
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="gplus"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
            <!-- End Footer main Section -->

            <!-- Copyright Section -->
            <div class="copyright">
                <span class="block">&copy; 2016 Shofy Inc - Mobile Shop Template</span>
                <div class="navigation">
                    <a href="#">Term & Condition</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
            <!-- End Copyright Section -->

        </div>
        <!-- End FOOTER -->

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