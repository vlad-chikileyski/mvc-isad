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
                                        <h3><a href="http://m.adtoday.co.uk/ads/<?php echo $ads[0]['category']; ?>/<?php echo $ads[0]['subcategory']; ?>/<?php echo $ads[0]['id']; ?>"/></h3><?php echo $ads[0]['title']; ?></a></h3></br>
                                        <span>Description: <?php echo $ads[0]['description']; ?></span>
                                        <p><a href="http://m.adtoday.co.uk/my-ads/edit/<?php echo $ads[0]['id']; ?>" class="track-order">Edit</a></p>
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