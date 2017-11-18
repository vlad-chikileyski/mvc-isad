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

            <!-- Product Header -->
            <div class="content-header">
                <div class="breadcrumbs animated fadeIn"><!-- Product breadcrumb -->
                    <?php foreach ($mainAds

                    as $mainAds): ?>
                    <a href="http://m.adtoday.co.uk/sub/<?php echo $mainAds['category']; ?>/"><?php echo ucfirst($mainAds['category']); ?></a>
                    <a href="http://m.adtoday.co.uk/catalog/<?php echo $mainAds['category']; ?>/<?php echo $mainAds['subcategory']; ?>/"><?php echo ucfirst($mainAds['subcategory']); ?></a>
                    <a class="active"
                       href="http://m.adtoday.co.uk/catalog/<?php echo $mainAds['category']; ?>/<?php echo $mainAds['subcategory']; ?>/<?php echo $mainAds['id']; ?>"><?php echo ucfirst($mainAds['title']); ?></a>
                </div><!-- End Product breadcrumb -->
                <h2 class="product-title animated fadeIn"></h2>
                <?php echo ucfirst($mainAds['title']); ?><!-- Product title -->
                <!-- Product thumbnail slider -->
                <ul class="product-slider animated fadeInRight"><!-- Single thumbnail -->
                    <li>
                        <a class="fullscreen-icon swipebox" href="<?php echo $mainAds['image-1']; ?>"
                           title="<?php echo $mainAds['title']; ?>">
                            <i class="fa fa-expand"></i>
                        </a>
                        <img src="<?php echo $mainAds['image-1']; ?>" alt="img"/>
                    </li>
                    <li>
                        <a class="fullscreen-icon swipebox" href="<?php echo $mainAds['image-2']; ?>"
                           title="<?php echo $mainAds['title']; ?>">
                            <i class="fa fa-expand"></i>
                        </a>
                        <img src="<?php echo $mainAds['image-2']; ?>" alt="img"/>
                    </li>
                    <li>
                        <a class="fullscreen-icon swipebox" href="<?php echo $mainAds['image-3']; ?>"
                           title="<?php echo $mainAds['title']; ?>">
                            <i class="fa fa-expand"></i>
                        </a>
                        <img src="<?php echo $mainAds['image-3']; ?>" alt="img"/>
                    </li>
                </ul><!-- End single thumbnail -->
                <div class="slick-thumbs"><!-- Small thumb indicator -->
                    <ul>
                        <li>
                            <img src="<?php echo $mainAds['image-1']; ?>" alt="img"/>
                        </li>
                        <li>
                            <img src="<?php echo $mainAds['image-2']; ?>" alt="img"/>
                        </li>
                        <li>
                            <img src="<?php echo $mainAds['image-3']; ?>" alt="img"/>
                        </li>
                    </ul>
                </div><!-- End small thumb indicator -->
                <!-- End Product thumbnail slider -->

                <!-- You can also use static thumbnail (without slider) via HTML tag below
                ---------------------------------------------------
                <div class="big-thumb">
                    <img src="images/1.jpg" alt="">
                </div>
                -------------------------------------------------
                -->

                <!-- Product meta -->
                <div class="product-meta animated fadeInUp">
                    <div class="price">
                        <span class="price">£ <?php echo $mainAds['price']; ?></span>
                    </div>
                    <!-- Beside .in-stock class, you can also use .out-of-stock class -->
                    <div class="availability in-stock">
                        <?php echo $mainAds['date']; ?>
                    </div>
                </div>
                <!-- End Product meta -->

            </div>
            <!-- End Product Header -->

            <!-- Product tabs -->
            <div class="product-tabs">
                <ul class="tabs">
                    <li class="tab"><a class="active" href="#detail">Description</a></li>
                    <li class="tab"><a href="#review">Details</a></li>
                </ul>
            </div>
            <!-- End Product tabs -->

            <!-- Product content -->
            <div class="product-content">

                <!-- Product detail tabs -->
                <div class="tab-content" id="detail">
                    <p><?php echo ucfirst($mainAds['description']); ?></p>
                </div>
                <!-- End Product detail tabs -->

                <!-- Product review list tabs -->
                <div class="tab-content" id="review">

                    <ol class="product-review-list">
                        <li>
                            <div class="review-idty">
                                <div class="name">
                                    Andriy Sheva
                                </div>
                            </div>
                            <div class="review-ctn">
                                awesome product
                            </div>
                        </li>
                        <li>
                            <div class="review-idty">
                                <div class="name">
                                    Carlos de Mello
                                </div>
                            </div>
                            <div class="review-ctn">
                                The product has come softly, thank you maleo.
                            </div>
                        </li>
                        <li>
                            <div class="review-idty">
                                <div class="name">
                                    Jackson Thiago
                                </div>
                            </div>
                            <div class="review-ctn">
                                No one doubt about quality of this product. Congratulations for all.
                            </div>
                        </li>
                        <li>
                            <div class="review-idty">
                                <div class="name">
                                    Melanie Ricardo
                                </div>
                            </div>
                            <div class="review-ctn">
                                Only one thing, please give us some explanation more.
                            </div>
                        </li>
                    </ol>
                </div>
                <!-- End Product review list tabs -->

            </div>
            <!-- End Product content -->
            <?php endforeach; ?>

            <div class="line"></div>

            <!-- Related product section -->
            <div class="page-block">

                <h2 class="block-title">
                    <span>You may like also</span>
                </h2>

                <ol class="product-list-slider">
                    <?php foreach ($similarAds as $ads): ?>
                        <li>
                            <div class="thumb">
                                <a href="http://m.adtoday.co.uk/ads/<?php echo $ads['category']; ?>/<?php echo $ads['subcategory']; ?>/<?php echo $ads['id']; ?>">
                                    <img src="<?php echo $ads['image-0']; ?>">
                                </a>
                            </div>
                            <div class="product-ctn">
                                <div class="product-name">
                                    <span><?php echo ucfirst($ads['title']); ?></span>
                                </div>
                                <div class="price">
                                    <span class="price-current">£ <?php echo $ads['price']; ?></span>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ol>

                <div class="clear"></div><!-- Use this class (.clear) to clearing float -->

            </div>
            <!-- End Related product section -->

        </div>
        <!-- END CONTENT CONTAINER -->
        <?php include ROOT . '/views/layout/footer.php'; ?>

    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->
</body>
</html>