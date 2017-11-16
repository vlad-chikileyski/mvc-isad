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

            <h1 class="page-title">Form Account</h1>
            <form action="http://m.adtoday.co.uk/account/user" method="post">
                <!-- Custom (shofy) form container -->
                <div class="shofy-form">

                    <div class="input-field">
                        <h3 class="out-label">Fullname</h3>
                        <input type="text" name="username" id="username" value="<?php echo $user['username']; ?>">
                    </div>


                    <div class="input-field">
                        <h3 class="out-label">Phone</h3>
                        <input type="text" id="phone" name="phone" value="+<?php echo $user['phone']; ?>">
                    </div>

                    <div class="input-field">
                        <h3 class="out-label">Gender</h3>
                        <p>
                            <?php
                            switch ($select_box_gender_var1) {
                                case 0:
                                    echo
                                    '<input name="gender" type="radio" value="2" id="gender-male"/>
                            <label for="gender-male">Male</label>
                            <input name="gender" type="radio"  value="1" id="gender-female"/>
                            <label for="gender-female">Female</label>
                            <input name="gender" checked="checked" type="radio" value="0" id="gender-none"/>
                            <label for="gender-none">None</label>';
                                    break;
                                case 1:
                                    echo
                                    '<input name="gender" type="radio"  value="2" id="gender-male"/>
                            <label for="gender-male">Male</label>
                            <input name="gender" checked="checked" value="1" type="radio" id="gender-female"/>
                            <label for="gender-female">Female</label>
                            <input name="gender" type="radio" value="0" id="gender-none"/>
                            <label for="gender-none">None</label>';
                                    break;
                                case 2:
                                    echo
                                    '<input name="gender" checked="checked" value="2" type="radio" id="gender-male"/>
                            <label for="gender-male">Male</label>
                            <input name="gender" type="radio"  value="1" id="gender-female"/>
                            <label for="gender-female">Female</label>
                            <input name="gender" type="radio"  value="0" id="gender-none"/>
                            <label for="gender-none">None</label>';
                                    break;
                            }
                            ?>

                        </p>
                    </div>

                    <div class="input-field">
                        <h3 class="out-label">Email</h3>
                        <input type="text" id="email" name="email" value="<?php echo $user['email']; ?>">
                    </div>

                    <div class="input-field">
                        <h3 class="out-label">Newsletter</h3>
                        <p>
                            <?php
                            switch ($check_box_newsletter_var1) {
                                case null:
                                    echo
                                    '<input type="checkbox" name="newsletter" value="1" id="newsletter"/>
                            <label for="newsletter">Newsletter</label>';
                                    break;
                                case 1:
                                    echo
                                    '<input type="checkbox" id="newsletter" name="newsletter" value="2" checked="checked"/>
                            <label for="newsletter">Newsletter</label>';
                                    break;
                            }
                            ?>
                        </p>
                    </div>

                    <div class="input-field">
                        <button type="submit" name="change" class="btn btn-block green"><i class="fa fa-save"></i> Save
                        </button>
                    </div>

                </div>
                <!-- End Custom Form -->
            </form>
        </div>
        <!-- END CONTENT CONTAINER -->


        <!-- FOOTER -->
        <div class="footer">

            <?php include ROOT . '/views/layout/footer.php'; ?>
        </div>
        <!-- END MAIN PAGE -->

    </div><!-- #main -->

</body>
</html>