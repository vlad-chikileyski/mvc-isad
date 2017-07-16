<footer class="doc-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Feedback</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4">
                <ul>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">Trust &amp; Safety</a></li>
                    <li><a href="#">Help &amp; Support</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4">
                <ul>
                    <li><a href="/Privacy Policy">Privacy Policy</a></li>
                    <li><a href="/terms">Terms of Service</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="social-links">
            <ul>
                <li><a href="#" target="_blank" class="fa fa-twitter"></a></li>
                <li><a href="#" target="_blank" class="fa fa-facebook"></a></li>
                <li><a href="#" target="_blank" class="fa fa-linkedin"></a></li>
                <li><a href="#" target="_blank" class="fa fa-youtube-play"></a></li>
            </ul>
        </div>
        <div class="text-center">
            &copy; ADSPOT - Classified
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
        <div class="social_login_opt">
            <div>
                <div class="opt-navigator dropdown-wrap">
                    <button>open options</button>
                    <div class="basic-dropdown">
                        <ul class="social-drop-list">
                            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social-opts">
                    <a href="#" class="opt-fb-login active">
                        <i class="fa fa-facebook"></i>
                        <span>Sign in with facebook</span>
                    </a>
                    <a href="#" class="opt-gp-login">
                        <i class="fa fa-google-plus"></i>
                        <span>Sign in with Google+</span>
                    </a>
                    <a href="#" class="opt-twitter-login">
                        <i class="fa fa-twitter"></i>
                        <span>Sign in with Twitter</span>
                    </a>
                    <a href="#" class="opt-instagram-login">
                        <i class="fa fa-instagram"></i>
                        <span>Sign in with Instagram</span>
                    </a>
                    <a href="#" class="opt-linkedin-login">
                        <i class="fa fa-linkedin"></i>
                        <span>Sign in with Linkedin</span>
                    </a>
                </div>
            </div>
            <span class="split-opt">or</span>
        </div>
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
                    <a href="#">Register here FREE</a>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="signUpModal" class="modal-container">
    <a href="#" class="modal-overlay"> click to close modal</a>
    <div class="inner">
        <button class="close_modal"><i class="fa fa-remove"></i></button>
        <div class="social_login_opt">
            <div>
                <div class="opt-navigator dropdown-wrap">
                    <button>open options</button>
                    <div class="basic-dropdown">
                        <ul class="social-drop-list">
                            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social-opts">
                    <a href="#" class="opt-fb-login active">
                        <i class="fa fa-facebook"></i>
                        <span>Sign in with facebook</span>
                    </a>
                    <a href="#" class="opt-gp-login">
                        <i class="fa fa-google-plus"></i>
                        <span>Sign in with Google+</span>
                    </a>
                    <a href="#" class="opt-twitter-login">
                        <i class="fa fa-twitter"></i>
                        <span>Sign in with Twitter</span>
                    </a>
                    <a href="#" class="opt-instagram-login">
                        <i class="fa fa-instagram"></i>
                        <span>Sign in with Instagram</span>
                    </a>
                    <a href="#" class="opt-linkedin-login">
                        <i class="fa fa-linkedin"></i>
                        <span>Sign in with Linkedin</span>
                    </a>
                </div>
            </div>
            <span class="split-opt">or</span>
        </div>
        <div class="modal-content">
            <?php if ($result): ?>
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
                            <input title="title here" name="username" type="text" value="<?php echo $username; ?>">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Password</label>
                            <input title="title here" name="password" type="password" value="<?php echo $password; ?>">
                        </div>
                    </div>
                    <div class="field-block">
                        <div class="labeled-input">
                            <label>Email</label>
                            <input title="title here" name="email" type="email" value="<?php echo $email; ?>">
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
                        <a href="#">our Terms</a> and <a href="#">Privacy Policy</a>.
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
<script src="/template/assets/js/app.js"></script>

</body>
</html>