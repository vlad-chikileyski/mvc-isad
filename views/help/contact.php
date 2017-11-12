<?php include ROOT . '/views/layout/header.php'; ?>
<div class="sliding-nav">
    <a class="close-sliding-nav" href="#">Close nav</a>
    <nav class="slide-nav-list">
        <ul>
            <li class="parent">
                <a href="javascript:return;">Demos</a>
                <ul>
                    <li><a href="home2.html">Demo1 - Focus</a></li>
                    <li><a href="home3.html">Demo2 - Expressive</a></li>
                    <li><a href="home4.html">Demo3 - Minimal</a></li>
                    <li><a href="home5.html">Demo4 - Fancy</a></li>
                </ul>
            </li>
            <li class="parent">
                <a href="#">Classified</a>
                <ul>
                    <li><a href="home-default.html">Home</a></li>
                    <li><a href="listing.html">Ads Archive</a></li>
                    <li><a href="single.html">Ad Single</a></li>
                    <li><a href="create.html">Create Ad</a></li>
                    <li><a href="dashboard.html">Dashboard</a></li>
                </ul>
            </li>
            <li class="parent">
                <a href="javascript:return;">Shop</a>
                <ul>
                    <li><a href="shop-index.html">Shop Home</a></li>
                    <li><a href="shop-listing.html">Archive</a></li>
                    <li><a href="shop-single.html">Single</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                </ul>
            </li>
            <li class="parent">
                <a href="javascript:return;">Pages</a>
                <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="terms.html">Terms</a></li>
                </ul>
            </li>
            <li class="parent">
                <a href="javascript:return;">Shortcodes</a>
                <ul>
                    <li><a href="elements-shortcodes.html">Elements</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="elements-bootstrap.html">Bootstrap Components</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                </ul>
            </li>

        </ul>
    </nav>
</div>
<div class="mobile-menu-wrap">
    <a href="#" class="closeMobilMenu">close the mobile menu</a>
    <div class="mobile-menu">
        <div class="search-widget">
            <input type="text" placeholder="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
        <ul class="menu-list">
            <li><a href="create.html">Create an Ad</a></li>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="listing.html">Ads Listing Page</a></li>
            <li><a href="how-adspot-works.html">How this works</a></li>
            <li><a href="about.html">About us</a></li>
            <li><a href="contact.html">Contact us</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="blog-single.html">Blog Single</a></li>
            <li><a href="shop-index.html">Shop Page</a></li>
            <li><a href="shop-listing.html">Shop Archive</a></li>
            <li><a href="cart.html">Cart Page</a></li>
            <li><a href="checkout.html">Checkout Page</a></li>
            <li><a href="elements-shortcodes.html">Checkout Page</a></li>
        </ul>
    </div>
</div>

<div class="app-canvas app-canvas-modif">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="https://adtoday.co.uk/">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
        <?php if (isset($ACTIVE_FLAG) && $ACTIVE_FLAG): ?>
            <div class="page contextual-page mb-0">
                <div class="inner">
                    <div class="pt-100 pb-100">
                        <div class="heading text-center">
                            <h2>Thank you! <br></h2>
                        </div>
                        <header class="page-header text-center">
