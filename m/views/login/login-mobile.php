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

            <h1 class="page-title">Login</h1>

            <!-- Login Section -->
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <form action="http://m.adtoday.co.uk/login" method="post">
                <div class="page-block margin-bottom">
                    <span class="block semibold margin-bottom_low">Already member? Login</span>
                    <div class="input-field">
                        <input name="useremail" type="text" id="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" id="passwd" name="password">
                        <label for="passwd">Password</label>
                    </div>
                    <button type="submit" class="btn orange margin-bottom_low" name="signIn">Login</button>
                    <a href="http://m.adtoday.co.uk/forgot-password">Forgot password</a>
                </div>

            </form>

            <!-- End Login Section -->

            <div class="line"></div>

            <!-- Register Section -->
            <div class="page-block">
                <span class="block semibold">Not registered yet?<a href="http://m.adtoday.co.uk/register"> Register</a></span>
                <p>Since the belonging of the record and having stupid apologize return can't be able and you always
                    mine.</p>
                <a class="btn green block"  href="http://m.adtoday.co.uk/register">Register</a>
            </div>
            <!-- End Register Section -->

        </div>
        <!-- END CONTENT CONTAINER -->
        <?php include ROOT . '/views/layout/footer.php'; ?>
    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->


</body>
</html>