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



        <!-- CONTENT CONTAINER -->
        <div class="content-container animated fadeInUp">

            <!-- Category Section -->
            <div class="page-block margin-bottom">

                <h2 align="center" class="block-title">
                    <span>Select the category to which you want to add your listing!</span>
                    <!-- <span> tag to make blue border on this text only -->
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
    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->
</body>
</html>