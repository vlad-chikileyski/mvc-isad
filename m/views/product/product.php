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
		
		<?php include ROOT .'/veiws/layout/main-menu.php';?>

	</div>
	<!-- END LEFT SIDEBAR -->

	<!-- MAIN PAGE -->
	<div id="page">
		
		<?php include ROOT .'/views/layout/top-navbar.php';?>


		<!-- CONTENT CONTAINER -->
		<div class="content-container">
			
			<!-- Product Header -->
			<div class="content-header">

				<div class="breadcrumbs animated fadeIn"><!-- Product breadcrumb -->
					<a href="#!">Fashion</a>
					<a href="#!">Female Pants</a>
					<a class="active" href="#!">Blues</a>
				</div><!-- End Product breadcrumb -->

				<h2 class="product-title animated fadeIn">Jeans Import HQ</h2><!-- Product title -->

				<!-- Product thumbnail slider -->
				<ul class="product-slider animated fadeInRight"><!-- Single thumbnail -->
					<li>
						<a class="fullscreen-icon swipebox" href="/template/images/shop3.jpg" title="This is dummy caption.">
							<i class="fa fa-expand"></i>
						</a>
						<img src="/template/images/240x240.png" alt="img" />
					</li>
					<li>
						<a class="fullscreen-icon swipebox" href="/template/images/shop12.jpg" title="This is dummy caption.">
							<i class="fa fa-expand"></i>
						</a>
						<img src="/template/images/240x240.png" alt="img" />
					</li>
					<li>
						<a class="fullscreen-icon swipebox" href="/template/images/shop6.jpg" title="This is dummy caption.">
							<i class="fa fa-expand"></i>
						</a>
						<img src="/template/images/240x240.png" alt="img" />
					</li>
				</ul><!-- End single thumbnail -->
				<div class="slick-thumbs"><!-- Small thumb indicator -->
					<ul>
						<li>
							<img src="/template/images/80x80.png" alt="img" />
						</li>
						<li>
							<img src="/template/images/80x80.png" alt="img" />
						</li>
						<li>
							<img src="/template/    images/80x80.png" alt="img" />
						</li>
					</ul>
				</div><!-- End small thumb indicator -->
				<!-- End Product thumbnail slider -->

				<!-- You can also use static thumbnail (without slider) via HTML tag below
				---------------------------------------------------		
				<div class="big-thumb">
					<img src="images/1.jpg" alt="">
				</div>
				-------------------------------------------------
				-->

				<!-- Product meta -->
				<div class="product-meta animated fadeInUp">
					<div class="rating">
						<i class="fa fa-star active"></i>
						<i class="fa fa-star active"></i>
						<i class="fa fa-star active"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</div>
					<div class="price">
						<span class="price-before">$ 101.1</span>$ 96.24
					</div>
					<!-- Beside .in-stock class, you can also use .out-of-stock class -->
					<div class="availability in-stock">
						In Stock
					</div>
				</div>
				<!-- End Product meta -->

			</div>
			<!-- End Product Header -->
			
			<!-- Product tabs -->
			<div class="product-tabs">
				<ul class="tabs">
					<li class="tab"><a class="active" href="#detail">Detail</a></li>
					<li class="tab"><a href="#review">Review</a></li>
				</ul>
			</div>
			<!-- End Product tabs -->
			
			<!-- Product content -->
			<div class="product-content">
				
				<!-- Product detail tabs -->
				<div class="tab-content" id="detail">
					<p>The awesome can be light everything do shame in the house. After of all, we made beautiful design in small industry.</p>
					<p>What its mean? Its mean if we could had delicious and money more, we can't stand on the right side.</p>
				</div>
				<!-- End Product detail tabs -->

				<!-- Product review list tabs -->
				<div class="tab-content" id="review">
					
					<ol class="product-review-list">
						<li>
							<div class="review-idty">
								<div class="name">
									Andriy Sheva
								</div>
								<div class="product-rating">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="review-ctn">
								awesome product
							</div>
						</li>
						<li>
							<div class="review-idty">
								<div class="name">
									Carlos de Mello
								</div>
								<div class="product-rating">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="review-ctn">
								The product has come softly, thank you maleo.
							</div>
						</li>
						<li>
							<div class="review-idty">
								<div class="name">
									Jackson Thiago
								</div>
								<div class="product-rating">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="review-ctn">
								No one doubt about quality of this product. Congratulations for all.
							</div>
						</li>
						<li>
							<div class="review-idty">
								<div class="name">
									Melanie Ricardo
								</div>
								<div class="product-rating">
									<i class="fa fa-star active"></i>
									<i class="fa fa-star active"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="review-ctn">
								Only one thing, please give us some explanation more.
							</div>
						</li>
					</ol>
				</div>
				<!-- End Product review list tabs -->

			</div>
			<!-- End Product content -->
			
			<!-- Product navigation -->
			<div class="product-action margin-bottom">
				<a class="btn green btn-block margin-bottom_low" href="#">Buy</a>
				<a class="btn grey btn-block" href="#">Add to wishlist</a>
			</div>
			<!-- End Product navigation -->
			<div class="line"></div>
			
			<!-- Related product section -->
			<div class="page-block">
				
				<h2 class="block-title">
					<span>You may like also</span>
				</h2>

				<ol class="product-list-slider">
					<li>
						<div class="thumb">
							<a href="product.html">
								<img src="images/240x240.png" alt="">
							</a>
						</div>
						<div class="product-ctn">
							<div class="product-name">
								<a href="product.html">
									Black Blazer
								</a>
							</div>
							<div class="rating">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="price">
								<span class="price-before">$ 178.23</span>
								<span class="price-current">$ 159.00</span>
							</div>
						</div>
					</li>
					<li>
						<div class="thumb">
							<a href="product.html">
								<img src="images/240x240.png" alt="">
							</a>
						</div>
						<div class="product-ctn">
							<div class="product-name">
								<a href="product.html">
									Motorcycle 200cc
								</a>
							</div>
							<div class="rating">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="price">
								<span class="price-before">$ 1,021.33</span>
								<span class="price-current">$ 965.12</span>
							</div>
						</div>
					</li>
					<li>
						<div class="thumb">
							<a href="product.html">
								<img src="images/240x240.png" alt="">
							</a>
						</div>
						<div class="product-ctn">
							<div class="product-name">
								<a href="product.html">
									Modern Watch
								</a>
							</div>
							<div class="rating">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
							</div>
							<div class="price">
								<span class="price-current">$ 260.9</span>
							</div>
						</div>
					</li>
					<li>
						<div class="thumb">
							<a href="product.html">
								<img src="images/240x240.png" alt="">
							</a>
						</div>
						<div class="product-ctn">
							<div class="product-name">
								<a href="product.html">
									Tablet Mini 2
								</a>
							</div>
							<div class="rating">
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star active"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>
							<div class="price">
								<span class="price-before">$ 499.00</span>
								<span class="price-current">$ 472.5</span>
							</div>
						</div>
					</li>
				</ol>

				<div class="clear"></div><!-- Use this class (.clear) to clearing float -->

			</div>
			<!-- End Related product section -->

		</div>
		<!-- END CONTENT CONTAINER -->
        <?php include ROOT .'/views/layout/footer.php';?>

	</div>
	<!-- END MAIN PAGE -->

</div><!-- #main -->
</body>
</html>