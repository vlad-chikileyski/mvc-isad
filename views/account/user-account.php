<?php include ROOT . '/views/layout/header.php'; ?>
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
