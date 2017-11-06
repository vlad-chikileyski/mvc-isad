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
    <script src="https://js.stripe.com/v3/"></script>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6641606365117202",
            enable_page_level_ads: true
        });
    </script>
</head>
<body>
<div class="web-app">

    <div class="doc-header header-fixed">
        <div class="container">
            <div class="inner">
                <div class="app-logo">
                    <button class="mobile-control mob-menu-trigger"><i class="adicon-hamburger"></i></button>
                    <a href="/"><img src="/template/assets/img/basic/logo.png" alt="adtoday"></a>
                </div>
                <ul class="quick-actions">
                    <a href="/add/" class="btn btn-green pull-right quick-post">Post your ad</a>

                    <?php if (User::isGuest()): ?>
                        <li class="dropdown-wrap">
                            <a href="#">My account<i class="fa fa-caret-down"></i></a>
                            <div class="basic-dropdown">
                                <ul class="country-list">
                                    <li><a href="/account/">My account</a></li>
                                    <li><a href="/account/logout">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    <?php else: ?>
                        <li><a class="modal-trigger" href="#signInModal">Login</a></li>
                        <li><a class="modal-trigger" href="#signUpModal">Register</a></li>
                    <?php endif; ?>
                </ul>
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
            <div class="breadcrumb catalog-shadow-style">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>About us</li>
                </ul>
            </div>

            <div class="checkout-area row">
                <div class="col-xs-12 col-md-8">

                    <div class="panel-block">
                        <header><h6>Checkout Options</h6></header>
                        <div class="inner">
                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-lg-12">
                                    <form method="post" name="payment-form099" id="payment-form"
                                          class="payment-form-onj123">
                                        <div class="group-main001">
                                            <label class="payment-label">
                                                <span>Name</span>
                                                <input name="cardholder-name" class="field-sub009"
                                                       placeholder="Jane Doe"/>
                                            </label>
                                            <label class="payment-label">
                                                <span>Phone</span>
                                                <input class="field-sub009" placeholder="(123) 456-7890" type="tel"
                                                       style="
                                                       background: transparent;
                                                       font-weight: 300;
                                                       border: 0;
                                                       color: #31325F;
                                                       outline: none;
                                                       padding-right: 10px;
                                                       padding-left: 10px;
                                                       cursor: text;
                                                       width: 70%;
                                                       height: 40px;
                                                       float: right;
                                                "/>
                                            </label>
                                        </div>
                                        <div class="group-main001">
                                            <label class="payment-label">
                                                <span>Card</span>
                                                <div id="card-element" class="field-sub009"></div>
                                            </label>
                                        </div>
                                        <button class="form-btn-10923" type="submit">Pay $25</button>
                                        <div class="outcome">
                                            <div class="error" role="alert"></div>
                                            <div class="success">
                                                Success! Your Stripe token is <span class="token"></span>
                                            </div>
                                        </div>
                                    </form>
                                    <script type="text/javascript">
                                        var stripe = Stripe('pk_test_KUOUDNnb1oF1TXDnLwG1Svg9');
                                        var elements = stripe.elements();
                                        var style = {
                                            base: {
                                                color: '#32325d',
                                                lineHeight: '24px',
                                                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                                                fontSmoothing: 'antialiased',
                                                fontSize: '16px',
                                                '::placeholder': {
                                                    color: '#aab7c4'
                                                }
                                            },
                                            invalid: {
                                                color: '#fa755a',
                                                iconColor: '#fa755a'
                                            }
                                        };
                                        var card = elements.create('card', {style: style});
                                        card.mount('#card-element');
                                        card.addEventListener('change', function (event) {
                                            var displayError = document.getElementById('card-errors');
                                            if (event.error) {
                                                displayError.textContent = event.error.message;
                                            } else {
                                                displayError.textContent = '';
                                            }
                                        });
                                        var form = document.getElementById('payment-form');
                                        form.addEventListener('submit', function (event) {
                                            event.preventDefault();

                                            stripe.createToken(card).then(function (result) {
                                                if (result.error) {
                                                    var errorElement = document.getElementById('card-errors');
                                                    errorElement.textContent = result.error.message;
                                                } else {
                                                    stripeTokenHandler(result.token);
                                                }

                                                function stripeTokenHandler(token) {
                                                    var form = document.getElementById('payment-form');
                                                    var hiddenInput = document.createElement('input');
                                                    hiddenInput.setAttribute('type', 'hidden');
                                                    hiddenInput.setAttribute('name', 'stripeToken');
                                                    hiddenInput.setAttribute('value', token.id);
                                                    form.appendChild(hiddenInput);
                                                    form.submit();
                                                }
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="panel-block">
                        <div class="price-widget short-widget bg1">
                            <i class="adicon-dollar"></i>
                            <strong>$235.00</strong>
                            <span>Order Total</span>
                        </div>
                        <div class="inner">
                            <div class="short-cart">
                                <ul>
                                    <li>
                                        <figure><img alt="dummy" src="/template/assets/img/items/ad1.png"></figure>
                                        <a class="item-title" href="#">Iphone 6 Plus 16GB</a>
                                        <span>$229.00</span>
                                        <a class="remove-item" href="#"><i class="fa fa-close"></i></a>
                                    </li>
                                    <li>
                                        <figure><img alt="dummy" src="/template/assets/img/items/ad2.jpg"></figure>
                                        <a class="item-title" href="#">Iphone 6 Plus 16GB</a>
                                        <span>$229.00</span>
                                        <a class="remove-item" href="#"><i class="fa fa-close"></i></a>
                                    </li>
                                    <li>
                                        <figure><img alt="dummy" src="/template/assets/img/items/ad3.jpg"></figure>
                                        <a class="item-title" href="#">Iphone 6 Plus 16GB</a>
                                        <span>$229.00</span>
                                        <a class="remove-item" href="#"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
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
<?php include ROOT . '/views/layout/footer.php'; ?>