<!--                            <p style="font-size: 20px;">Publishing your ad on the site may take a little time.<br>
-->                                <strong>Thanks for your message!</strong>
                            </p>
                        </header>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="page contextual-page mb-0">
                <div class="inner">
                    <div data-pin="/template/assets/img/basic/pin.png" data-zoomlvl="5" data-address="texus usa"
                         class="widget-map page-margin-fix" id="widget-map-1">

                    </div>

                    <header class="page-header text-center">
                        <p>If you have questions or comments, please get a hold of us in whichever way is most
                            convenient.
                            <br><strong>Ask away there is no reasonable question that our team can not answer</strong>.
                        </p>
                    </header>

                    <div class="pt-100 pb-100">

                        <div class="heading text-center">
                            <h1>Get In Touch With Us</h1>
                            Send us a message
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-md-8 col-md-offset-2">
                                <form class="clearfix" method="post">
                                    <div class="fields-grid clearfix">
                                        <div class="fields-grid-ele">
                                            <div class="labeled-input">
                                                <label for="addComment001">Your Name</label>
                                                <input type="text" name="name" id="addComment001">
                                            </div>
                                        </div>
                                        <div class="fields-grid-ele">
                                            <div class="labeled-input">
                                                <label for="addComment002">Your Email</label>
                                                <input type="email" name="email" id="addComment002">
                                            </div>
                                        </div>
                                        <div class="fields-grid-ele">
                                            <div class="labeled-input">
                                                <label for="addComment003">Phone</label>
                                                <input type="text" name="phone" id="addComment003">
                                            </div>
                                        </div>
                                        <div class="fields-grid-ele">
                                            <div class="labeled-input">
                                                <label for="addComment004">City</label>
                                                <input type="text" name="city" id="addComment004">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="labeled-input">
                                        <label for="addComment005">Your comment</label>
                                        <textarea id="addComment005" name="message"></textarea>
                                    </div>
                                    <br>
                                    <button class="btn btn-green btn-small block-element" name="contactUs">Send</button>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        <?php endif; ?>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="text-widget">
                        <div class="inner">
                            <h4>About Us</h4>
                            <p>Morbi ut tellus ac leo molestie luctus nec vehicula sed justo ut varius onec tempor
                                rhoncus volutpat ras lorem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="text-widget">
                        <div class="inner">
                            <h4>Our Address</h4>
                            <p>Morbi ut tellus ac leo molestie luctus nec vehicula sed justo ut varius onec tempor
                                rhoncus volutpat ras lorem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="text-widget">
                        <div class="inner">
                            <h4>Contact info</h4>
                            <p>Morbi ut tellus ac leo molestie luctus nec vehicula sed justo ut varius onec tempor
                                rhoncus volutpat ras lorem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="doc-footer style4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7">
                <a href="#"><img src="/template/assets/img/basic/logo.png" alt="adspotlogo"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5">
                <form action="/" class="widget-subscribe-2">
                    <div class="labeled-input">
                        <label>Enter your email address</label>
                        <input title="title here" type="email">
                    </div>
                    <button class="btn btn-blue">subscribe</button>
                </form>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="text-widget">
                    <p>Fusce aliquet quam eget neque ultrices lla posuere felis id arcu blandit sagittis ellen ender
                        purus.</p>
                    <div class="widget-social">
                        <div class="social-links">
                            <ul>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8">
                <div class="grid-list">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Feedback</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <ul>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Trust &amp; Safety</a></li>
                                <li><a href="#">Help &amp; Support</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Cookie Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <ul>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Trust &amp; Safety</a></li>
                                <li><a href="#">Help &amp; Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center copyRights">
            © ADSPOT - Classified
        </div>

    </div>
</footer>
</div>

<!--======================================
Modals
=======================================-->
<div id="signInModal" class="modal-container">
    <a href="#" class="modal-overlay"> click to close modal</a>
    <div class="inner">
        <button class="close_modal"><i class="fa fa-remove"></i></button>
        <div class="modal-content">
            <header>
                <h4>Welcome Back!</h4>
                <p>Please enter your details below</p>
            </header>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <form action="/" method="post">
                <div class="field-block">
                    <div class="labeled-input">
                        <label>Username</label>
                        <input title="title here" name="username" type="text">
                    </div>
                </div>
                <div class="field-block">
                    <div class="labeled-input">
                        <label>Password</label>
                        <input title="title here" name="password" type="password">
                    </div>
                </div>
                <div class="row login-actions field-block">
                    <div class="col-xs-12 col-sm-6">
                        <div class="custom-radio">
                            <input type="radio" name="item-condition" id="login001">
                            <label for="login001">Remember me</label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 xs-text-left text-right">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>

                <button type="submit" name="signIn" class="btn btn-md btn-green block-element">Login Now</button>
                <div class="login-cta text-center">
                    <p>Don't have an account?</p>
                    <a class="modal-trigger" href="#signUpModal">Register here FREE</a>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="signUpModal" class="modal-container">
    <a href="#" class="modal-overlay"> click to close modal</a>
    <div class="inner">
        <button class="close_modal"><i class="fa fa-remove"></i></button>
        <div class="modal-content">
            <?php if (isset($query_registration)): ?>
                <p>You Are Successfully Registered!</p>
            <?php else: ?>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <header>
                    <h4>Welcome Back!</h4>
                    <p>Please enter your details below</p>
                </header>
                <form action="/" method="post">
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Username</label>
                            <input title="title here" name="username" type="text" value="<?php if (isset($username)) {
                                echo $username;
                            } ?>">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Password</label>
                            <input title="title here" name="password" type="password"
                                   value="<?php if (isset($username)) {
                                       echo $password;
                                   } ?>">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Email</label>
                            <input title="title here" name="email" type="email" value="<?php if (isset($username)) {
                                echo $email;
                            } ?>">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="icon-field">
                            <span>+44</span>
                            <input type="text" name="phone" placeholder="Your Contact #">
                        </div>
                    </div>


                    <button type="submit" name="signUp" class="btn btn-md btn-green block-element">Signup Now</button>
                    <div class="login-cta text-center"><br>
                        By clicking Signup Now, you agree to <br>
                        <a href="https://adtoday.co.uk/terms">our Terms</a>.
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<!--========================================
Javascript
===========================================-->
<script src="/template/assets/lib/jquery/dist/jquery.min.js"></script>
<script src="/template/assets/lib/slick-carousel/slick/slick.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRu9ezOw1CH3F0sCGUtPrB972hRgKmU7w"
        type="text/javascript"></script>
<script src="/template/assets/js/app.js"></script>

</body>
</html>