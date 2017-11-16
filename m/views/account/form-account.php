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
                        <input type="text" name="username" id="username" value="<?php echo $user['username'];?>">
                    </div>

                    <div class="row">
                        <h3 class="out-label">Birthday</h3>

                        <div class="input-field col s4">
                            <select>
                                <option value="1">26</option>
                                <option value="1" selected>27</option>
                            </select>
                        </div>

                        <div class="input-field col s4">
                            <select>
                                <option value="">Mei</option>
                                <option value="" selected>Apr</option>
                            </select>
                        </div>

                        <div class="input-field col s4">
                            <select>
                                <option value="" selected>1988</option>
                                <option value="">1989</option>
                            </select>
                        </div>
                    </div><!-- .row -->

                    <div class="input-field">
                        <h3 class="out-label">Phone</h3>
                        <input type="text" id="phone" name="phone"  value="+<?php echo $user['phone'];?>">
                    </div>

                    <div class="input-field">
                        <h3 class="out-label">Gender</h3>
                        <p>
                            <input name="group1" type="radio" id="test1"/>
                            <label for="test1">Male</label>
                            <input name="group1" checked="checked" type="radio" id="test2"/>
                            <label for="test2">Female</label>
                        </p>
                    </div>

                    <div class="input-field">
                        <h3 class="out-label">Email</h3>
                        <input type="text" id="email" name="email" value="<?php echo $user['email'];?>">
                    </div>

                    <div class="input-field">
                        <h3 class="out-label">Newsletter</h3>
                        <p>
                            <input type="checkbox" id="test6" checked="checked"/>
                            <label for="test6">Newsletter</label>
                        </p>
                    </div>

                    <div class="input-field">
                        <button type="submit" name="change" class="btn btn-block green"><i class="fa fa-save"></i> Save</button>
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