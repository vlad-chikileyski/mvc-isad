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

        <?php include ROOT . '/views/layout/top-navbar.php'; ?>

        <!-- CONTENT CONTAINER -->
        <div class="content-container">

            <h1 class="page-title">It as account of - <?php echo $user['username']; ?></h1>

            <p class="text-small"><span
                        class="bold block">Details</span>From this
                account control panel, you can see your detail account, last activity, and his account
                information.</p>

            <!-- Contact Information Section -->
            <div class="panel-account margin-bottom">
                <div class="heading">Contact Information</div>
                <div class="body">
                    <span class="block">Contact phone number is: <a
                                style="color: blue">+<?php echo $user['phone']; ?></a>  </span>
                    <p>Contact email address is: <a style="color: blue"> <?php echo $user['email']; ?></a>
                </div>
            </div>
            <h4>All <?php echo $user['username']; ?>s ads:</h4>
            <!-- End Contact Information Section -->
            <div class="content-container">

                <ol class="product-small-list animated fadeInLeft">
                    <?php foreach ($allAds as $product) : ?>
                        <li>
                            <div class="thumb">
                                <a href="/ads/<?php echo $product[0]['category']; ?>/<?php echo $product[0]['subcategory']; ?>/<?php echo $product[0]['id']; ?>">
                                    <img src="/template/images/240x240.png" alt="">
                                </a>
                            </div>
                            <div class="product-ctn">
                                <div class="product-name">
                                    <a href="/ads/<?php echo $product[0]['category']; ?>/<?php echo $product[0]['subcategory']; ?>/<?php echo $product[0]['id']; ?>">
                                        <?php echo $product[0]['title']; ?>
                                    </a>
                                </div>
                                <div class="rating">
                                    <span class="block" style="color: black"><?php echo $product[0]['description']; ?></span>
                                </div>
                                <div class="price">
                                    <span class="price-current">£ <?php echo $product[0]['price']; ?></span>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>

                </ol>
                <!-- End Product Small List -->

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