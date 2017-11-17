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
            <?php if (isset($ACTIVE_FLAG) && $ACTIVE_FLAG): ?>
            <div class="not-found animated fadeIn">
                <h2>Success</h2>
                <p>We sent you a mail.<br> Please check your email!</p>
                <a href="http://m.adtoday.co.uk/" class="btn blue"><i class="fa fa-home"></i> Back to homepage</a>
            </div>
            <?php else: ?>
                <h1 class="page-title">Forgot password</h1>

                <!-- Login Section -->
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <form action="http://m.adtoday.co.uk/forgot-password" method="post">
                    <div class="page-block margin-bottom">
                        <div class="input-field">
                            <input name="usermail" type="text" id="usermail">
                            <label for="usermail">Email</label>
                        </div>
                        <button type="submit" class="btn orange margin-bottom_low" name="chekPass">Forgot password
                        </button>
                    </div>

                </form>

                <!-- End Login Section -->

                <div class="line"></div>

                <!-- Register Section -->
                <div class="page-block">
                    <span class="block semibold">Not registered yet? <a
                                href="http://m.adtoday.co.uk/register">Register</a></span>
                    <p>Since the belonging of the record and having stupid apologize return can't be able and you always
                        mine.</p>
                    <a class="btn green block" href="http://m.adtoday.co.uk/register">Register</a>
                </div>
                <!-- End Register Section -->
            <?php endif; ?>
        </div>
        <!-- END CONTENT CONTAINER -->
        <?php include ROOT . '/views/layout/footer.php'; ?>
    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->
</body>
</html>