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