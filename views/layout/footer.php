<footer class="doc-footer style4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7">
                <a href="#"><img src="/template/assets/img/basic/logo.png" alt="adspotlogo"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5">
                <?php if (isset($errorr) && is_array($errorr)): ?>
                    <ul>
                        <?php foreach ($errorr as $error): ?>
                            <li> <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <form method="post" class="widget-subscribe-2">
                    <div class="labeled-input">
                        <input title="title here" type="email" name="email-subscribe" id="email-subscribe">
                        <label for="email-subscribe">Enter your email address</label>
                    </div>
                    <button type="submit" class="btn btn-blue" name="submit-subscribe">subscribe</button>
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
                            <input title="title here" name="password" type="password" value="<?php if (isset($username)) {
                                echo $password;
                            } ?>">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Email</label>
                            <input title="title here" name="email" type="email" value="<?php if (isset($username)) {
                                echo $email;
                            }?>">
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
<script src="/template/assets/js/app.js"></script>

</body>
</html>