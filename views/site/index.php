<!doctype html>
<html lang="en">
<head>

    <title>AdSpot - The Classified Web App</title>
    <!--========================================
    Meta
    ===========================================-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->

    <!-- Add to home screen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="xDocs">
    <link rel="icon" sizes="192x192" href="/template/assets/img/basic/chrome-touch-icon-192x192.png">

    <!-- Add to home screen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="/template/assets/img/basic/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="/template/assets/img/basic/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#55acee">
    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#55acee">

    <!--========================================
    CSS
    ===========================================-->
    <!--3rd party plugins-->
    <link href="/template/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/template/assets/lib/slick-carousel/slick/slick.css" rel="stylesheet" type="text/css">
    <!--custom icons for classified website-->
    <link href="/template/assets/css/adspoticons.css" rel="stylesheet" type="text/css">
    <!--main styles for template-->
    <link href="/template/assets/css/style.css" rel="stylesheet" type="text/css">
    <!--put your custom css on the file below-->
    <link href="/template/assets/css/custom.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="web-app">

    <div class="doc-header">
        <div class="container">
            <div class="inner">
                <div class="app-logo">
                    <button class="mobile-control mob-menu-trigger"><i class="adicon-hamburger"></i></button>
                    <a href="home-default.html"><img src="/template/assets/img/basic/logo.png" alt="adspot"></a>
                </div>
                <ul class="quick-actions">
                    <li class="dropdown-wrap">
                        <a href="#">English <i class="fa fa-caret-down"></i></a>
                        <div class="basic-dropdown">
                            <ul class="country-list">
                                <li><a href="#"><img src="/template/assets/img/flags/ukflag.png" alt="dummy">English (UK)</a></li>
                                <li><a href="#"><img src="/template/assets/img/flags/france.png" alt="dummy">France</a></li>
                                <li><a href="#"><img src="/template/assets/img/flags/germany.png" alt="dummy">German</a></li>
                                <li><a href="#"><img src="/template/assets/img/flags/russian.png" alt="dummy">Russian</a></li>
                                <li><a href="#"><img src="/template/assets/img/flags/china.png" alt="dummy">Chinese</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="modal-trigger" href="#signInModal">Login</a></li>
                    <li><a class="modal-trigger" href="#signUpModal">Register</a></li>
                    <li class="dropdown-wrap wide">
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        <div class="basic-dropdown wide">
                            <div class="short-cart">
                                <ul>
                                    <li>
                                        <figure><img src="/template/assets/img/items/ad1.png" alt="dummy"></figure>
                                        <a href="#" class="item-title">Iphone 6 Plus 16GB</a>
                                        <span>$229.00</span>
                                        <a href="#" class="remove-item"><i class="fa fa-close"></i></a>
                                    </li>
                                    <li>
                                        <figure><img src="/template/assets/img/items/ad2.jpg" alt="dummy"></figure>
                                        <a href="#" class="item-title">Iphone 6 Plus 16GB</a>
                                        <span>$229.00</span>
                                        <a href="#" class="remove-item"><i class="fa fa-close"></i></a>
                                    </li>
                                    <li>
                                        <figure><img src="/template/assets/img/items/ad3.jpg" alt="dummy"></figure>
                                        <a href="#" class="item-title">Iphone 6 Plus 16GB</a>
                                        <span>$229.00</span>
                                        <a href="#" class="remove-item"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <table>
                                    <tr>
                                        <td>Total Price</td>
                                        <td><strong>885.00 USD</strong></td>
                                    </tr>
                                </table>
                                <a href="cart.html" class="btn btn-transparent block-element">View Cart</a>
                            </div>
                        </div>
                    </li>
                    <li><a class="nav-trigger" href="#"><i class="fa fa-navicon"></i></a></li>
                </ul>
                <div class="clearfix">
                    <a href="create.html" class="btn btn-green pull-right quick-post">Post your ad</a>
                    <div class="pull-right search-filters">
                        <div class="mega-dropdown pull-left">
                            <button>Select City</button>
                            <i class="fa fa-navicon"></i>
                            <div class="mega-content">
                                <div class="inner">
                                    <div class="search-widget">
                                        <input type="text" placeholder="search">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>

                                    <div class="mega-list">
                                        <header>
                                            <i class="adicon-buildings"></i> Popular Cities
                                        </header>
                                        <ul class="clearfix">
                                            <li><a href="#">Bradford</a></li>
                                            <li><a href="#">Cambridge</a></li>
                                            <li><a href="#">Chester</a></li>
                                            <li><a href="#">Durham</a></li>
                                            <li><a href="#">Scotland</a></li>
                                            <li><a href="#">Lancaster</a></li>
                                            <li><a href="#">Liverpool</a></li>
                                            <li><a href="#">City of london</a></li>
                                            <li><a href="#">Bradford</a></li>
                                            <li><a href="#">Cambridge</a></li>
                                            <li><a href="#">Chester</a></li>
                                            <li><a href="#">Durham</a></li>
                                            <li><a href="#">Scotland</a></li>
                                            <li><a href="#">Lancaster</a></li>
                                            <li><a href="#">Liverpool</a></li>
                                            <li><a href="#">City of london</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mega-filtered-search">
                            <div class="mega-dropdown">
                                <button>Select Category</button>
                                <i class="fa fa-navicon"></i>
                                <div class="mega-content">
                                    <ul class="category-list">
                                        <li><a href="#"><i class="adicon-grid"></i>All Categories</a></li>
                                        <li><a href="#"><i class="adicon-car"></i>Vehicles</a>
                                            <ul>
                                                <li><a href="#">Cars</a></li>
                                                <li><a href="#">Motorcycles</a></li>
                                                <li><a href="#">Scooters</a></li>
                                                <li><a href="#">Bicycles</a></li>
                                                <li><a href="#">Commercial Vehicles</a></li>
                                                <li><a href="#">Spare Parts & Accessories</a></li>
                                                <li><a href="#">Other Vehicles</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="adicon-tablet"></i>Mobiles</a>
                                            <ul>
                                                <li><a href="#">Iphone</a></li>
                                                <li><a href="#">Android</a></li>
                                                <li><a href="#">Q mobile</a></li>
                                                <li><a href="#">Black berry</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="adicon-tv"></i>Electronics</a>
                                            <ul>
                                                <li><a href="#">Washing Machine</a></li>
                                                <li><a href="#">Television</a></li>
                                                <li><a href="#">Air conditioner</a></li>
                                                <li><a href="#">Computers and Laptops</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="adicon-sofa"></i>Furniture</a></li>
                                        <li><a href="#"><i class="adicon-briefcase"></i>Jobs</a></li>
                                        <li><a href="#"><i class="adicon-buildings"></i>Real Estate</a></li>
                                        <li><a href="#"><i class="adicon-bell"></i>Services</a></li>
                                        <li><a href="#"><i class="adicon-hat"></i>Education</a></li>
                                        <li><a href="#"><i class="adicon-dog"></i>Animals</a></li>
                                        <li><a href="#"><i class="adicon-heal"></i>Fashion</a></li>
                                        <li><a href="#"><i class="adicon-smile"></i>Baby Products</a></li>
                                        <li><a href="#"><i class="adicon-hearts"></i>Matrimony</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="search-widget">
                                <input type="text" placeholder="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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
                    <a  href="javascript:return;">Shop</a>
                    <ul>
                        <li><a href="shop-index.html">Shop Home</a></li>
                        <li><a href="shop-listing.html">Archive</a></li>
                        <li><a href="shop-single.html">Single</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a  href="javascript:return;">Pages</a>
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="terms.html">Terms</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a  href="javascript:return;">Shortcodes</a>
                    <ul>
                        <li><a href="elements-shortcodes.html">Elements</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="elements-bootstrap.html">Bootstrap Components</a></li><li><a href="buttons.html">Buttons</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
    <div class="mobile-menu-wrap">
        <a href="#" class="closeMobilMenu">close the mobile menu</a>
        <nav class="mobile-menu">
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
        </nav>
    </div>

    <div class="app-canvas">
        <div class="container">
            <header class="heading big text-center">
                <h1>World’s <strong>Biggest</strong> Classified Marketplace</h1>
                <p class="text-uppercase">sell &amp; purchase anything</p>
            </header>
            <div class="cat-boxes">
                <a href="listing.html" class="cat-box">
                    <div class="inner">
                        <div class="adicon-car bg1"></div>
                        <span>vehicles</span>
                    </div>
                </a>
                <a href="listing.html" class="cat-box">
                    <div class="inner">
                        <div class="adicon-tablet bg2"></div>
                        <span>Mobiles</span>
                    </div>
                </a>
                <a href="listing.html" class="cat-box">
                    <div class="inner">
                        <div class="adicon-tv bg3"></div>
                        <span>Electronics</span>
                    </div>
                </a>
                <a href="listing.html" class="cat-box">
                    <div class="inner">
                        <div class="adicon-sofa bg4"></div>
                        <span>Furniture</span>
                    </div>
                </a>
                <a href="listing.html" class="cat-box">
                    <div class="inner">
                        <div class="adicon-briefcase bg5"></div>
                        <span>Jobs</span>
                    </div>
                </a>
                <a href="listing.html" class="cat-box">
                    <div class="inner">
                        <div class="adicon-buildings bg6"></div>
                        <span>Real Estate</span>
                    </div>
                </a>
                <a href="listing.html" class="cat-box">
                    <div class="inner">
                        <div class="adicon-bell bg7"></div>
                        <span>services</span>
                    </div>
                </a>
                <a href="listing.html" class="cat-box">
                    <div class="inner">
                        <div class="adicon-hat bg8"></div>
                        <span>education</span>
                    </div>
                </a>
                <a href="listing.html" class="cat-box">
                    <div class="inner">
                        <div class="adicon-dog bg9"></div>
                        <span>animals</span>
                    </div>
                </a>
                <a href="listing.html" class="cat-box">
                    <div class="inner">
                        <div class="adicon-heal bg10"></div>
                        <span>fashion</span>
                    </div>
                </a>
                <a href="listing.html" class="cat-box">
                    <div class="inner">
                        <div class="adicon-smile bg11"></div>
                        <span>baby products</span>
                    </div>
                </a>
                <a href="listing.html" class="cat-box">
                    <div class="inner">
                        <div class="adicon-hearts bg12"></div>
                        <span>matrimony</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <div class="text-widget">
                            <div class="inner">
                                <h4>About Us</h4>
                                <p>Morbi ut tellus ac leo molestie luctus nec vehicula sed justo ut varius onec tempor rhoncus volutpat ras lorem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="text-widget">
                            <div class="inner">
                                <h4>Sell Safely</h4>
                                <p>Morbi ut tellus ac leo molestie luctus nec vehicula sed justo ut varius onec tempor rhoncus volutpat ras lorem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="text-widget">
                            <div class="inner">
                                <h4>Buy Safely</h4>
                                <p>Morbi ut tellus ac leo molestie luctus nec vehicula sed justo ut varius onec tempor rhoncus volutpat ras lorem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-7 pull-right">
                        <header>
                            <span class="text-uppercase">Make Your Phone a classified machine</span>
                            <h2>Download Free Classified App</h2>
                        </header>
                        <div class="row inner">
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="/template/assets/img/android.png" alt="Google play">
                                    <span>download on</span>
                                    <h4>Google Play</h4>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="/template/assets/img/apple.png" alt="Apple store">
                                    <span>download on</span>
                                    <h4>Apple Store</h4>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="/template/assets/img/win.png" alt="windows store">
                                    <span>download on</span>
                                    <h4>Windows Store</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-4 col-md-5 pull-right">
                        <div class="action-mock">
                            <img src="/template/assets/img/app-mock.png" alt="download apps">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
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
            <form action="/">
                <div class="field-block">
                    <div class="labeled-input">
                        <label>Username</label>
                        <input title="title here" type="text">
                    </div>
                </div>
                <div class="field-block">
                    <div class="labeled-input">
                        <label>Password</label>
                        <input title="title here" type="password">
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

                <button class="btn btn-md btn-green block-element">Login Now</button>
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
            <header>
                <h4>Welcome Back!</h4>
                <p>Please enter your details below</p>
            </header>
            <form action="/">
                <div class="field-block">
                    <div class="labeled-input">
                        <label>Username</label>
                        <input title="title here" type="text">
                    </div>
                </div>
                <div class="field-block">
                    <div class="labeled-input">
                        <label>Password</label>
                        <input title="title here" type="password">
                    </div>
                </div>
                <div class="field-block">
                    <div class="icon-field">
                        <span>+44</span>
                        <input type="text" placeholder="Your Contact #">
                    </div>
                </div>


                <button class="btn btn-md btn-green block-element">Signup Now</button>
                <div class="login-cta text-center"><br>
                    By clicking Signup Now, you agree to <br>
                    <a href="#">our Terms</a> and <a href="#">Privacy Policy</a>.
                </div>
            </form>
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
