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

			<h1 class="page-title">Contact</h1>

			<p>
				<address>
					<span class="bold block">Shofy Inc.</span>
					2206 Margasatwa Street, Tower 02
					Kansas, CA 22994<br />
					<abbr title="Phone">P:</abbr> (999) 123-456
				</address>
				<address>
					<span class="semibold block">Natalie Amyllia</span>
					<a href="mailto:#">me@example.com</a>
				</address>
			</p>

			<div class="input-field with-icon">
				<span class="icon">
					<i class="fa fa-user"></i>
				</span>
				<input type="text" name="name" id="name">
				<label for="name">Name</label>
			</div>

			<div class="input-field with-icon">
				<span class="icon">
					<i class="fa fa-envelope"></i>
				</span>
				<input type="text" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field with-icon">
				<span class="icon">
					<i class="fa fa-phone"></i>
				</span>
				<input type="text" id="phone">
				<label for="phone">Phone</label>
			</div>

			<div class="input-field with-icon">
				<span class="icon">
					<i class="fa fa-map-marker"></i>
				</span>
				<input type="text" name="city" id="city">
				<label for="city">City</label>
			</div>

			<div class="input-field with-icon">
				<span class="icon">
					<i class="fa fa-comment"></i>
				</span>
				<textarea name="message" id="message" class="materialize-textarea"></textarea>
				<label for="message">Message</label>
			</div>

			<div class="button-field">
				<button type="button" name="submit" class="btn blue block margin-bottom">Send</button>
			</div>

		</div>
		<!-- END CONTENT CONTAINER -->
        <?php include ROOT . '/views/layout/footer.php'; ?>
    </div>
	<!-- END MAIN PAGE -->

</div><!-- #main -->
</body>
</html>