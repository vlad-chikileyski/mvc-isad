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
        <div class="content-container">

            <h1 class="page-title animated fadeIn">Product Small List</h1>

            <!-- Product navigation -->
            <div class="product-list-navigation animated fadeInRight">
                <div class="product-num">1-24 from 9661 product</div>
                <div class="sorting-nav">
                    <span class="label">Sort by</span>
                    <div class="sorting-dropdown">
                        <select class="browser-default">
                            <option value="" selected>Latest</option>
                            <option value="">Popular</option>
                            <option value="">Cheapest</option>
                            <option value="">Most Expensive</option>
                            <option value="">High rating</option>
                            <option value="">Alphabet A-Z</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- End Product navigation -->

            <!-- Product Small List -->
            <ol class="product-small-list animated fadeInLeft">
                <?php foreach ($categoryProducts as $product) : ?>
                    <li>
                        <div class="thumb">
                            <a href="product.html">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="product-ctn">
                            <div class="product-name">
                                <a href="/ads/<?php echo $product['category']; ?>/<?php echo $product['subcategory']; ?>/<?php echo $product['id']; ?>">
                                    <?php echo $product['title']; ?>
                                </a>
                            </div>
                            <div class="rating">
                                <span class="block" style="color: black">Standard Shipping</span>
                            </div>
                            <div class="price">
                                <span class="price-current">£<?php echo $product['price']; ?></span>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>

            </ol>
            <!-- End Product Small List -->

            <div class="clear"></div><!-- Use this class (.clear) to clearing float -->

            <!-- Pagination -->
            <ul class="pagination">
                <?php echo $pagination->get(); ?>
               <!-- <li class="disabled"><a href="#!"><i class="fa fa-angle-double-left"></i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-double-right"></i></a></li>-->

            </ul>
            <!-- End Pagination -->

        </div>
        <!-- END CONTENT CONTAINER -->
        <?php include ROOT . '/views/layout/footer.php'; ?>
    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->
</body>
</html>