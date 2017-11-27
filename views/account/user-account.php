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
                    <li><a href="https://adtoday.co.uk/">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>

            <div class="blog-page">

                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="blog-posts">
                            <article class="blog-post">
                                <header>
                                    <h3>All <?php echo $user['username']; ?> ads:</h3>
                                </header>
                                <div class="inner">
                                    <div class="items-list-md style2 pad-top-0">
                                        <div class="items-list">
                                            <?php foreach ($allAds as $ads) : ?>
                                                <article class="item-spot <!--item-moderated-->">
                                                    <a href="/ads/<?php echo $ads[0]['category']; ?>/<?php echo $ads[0]['subcategory']; ?>/<?php echo $ads[0]['id']; ?>"
                                                       class="imgAsBg">
                                                        <img src="/template/assets/img/items/ad1.png" alt="dummy data">
                                                    </a>
                                                    <div class="item-content">
                                                        <header>
                                                            <h6><a href="https://adtoday.co.uk/ads/<?php echo $ads[0]['category']; ?>/<?php echo $ads[0]['subcategory']; ?>/<?php echo $ads[0]['id']; ?>"><?php echo $ads[0]['title']; ?></a>
                                                            </h6>
                                                            <ul class="item-info">
                                                                <li><i class="fa fa-clock-o"></i>From: <?php echo $ads[0]['date']; ?>
                                                                </li>
                                                                <li><i class="fa fa-eye"></i>4,226</li>

                                                            </ul>
                                                        </header>
                                                        <div class="price-tag">£ <?php echo $ads[0]['price']; ?></div>
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
                            </article>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-4">
                        <aside class="sidebar">
                            <div class="widget-about widget">
                                <figure><img src="<?php echo $user['img']; ?>" alt="dummy"></figure>
                                <header>
                                    <h4>About Me:</h4>
                                    <h5>Username: <?php echo $user['username']; ?></h5>
                                    <h5>Contact phone number is: +<?php echo $user['phone']; ?></h5>
                                    <h5>Contact email address is: <a style="color: blue"><?php echo $user['email']; ?></a></h5>
                                </header>
                                <footer>
                                    <img src="/template/assets/img/basic/logo.png" alt="dummy">
                                </footer>
                            </div>



                            <div class="widget-subscribe widget">
                                <header>
                                    <h4>Subscribe</h4>
                                </header>

                                <form action="/">
                                    <div class="labeled-input">
                                        <label for="sub0001">Email Address</label>
                                        <input type="email" id="sub0001">
                                    </div>
                                    <button class="btn btn-green block-element">Subscribe</button>
                                </form>

                            </div>
                        </aside>
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
