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

            <h1 class="page-title">Payment Confirm</h1>
            <form action="http://m.adtoday.co.uk/payment/" method="post">

                <!-- Custom (shofy) form container -->
                <div class="shofy-form">
                    <div class="input-field">
                        <h3 class="out-label">Order No</h3>
                        <input type="text" id="orderno">
                    </div>

                    <div class="input-field">
                        <h3 class="out-label">Amount</h3>
                        <input type="text" id="amount">
                    </div>

                    <div class="input-field">
                        <h3 class="out-label">Date of transfer</h3>
                        <input type="date" class="datepicker">
                    </div>

                    <div class="input-field">
                        <h3 class="out-label">Transfer Order</h3>
                        <span class="desc">Your bank account</span>
                        <select>
                            <option value="" selected>Choose bank</option>
                            <option value="">ANZ</option>
                            <option value="">Swiss Bank</option>
                            <option value="">US Bank</option>
                        </select>
                        <input type="text" id="amount" placeholder="Your Acc No">
                        <input type="text" id="amount" placeholder="Your ACC Name (Match with Bank passbook)">
                    </div>

                    <div class="input-field">
                        <h3 class="out-label">To Where</h3>
                        <span class="desc">Our bank</span>
                        <select>
                            <option value="" selected>ANZ</option>
                            <option value="">Swiss Bank</option>
                            <option value="">US Bank</option>
                        </select>
                    </div>
                    <!-- Payment Method Section -->
                    <div class="page-block checkout-shipping-block">

                        <h2 class="block-title">
                            <span>Payment Method</span>
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
                    <!-- END Coupon & Promo Section -->
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
                                            <input class="showHideTarget"
                                                   data-target="#featured-paymentOptions" type="checkbox"
                                                   id="create42213" name="item-condition">
                                            <label class="big-font" for="create42213"> Featured Ad</label>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <strong class="pricexs-s10948">Free</strong> <strong>per ad</strong>
                                    </td>
                                </tr>
                                </thead>
                                <tbody id="featured-paymentOptions" style="display: none">
                                <tr>
                                    <td>
                                        <h5>ENHANCE YOUR AD'S VISIBILITY (Optional)</h5>
                                        <?php foreach ($paymentsBoxInfo as $boxInfoPayments) : ?>
                                            <div class="custom-radio block-element">
                                                <input type="radio" class="calculate-price"
                                                       id="<?php echo "p31y323n-" . $boxInfoPayments["id"]; ?>"
                                                       name="payment-method"
                                                       data-value="<?php echo " £" . $boxInfoPayments["price_value_text"]; ?>"
                                                       value="<?php echo "p31y323n-" . $boxInfoPayments["id"]; ?>">
                                                <label
                                                        for="<?php echo "p31y323n-" . $boxInfoPayments["id"]; ?>"> <?php echo $boxInfoPayments["payment_title_name"] . " - £" . $boxInfoPayments["price_value_text"]; ?> </label>
                                            </div>
                                        <?php endforeach; ?>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>&emsp;</td>
                                    <td class="text-right"><strong>Total : </strong><strong class="pricexs-s10948">
                                            £0</strong>
                                    </td>
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
                    <!-- CONTENT CONTAINER -->
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