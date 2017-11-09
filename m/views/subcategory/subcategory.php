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

            <h1 class="page-title animated fadeIn">Category List</h1>

            <!-- Category List -->
            <ol class="category-list animated fadeLeft">
                <?php foreach ($subCategoryListElements as $subcategory) : ?>
                    <li><!-- Category list item #4 -->
                        <div class="thumb">
                            <a href="http://m.adtoday.co.uk/<?php echo $subcategory['url']; ?>/">
                                <img src="/template/images/240x240.png" alt="">
                            </a>
                        </div>
                        <div class="category-ctn">
                            <div class="cat-name">
                                <a href="http://m.adtoday.co.uk/<?php echo $subcategory['url']; ?>/">
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
        <?php include ROOT . '/views/layout/footer.php'; ?>
    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->
</body>
</html>