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

            <h1 class="page-title" align="center">Contact</h1>
            <?php if (isset($ACTIVE_FLAG) && $ACTIVE_FLAG): ?>
                <span class="semibold block" align="center">Thanks for your massage!</span>
            <?php else: ?>
                <form action="http://m.adtoday.co.uk/contact/" method="post">
                    <div class="page-block margin-bottom">
                        <div class="input-field with-icon">
				<span class="icon">
					<i class="fa fa-user"></i>
				</span>
                            <input type="text" name="username" id="username">
                            <label for="username">Name</label>
                        </div>

                        <div class="input-field with-icon">
				<span class="icon">
					<i class="fa fa-envelope"></i>
				</span>
                            <input type="text" name="useremail" id="useremail">
                            <label for="useremail">Email</label>
                        </div>

                        <div class="input-field with-icon">
				<span class="icon">
					<i class="fa fa-phone"></i>
				</span>
                            <input name="userphone" type="text" id="userphone">
                            <label for="userphone">Phone</label>
                        </div>

                        <div class="input-field with-icon">
				<span class="icon">
					<i class="fa fa-map-marker"></i>
				</span>
                            <input type="text" name="usercity" id="usercity">
                            <label for="usercity">City</label>
                        </div>

                        <div class="input-field with-icon">
				         <span class="icon">
					<i class="fa fa-comment"></i>
				           </span>
                            <textarea name="usermassage" id="usermassage" class="materialize-textarea"></textarea>
                            <label for="usermassage">Message</label>
                        </div>

                        <div class="button-field">
                            <button type="submit" name="contactUs" class="btn blue block margin-bottom">Send</button>
                        </div>
                    </div>
                </form>
            <?php endif; ?>

        </div>
        <!-- END CONTENT CONTAINER -->
        <?php include ROOT . '/views/layout/footer.php'; ?>
    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->
</body>
</html>