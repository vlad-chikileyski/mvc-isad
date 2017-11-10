<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Shofy - Mobile Shop Template</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="x-ua-compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">

    <link rel="stylesheet" type="text/css" href="/template/css/style.css">
    <link rel="stylesheet" type="text/css" href="/template/css/responsive.css">
    <link rel="shortcut icon" href="/template/images/favicon.png">
</head>

<body>

<div id="main">

    <!-- LEFT SIDEBAR -->
    <div id="slide-out-left" class="side-nav">

        <!-- Form Search -->
        <div class="top-left-nav">
            <div class="searchbar">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search">
            </div>
        </div>
        <!-- End Form Search -->

        <?php include ROOT . '/views/layout/main-menu.php'; ?>

    </div>
    <!-- END LEFT SIDEBAR -->

    <!-- MAIN PAGE -->
    <div id="page">

        <?php include ROOT . '/views/layout/top-navbar.php'; ?>


        <!-- CONTENT CONTAINER -->
        <div class="content-container">

            <h1 class="page-title">Post Your Ad</h1>
            <form method="post">

                <!-- Custom (shofy) form container -->
                <div class="shofy-form">
                    <div class="input-field">
                        <label for="title" style="color: black">Ad Title</label>
                        <input type="text" name="title" id="title">
                    </div>

                    <div class="input-field">
                        <h3 class="out-label">Subcategory</h3>
                        <select>
                            <?php foreach ($subCategoryListMenu as $subcategory) : ?>
                                <option value="<?php echo $subcategory['subcategory_name']; ?>"><?php echo $subcategory['sub_category_title']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input-field">
                        <textarea name="description" id="description" class="materialize-textarea"></textarea>
                        <label for="description" style="color: black">Ad Description</label>
                    </div>
                    <div class="input-field">
                        <label for="postcode" style="color: black">Post Code</label>
                        <input type="text" name="postcode" id="postcode">
                    </div>
                    <div class="input-field">
                        <label for="name" style="color: black">Your Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <?php if (UserMobile::isGuest()): ?>
                        <div class="input-field">
                            <label for="email" style="color: black">Your email</label>
                            <input type="text" name="email" id="email" value="<?php echo $userInfo['email']; ?>"
                                   readonly="readonly" style="color: blue">
                        </div>
                    <?php else: ?>
                        <div class="input-field">
                            <label for="email" style="color: black">Your email</label>
                            <input type="text" name="email" id="email">
                        </div>
                    <?php endif; ?>
                    <div class="input-field">
                        <label for="phone" style="color: black">Phone number</label>
                        <input type="text" name="phone" id="phone">
                    </div>
                    <!-- Payment Method Section -->
                    <div class="page-block checkout-shipping-block">

                        <h2 class="block-title">
                            <span>Make Your Ad Featured</span>
                        </h2>

                        <ol class="payment-method">
                            <li>
                                <input name="group1" type="radio" id="test1"/>
                                <label for="test1">Cash on Delivery</label>
                            </li>
                            <li>
                                <input name="group1" type="radio" id="test2"/>
                                <label for="test2">Internet Banking</label>
                            </li>
                            <li>
                                <input name="group1" type="radio" id="test3"/>
                                <label for="test3">Credit/Debit Card</label>
                                <span>All Visa and Mastercard</span>
                            </li>
                            <li>
                                <input name="group1" type="radio" id="test4"/>
                                <label for="test4">Transfer</label>
                                <span>Time limit payment only 24 hour</span>
                            </li>
                            <li>
                                <input name="group1" type="radio" id="test5"/>
                                <label for="test5">Electronic Money</label>
                            </li>
                            <li>
                                <input name="group1" type="radio" id="test6"/>
                                <label for="test6">Paypal</label>
                            </li>
                        </ol>
                    </div>
                    <!-- END Payment Method Section -->

                    <!-- Coupon & Promo Section -->
                    <!-- <div class="page-block checkout-shipping-block">

                         <h2 class="block-title">
                             <span>Coupon & Promo</span>
                         </h2>

                         <span class="block semibold">Coupon</span>
                         <ol class="payment-method">
                             <li>
                                 <input name="group1" type="radio" id="test1"/>
                                 <label for="test1">$ 5.0</label>
                                 <span>Until end of this month</span>
                             </li>
                             <li>
                                 <input name="group1" type="radio" id="test2"/>
                                 <label for="test2">$ 10.0</label>
                                 <span>For total shopping $ 200.0 above</span>
                             </li>
                         </ol>

                         <span class="block semibold">Promo ID</span>
                         <div class="checkout-promoID">
                             <input type="text" placeholder="Ex : YY567-201">
                             <button type="button">Send</button>
                         </div>
                     </div>
                     <div class="input-field">
                         <h3 class="out-label">Upload evidance of transfer</h3>
                         <span class="desc">Max upload file is 2MB</span>
                         <div class="file-field">
                             <div class="btn grey">
                                 <span>File</span>
                                 <input type="file">
                             </div>
                             <div class="file-path-wrapper">
                                 <input class="file-path validate" type="text">
                             </div>
                         </div>
                     </div>-->
                    <button class="btn block green" type="submit">Send</button>
                </div>
            </form>
            <!-- End Custom Form -->
        </div>
        <!-- END CONTENT CONTAINER -->
        <?php include ROOT . '/views/layout/footer.php'; ?>
    </div>
    <!-- END MAIN PAGE -->

</div><!-- #main -->

</body>
</html>