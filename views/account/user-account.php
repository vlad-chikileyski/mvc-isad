<?php include ROOT . '/views/layout/header.php'; ?>
    <div class="app-canvas">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>

            <div class="blog-page">

                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="blog-posts">
                            <article class="blog-post">
                                <figure>
                                    <img src="assets/img/b1.jpg" alt="dummy">
                                    <time datetime="2017-02-14">04<br>DEC</time>
                                </figure>
                                <header>
                                    <h3>Five Safety Tips For Buying</h3>
                                    <ul class="info-list">
                                        <li><i class="fa fa-user"></i> <a href="#">by adspot</a></li>
                                        <li><i class="fa fa-comments"></i> <a href="#">33 comments</a></li>
                                    </ul>
                                </header>
                                <div class="blog-content">

                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition injected humour or non-characteristic words etc.</p>
                                    <br>
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                    <br>
                                    <blockquote>
                                        “Lorem Ipsum is simply dummy text of the printing industry standard dummy text ever since the when an unknown printer took galley”
                                    </blockquote>
                                    <br>
                                    <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>

                                    <hr>
                                </div>
                            </article>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-4">
                        <aside class="sidebar">
                            <div class="widget-about widget">
                                <header>
                                    <h4>About Me:</h4>
                                    <h3>Username: <?php echo $user['username']; ?></h3>
                                    <h4>Phone: +<?php echo $user['phone']; ?></h4>
                                    <h4>Phone: +<?php echo $user['phone']; ?></h4>
                                </header>
                                <figure><img src="assets/img/aboutm.jpg" alt="dummy"></figure>
                                <p>Meh synth Schlitz, tempor duis single
                                    origin coffee ea next level ethnic fine
                                    gerstache fanny pack nostrud. Seitan High Life reprehenderit.</p>
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
                                    <img src="assets/img/android.png" alt="Google play">
                                    <span>download on</span>
                                    <h4>Google Play</h4>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="assets/img/apple.png" alt="Apple store">
                                    <span>download on</span>
                                    <h4>Apple Store</h4>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="#" class="app-store">
                                    <img src="assets/img/win.png" alt="windows store">
                                    <span>download on</span>
                                    <h4>Windows Store</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-4 col-md-5 pull-right">
                        <div class="action-mock">
                            <img src="assets/img/app-mock.png" alt="download apps">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ROOT . '/views/layout/footer.php'; ?>
