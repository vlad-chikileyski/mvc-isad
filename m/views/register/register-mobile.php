<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Shofy - Mobile Shop Template</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="x-ua-compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="shortcut icon" href="images/favicon.png">
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

            <h1 class="page-title">Register</h1>

            <!-- Login Section -->
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <form action="http://m.adtoday.co.uk/register" method="post">
                <div class="page-block margin-bottom">
                    <span class="block semibold margin-bottom_low">Already member? <a href="http://m.adtoday.co.uk/login">Login</a></span>
                    <div class="input-field">
                        <input name="username" type="text" id="username">

                        <label for="username">Username</label>
                    </div>
                    <div class="input-field">
                        <input name="useremail" type="text" id="useremail">
                        <label for="useremail">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password">
                        <label for="password">Password</label>
                    </div>
                    <button type="submit" class="btn orange block" name="signUp">Register</button>
                </div>

            </form>
            <!-- End Login Section -->

            <div class="line"></div>
        </div>
        <!-- END CONTENT CONTAINER -->
        <?php include ROOT . '/views/layout/footer.php'; ?>
    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->
</body>
</html>