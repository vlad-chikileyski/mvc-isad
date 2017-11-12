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
    <link rel="icon" sizes="192x192" href="template/assets/img/basic/chrome-touch-icon-192x192.png">

    <!-- Add to home screen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="template/assets/img/basic/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="template/assets/img/basic/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#55acee">
    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#55acee">

    <!--========================================
    CSS
    ===========================================-->
    <!--3rd party plugins-->
    <link href="template/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="template/assets/lib/slick-carousel/slick/slick.css" rel="stylesheet" type="text/css">
    <!--custom icons for classified website-->
    <link href="template/assets/css/adspoticons.css" rel="stylesheet" type="text/css">
    <!--main styles for template-->
    <link href="template/assets/css/style.css" rel="stylesheet" type="text/css">
    <!--put your custom css on the file below-->
    <link href="template/assets/css/custom.css" rel="stylesheet" type="text/css">


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


                    <?php if (User::isGuest()): ?>
                        <li class="dropdown-wrap">
                            <a href="#">My account &nbsp;<i class="fa fa-caret-down"></i></a>
                            <div class="basic-dropdown">
                                <ul class="country-list">
                                    <li><a href="/account/">My account</a></li>
                                    <li><a href="/account/logout">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    <?php else: ?>
                        <li><a class="modal-trigger" href="#signInModal"><i class="fa fa-user"></i> &nbsp; Login</a>
                        </li>
                        <li><a class="modal-trigger" href="#signUpModal">Register</a></li>
                    <?php endif; ?>


                    <!--  <li><a class="modal-trigger" href="#signInModal"><i class="fa fa-user"></i> &nbsp; Login</a></li>
                      <li><a class="modal-trigger" href="#signUpModal">Register</a></li>-->
                    <a href="/add/" class="btn btn-green pull-right quick-post"> <i class="fa fa-plus"></i> Post
                        your ad </a>
                </ul>
            </div>
            <div class="row" style="position: relative;">
                <div class="col-sm-3">
                    <div class="mega-menu0-1" style="border: 2px solid #0083c9;">
                        <ul class="category-list" style="background-color: white;">
                            <!--<li><a href="#"><i class="adicon-car"></i>Vehicles</a>
                                <ul>
                                    <li><a href="#">Cars</a></li>
                                    <li><a href="#">Motorcycles</a></li>
                                    <li><a href="#">Scooters</a></li>
                                    <li><a href="#">Bicycles</a></li>
                                    <li><a href="#">Commercial Vehicles</a></li>
                                    <li><a href="#">Spare Parts &amp; Accessories</a></li>
                                    <li><a href="#">Other Vehicles</a></li>
                                </ul>
                            </li>-->
                            <!--                            <li><a href="#"><i class="adicon-tablet"></i>Mobiles</a>
                                                            <ul>
                                                                <li><a href="#">Iphone</a></li>
                                                                <li><a href="#">Android</a></li>
                                                                <li><a href="#">Q mobile</a></li>
                                                                <li><a href="#">Black berry</a></li>
                                                            </ul>
                                                        </li>-->
                            <li><a href="https://adtoday.co.uk/catalog/electronics"><i class="adicon-tv"></i>Electronics</a>
                                <ul>
                                    <li><a href="https://adtoday.co.uk/catalog/electronics-home-appliances/tv-audio-video/">TV - Audio - Video</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/electronics-home-appliances/cameras-imaging/">Cameras - Imaging</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/electronics-home-appliances/computers-tablets/">Computers - Tablets</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/electronics-home-appliances/home-appliances/">Home Appliances</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/electronics-home-appliances/video-games-consoles/">Video games - Consoles</a></li>
                                </ul>
                            </li>
                            <li><a href="https://jobs.adtoday.co.uk/catalog/properties"><i class="adicon-briefcase"></i>Jobs</a>
                                <ul style=" width: 500px;">
                                    <div class="e">
                                        <div class="col-sm-6">
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/accounting/">Accounting</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/business-development/">Business Development</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/education/">Education</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/hospitality/">Hospitality</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/marketing-pr/">Marketing - PR</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/retail/">Retail</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/architecture-engineering/">Architecture - Engineering</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/construction/">Construction</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/executive/">Executive</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/it-telecom/">IT - Telecom</a></li>
                                        </div>
                                        <div class="col-sm-6">
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/medical-health/">Medical - Health</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/sales/">Sales</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/art-design/">Art - Design</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/consulting/">Consulting</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/hr-recruiting/">HR - Recruiting</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/jobs-wanted/">Jobs Wanted</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/other/">Other</a></li>
                                            <li><a href="https://jobs.adtoday.co.uk/catalog/jobs/secretarial/">Secretarial</a></li>
                                        </div>
                                    </div>
                                </ul>
                            </li>

                            <li><a href="https://adtoday.co.uk/catalog/vehicles"><i class="adicon-car"></i>Vehicles</a>
                                <ul>
                                    <li><a href="https://vehicle.adtoday.co.uk/catalog/vehicles/cars/">Cars</a></li>
                                    <li><a href="https://vehicle.adtoday.co.uk/catalog/vehicles/boats/">Boats</a></li>
                                    <li><a href="https://vehicle.adtoday.co.uk/catalog/vehicles/car-accessories/">Car Accessories</a></li>
                                    <li><a href="https://vehicle.adtoday.co.uk/catalog/vehicles/trucks-buses/">Trucks & buses</a></li>
                                    <li><a href="https://vehicle.adtoday.co.uk/catalog/vehicles/motorcycles/">Motorcycles</a></li>
                                    <li><a href="https://vehicle.adtoday.co.uk/catalog/vehicles/other-vehicles/">Other Vehicles</a></li>
                                </ul>
                            </li>
                            <!--                            <li><a href="#"><i class="adicon-sofa"></i>Furniture</a></li>
                                                        <li><a href="#"><i class="adicon-briefcase"></i>Jobs</a></li>
                                                        <li><a href="#"><i class="adicon-buildings"></i>Real Estate</a></li>
                                                        <li><a href="#"><i class="adicon-bell"></i>Services</a></li>
                                                        <li><a href="#"><i class="adicon-hat"></i>Education</a></li>
                                                        <li><a href="#"><i class="adicon-dog"></i>Animals</a></li>
                                                        <li><a href="#"><i class="adicon-heal"></i>Fashion</a></li>
                                                        <li><a href="#"><i class="adicon-smile"></i>Baby Products</a></li>-->
                            <li><a href="https://adult.adtoday.co.uk/catalog/adult"><i class="adicon-hearts"></i>Matrimony</a>
                                <ul>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/adult-dating/">Adult dating</a>
                                    </li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/swingers/">Swingers</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/gay-escorts/">Gay escorts</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/escorts-and-massages/">Escorts and
                                            massages</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/adult-entertainment/">Adult
                                            entertainment</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/adult-jobs/">Adult jobs</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/gay-and-lesbian/">Gay and
                                            lesbian</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/friendship-friends/">Friendship
                                            friends</a></li>
                                    <li><a href="https://adult.adtoday.co.uk/catalog/straight-relationships/">Straight
                                            relationships</a></li>
                                </ul>
                            </li>

                            <li><a href="https://property.adtoday.co.uk/catalog/properties"><i class="adicon-buildings"></i>Properties</a>
                                <ul>
                                    <li><a href="https://property.adtoday.co.uk/catalog/properties/properties-for-rent/">Properties for Rent</a></li>
                                    <li><a href="https://property.adtoday.co.uk/catalog/properties/properties-for-sale/">Properties for Sale</a></li>
                                </ul>
                            </li>


                            <li><a href="https://adtoday.co.uk/catalog/mobile-phones-accessories"><i class="adicon-tablet"></i>Mobile & Accessories</a>
                                <ul>
                                    <li><a href="https://adtoday.co.uk/catalog/mobile-phones-accessories/mobile-phones/">Mobile Phones</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/mobile-phones-accessories/mobile-accessories/">Mobile Accessories</a></li>
                                </ul>
                            </li>

                            <li><a href="/catalog/home-garden"><i class="adicon-sofa"></i>Home & Garden</a>
                                <ul>
                                    <li><a href="https://adtoday.co.uk/catalog/home-garden/decoration-accessories/">Decoration - Accessories</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/home-garden/kitchenware/">Kitchenware</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/home-garden/furniture/">Furniture</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/home-garden/other-home-garden/">Other Home & Garden</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/home-garden/garden-outdoor/">Garden - Outdoor</a></li>
                                </ul>
                            </li>

                            <li><a href="https://adtoday.co.uk/catalog/fashion-beauty"><i class="adicon-heal"></i>Fashion & Beauty</a>
                                <ul>
                                    <li><a href="https://adtoday.co.uk/catalog/fashion-beauty/clothing-accessories/">Clothing - Accessories</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/fashion-beauty/jewelry-watches/">Jewelry - Watches</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/fashion-beauty/health-beauty-cosmetics/">Health - Beauty - Cosmetics</a></li>
                                </ul>
                            </li>

                            <li><a href="/catalog/services"><i class="adicon-bell"></i>Services</a>
                                <ul style="bottom: 9px;">
                                    <li><a href="https://adtoday.co.uk/catalog/services/business-services/">Business Services</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/services/events/">Events</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/services/other-services/">Other Services</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/services/private-tutors/">Private Tutors</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/services/car-repairs/">Car Repairs</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/services/home/">Home</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/services/personal-services/">Personal Services</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/services/domestic-services/">Domestic Services</a></li>
                                </ul>
                            </li>
                            <li><a href="https://adtoday.co.uk/catalog/pets"><i class="adicon-dog"></i>Pets</a>
                                <ul style="bottom: 9px;">
                                    <li><a href="https://adtoday.co.uk/catalog/pets/cats/">Cats</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/pets/fishes/">Fishes</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/pets/dogs/">Dogs</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/pets/birds/">Birds</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/pets/horses/">Horses</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/pets/other-pets/">Other Pets</a></li>
                                </ul>
                            </li>

                            <li><a href="https://adtoday.co.uk/catalog/kids-babies"><i class="adicon-smile"></i>Kids & Babies</a>
                                <ul style="bottom: 9px;">
                                    <li><a href="https://adtoday.co.uk/catalog/kids-babies/clothes-for-kids-and-babies/">Clothes for Kids and Babies</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/kids-babies/accessories/">Accessories</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/kids-babies/toys/">Toys</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/kids-babies/other-kids-babies/">Other Kids & Babies</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/kids-babies/cribs-strollers/">Cribs - Strollers</a></li>
                                </ul>
                            </li>

                            <li><a href="https://adtoday.co.uk/catalog/sporting-goods-bikes"><i class="adicon-star-circle"></i>Sporting & Bikes</a>
                                <ul style="bottom: 9px;">
                                    <li><a href="https://adtoday.co.uk/catalog/sporting-goods-bikes/sporting-goods/">Sporting Goods</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/sporting-goods-bikes/bikes/">Bikes</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/sporting-goods-bikes/outdoor-equipment/">Outdoor Equipment</a></li>
                                </ul>
                            </li>

                            <li><a href="https://adtoday.co.uk/catalog/business-industrial"><i class="adicon-dollar"></i>Business & Industrial</a>
                                <ul style="bottom: 9px;">
                                    <li><a href="https://adtoday.co.uk/catalog/business-industrial/factories-equipment/">Factories Equipment</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/business-industrial/restaurants-equipments/">Restaurants Equipments</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/business-industrial/medical-equipment/">Medical Equipment</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/business-industrial/shops-liquidation/">Shops Liquidation</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/business-industrial/heavy-equipment/">Heavy Equipment</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/business-industrial/other-business-industrial/">Other Business & Industrial</a></li>
                                </ul>
                            </li>

                            <li><a href="https://adtoday.co.uk/catalog/hobbies-music-art-books"><i class="adicon-hat"></i>Music, Art & Books</a>
                                <ul style="bottom: 9px;">
                                    <li><a href="https://adtoday.co.uk/catalog/hobbies-music-art-books/antiques-collectibles/">Antiques - Collectibles</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/hobbies-music-art-books/musical-instruments/">Musical instruments</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/hobbies-music-art-books/tickets-vouchers/">Tickets - Vouchers</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/hobbies-music-art-books/books/">Books</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/hobbies-music-art-books/other-items/">Other items</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/hobbies-music-art-books/movies-music/">Movies - Music</a></li>
                                    <li><a href="https://adtoday.co.uk/catalog/hobbies-music-art-books/study-tools/">Study tools</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="category-search-tabbed">

                        <div class="search-widget">
                            <input type="text" id="typed4">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <div id="typed-strings">
                    <p>Rooms ^10 to Rent ^100 In Heaton</p>
                    <p>Great double rooms to rent</p>
                    <p>Badminton Racket</p>
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
        <div class="main-banner imgAsBg hero-banner menu-on-top banner-overlay"
             style="background-image: url(&quot;template/assets/img/headerbg4.jpg&quot;); height: 855px;">
            <img src="template/assets/img/headerbg4.jpg" alt="dummy">
            <div class="inner">
                <div class="container">
                    <header class="text-normal">
                        <h2>Buy &amp; Sell <strong>Anything</strong></h2>
                        <p class="text-uppercase">UK Biggest Classified Marketplace!</p>
                    </header>
                </div>
            </div>
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
                                <h4>Sell Safely</h4>
                                <p>Morbi ut tellus ac leo molestie luctus nec vehicula sed justo ut varius onec tempor
                                    rhoncus volutpat ras lorem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="text-widget">
                            <div class="inner">
                                <h4>Buy Safely</h4>
                                <p>Morbi ut tellus ac leo molestie luctus nec vehicula sed justo ut varius onec tempor
                                    rhoncus volutpat ras lorem.</p>
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
                                    <img src="template/assets/img/android.png" alt="Google play">
                                    <span>download on</span>
                                    <h4>Google Play</h4>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="template/assets/img/apple.png" alt="Apple store">
                                    <span>download on</span>
                                    <h4>Apple Store</h4>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="template/assets/img/win.png" alt="windows store">
                                    <span>download on</span>
                                    <h4>Windows Store</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-4 col-md-5 pull-right">
                        <div class="action-mock">
                            <img src="template/assets/img/app-mock.png" alt="download apps">
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
                    <a href="/"><img src="/template/assets/img/basic/logo.png" alt="adtoday"></a>
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
                        <a href="https://adtoday.co.uk/forgot-password">Forgot Password?</a>
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
            <?php if ($query_registration): ?>
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
<script src="template/assets/lib/jquery/dist/jquery.min.js"></script>
<script src="template/assets/js/typed.js "></script>
<script src="template/assets/lib/slick-carousel/slick/slick.min.js"></script>
<script src="template/assets/js/app.js"></script>
<script src="template/assets/js/setioppd.js"></script>
</body>
</html>