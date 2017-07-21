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

<div class="app-canvas">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Mobiles</a></li>
                <li><a href="#">Smart Phones</a></li>
                <li>
                    <span>Apple Iphone <a href="#"><i class="fa fa-close"></i></a></span>
                    <span>Iphone 6 <a href="#"><i class="fa fa-close"></i></a></span>
                    <span>Clear All <a href="#"><i class="fa fa-close"></i></a></span>
                </li>
            </ul>
        </div>
        <header class="heading text-bold">
            <h2>Used Iphone 6 Plus 16GB In Melbourne</h2>
            <h4>482 Ads found in Melbourne</h4>
        </header>
        <div class="listing-actions text-right clearfix" data-target="#items-listing-area">
            <div class="inner">
                <div class="button-action">
                    <span>Ads With Photos</span>
                    <a href="#" class="active"><i class="fa"></i></a>
                </div>
                <div class="layout-action">
                    <a href="#" class="active">
                        <i class="fa fa-bars"></i>
                        <span class="tooltip">List layout</span>
                    </a>
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span class="tooltip">Grid layout</span>
                    </a>
                </div>
                <div class="search-action">
                    <a href="#"><i class="fa fa-star-o"></i>
                        <span class="tooltip">Save search</span>
                    </a>
                </div>
                <div class="sort-action">
                    <i class="fa"></i>
                    <span>Recently Published</span>
                    <ul>
                        <li><a href="#">Price Low to High</a></li>
                        <li><a href="#">Price High to Low</a></li>
                        <li><a href="#">Price High to Low</a></li>
                        <li><a href="#">Recently Published</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="listing-area clearfix">
            <div class="listing-filters">
                    <div class="listing-filter-block">
                        <header>
                            <h6>Subcategory</h6>
                            <a class="trigger-filter-block" href="/"><i class="fa fa-reply fa-rotate-90"></i></a>
                        </header>
                        <div class="inner">
                            <div class="filter-options-widget">
                                <ul>
                                    <?php foreach ($subCategoryListMenu as $subcategory) : ?>

                                        <li><a href="<?php echo $subcategory['url-title']; ?>/">
                                                <i></i>
                                                <span><?php echo $subcategory['menu-title']; ?></span>
                                            </a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            <div id="items-listing-area" class="items-list">
                <?php foreach ($categoriesProducts as $products) : ?>
                    <article class="item-spot">
                        <a href="/ads/<?php echo $products['category'];?>/<?php echo $products['sub-category'];?>/<?php echo $products['id']; ?>" class="imgAsBg">
                            <img src="/template/assets/img/items/ad2.jpg" alt="dummy data">
                        </a>
                        <div class="item-content">
                            <header>
                                <h4><a href="/ads/<?php echo $products['category'];?>/<?php echo $products['sub-category'];?>/<?php echo $products['id']; ?>"><?php echo $products['title']; ?></a>
                                </h4>
                                <div class="breadcrumb">
                                    <ul>
                                        <li><a href="#">Mobile Phones</a></li>
                                        <li><a href="#">Apple</a></li>
                                    </ul>
                                </div>
                                <ul class="item-info">
                                    <li><i class="fa fa-map-marker"></i><a href="#">Melbourne</a></li>
                                    <li><i class="fa fa-clock-o"></i>2:49 pm</li>
                                </ul>
                            </header>
                            <div class="item-actions text-center">
                                <ul class="contact-options">
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
                                <div class="price-tag">£<?php echo $products['price']; ?></div>
                            </div>
                            <div class="inner">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis
                                    lacinia pell ...
                                </p>
                                <a class="view-item" href="/ads/<?php echo $products['category'];?>/<?php echo $products['sub-category'];?>/<?php echo $products['id']; ?>">view ad</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>

                <?php echo $pagination->get(); ?>
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
