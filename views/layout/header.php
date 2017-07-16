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
                    <a href="/"><img src="/template/assets/img/basic/logo.png" alt="adspot"></a>
                </div>
                <ul class="quick-actions">
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
                    <a href="/new-ads/" class="btn btn-green pull-right quick-post">Post your ad</a>
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