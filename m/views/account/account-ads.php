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
        <li class="bg7-icon-wrap">
            <a href="#tab002">
                <span><i class="adicon-document"></i></span>
                My Ads
            </a>
        </li>

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

            <h1 class="page-title">My Ads</h1>

            <!-- Order history navigation -->
            <div class="order-history-nav">
                <select class="browser-default">
                    <option value="">Last 15 days</option>
                    <option value="">Last 30 days</option>
                    <option value="">Last 6 month</option>
                    <option value="">Added on 2017</option>
                </select>
            </div>
            <!-- End Order history navigation -->


            <!-- Order history listing (collapsible) -->
            <ul class="collapsible order-history" data-collapsible="accordion">
                <?php foreach ($userProduct as $ads) : ?>
                    <li>
                        <div class="collapsible-header">
                            <span class="indicator fa fa-caret-right"></span>
                            <div class="order-status">
                                Done <span class="fa fa-check"></span>
                            </div>
                            <div class="order-no">
                                <span class="block bold"><?php echo $ads[0]['title']; ?> # <a
                                            href="#"><?php echo $ads[0]['id']; ?></a></span>
                                <span class="block text-small">Added date <?php echo $ads[0]['date']; ?></span>
                            </div>
                        </div>
                        <div class="collapsible-body">
                            <ol>
                                <li>
                                    <div class="thumb">
                                        <img src="/template/images/80x80.png" alt="">
                                    </div>
                                    <div class="ctn">
                                        <h3><a href="#"/></h3><?php echo $ads[0]['title']; ?></a></h3></br>
                                        <span>Description: <?php echo $ads[0]['description']; ?></span>
                                        <p><a href="#" class="track-order">Edit</a></p>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!-- End Order history listing -->

        </div>
        <!-- END CONTENT CONTAINER -->
        <?php include ROOT . '/views/layout/footer.php'; ?>

    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->

</body>
</html>