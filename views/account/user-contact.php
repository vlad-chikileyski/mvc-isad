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

                <div class="app-canvas-modif">
                    <div class="container">
                        <div class="breadcrumb">
                <ul>
                    <li><a href="https://adtoday.co.uk/">Home</a></li>
                    <li>User <?php echo $user['username']; ?></li>
                </ul>
            </div>

            <div class="blog-page">

                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="blog-posts">
                            <header>
                                <h3>Leave a Comment</h3>
                            </header>
                            <div class="inner">
                                <div class="items-list-md style2 pad-top-0">
                                    <div class="items-list">
                                        <div class="add-comment">
                                            <?php if (isset($ACTIVE_FLAG) && $ACTIVE_FLAG): ?>
                                                <div class="not-found animated fadeIn">
                                                    <h2 align="center">Success</h2>
                                                    <p align="center">You send a letter</p>
                                                    <a href="http://adtoday.co.uk/" class="btn btn-blue block-element"><i class="fa fa-home"></i> Back to homepage</a>
                                                </div>
                                            <?php else: ?>
                                            <?php if (isset($errors) && is_array($errors)): ?>
                                                <ul>
                                                    <?php foreach ($errors as $error): ?>
                                                        <li> - <?php echo $error; ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                            <form method="post" class="clearfix">
                                                <div class="fields-grid clearfix">
                                                    <div class="fields-grid-ele">
                                                        <div class="labeled-input">
                                                            <input type="text" id="username" name="username" value="<?php echo $userName['username']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="fields-grid-ele">
                                                        <div class="labeled-input">
                                                            <input type="email" id="email" name="email" readonly value="<?php echo $userName['email']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="fields-grid-ele">
                                                        <div class="labeled-input">
                                                            <input type="text" id="title" name="title" >
                                                            <label for="title">Title</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="labeled-input">
                                                    <label for="comment">Your comment</label>
                                                    <textarea id="comment" name="comment"></textarea>
                                                </div>
                                                <button type="submit" name="contactUser" class="btn btn-green btn-small">Submit</button>
                                            </form>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <aside class="sidebar">
                            <div class="user-widget text-center">
                                <img src="/template/assets/img/basic/user-thumb.png" alt="asd">
                                <h4><?php echo $user['username']; ?></h4>
                                <div>Member Since 2013</div>
                                <ul class="clearfix">
                                    <?php if (User::isGuest()): ?>
                                        <li><a class="btn btn-transparent" href="https://adtoday.co.uk/account/user-contact/<?php echo $user['id'];?>">Send Message</a></li>
                                        <li><a class="btn btn-transparent" href="#">Report Ad</a></li>
                                    <?php else: ?>
                                        <li><a class="btn btn-transparent">Send Message</a></li>
                                        <li><a class="btn btn-transparent">Report Ad</a></li>
                                        <label>You must be logged</label>
                                    <?php endif; ?>
                                </ul>
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
