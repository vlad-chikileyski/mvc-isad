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

            <h1 class="page-title">Account Control Panel</h1>

            <p class="text-small"><span
                        class="bold block">Hallo <?php echo $getPanelIdByUserCreateId[0]['username']; ?></span>From this
                account control panel, you can see your detail account, last activity, and update your account
                information. Choose link below to see or update the information.</p>

            <!-- Contact Information Section -->
            <div class="panel-account margin-bottom">
                <div class="heading">Contact Information</div>
                <div class="body">
                    <span class="block"><?php echo $getPanelIdByUserCreateId[0]['username']; ?></span>
                    <p><?php echo $getPanelIdByUserCreateId[0]['email']; ?><a
                                href="http://m.adtoday.co.uk/account/user"> Change email</a></p>
                </div>
            </div>
            <!-- End Contact Information Section -->

            <!-- Billing Address Section -->
            <div class="panel-account margin-bottom">
                <div class="heading">Your account</div>
                <div class="body">
                    <ul><span class="block"><?php echo $getPanelIdByUserCreateId[0]['username']; ?></span></ul>
                    <ul>Birthday: <?php echo $getPanelIdByUserCreateId[0]['birthday']; ?><br/></ul>
                    <ul>Phone: <abbr title="Phone"></abbr> <?php echo $getPanelIdByUserCreateId[0]['phone']; ?></ul>
                    <div class="action">
                        <a href="http://m.adtoday.co.uk/account/user">change</a>
                    </div>
                </div>
            </div>
            <!-- End Billing Address Section -->
        </div>
        <!-- END CONTENT CONTAINER -->


        <?php include ROOT . '/views/layout/footer.php'; ?>
    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->

</body>
</html>