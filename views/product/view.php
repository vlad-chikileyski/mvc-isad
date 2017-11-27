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
<?php foreach ($categoryProduct as $product) : ?>

    <div class="app-canvas app-canvas-modif">
    <div class="container">
    <div class="breadcrumb">
        <ul>
            <li><a href="https://adtoday.co.uk/">Home</a></li>
            <li>
                <a href="https://adtoday.co.uk/catalog/<?php echo $product['category']; ?>"><?php echo $product['category']; ?></a>
            </li>
            <li>
                <a href="https://adtoday.co.uk/catalog/<?php echo $product['category']; ?>/<?php echo $product['subcategory']; ?>"><?php echo $product['subcategory']; ?></a>
            </li>
            <li><?php echo $product['title']; ?></li>
        </ul>
    </div>

    <div class="item-single row">

    <div class="item-content col-xs-12 col-sm-7 col-md-8">

        <article class="inner">
            <header>
                <ul class="info-icons">
                    <li><a href="#" class="fa fa-envelope tooltip-parent">
                            <span class="tooltip">Send Message</span>
                        </a></li>
                    <li><a href="#" class="fa fa-phone tooltip-parent">
                            <span class="tooltip">Mobile Number</span>
                        </a></li>
                    <li><a href="#" class="fa fa-heart tooltip-parent">
                            <span class="tooltip">save ad</span>
                        </a></li>
                </ul>
                <h1><?php echo $product['title']; ?></h1>
                <ul class="info-list">
                    <li><i class="fa fa-map-marker"></i><a href="#">Melbourne</a></li>
                    <li><i class="fa fa-clock-o"></i><?php echo $product['date']; ?></li>
                    <li><i class="fa fa-bookmark"></i>ID: <?php echo $product['id']; ?></li>
                </ul>
            </header>
            <div class="item-gallery-slider">
                <div class="item-lg-images">
                    <a href="#" class="trigger-gallery"><i class="adicon-expand"></i></a>
                    <div class="slick-carousel slick-lg-images" data-asnav=".slick-sm-images"
                         data-fade="true"
                         data-slides-scroll="1" data-dots="false" data-nav="false" data-slides="1"
                         data-slides-lg="1" data-slides-md="1" data-slides-sm="1" data-loop="true"
                         data-auto="true">
                        <div class="item-lg-thumb imgAsBg">
                            <img src="/template/assets/img/lg1.jpg" alt="dummy">
                        </div>
                        <div class="item-lg-thumb imgAsBg">
                            <img src="/template/assets/img/lg2.jpg" alt="dummy">
                        </div>
                        <div class="item-lg-thumb imgAsBg">
                            <img src="/template/assets/img/lg3.jpg" alt="dummy">
                        </div>
                        <div class="item-lg-thumb imgAsBg">
                            <img src="/template/assets/img/lg4.jpg" alt="dummy">
                        </div>
                        <div class="item-lg-thumb imgAsBg">
                            <img src="/template/assets/img/lg5.jpg" alt="dummy">
                        </div>
                        <div class="item-lg-thumb imgAsBg">
                            <img src="/template/assets/img/lg6.jpg" alt="dummy">
                        </div>
                        <div class="item-lg-thumb imgAsBg">
                            <img src="/template/assets/img/lg7.jpg" alt="dummy">
                        </div>
                    </div>
                </div>
                <div class="item-sm-images">
                    <div class="slick-carousel slick-sm-images" data-focus="true"
                         data-asnav=".slick-lg-images"
                         data-slides-scroll="1" data-dots="false" data-nav="true"
                         data-prev="fa fa-chevron-left"
                         data-next="fa fa-chevron-right" data-slides="6" data-slides-lg="4"
                         data-slides-md="4"
                         data-slides-sm="2" data-loop="true" data-auto="false">
                        <div class="item-sm-thumb">
                            <div class="imgAsBg">
                                <img src="/template/assets/img/lg1.jpg" alt="dummy">
                            </div>
                        </div>
                        <div class="item-sm-thumb">
                            <div class="imgAsBg">
                                <img src="/template/assets/img/lg2.jpg" alt="dummy">
                            </div>
                        </div>
                        <div class="item-sm-thumb">
                            <div class="imgAsBg">
                                <img src="/template/assets/img/lg3.jpg" alt="dummy">
                            </div>
                        </div>
                        <div class="item-sm-thumb">
                            <div class="imgAsBg">
                                <img src="/template/assets/img/lg4.jpg" alt="dummy">
                            </div>
                        </div>
                        <div class="item-sm-thumb">
                            <div class="imgAsBg">
                                <img src="/template/assets/img/lg5.jpg" alt="dummy">
                            </div>
                        </div>
                        <div class="item-sm-thumb">
                            <div class="imgAsBg">
                                <img src="/template/assets/img/lg6.jpg" alt="dummy">
                            </div>
                        </div>
                        <div class="item-sm-thumb">
                            <div class="imgAsBg">
                                <img src="/template/assets/img/lg7.jpg" alt="dummy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="full-width-gallery">
                <div class="inner">
                    <div class="container">
                        <div class="gallery-lg-area">
                            <a href="#" class="close-lg-gallery"><i class="fa fa-close"></i></a>
                            <div class="slick-carousel slick-gallery-lg-images"
                                 data-asnav=".slick-gallery-thumbs" data-fade="true" data-slides-scroll="1"
                                 data-dots="false" data-nav="false" data-slides="1" data-slides-lg="1"
                                 data-slides-md="1" data-slides-sm="1" data-loop="true" data-auto="false">
                                <div class="item-lg-thumb">
                                    <img src="/template/assets/img/lg1.jpg" alt="dummy">
                                </div>
                                <div class="item-lg-thumb">
                                    <img src="/template/assets/img/lg2.jpg" alt="dummy">
                                </div>
                                <div class="item-lg-thumb">
                                    <img src="/template/assets/img/lg3.jpg" alt="dummy">
                                </div>
                                <div class="item-lg-thumb">
                                    <img src="/template/assets/img/lg4.jpg" alt="dummy">
                                </div>
                                <div class="item-lg-thumb">
                                    <img src="/template/assets/img/lg5.jpg" alt="dummy">
                                </div>
                                <div class="item-lg-thumb ">
                                    <img src="/template/assets/img/lg6.jpg" alt="dummy">
                                </div>
                                <div class="item-lg-thumb ">
                                    <img src="/template/assets/img/lg7.jpg" alt="dummy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-thumbs">
                        <div class="container">
                            <div class="gallery-thumbs-inner">
                                <div class="slick-carousel slick-gallery-thumbs" data-focus="true"
                                     data-asnav=".slick-gallery-lg-images" data-slides-scroll="1"
                                     data-dots="false" data-nav="true" data-prev="fa fa-chevron-left"
                                     data-next="fa fa-chevron-right" data-slides="6" data-slides-lg="4"
                                     data-slides-md="4" data-slides-sm="2" data-loop="true"
                                     data-auto="false">
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg1.jpg" alt="dummy">
                                        </div>
                                    </div>
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg2.jpg" alt="dummy">
                                        </div>
                                    </div>
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg3.jpg" alt="dummy">
                                        </div>
                                    </div>
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg4.jpg" alt="dummy">
                                        </div>
                                    </div>
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg5.jpg" alt="dummy">
                                        </div>
                                    </div>
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg6.jpg" alt="dummy">
                                        </div>
                                    </div>
                                    <div class="item-sm-thumb">
                                        <div class="imgAsBg">
                                            <img src="/template/assets/img/lg7.jpg" alt="dummy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="quick-info">
                <ul class="clearfix">
                    <li>
                        <div class="inner clearfix">
                            <span class="label">Postcode</span>
                            <span class="desc"><?php echo $product['postcode']; ?></span>
                        </div>
                    </li>
                    <li>
                        <div class="inner clearfix">
                            <span class="label">Category:</span>
                            <span class="desc"><?php echo ucfirst($product['category']); ?></span>
                        </div>
                    </li>
                    <li>
                        <div class="inner clearfix">
                            <span class="label">Posted by:</span>
                            <span class="desc"><?php echo $product['date']; ?></span>
                        </div>
                    </li>
                    <li>
                        <div class="inner clearfix">
                            <span class="label">Type of ad:</span>
                            <span class="desc"><?php echo ucfirst($product['subcategory']); ?></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="text-widget">
                <header><h4>Description</h4></header>
                <div class="inner">
                    <?php echo $product['description']; ?>

                </div>
            </div>
            <footer>
                <div class="inner row">
                    <div class="col-xs-12 col-md-4">
                        <span class="item-views"> <i class="fa fa-eye"></i> Ad Views: 4698</span>
                    </div>
                    <div class="col-xs-12 col-md-8 text-right-md">
                        Do you have something to sell? <a href="/add/">Post Your FREE AdToday</a>
                    </div>


                </div>
            </footer>
        </article>

        <div class="email-alerts">
            <div class="inner clearfix">
                <div class="col-xs-12 col-md-7">
                    <h4>Create Ad Alert</h4>
                    <p>Set your Alerts for Iphone City in United Kingdom
                        and we will email you relevant ads.</p>
                </div>
                <div class="col-xs-12 col-md-5">
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <form method="post">
                        <div class="field-block-md">
                            <div class="labeled-input">
                                <label>Email address</label>
                                <input title="enter your email" type="email" name="email" id="email">
                            </div>
                        </div>
                        <div class="field-block-md">
                            <div class="radio-dropdown wide">
                                <i class="fa fa-bars"></i>
                                <button>Frequency</button>
                                <ul>
                                    <?php
                                    switch ($frequency) {
                                        case 0:
                                            echo
                                            '<li class="custom-radio">
                                        <input checked="checked" type="radio" id="create1" value="Once a day" name="create">
                                        <label for="create0021">Once a day</label>
                                        <input type="radio" id="create2" value="Once a week" name="create">
                                        <label for="create0031">Once a week</label>
                                        <input type="radio" id="create3" value="Twice a month" name="create">
                                        <label for="create0041">Twice a month</label>
                                        <input type="radio" id="create4" value="Once a month" name="create4">
                                        <label for="create0051">Once a month</label>
                                    </li>';
                                            break;
                                        case 1:
                                            echo
                                            '<li class="custom-radio">
                                        <input  type="radio" id="create1" value="Once a day" name="create">
                                        <label for="create0021">Once a day</label>
                                        <input checked="checked" type="radio" id="create2" value="Once a week" name="create">
                                        <label for="create0031">Once a week</label>
                                        <input type="radio" id="create3" value="Twice a month" name="create">
                                        <label for="create0041">Twice a month</label>
                                        <input type="radio" id="create4" value="Once a month" name="create4">
                                        <label for="create0051">Once a month</label>
                                    </li>';
                                            break;
                                        case 2:
                                            echo
                                            '<li class="custom-radio">
                                        <input  type="radio" id="create1" value="Once a day" name="create">
                                        <label for="create0021">Once a day</label>
                                        <input  type="radio" id="create2" value="Once a week" name="create">
                                        <label for="create0031">Once a week</label>
                                        <input checked="checked" type="radio" id="create3" value="Twice a month" name="create">
                                        <label for="create0041">Twice a month</label>
                                        <input type="radio" id="create4" value="Once a month" name="create4">
                                        <label for="create0051">Once a month</label>
                                    </li>';
                                            break;
                                        case 3:
                                            echo
                                            '<li class="custom-radio">
                                        <input  type="radio" id="create1" value="Once a day" name="create">
                                        <label for="create0021">Once a day</label>
                                        <input  type="radio" id="create2" value="Once a week" name="create">
                                        <label for="create0031">Once a week</label>
                                        <input  type="radio" id="create3" value="Twice a month" name="create">
                                        <label for="create0041">Twice a month</label>
                                        <input checked="checked" type="radio" id="create4" value="Once a month" name="create4">
                                        <label for="create0051">Once a month</label>
                                    </li>';
                                            break;
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="field-block-md">
                            <button type="submit" name="createAlert"
                                    class="btn btn-small btn-blue block-element danger-hover">Create Alert
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="items-list-md single-similar-items">
            <h4>You may like also</h4>
            <div class="items-list">
                <?php foreach ($similarAds as $ads): ?>
                    <article class="item-spot">
                        <a href="#" class="imgAsBg">
                            <img src="/template/assets/img/items/ad2.jpg" alt="dummy data">
                        </a>
                        <div class="item-content">
                            <header>
                                <h5>
                                    <a href="https://adtoday.co.uk/ads/<?php echo $ads['category']; ?>/<?php echo $ads['subcategory']; ?>/<?php echo $ads['id']; ?>"><?php echo ucfirst($ads['subcategory']); ?></a>
                                </h5>
                                <span class="item-info-short"><?php echo ucfirst($ads['title']); ?></span>
                            </header>
                            <div class="price-tag">£ <?php echo $ads['price']; ?></div>
                            <div class="item-actions text-center">
                                <a class="view-item"
                                   href="https://adtoday.co.uk/ads/<?php echo $ads['category']; ?>/<?php echo $ads['subcategory']; ?>/<?php echo $ads['id']; ?>">view
                                    ad</a>

                            </div>

                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
    <aside class="sidebar col-xs-12 col-sm-5 col-md-4">
    <div class="inner">
    <div class="price-widget short-widget">
        <i class="fa fa-gbp"></i>
        <strong>£<?php echo $product['price']; ?></strong>
        <span>Negotiable Price</span>
    </div>
    <div class="number-widget short-widget">
        <i class="adicon-phone"></i>
        <strong>+<?php echo $user['phone']; ?></strong>
        <span>Phone</span>
    </div>
<?php endforeach; ?>
    <div class="user-widget text-center">
        <img src="/template/assets/img/basic/user-thumb.png" alt="asd">
        <h4><a href="https://adtoday.co.uk/account/user/<?php echo $user['id']; ?>"><?php echo $user['username']; ?></a></h4>
        <div>Member Since 2013</div>
        <a href="#" class="link">More Ads</a>
        <ul class="clearfix">
            <li><a class="btn btn-transparent" href="#">Send Message</a></li>
            <li><a class="btn btn-transparent" href="#">Report Ad</a></li>
        </ul>
    </div>
    <div class="share-widget">
        <span>Share This Ad</span>
        <div class="social-links social-bg">
            <ul>
                <li><a href="#" target="_blank" class="fa fa-twitter"></a></li>
                <li><a href="#" target="_blank" class="fa fa-facebook"></a></li>
                <li><a href="#" target="_blank" class="fa fa-google-plus"></a></li>
                <li><a href="#" target="_blank" class="fa fa-instagram"></a></li>
            </ul>
        </div>
    </div>
    <div class="map-widget">
        <img src="/template/assets/img/map.jpg" alt="map">
        <button class="btn btn-white">Get directions</button>
    </div>
    <div class="check-list-widget">
        <h4>Safety Tips</h4>
        <ul>
            <li>Morbi ut tellus ac leo molestie</li>
            <li>Luctus nec vehicula seded justo</li>
            <li>Varius onec tempor rhons</li>
            <li>Polutpat ras lorem</li>
        </ul>
    </div>
    <div class="sponsor-widget">
        <img src="/template/assets/img/spon.jpg" alt="sponsor">
    </div>
    </div>
    </aside>

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