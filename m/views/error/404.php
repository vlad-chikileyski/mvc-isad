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

        <!-- FIXED Top Navbar -->
        <div class="top-navbar">
            <div class="top-navbar-left">
                <a href="#" id="menu-left" data-activates="slide-out-left">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="top-navbar-right">
                <a href="#" class="dropdown-button"><i class="fa fa-plus"></i>
                </a>
                <a href="#" class="dropdown-button" data-activates="dropdown1">
                    <i class="fa fa-user-circle-o"></i>
                </a>
                <?php if (UserMobile::isGuest()): ?>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="panel-account.html"><i class="fa fa-server"></i> Panel Account</a></li>
                        <li><a href="form-account.html"><i class="fa fa-user"></i> My Profile</a></li>
                        <li><a href="order-history.html"><i class="fa fa-history"></i> Order History</a></li>
                        <li class="divider"></li>
                        <li><a href="http://m.adtoday.co.uk/account/logout/"><i class="fa fa-user"></i>Logout</a></li>

                    </ul>
                <?php else: ?>
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="http://m.adtoday.co.uk/login"><i class="fa fa-user"></i> My Profile</a></li>
                        <li><a href="http://m.adtoday.co.uk/register"><i class="fa fa-user"></i> Register</a></li>
                        <li class="divider"></li>
                    </ul>
                <?php endif; ?>

                <!--<a href="#" id="menu-right" data-activates="slide-out-right">
                    <span class="cart-badge">3</span>
                    <i class="fa fa-shopping-basket"></i>
                </a>-->
            </div>
            <div class="site-title">
                <h1>AdToday - Buy & Sell Anything</h1>
            </div>
        </div>
        <!-- End FIXED Top Navbar -->



        <!-- CONTENT CONTAINER -->
		<div class="content-container">

			<!-- Not Found Container -->
			<div class="not-found animated fadeIn">
				<h2>404</h2>
				<h3>Oops!</h3>
				<p>Looks like the page you're looking for does not exist! Sorry for the inconvenience.</p>
				<a href="http://m.adtoday.co.uk/" class="btn blue"><i class="fa fa-home"></i> Back to homepage</a>
			</div>
			<!-- End Not Found Container -->

		</div>
		<!-- END CONTENT CONTAINER -->

        <?php include ROOT . '/views/layout/footer.php'; ?>
	</div>
	<!-- END MAIN PAGE -->

</div><!-- #main -->

</body>
</html>