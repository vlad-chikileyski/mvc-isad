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
                <h1 class="page-title animated fadeIn"> <?php echo ucfirst($categoryProducts[0]['subcategory']); ?></h1>
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
                            <a href="/ads/<?php echo $product['category']; ?>/<?php echo $product['subcategory']; ?>/<?php echo $product['id']; ?>">
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