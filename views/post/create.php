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
                <li><a href="/">Home</a></li>
                <li>
                    Post your ad
                </li>
            </ul>
        </div>

        <div class="page row">
            <header class="heading style-bg big text-center">
                <h1>World’s <strong>Biggest</strong> Classified Marketplace</h1>
                <p class="text-uppercase">sell &amp; purchase anything</p>
            </header>
            <div class="form-wrapper">
                <form method="post">
                    <div class="elements-block">
                        <div class="inner">
                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="title">Ad Title</label>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <input type="text" id="title" name="title" required>
                                </div>
                            </div>
                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <span class="required label">Subcategory</span>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <div class="mega-dropdown-wrap">
                                        <div class="mega-dropdown">
                                            <button>Select Subcategory</button>
                                            <i class="fa fa-navicon"></i>
                                            <div class="mega-content">
                                                <ul class="sub-category">
                                                    <?php foreach ($subCategoryListMenu as $subcategory) : ?>
                                                        <li><a href="#"><?php echo $subcategory['menu-title']; ?></a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input id="subcategory" size="40" name="subcategory" type="hidden"/>
                            <!--                            <script type='text/javascript' src='https://code.jquery.com/jquery-1.10.2.min.js'></script>
                                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                                                        <script src="/template/assets/js/script.js"></script-->
                            <hr>
                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="description">Ad Description</label>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <textarea id="description"
                                              placeholder="Include the brand, model, age and any included accessories."
                                              name="description"></textarea>
                                </div>
                            </div>
                            <!--   <div class="row field-block">
                                   <div class="col-xs-12 col-md-3">
                                       <label class="required" for="image-block">Image</label>
                                   </div>
                                   <div class="col-xs-12 col-md-9">
                                       <div id="filediv"><input name="file[]" type="file" id="file"/></div>
                               </div>-->
                            <hr>
                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="postcode">Post Code</label>
                                </div>
                                <div class="col-xs-12 col-md-4">
                                    <input class="input-sm" type="text" id="search_postcode" name="postcode"
                                           placeholder="e.g. OX49 5NU" required>
                                    <div id="result"></div>
                                </div>

                                <div class="col-xs-12 col-md-3">
                                    <div class="ajax-loader" style="">
                                        <img src="/template/assets/img/Reload.gif" class="img-responsive"/>
                                    </div>
                                    <div class="ajax-loader-status">
                                        <i class="fa fa-check" aria-hidden="true" style="color: green;"></i>
                                    </div>
                                    <div class="ajax-loader-error">
                                        <i class="fa fa-times" aria-hidden="true" style="color: red;"></i>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="name">Your Name</label>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <input class="input-sm" type="text" id="name" name="name"
                                           placeholder="e.g. Jhone Doe" required>
                                </div>
                            </div>
                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="email">Your email</label>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <input class="input-sm" type="email" id="email" name="email"
                                           placeholder="e.g. jon@got.com"
                                           required>
                                </div>
                            </div>

                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="phone">Phone number</label>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <div class="icon-field">
                                        <span>+44</span>
                                        <input class="input-sm" type="tel" id="phone" name="phone"
                                               placeholder="e.g. 123456789"
                                               required>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="elements-block style-gray">
                        <div class="inner">
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <td>
                                        <h4>Make Your Ad Featured</h4>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="link">What is a Featured Ad?</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="custom-checkbox">
                                            <input checked="checked" class="showHideTarget"
                                                   data-target="#featured-paymentOptions" type="checkbox"
                                                   id="create42213" name="item-condition">
                                            <label class="big-font" for="create42213"> Featured Ad</label>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <strong>$2.90 per ad</strong>
                                    </td>
                                </tr>
                                </thead>
                                <tbody id="featured-paymentOptions">
                                <tr>
                                    <td>
                                        <h5>Please select the preferred payment method.</h5>
                                        <div class="custom-radio block-element">
                                            <input type="radio" id="create422131" name="payment-method-opt">
                                            <label for="create422131"> Direct Bank Transfer</label>
                                        </div>
                                        <div class="custom-radio block-element">
                                            <input type="radio" id="create422132" name="payment-method-opt">
                                            <label for="create422132"> Cheque Payment</label>
                                        </div>
                                        <div class="custom-radio block-element">
                                            <input type="radio" id="create422133" name="payment-method-opt">
                                            <label for="create422133"> Paypal</label>
                                        </div>
                                        <div class="custom-radio block-element">
                                            <input type="radio" id="create422134" name="payment-method-opt">
                                            <label for="create422134"> Credit Card</label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>&emsp;</td>
                                    <td class="text-right"><strong>Total : $2.90</strong></td>
                                </tr>
                                </tfoot>
                            </table>
                            <br>
                            <br>
                            <div>
                                <button type="submit" name="submit" class="btn btn-green btn-md">Create ad</button>
                                <span class="termStatement">
                                            By clicking 'Create Ad' you agree to <a class="link" href="/terms/">our  Terms & Condition</a> and
                                        <a class="link" href="#">Posting Rules</a>.
                                        </span>
                            </div>

                        </div>
                    </div>
                </form>
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
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        //load_data();

        function load_data(query) {
            $.ajax({
                beforeSend: function () {
                    $('.ajax-loader').css("visibility", "visible");
                    $('.ajax-loader-status').css("visibility", "hidden");
                },
                url: "/request/validate.php",
                method: "POST",
                data: {query: query},
                success: function (data) {
                    $('#result').html(data);
                    $('.ajax-loader-status').css("visibility", "visible");
                    $('.ajax-loader-error').css("visibility", "hidden");
                }, complete: function () {
                    $('.ajax-loader').css("visibility", "hidden");
                },error: function () {
                    $('.ajax-loader-error').css("visibility", "visible");
                }
            });
        }

        $('#search_postcode').keyup(function () {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            }else {
                $('.ajax-loader-status').css("visibility", "hidden");
            }
        });
    });
</script>
<?php include ROOT . '/views/layout/footer.php'; ?>
