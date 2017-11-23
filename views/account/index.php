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
        <div class="uzr-dashboard">
            <div class="uzr-options-area clearfix">
                <div class="uzr-sidebar">
                    <div class="dp-widget">
                        <a href="#"><i class="fa fa-camera"></i> Change Photo</a>
                        <img src="<?php echo $user['img']; ?>" alt="user-twink-photo">
                    </div>
                    <div class="nt-tab-triggers">
                        <ul data-target="#tabs-dashboard-01">
                            <li class="active">
                                <a href="#tab001">
                                    <span><i class="adicon-grid"></i></span>
                                    Dashboard
                                </a>
                            </li>
                            <li class="bg7-icon-wrap">
                                <a href="#tab002">
                                    <span><i class="adicon-document"></i></span>
                                    My Ads
                                </a>
                            </li>
                            <li class="bg4-icon-wrap">
                                <a href="#tab007">
                                    <span><i class="adicon-settings"></i></span>
                                    Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="tabs-dashboard-01" class="uzr-panels">
                    <div class="inner">

                        <div id="tab001" class="uzr-panel tab-panel active">
                            <a class="tab-accordion-trigger" href="#tab001">
                                <span><i class="adicon-grid"></i></span>
                                Dashboard
                            </a>
                            <header>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <h4>Hello <?php echo $user['username']; ?></h4>
                                        <span>Last account activity: 1 hour ago</span>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <ul class="uzr-quick-nav">
                                            <li>
                                                <a>
                                                    <i class="adicon-document"></i>
                                                    <span class="bg7">3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </header>
                            <div class="inner">
                                <div class="text-widget">
                                    <div class="inner">
                                        <p>
                                            This is your account dashboard. The place to check your ads, respond to your
                                            messages,
                                            view notifications or change any account settings or details.
                                        </p>

                                        <p>
                                            <a href="#" class="link">Learn How It Works</a> — Watch a short video that
                                            shows you how adspot works. <br>
                                            <a href="#" class="link">Get Help</a> — View our help section and FAQs to
                                            get started on adspot.
                                        </p>
                                    </div><!--text-widget-->
                                </div>
                                <div class="call-to-action-2" style="padding-top: 10px">
                                    <div class="inner">
                                        <p>You don't have any active Ads. <strong>Post an ad now!</strong></p>
                                        <a href="https://adtoday.co.uk/add/" class="btn btn-transparent">post an ad</a>
                                    </div><!--text-widget-->
                                </div>

                            </div>
                        </div><!--panel-->

                        <div id="tab002" class="uzr-panel tab-panel">
                            <a class="tab-accordion-trigger" href="#tab002">
                                <span><i class="adicon-document"></i></span>
                                My Ads
                            </a>
                            <header>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-md-6">
                                        <div class="icon-heading">
                                            <h4><i class="adicon-heart tc7"></i> My Ads</h4>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <div class="inner">
                                <div class="items-list-md style2 pad-top-0">
                                    <div class="items-list">
                                        <?php foreach ($userProduct as $ads) : ?>
                                            <article class="item-spot <!--item-moderated-->">
                                                <a href="/ads/<?php echo $ads[0]['category']; ?>/<?php echo $ads[0]['subcategory']; ?>/<?php echo $ads[0]['id']; ?>"
                                                   class="imgAsBg">
                                                    <img src="/template/assets/img/items/ad1.png" alt="dummy data">
                                                </a>
                                                <div class="item-content">
                                                    <header>
                                                        <h6><a href="single.html"><?php echo $ads[0]['title']; ?></a>
                                                        </h6>
                                                        <ul class="item-info">
                                                            <li><i class="fa fa-clock-o"></i>From: 26 Oct - To: 23 Nov
                                                            </li>
                                                            <li><i class="fa fa-eye"></i>4,226</li>

                                                        </ul>
                                                    </header>
                                                    <div class="price-tag">£<?php echo $ads[0]['price']; ?></div>
                                                    <div class="item-admin-actions text-center">
                                                        <ul>
                                                            <li><a class="tc" href="#"><i class="adicon-eye"></i></a>
                                                            </li>
                                                            <li><a class="tc6-hover" href="#"><i
                                                                        class="adicon-edit"></i></a></li>
                                                            <li><a href="#"><i class="adicon-activate"></i></a></li>
                                                            <li><a class="tc12-hover" href="#"><i
                                                                        class="adicon-recyclebin"></i></a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </article>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <br>
                                <a href="#" class="btn btn-white block-element btn-md text-center">load more ads</a>
                            </div>
                        </div><!--panel-->
                        <div id="tab007" class="uzr-panel tab-panel">
                            <a class="tab-accordion-trigger" href="#tab007">
                                <span><i class="adicon-settings"></i></span>
                                Settings
                            </a>
                            <header>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="icon-heading">
                                            <h4><i class="adicon-alarm tc4"></i> Settings</h4>
                                        </div>
                                    </div>
                                </div>

                            </header>
                            <div class="inner">
                                <div class="basic-card">
                                    <header>
                                        <h5>Change Password</h5>
                                    </header>
                                    <div class="inner">
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <?php if (isset($errors) && is_array($errors)): ?>
                                                    <ul>
                                                        <?php foreach ($errors as $error): ?>
                                                            <li> <?php echo $error; ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                                <form method="post">
                                                    <div class="field-block">
                                                        <div class="labeled-input">
                                                            <input title="title here" name="old-password" type="password" id="old-password">
                                                            <label for="old-password">Enter old password</label>
                                                        </div>
                                                    </div>
                                                    <div class="field-block">
                                                        <div class="labeled-input">
                                                            <input title="title here" name="password" type="password" id="password">
                                                            <label for="password">Enter new password</label>
                                                        </div>
                                                    </div>
                                                    <div class="field-block">
                                                        <div class="labeled-input">
                                                            <input title="title here" name="repeat-password" type="password" id="repeat-password">
                                                            <label for="repeat-password">Confirm new password</label>
                                                        </div>
                                                    </div>
                                                    <div class="field-block">
                                                        <button type="submit" class="btn btn-small btn-green" name="change-password">
                                                            save
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--basic-card-->

                                <div class="basic-card">
                                    <header>
                                        <h5>Email Settings</h5>
                                    </header>
                                    <div class="inner">
                                        <form action="/">

                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <div class="field-block">
                                                        <div class="labeled-input">
                                                            <label>Enter New Email</label>
                                                            <input title="title here" type="email">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="radio-accordion-wrap">
                                                <div class="radio-accordion">
                                                    <header>
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="select002178419">
                                                            <label for="select002178419">Get email notifications</label>
                                                        </div>
                                                    </header>
                                                    <div class="inner">
                                                        Every few weeks we send newsletters to all users in which we
                                                        inform about changes in services, new products and our
                                                        promotional campaigns. If you want to keep up with what is
                                                        happening on the site subsribe to the newsletter.
                                                    </div>
                                                </div>

                                                <div class="radio-accordion">
                                                    <header>
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="select002178412">
                                                            <label for="select002178412">Yes I want to receive email
                                                                notifications of messages.</label>
                                                        </div>
                                                    </header>
                                                    <div class="inner">
                                                        Every few weeks we send newsletters to all users in which we
                                                        inform about changes in services, new products and our
                                                        promotional campaigns. If you want to keep up with what is
                                                        happening on the site subsribe to the newsletter.
                                                    </div>
                                                </div>

                                                <div class="radio-accordion">
                                                    <header>
                                                        <div class="custom-checkbox">
                                                            <input type="checkbox" id="select002178414">
                                                            <label for="select002178414">Yes I want to receive latest
                                                                news and updates from adsport</label>
                                                        </div>
                                                    </header>
                                                    <div class="inner">
                                                        Every few weeks we send newsletters to all users in which we
                                                        inform about changes in services, new products and our
                                                        promotional campaigns. If you want to keep up with what is
                                                        happening on the site subsribe to the newsletter.
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="field-block">
                                                <button class="btn btn-small btn-green">
                                                    save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div><!--basic-card-->

                            </div>
                        </div><!--panel-->

                    </div><!--inner-->
                </div><!--panels-->

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
