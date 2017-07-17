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
                <form action="/">
                    <div class="elements-block">
                        <div class="inner">
                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="create001">Ad Title</label>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <input type="text" id="create001">
                                </div>
                            </div>
                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <span class="required label">Category</span>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <div class="mega-dropdown-wrap">
                                        <div class="mega-dropdown">
                                            <button>Select Category</button>
                                            <i class="fa fa-navicon"></i>
                                            <div class="mega-content">
                                                <ul class="category-list">
                                                    <li><a href="https://vechicle.adtoday.co.uk/new"><i class="adicon-car"></i>Vehicles</a>
                                                    </li>
                                                    <li><a><i class="adicon-tablet"></i>Mobiles</a>
                                                        <ul>
                                                            <li><a>Iphone</a></li>
                                                            <li><a>Android</a></li>
                                                            <li><a>Q mobile</a></li>
                                                            <li><a>Black berry</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a><i class="adicon-tv"></i>Electronics</a>
                                                        <ul>
                                                            <li><a>Washing Machine</a></li>
                                                            <li><a>Television</a></li>
                                                            <li><a>Air conditioner</a></li>
                                                            <li><a>Computers and Laptops</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a><i class="adicon-sofa"></i>Furniture</a></li>
                                                    <li><a href="https://jobs.adtoday.co.uk/new"><i class="adicon-briefcase"></i>Jobs</a>
                                                    </li>
                                                    <li><a><i class="adicon-buildings"></i>Real Estate</a>
                                                        <ul>
                                                            <li><a href="https://property.adtoday.co.uk/new/flat">Flat</a></li>
                                                            <li><a href="https://property.adtoday.co.uk/new/house">House</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a><i class="adicon-bell"></i>Services</a></li>
                                                    <li><a><i class="adicon-hat"></i>Education</a></li>
                                                    <li><a><i class="adicon-dog"></i>Animals</a></li>
                                                    <li><a><i class="adicon-heal"></i>Fashion</a></li>
                                                    <li><a><i class="adicon-smile"></i>Baby Products</a></li>
                                                    <li><a><i class="adicon-hearts"></i>Adult</a>
                                                        <ul>
                                                            <li><a href="https://property.adtoday.co.uk/new/flat">Adult dating</a></li>
                                                            <li><a href="https://property.adtoday.co.uk/new/flat">Escorts & Massages</a></li>
                                                            <li><a href="https://property.adtoday.co.uk/new/flat">Swingers</a></li>
                                                            <li><a href="https://property.adtoday.co.uk/new/flat">Webcams</a></li>
                                                            <li><a href="https://property.adtoday.co.uk/new/flat">Adult jobs</a></li>
                                                            <li><a href="https://property.adtoday.co.uk/new/flat">Adult entertainment</a></li>
                                                            <li><a href="https://property.adtoday.co.uk/new/flat">Gay escorts</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type='text/javascript' src='https://code.jquery.com/jquery-1.10.2.min.js'></script>
                            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                            <script src="/template/assets/js/script.js"></script
                            <hr>
                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="create201">Ad Description</label>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <textarea id="create201"
                                              placeholder="Include the brand, model, age and any included accessories."></textarea>
                                </div>
                            </div>

                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="image-block">Image</label>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <div id="filediv"><input name="file[]" type="file" id="file"/></div>
                                    <input type="button" id="add_more" class="upload-image" value="Add More Files"/>
                                    <input type="submit" value="Upload File" name="submit" id="upload-image" class="upload-image"/>                                </div>
                            </div>
                            <hr>
                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="postcode-block">Post Code</label>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <input class="input-sm" type="text" id="postcode-block" placeholder="e.g. OX49 5NU">
                                </div>
                            </div>
                            <hr>
                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="create401">Your Name</label>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <input class="input-sm" type="text" id="create401" placeholder="e.g. Jhone Doe">
                                </div>
                            </div>
                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="create501">Your email</label>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <input class="input-sm" type="email" id="create501" placeholder="e.g. jon@got.com">
                                </div>
                            </div>

                            <div class="row field-block">
                                <div class="col-xs-12 col-md-3">
                                    <label class="required" for="create451">Phone number</label>
                                </div>
                                <div class="col-xs-12 col-md-9">
                                    <div class="icon-field">
                                        <span>+44</span>
                                        <input class="input-sm" type="tel" id="create451" placeholder="e.g. 123456789">
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
                                <a class="btn btn-green btn-md" href="#">Create ad</a>&emsp;&emsp;
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
<?php include ROOT . '/views/layout/footer.php'; ?>
