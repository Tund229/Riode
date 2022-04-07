<?php
	session_start();
	include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>Riode - Products</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Riode - Best of online selling">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/icons/favicon.png">

	<script>
		WebFontConfig = {
			google: { families: [ 'Poppins:300,400,500,600,700,800' ] }
		};
		( function ( d ) {
			var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
			wf.src = 'js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore( wf, s );
		} )( document );
	</script>


	<link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css">

	<!-- Plugins CSS File -->
	<link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/photoswipe/photoswipe.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/photoswipe/default-skin/default-skin.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/sticky-icon/stickyicon.css">

	<!-- Main CSS File -->
	<link rel="stylesheet" type="text/css" href="css/demo15.min.css">
</head>

<body>
	<div class="page-wrapper">
		<header class="header">
			<div class="header-middle has-center sticky-header fix-top sticky-content">
				<div class="container-fluid">
					<div class="header-left">
						<a href="#" class="mobile-menu-toggle text-dark">
							<i class="d-icon-bars2"></i>
						</a>
						<!-- Mobile Menu Toggle -->
						<a href="index.php" class="logo mr-0">
							<img src="images/demos/demo15/logo-primary.png" alt="logo" width="154" height="43" />
						</a>
						<a href="#" class="call"><span class="text-uppercase">Need
								Help?</span><strong>(123)456-7890</strong></a>
						<span class="divider"></span>
						<div class="dropdown currency-dropdown">
							<a href="#currency">USD</a>
							<ul class="dropdown-box">
								<li><a href="#USD">USD</a></li>
								<li><a href="#EUR">EUR</a></li>
							</ul>
						</div>
						<!-- End DropDown Menu -->
						<div class="dropdown language-dropdown">
							<a href="#language">ENG</a>
							<ul class="dropdown-box">
								<li>
									<a href="#USD">ENG</a>
								</li>
								<li>
									<a href="#EUR">FR</a>
								</li>
							</ul>
						</div>
						<!-- End DropDown Menu -->
					</div>
					<div class="header-center">
						<a href="index.php" class="logo mr-0">
							<img src="images/demos/demo15/logo-primary.png" alt="logo" width="154" height="43" />
						</a>
						<!-- End Logo -->
					</div>
					<?php 
						if(session_start() AND isset($_SESSION["register_id"])){
					?>	
					<div class="header-right">
						<!-- End Divider -->
						<div class="header-search hs-toggle mr-4">
							<a href="#" class="search-toggle">
								<i class="d-icon-search"></i>
							</a>
							<form action="#" class="input-wrapper">
								<input type="text" class="form-control" name="search" autocomplete="off"
									placeholder="Search your keyword..." required />
								<button class="btn btn-search" type="submit">
									<i class="d-icon-search"></i>
								</button>
							</form>
						</div>
						<!-- End Header Search -->

						<div class="dropdown wishlist wishlist-dropdown off-canvas mr-4 d-lg-show">
							<a href="wishlist.php" class="wishlist-toggle">
								<i class="d-icon-heart"></i>
							</a>
							<div class="canvas-overlay"></div>
							<!-- End Wishlist Toggle -->
							<div class="dropdown-box scrollable">
								<div class="canvas-header">
									<h4 class="canvas-title">wishlist</h4>
									<a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
											class="d-icon-arrow-right"></i><span class="sr-only">wishlist</span></a>
								</div>
								<div class="products scrollable">
									<div class="product product-wishlist">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/wishlist/product-1.jpg" width="100" height="100"
													alt="product" />
											</a>
											<button class="btn btn-link btn-close">
												<i class="fas fa-times"></i><span class="sr-only">Close</span>
											</button>
										</figure>
										<div class="product-detail">
											<a href="product.php" class="product-name">Girl's Dark Bag</a>
											<div class="price-box">
												<span class="product-price">$84.00</span>
											</div>
										</div>
									</div>
									<!-- End of wishlist Product -->
									<div class="product product-wishlist">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/wishlist/product-2.jpg" width="100" height="100"
													alt="product" />
											</a>
											<button class="btn btn-link btn-close">
												<i class="fas fa-times"></i><span class="sr-only">Close</span>
											</button>
										</figure>
										<div class="product-detail">
											<a href="product.php" class="product-name">Women's Fashional Comforter
											</a>
											<div class="price-box">
												<span class="product-price">$84.00</span>
											</div>
										</div>
									</div>
									<!-- End of wishlist Product -->
									<div class="product product-wishlist">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/wishlist/product-3.jpg" width="100" height="100"
													alt="product" />
											</a>
											<button class="btn btn-link btn-close">
												<i class="fas fa-times"></i><span class="sr-only">Close</span>
											</button>
										</figure>
										<div class="product-detail">
											<a href="product.php" class="product-name">Wide Knickerbockers</a>
											<div class="price-box">
												<span class="product-price">$84.00</span>
											</div>
										</div>
									</div>

									<!-- End of wishlist Product -->
								</div>
								<a href="wishlist.php" class="btn btn-dark wishlist-btn mt-4"><span>Go To
										Wishlist</span></a>
								<!-- End of Products  -->
							</div>
							<!-- End Dropdown Box -->
						</div>

						<div class="dropdown cart-dropdown off-canvas type2">
							<a href="#" class="cart-toggle link">
								<i class="d-icon-bag"><span class="cart-count">2</span></i>
							</a>
							<div class="canvas-overlay"></div>
							<!-- End Cart Toggle -->
							<div class="dropdown-box">
								<div class="canvas-header">
									<h4 class="canvas-title">Shopping Cart</h4>
									<a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
											class="d-icon-arrow-right"></i></a>
								</div>
								<div class="products scrollable">
									<div class="product product-cart">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/cart/product-1.jpg" alt="product" width="80"
													height="88" />
											</a>
											<button class="btn btn-link btn-close">
												<i class="fas fa-times"></i>
											</button>
										</figure>
										<div class="product-detail">
											<a href="product.php" class="product-name">Riode White Trends</a>
											<div class="price-box">
												<span class="product-quantity">1</span>
												<span class="product-price">$21.00</span>
											</div>
										</div>

									</div>
									<!-- End of Cart Product -->
									<div class="product product-cart">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/cart/product-2.jpg" alt="product" width="80"
													height="88" />
											</a>
											<button class="btn btn-link btn-close">
												<i class="fas fa-times"></i>
											</button>
										</figure>
										<div class="product-detail">
											<a href="product.php" class="product-name">Dark Blue Women’s
												Leomora Hat</a>
											<div class="price-box">
												<span class="product-quantity">1</span>
												<span class="product-price">$118.00</span>
											</div>
										</div>
									</div>
									<!-- End of Cart Product -->
								</div>
								<!-- End of Products  -->
								<div class="cart-total">
									<label>Subtotal:</label>
									<span class="price">$139.00</span>
								</div>
								<!-- End of Cart Total -->
								<div class="cart-action">
									<a href="cart.php" class="btn btn-dark btn-link">View Cart</a>
									<a href="checkout.php" class="btn btn-dark"><span>Go To Checkout</span></a>
								</div>
								<!-- End of Cart Action -->
							</div>
							<!-- End Dropdown Box -->
						</div>
					</div>	
					<?php
						}else{
					?>
					<div class="header-right">
						<!-- End Divider -->
						<div class="header-search hs-toggle mr-4">
							<a href="#" class="search-toggle">
								<i class="d-icon-search"></i>
							</a>
							<form action="#" class="input-wrapper">
								<input type="text" class="form-control" name="search" autocomplete="off"
									placeholder="Search your keyword..." required />
								<button class="btn btn-search" type="submit">
									<i class="d-icon-search"></i>
								</button>
							</form>
						</div>
						<!-- End Header Search -->
						<a href="ajax/log.php" class="login-link d-lg-show mr-4"><i class="d-icon-user"></i></a>

						<div class="dropdown wishlist wishlist-dropdown off-canvas mr-4 d-lg-show">
							<a href="wishlist.php" class="wishlist-toggle">
								<i class="d-icon-heart"></i>
							</a>
							<div class="canvas-overlay"></div>
							<!-- End Wishlist Toggle -->
							<div class="dropdown-box scrollable">
								<div class="canvas-header">
									<h4 class="canvas-title">wishlist</h4>
									<a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
											class="d-icon-arrow-right"></i><span class="sr-only">wishlist</span></a>
								</div>
								<div class="products scrollable">
									<div class="product product-wishlist">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/wishlist/product-1.jpg" width="100" height="100"
													alt="product" />
											</a>
											<button class="btn btn-link btn-close">
												<i class="fas fa-times"></i><span class="sr-only">Close</span>
											</button>
										</figure>
										<div class="product-detail">
											<a href="product.php" class="product-name">Girl's Dark Bag</a>
											<div class="price-box">
												<span class="product-price">$84.00</span>
											</div>
										</div>
									</div>
									<!-- End of wishlist Product -->
									<div class="product product-wishlist">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/wishlist/product-2.jpg" width="100" height="100"
													alt="product" />
											</a>
											<button class="btn btn-link btn-close">
												<i class="fas fa-times"></i><span class="sr-only">Close</span>
											</button>
										</figure>
										<div class="product-detail">
											<a href="product.php" class="product-name">Women's Fashional Comforter
											</a>
											<div class="price-box">
												<span class="product-price">$84.00</span>
											</div>
										</div>
									</div>
									<!-- End of wishlist Product -->
									<div class="product product-wishlist">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/wishlist/product-3.jpg" width="100" height="100"
													alt="product" />
											</a>
											<button class="btn btn-link btn-close">
												<i class="fas fa-times"></i><span class="sr-only">Close</span>
											</button>
										</figure>
										<div class="product-detail">
											<a href="product.php" class="product-name">Wide Knickerbockers</a>
											<div class="price-box">
												<span class="product-price">$84.00</span>
											</div>
										</div>
									</div>

									<!-- End of wishlist Product -->
								</div>
								<a href="wishlist.php" class="btn btn-dark wishlist-btn mt-4"><span>Go To
										Wishlist</span></a>
								<!-- End of Products  -->
							</div>
							<!-- End Dropdown Box -->
						</div>

						<div class="dropdown cart-dropdown off-canvas type2">
							<a href="#" class="cart-toggle link">
								<i class="d-icon-bag"><span class="cart-count">2</span></i>
							</a>
							<div class="canvas-overlay"></div>
							<!-- End Cart Toggle -->
							<div class="dropdown-box">
								<div class="canvas-header">
									<h4 class="canvas-title">Shopping Cart</h4>
									<a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
											class="d-icon-arrow-right"></i></a>
								</div>
								<div class="products scrollable">
									<div class="product product-cart">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/cart/product-1.jpg" alt="product" width="80"
													height="88" />
											</a>
											<button class="btn btn-link btn-close">
												<i class="fas fa-times"></i>
											</button>
										</figure>
										<div class="product-detail">
											<a href="product.php" class="product-name">Riode White Trends</a>
											<div class="price-box">
												<span class="product-quantity">1</span>
												<span class="product-price">$21.00</span>
											</div>
										</div>

									</div>
									<!-- End of Cart Product -->
									<div class="product product-cart">
										<figure class="product-media">
											<a href="product.php">
												<img src="images/cart/product-2.jpg" alt="product" width="80"
													height="88" />
											</a>
											<button class="btn btn-link btn-close">
												<i class="fas fa-times"></i>
											</button>
										</figure>
										<div class="product-detail">
											<a href="product.php" class="product-name">Dark Blue Women’s
												Leomora Hat</a>
											<div class="price-box">
												<span class="product-quantity">1</span>
												<span class="product-price">$118.00</span>
											</div>
										</div>
									</div>
									<!-- End of Cart Product -->
								</div>
								<!-- End of Products  -->
								<div class="cart-total">
									<label>Subtotal:</label>
									<span class="price">$139.00</span>
								</div>
								<!-- End of Cart Total -->
								<div class="cart-action">
									<a href="cart.php" class="btn btn-dark btn-link">View Cart</a>
									<a href="checkout.php" class="btn btn-dark"><span>Go To Checkout</span></a>
								</div>
								<!-- End of Cart Action -->
							</div>
							<!-- End Dropdown Box -->
						</div>
					</div>
					<?php		
						}
					?>
				</div>
			</div>
			<!-- End Header Middle -->
			<div class="header-bottom justify-content-center">
				<nav class="main-nav">
					<ul class="menu menu-active-underline">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="shop.php">Categories</a>
						</li>
						<li class="active">
							<a href="product.php">Products</a>
						</li>
						<li>
							<a href="contact-us.php">Contact Us</a>
						</li>
						<li>
							<a href="blog.php">Blog</a>
						</li>
						<li>
							<a href="about-us.php">About Us</a>
						</li>

					</ul>
				</nav>
			</div>
		</header>
		<!-- End Header -->
		<main class="main single-product mt-6">
			<div class="page-content pb-8 mb-10">
				<div class="container">
					<div class="product product-single row mb-2">
						<div class="col-md-6">
							<div class="product-gallery row">
								<figure class="product-image mb-4">
									<img src="images/demos/demo15/product/product-1-580x652.jpg"
										data-zoom-image="images/demos/demo15/product/product-1-800x900.jpg"
										alt="Blue Pinafore Denim Dress" width="800" height="900">
									<a href="#" class="product-image-full"><i class="d-icon-zoom"></i></a>
								</figure>
								<div class="col-sm-5">
									<figure class="product-image mb-4">
										<img src="images/demos/demo15/product/product-2-230x258.jpg"
											data-zoom-image="images/demos/demo15/product/product-2-800x900.jpg"
											alt="Blue Pinafore Denim Dress" width="800" height="900">
										<a href="#" class="product-image-full"><i class="d-icon-zoom"></i></a>
									</figure>
								</div>
								<div class="col-sm-7">
									<figure class="product-image mb-4">
										<img src="images/demos/demo15/product/product-3-330x371.jpg"
											data-zoom-image="images/demos/demo15/product/product-3-800x900.jpg"
											alt="Blue Pinafore Denim Dress" width="800" height="900">
										<a href="#" class="product-image-full"><i class="d-icon-zoom"></i></a>
									</figure>
								</div>
								<div class="col-sm-7">
									<figure class="product-image mb-4">
										<img src="images/demos/demo15/product/product-4-330x371.jpg"
											data-zoom-image="images/demos/demo15/product/product-4-800x900.jpg"
											alt="Blue Pinafore Denim Dress" width="800" height="900">
										<a href="#" class="product-image-full"><i class="d-icon-zoom"></i></a>
									</figure>
								</div>
							</div>
						</div>
						<div class="col-md-6 sticky-sidebar-wrapper">
							<div class="product-details sticky-sidebar">
								<div class="product-navigation">
									<ul class="breadcrumb breadcrumb-lg">
										<li><a href="demo15.php"><i class="d-icon-home"></i></a></li>
										<li><a href="#" class="active">Products</a></li>
										<li>Detail</li>
									</ul>

									<ul class="product-nav">
										<li class="product-nav-prev">
											<a href="#">
												<i class="d-icon-arrow-left"></i> Prev
												<span class="product-nav-popup">
													<img src="images/product/product-thumb-prev.jpg"
														alt="product thumbnail" width="110" height="123">
													<span class="product-name">Sed egtas Dnte Comfort</span>
												</span>
											</a>
										</li>
										<li class="product-nav-next">
											<a href="#">
												Next <i class="d-icon-arrow-right"></i>
												<span class="product-nav-popup">
													<img src="images/product/product-thumb-next.jpg"
														alt="product thumbnail" width="110" height="123">
													<span class="product-name">Sed egtas Dnte Comfort</span>
												</span>
											</a>
										</li>
									</ul>
								</div>

								<h1 class="product-name">Womens' Blue Fashion Jacket</h1>
								<div class="product-meta">
									SKU: <span class="product-sku">12345670</span>
									BRAND: <span class="product-brand">The Northland</span>
								</div>
								<div class="product-price">$139.00</div>
								<div class="ratings-container">
									<div class="ratings-full">
										<span class="ratings" style="width:80%"></span>
										<span class="tooltiptext tooltip-top"></span>
									</div>
									<a href="#product-tab-reviews" class="link-to-tab rating-reviews">( 6 reviews )</a>
								</div>
								<p class="product-short-desc">Sed egestas, ante et vulputate volutpat, eros pede semper
									est, vitae luctus metus libero eu augue. Morbi purus liberpuro ate vol faucibus
									adipiscing. Sed lectus te et vulputate aucibus adipiscing. Sed lectus. us
									adipiscing. Sed lectus. </p>
								<div class="product-form product-color">
									<label>Color:</label>
									<div class="product-variations">
										<a class="color" data-src="images/demos/demo7/products/big1.jpg" href="#"
											style="background-color: #d99e76"></a>
										<a class="color" data-src="images/demos/demo7/products/2.jpg" href="#"
											style="background-color: #267497"></a>
										<a class="color" data-src="images/demos/demo7/products/3.jpg" href="#"
											style="background-color: #9a999d"></a>
										<a class="color" data-src="images/demos/demo7/products/4.jpg" href="#"
											style="background-color: #2b2b2b"></a>
									</div>
								</div>
								<div class="product-form product-size">
									<label>Size:</label>
									<div class="product-form-group">
										<div class="product-variations">
											<a class="size" href="#">S</a>
											<a class="size" href="#">M</a>
											<a class="size" href="#">L</a>
											<a class="size" href="#">XL</a>
											<a class="size" href="#">2XL</a>
										</div>

										<a href="#" class="product-variation-clean">Clean All</a>
									</div>
								</div>
								<div class="product-variation-price">
									<span>$239.00</span>
								</div>

								<hr class="product-divider">

								<div class="product-form product-qty">
									<div class="product-form-group">
										<div class="input-group">
											<button class="quantity-minus d-icon-minus"></button>
											<input class="quantity form-control" type="number" min="1" max="1000000">
											<button class="quantity-plus d-icon-plus"></button>
										</div>
										<button class="btn-product btn-cart"><i class="d-icon-bag"></i>Add To
											Cart</button>
									</div>
								</div>

								<hr class="product-divider mb-3">

								<div class="product-footer">
									<div class="social-links mr-4">
										<a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
										<a href="#" class="social-link social-twitter fab fa-twitter"></a>
										<a href="#" class="social-link social-pinterest fab fa-pinterest-p"></a>
									</div>
									<span class="divider"></span>
									<div class="product-action">
										<a href="#" class="btn-product btn-wishlist"><i class="d-icon-heart"></i>Add To
											Wishlist</a>
									</div>
								</div>

								<div class="accordion accordion-simple mb-4">
									<div class="card border-no card-description">
										<div class="card-header">
											<a href="#collapse1-1" class="collapse">Description</a>
										</div>
										<div id="collapse1-1" class="card-body expanded">
											<div class="row">
												<div class="col-12 mb-8">
													<p class="mb-6">
														Praesent id enim sit amet.Tdio vulputate eleifend in in tortor.
														ellus massa. siti iMassa ristique sit amet condim vel, facilisis
														quimequistiqutiqu amet condim Dilisis Facilisis quis sapien.
														Praesent id enim sit amet.
													</p>
													<ul class="mb-6">
														<li>Praesent id enim sit amet.Tdio vulputate</li>
														<li>Eleifend in in tortor. ellus massa.Dristique sitii</li>
														<li>Massa ristique sit amet condim vel</li>
														<li>Dilisis Facilisis quis sapien. Praesent id enim sit amet
														</li>
													</ul>
													<p class="mb-0">
														Praesent id enim sit amet odio vulputate eleifend in in tortor.
														Sellus massa, tristique sitiismonec tellus massa, tristique sit
														amet condim vel,
														facilisis quimequistiqutiqu amet condim vel, facilisis Facilisis
														quis sapien.
														Praesent id enim sit amet odio vulputate odio vulputate eleifend
														in in tortor.
														Sellus massa, tristique sitiismonec tellus massa, tristique sit
														ametcdimel,facilisis
														quimequistiqutiqu amet condim vel, facilisis Facilisis quis
														sapien. Praesent id enim
														sit amet odio vulputate
													</p>
												</div>
											</div>
										</div>
									</div>
									<div class="card card-additional">
										<div class="card-header">
											<a href="#collapse1-2" class="expand">Additional information</a>
										</div>
										<div class="card-body collapsed" id="collapse1-2">
											<ul class="list-none">
												<li><label>Brands:</label>
													<p>SkillStar, SLS</p>
												</li>
												<li><label>Color:</label>
													<p>Blue, Brown</p>
												</li>
												<li><label>Size:</label>
													<p>Large, Medium, Small</p>
												</li>
											</ul>
										</div>
									</div>
									<div class="card card-sizeguide">
										<div class="card-header">
											<a href="#collapse1-3" class="expand">Size Guide</a>
										</div>
										<div class="card-body collapsed" id="collapse1-3">
											<figure class="size-image mt-4 mb-4">
												<img src="images/product/size_guide.png" alt="Size Guide Image"
													width="217" height="398">
											</figure>
											<figure class="size-table mt-4 mb-4">
												<table>
													<thead>
														<tr>
															<th>SIZE</th>
															<th>CHEST(IN.)</th>
															<th>WEIST(IN.)</th>
															<th>HIPS(IN.)</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th>XS</th>
															<td>34-36</td>
															<td>27-29</td>
															<td>34.5-36.5</td>
														</tr>
														<tr>
															<th>S</th>
															<td>36-38</td>
															<td>29-31</td>
															<td>36.5-38.5</td>
														</tr>
														<tr>
															<th>M</th>
															<td>38-40</td>
															<td>31-33</td>
															<td>38.5-40.5</td>
														</tr>
														<tr>
															<th>L</th>
															<td>40-42</td>
															<td>33-36</td>
															<td>40.5-43.5</td>
														</tr>
														<tr>
															<th>XL</th>
															<td>42-45</td>
															<td>36-40</td>
															<td>43.5-47.5</td>
														</tr>
														<tr>
															<th>XXL</th>
															<td>45-48</td>
															<td>40-44</td>
															<td>47.5-51.5</td>
														</tr>
													</tbody>
												</table>
											</figure>
										</div>
									</div>
									<div class="card card-reviews">
										<div class="card-header">
											<a href="#collapse1-4" class="expand">Reviews (2)</a>
										</div>
										<div class="card-body collapsed" id="collapse1-4">
											<div class="row">
												<div class="col-12 mb-6">
													<div class="avg-rating-container">
														<mark>5.0</mark>
														<div class="avg-rating">
															<span class="avg-rating-title">Average Rating</span>
															<div class="ratings-container mb-0">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
																<span class="rating-reviews">(2 Reviews)</span>
															</div>
														</div>
													</div>
													<div class="ratings-list mb-2">
														<div class="ratings-item">
															<div class="ratings-container mb-0">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
															<div class="rating-percent">
																<span style="width:100%;"></span>
															</div>
															<div class="progress-value">100%</div>
														</div>
														<div class="ratings-item">
															<div class="ratings-container mb-0">
																<div class="ratings-full">
																	<span class="ratings" style="width:80%"></span>
																	<span class="tooltiptext tooltip-top">4.00</span>
																</div>
															</div>
															<div class="rating-percent">
																<span style="width:0%;"></span>
															</div>
															<div class="progress-value">0%</div>
														</div>
														<div class="ratings-item">
															<div class="ratings-container mb-0">
																<div class="ratings-full">
																	<span class="ratings" style="width:60%"></span>
																	<span class="tooltiptext tooltip-top">4.00</span>
																</div>
															</div>
															<div class="rating-percent">
																<span style="width:0%;"></span>
															</div>
															<div class="progress-value">0%</div>
														</div>
														<div class="ratings-item">
															<div class="ratings-container mb-0">
																<div class="ratings-full">
																	<span class="ratings" style="width:40%"></span>
																	<span class="tooltiptext tooltip-top">4.00</span>
																</div>
															</div>
															<div class="rating-percent">
																<span style="width:0%;"></span>
															</div>
															<div class="progress-value">0%</div>
														</div>
														<div class="ratings-item">
															<div class="ratings-container mb-0">
																<div class="ratings-full">
																	<span class="ratings" style="width:20%"></span>
																	<span class="tooltiptext tooltip-top">4.00</span>
																</div>
															</div>
															<div class="rating-percent">
																<span style="width:0%;"></span>
															</div>
															<div class="progress-value">0%</div>
														</div>
													</div>
													<a class="btn btn-dark btn-rounded submit-review-toggle"
														href="#">Submit
														Review</a>
												</div>
												<div class="col-12 comments pt-2 pb-10 border-no">
													<nav class="toolbox">
														<div class="toolbox-left">
															<div class="toolbox-item">
																<a href="#" class="btn btn-outline btn-rounded">All
																	Reviews</a>
															</div>
															<div class="toolbox-item">
																<a href="#" class="btn btn-outline btn-rounded">With
																	Images</a>
															</div>
															<div class="toolbox-item">
																<a href="#" class="btn btn-outline btn-rounded">With
																	Videos</a>
															</div>
														</div>
														<div class="toolbox-right">
															<div class="toolbox-item toolbox-sort select-box text-dark">
																<label>Sort By :</label>
																<select name="orderby" class="form-control">
																	<option value="">Default Order</option>
																	<option value="newest" selected="selected">Newest
																		Reviews
																	</option>
																	<option value="oldest">Oldest Reviews</option>
																	<option value="high_rate">Highest Rating</option>
																	<option value="low_rate">Lowest Rating</option>
																	<option value="most_likely">Most Likely</option>
																	<option value="most_unlikely">Most Unlikely</option>
																</select>
															</div>
														</div>
													</nav>
													<ul class="comments-list">
														<li>
															<div class="comment">
																<figure class="comment-media">
																	<a href="#">
																		<img src="images/blog/comments/1.jpg"
																			alt="avatar">
																	</a>
																</figure>
																<div class="comment-body">
																	<div class="comment-rating ratings-container">
																		<div class="ratings-full">
																			<span class="ratings"
																				style="width:100%"></span>
																			<span
																				class="tooltiptext tooltip-top"></span>
																		</div>
																	</div>
																	<div class="comment-user">
																		<span class="comment-date">by <span
																				class="font-weight-semi-bold text-uppercase text-dark">John
																				Doe</span> on
																			<span
																				class="font-weight-semi-bold text-dark">Nov
																				22,
																				2018</span></span>
																	</div>

																	<div class="comment-content mb-5">
																		<p>Sed pretium, ligula sollicitudin laoreet
																			viverra, tortor
																			libero sodales leo,
																			eget blandit nunc tortor eu nibh. Nullam
																			mollis. Ut
																			justo.
																			Suspendisse potenti.
																			Sed egestas, ante et vulputate volutpat,
																			eros pede
																			semper
																			est, vitae luctus metus libero eu augue.</p>
																	</div>
																	<div class="file-input-wrappers">
																		<img class="btn-play btn-img pwsp"
																			src="images/products/product1.jpg"
																			width="280" height="315" alt="product" />


																		<img class="btn-play btn-img pwsp"
																			src="images/products/product3.jpg"
																			width="280" height="315" alt="product" />

																		<a class="btn-play btn-iframe"
																			style="background-image: url(images/product/product.jpg);background-size: cover;"
																			href="video/memory-of-a-woman.mp4">
																			<i class="d-icon-play-solid"></i>
																		</a>
																	</div>
																	<div class="feeling mt-5">
																		<button
																			class="btn btn-link btn-icon-left btn-slide-up btn-infinite like mr-2">
																			<i class="fa fa-thumbs-up"></i>
																			Like (<span class="count">0</span>)
																		</button>
																		<button
																			class="btn btn-link btn-icon-left btn-slide-down btn-infinite unlike">
																			<i class="fa fa-thumbs-down"></i>
																			Unlike (<span class="count">0</span>)
																		</button>
																	</div>
																</div>
															</div>
														</li>
														<li>
															<div class="comment">
																<figure class="comment-media">
																	<a href="#">
																		<img src="images/blog/comments/2.jpg"
																			alt="avatar">
																	</a>
																</figure>

																<div class="comment-body">
																	<div class="comment-rating ratings-container">
																		<div class="ratings-full">
																			<span class="ratings"
																				style="width:100%"></span>
																			<span
																				class="tooltiptext tooltip-top"></span>
																		</div>
																	</div>
																	<div class="comment-user">
																		<span class="comment-date">by <span
																				class="font-weight-semi-bold text-uppercase text-dark">John
																				Doe</span> on
																			<span
																				class="font-weight-semi-bold text-dark">Nov
																				22,
																				2018</span></span>
																	</div>

																	<div class="comment-content">
																		<p>Sed pretium, ligula sollicitudin laoreet
																			viverra, tortor
																			libero sodales leo, eget blandit nunc tortor
																			eu nibh.
																			Nullam
																			mollis.
																			Ut justo. Suspendisse potenti. Sed egestas,
																			ante et
																			vulputate volutpat,
																			eros pede semper est, vitae luctus metus
																			libero eu
																			augue.
																			Morbi purus libero,
																			faucibus adipiscing, commodo quis, avida id,
																			est. Sed
																			lectus. Praesent elementum
																			hendrerit tortor. Sed semper lorem at felis.
																			Vestibulum
																			volutpat.</p>
																	</div>
																	<div class="feeling mt-5">
																		<button
																			class="btn btn-link btn-icon-left btn-slide-up btn-infinite like mr-2">
																			<i class="fa fa-thumbs-up"></i>
																			Like (<span class="count">0</span>)
																		</button>
																		<button
																			class="btn btn-link btn-icon-left btn-slide-down btn-infinite unlike">
																			<i class="fa fa-thumbs-down"></i>
																			Unlike (<span class="count">0</span>)
																		</button>
																	</div>
																</div>

															</div>
														</li>
													</ul>
													<nav class="toolbox toolbox-pagination justify-content-end">
														<ul class="pagination">
															<li class="page-item disabled">
																<a class="page-link page-link-prev" href="#"
																	aria-label="Previous" tabindex="-1"
																	aria-disabled="true">
																	<i class="d-icon-arrow-left"></i>Prev
																</a>
															</li>
															<li class="page-item active" aria-current="page"><a
																	class="page-link" href="#">1</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">2</a>
															</li>
															<li class="page-item"><a class="page-link" href="#">3</a>
															</li>
															<li class="page-item page-item-dots"><a class="page-link"
																	href="#">6</a>
															</li>
															<li class="page-item">
																<a class="page-link page-link-next" href="#"
																	aria-label="Next">
																	Next<i class="d-icon-arrow-right"></i>
																</a>
															</li>
														</ul>
													</nav>
												</div>
											</div>
											<!-- End Comments -->
											<div class="review-form-section">
												<div class="review-overlay"></div>
												<div class="review-form-wrapper">
													<div class="title-wrapper text-left">
														<h3 class="title title-simple text-left text-normal">Add a
															Review</h3>
														<p>Your email address will not be published. Required fields are
															marked *
														</p>
													</div>
													<div class="rating-form">
														<label for="rating" class="text-dark">Your rating * </label>
														<span class="rating-stars selected">
															<a class="star-1" href="#">1</a>
															<a class="star-2" href="#">2</a>
															<a class="star-3" href="#">3</a>
															<a class="star-4 active" href="#">4</a>
															<a class="star-5" href="#">5</a>
														</span>

														<select name="rating" id="rating" required=""
															style="display: none;">
															<option value="">Rate…</option>
															<option value="5">Perfect</option>
															<option value="4">Good</option>
															<option value="3">Average</option>
															<option value="2">Not that bad</option>
															<option value="1">Very poor</option>
														</select>
													</div>
													<form action="#">
														<textarea id="reply-message" cols="30" rows="6"
															class="form-control mb-4" placeholder="Comment *"
															required></textarea>

														<div class="review-medias">
															<div class="file-input form-control image-input"
																style="background-image: url(images/product/placeholder.png);">
																<div class="file-input-wrapper">
																</div>
																<label class="btn-action btn-upload"
																	title="Upload Media">
																	<input type="file" accept=".png, .jpg, .jpeg"
																		name="riode_comment_medias_image_1">
																</label>
																<label class="btn-action btn-remove"
																	title="Remove Media">
																</label>
															</div>
															<div class="file-input form-control image-input"
																style="background-image: url(images/product/placeholder.png);">
																<div class="file-input-wrapper">
																</div>
																<label class=" btn-action btn-upload"
																	title="Upload Media">
																	<input type="file" accept=".png, .jpg, .jpeg"
																		name="riode_comment_medias_image_2">
																</label>
																<label class="btn-action btn-remove"
																	title="Remove Media">
																</label>
															</div>
															<div class="file-input form-control video-input"
																style="background-image: url(images/product/placeholder.png);">
																<video class="file-input-wrapper" controls=""></video>
																<label class="btn-action btn-upload"
																	title="Upload Media">
																	<input type="file" accept=".avi, .mp4"
																		name="riode_comment_medias_video_1">
																</label>
																<label class="btn-action btn-remove"
																	title="Remove Media">
																</label>
															</div>
														</div>
														<p>Upload images and videos. Maximum count: 3, size: 2MB</p>
														<button type="submit"
															class="btn btn-primary btn-rounded">Submit<i
																class="d-icon-arrow-right"></i></button>
													</form>
												</div>
											</div>
											<!-- End Reply -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<section class="product-wrapper">
						<h2 class="title title-simple">New Arrivals</h2>

						<div class="owl-carousel owl-theme row owl-nav-inner owl-split cols-xl-5 cols-lg-4 cols-md-3 cols-2"
							data-owl-options="{
                        'items': 4,
                        'nav': true,
                        'dots': false,
                        'loop': false,
                        'margin': 1,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4
                            }
                        }
                    }">
							<div class="product-wrap">
								<div class="product product-slideup text-center">
									<figure class="product-media">
										<a href="demo15-product.php">
											<img src="images/demos/demo15/products/1.jpg" alt="product" width="300"
												height="338">
										</a>
									</figure>
									<div class="product-details">
										<div class="product-cat">
											<a href="demo15-shop.php">Men</a>,
											<a href="demo15-shop.php">Fashion</a>
										</div>
										<h3 class="product-name">
											<a href="demo15-product.php">Fashion Football Boots</a>
										</h3>
										<div class="product-price">
											<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
										</div>
										<div class="ratings-container">
											<div class="ratings-full">
												<span class="ratings" style="width:100%"></span>
												<span class="tooltiptext tooltip-top"></span>
											</div>
											<a href="demo15-product.php" class="rating-reviews">( 6 reviews )</a>
										</div>
										<div class="product-action">
											<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
													class="d-icon-heart"></i></a>
											<a href="#" class="btn-product btn-cart" data-toggle="modal"
												data-target="#addCartModal" title="Add to cart"><i
													class="d-icon-bag"></i><span>add to
													cart</span></a>
											<a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
													class="d-icon-search"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-wrap">
								<div class="product product-variable product-slideup text-center">
									<figure class="product-media">
										<a href="demo15-product.php">
											<img src="images/demos/demo15/products/2.jpg" alt="product" width="300"
												height="338">
										</a>
									</figure>
									<div class="product-details">
										<div class="product-cat">
											<a href="demo15-shop.php">Men</a>,
											<a href="demo15-shop.php">Fashion</a>
										</div>
										<h3 class="product-name">
											<a href="demo15-product.php">Black Suede Training Shoes</a>
										</h3>
										<div class="product-price">
											<span class="price">$199.00-$210.00</span>
										</div>
										<div class="ratings-container">
											<div class="ratings-full">
												<span class="ratings" style="width:100%"></span>
												<span class="tooltiptext tooltip-top"></span>
											</div>
											<a href="demo15-product.php" class="rating-reviews">( 6 reviews )</a>
										</div>
										<div class="product-action">
											<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
													class="d-icon-heart"></i></a>
											<a href="demo15-product.php" class="btn-product btn-cart"
												title="Select Options"><span>Select Options</span></a>
											<a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
													class="d-icon-search"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-wrap">
								<div class="product product-slideup text-center">
									<figure class="product-media">
										<a href="demo15-product.php">
											<img src="images/demos/demo15/products/3.jpg" alt="product" width="300"
												height="338">
										</a>
									</figure>
									<div class="product-details">
										<div class="product-cat">
											<a href="demo15-shop.php">Men</a>,
											<a href="demo15-shop.php">Fashion</a>
										</div>
										<h3 class="product-name">
											<a href="demo15-product.php">Fashion Watch</a>
										</h3>
										<div class="product-price">
											<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
										</div>
										<div class="ratings-container">
											<div class="ratings-full">
												<span class="ratings" style="width:100%"></span>
												<span class="tooltiptext tooltip-top"></span>
											</div>
											<a href="demo15-product.php" class="rating-reviews">( 6 reviews )</a>
										</div>
										<div class="product-action">
											<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
													class="d-icon-heart"></i></a>
											<a href="#" class="btn-product btn-cart" data-toggle="modal"
												data-target="#addCartModal" title="Add to cart"><i
													class="d-icon-bag"></i><span>add to
													cart</span></a>
											<a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
													class="d-icon-search"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-wrap">
								<div class="product product-slideup text-center">
									<figure class="product-media">
										<a href="demo15-product.php">
											<img src="images/demos/demo15/products/4.jpg" alt="product" width="300"
												height="338">
										</a>
									</figure>
									<div class="product-details">
										<div class="product-cat">
											<a href="demo15-shop.php">Men</a>,
											<a href="demo15-shop.php">Fashion</a>
										</div>
										<h3 class="product-name">
											<a href="demo15-product.php">Men Fashion Bag</a>
										</h3>
										<div class="product-price">
											<ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
										</div>
										<div class="ratings-container">
											<div class="ratings-full">
												<span class="ratings" style="width:100%"></span>
												<span class="tooltiptext tooltip-top"></span>
											</div>
											<a href="demo15-product.php" class="rating-reviews">( 6 reviews )</a>
										</div>
										<div class="product-action">
											<a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
													class="d-icon-heart"></i></a>
											<a href="#" class="btn-product btn-cart" data-toggle="modal"
												data-target="#addCartModal" title="Add to cart"><i
													class="d-icon-bag"></i><span>add to
													cart</span></a>
											<a href="#" class="btn-product-icon btn-quickview" title="Quick View"><i
													class="d-icon-search"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			
		</main>
		<!-- End Main -->
		<footer class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-5col col-lg-3">
							<a href="demo15.php" class="logo-footer">
								<img src="images/demos/demo15/logo-footer.png" alt="logo-footer" width="154"
									height="43" />
							</a>
							<!-- End FooterLogo -->
						</div>
						<div class="col-xl-5col4 col-lg-9">
							<div class="widget widget-newsletter form-wrapper form-wrapper-inline">
								<div class="newsletter-info mx-auto ml-lg-4 mb-4 mb-lg-0 pr-lg-4">
									<h4 class="widget-title mb-1">Subscribe to our Newsletter</h4>
									<p>Get all the latest information, Sales and Offers.</p>
								</div>
								<form action="#" class="input-wrapper input-wrapper-inline">
									<input type="email" class="form-control" name="email" id="email"
										placeholder="Email address here..." required />
									<button class="btn btn-rounded btn-primary btn-sm" type="submit">subscribe<i
											class="d-icon-arrow-right"></i></button>
								</form>
							</div>
							<!-- End Newsletter -->
						</div>
					</div>
				</div>
			</div>
			<!-- End FooterTop -->
			<div class="footer-middle">
				<div class="container">
					<div class="row">
						<div class="col-xl-5col col-lg-3 col-sm-6">
							<div class="widget widget-contact">
								<h4 class="widget-title">Contact Info</h4>
								<ul class="widget-body">
									<li>
										<label>Phone:</label>
										<a href="#">Toll Free (123) 456-7890</a>
									</li>
									<li>
										<label>Email:</label>
										<a href="#">mail@Riode.com</a>
									</li>
								</ul>
							</div>
							<!-- End Widget -->
						</div>
						<div class="col-xl-5col col-lg-3 col-sm-6">
							<div class="widget">
								<h4 class="widget-title">My Account</h4>
								<ul class="widget-body">
									<li>
										<a href="about-us.php">About Us</a>
									</li>
									<li>
										<a href="#">Order History</a>
									</li>
									<li>
										<a href="#">Returns</a>
									</li>
									<li>
										<a href="#">Custom Service</a>
									</li>
									<li>
										<a href="#">Terms &amp; Condition</a>
									</li>
								</ul>
							</div>
							<!-- End Widget -->
						</div>
						<div class="col-xl-5col col-lg-3 col-sm-6">
							<div class="widget">
								<h4 class="widget-title">Customer Service</h4>
								<ul class="widget-body">
									<li>
										<a href="about-us.php">About Us</a>
									</li>
									<li>
										<a href="#">Order History</a>
									</li>
									<li>
										<a href="#">Returns</a>
									</li>
									<li>
										<a href="#">Custom Service</a>
									</li>
									<li>
										<a href="#">Terms &amp; Condition</a>
									</li>
								</ul>
							</div>
							<!-- End Widget -->
						</div>
						<div class="col-xl-5col col-lg-3 col-sm-6">
							<div class="widget">
								<h4 class="widget-title">Contact Info</h4>
								<ul class="widget-body">
									<li>
										<a href="login.php">Sign In</a>
									</li>
									<li>
										<a href="cart.php">View Cart</a>
									</li>
									<li>
										<a href="wishlist.php">My Wishlist</a>
									</li>
									<li>
										<a href="order.php">Track My Order</a>
									</li>
									<li>
										<a href="#">Help</a>
									</li>
								</ul>
							</div>
							<!-- End Widget -->
						</div>
						<div class="col-xl-5col2 col-lg-12">
							<div class="widget posts">
								<h4 class="widget-title">Popular Posts</h4>
								<div class="widget-body row">
									<div class="col-md-6">
										<div class="post post-list-xs">
											<div class="post-calendar">
												<span class="post-day">19</span>
												<span class="post-month">JAN</span>
											</div>
											<div class="post-details">
												<h4 class="post-title"><a href="post-single.php">Quisque volutpat
														mattiseros sollicitudin leo</a></h4>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="post post-list-xs">
											<div class="post-calendar">
												<span class="post-day">19</span>
												<span class="post-month">JAN</span>
											</div>
											<div class="post-details">
												<h4 class="post-title"><a href="post-single.php">Utaliquam sollicitudin
														leo quisque volutpat mattiseros</a></h4>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="post post-list-xs">
											<div class="post-calendar">
												<span class="post-day">19</span>
												<span class="post-month">JAN</span>
											</div>
											<div class="post-details">
												<h4 class="post-title"><a href="post-single.php">Fusce pellentesque
														suscipit quisque volutpat mattiseros</a></h4>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="post post-list-xs">
											<div class="post-calendar">
												<span class="post-day">19</span>
												<span class="post-month">JAN</span>
											</div>
											<div class="post-details">
												<h4 class="post-title"><a href="post-single.php">In culpa qui officia
														deserunt mollit anim id est laborum</a></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Instagram -->
						</div>
					</div>
				</div>
			</div>
			<!-- End FooterMiddle -->
			<div class="footer-bottom">
				<div class="container">
					<div class="footer-left">
						<figure class="payment">
							<img src="images/payment.png" alt="payment" width="159" height="29" />
						</figure>
					</div>
					<div class="footer-center">
						<p class="copyright">Riode eCommerce &copy; 2021. All Rights Reserved</p>
					</div>
					<div class="footer-right">
						<div class="social-links">
							<a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
							<a href="#" class="social-link social-twitter fab fa-twitter"></a>
							<a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
						</div>
					</div>
				</div>
			</div>
			<!-- End FooterBottom -->
		</footer>
		<!-- End Footer -->
	</div>
	<!-- Sticky Footer -->
	<div class="sticky-footer sticky-content fix-bottom">
        <a href="index.php" class="sticky-link">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="shop.php" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="wishlist.php" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
        </a>
        <?php 
            if(session_start() AND isset($_SESSION['register_id'])){
        ?>
            <a href="account.php" class="sticky-link">
            <i class="fas fa-regular fa-user"></i>
            <span><?php echo $_SESSION['register_name'] ;?></span>
            </a>

            <a href="logout.php" class="sticky-link">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
            </a>
        <?php
            }else{
        ?>    
            <a href="account.php" class="sticky-link">
                <i class="d-icon-user"></i>
                <span>Account</span>
            </a>
        <?php     
            }
        ?>
        
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit" title="submit-button">
                    <i class="d-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
	<!-- Scroll Top -->
	<a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides.
			PhotoSwipe keeps only 3 of them in the DOM to save memory.
			Don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
					<button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>

					<div class="pswp__preloader">
						<div class="loading-spin"></div>
					</div>
				</div>

				<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
					<div class="pswp__share-tooltip"></div>
				</div>

				<button class="pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
				<button class="pswp__button--arrow--right" aria-label="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- MobileMenu -->
	<div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End of Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End of CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit" title="submit-button">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="shop.php">Categories</a>
                </li>
                <li>
                    <a href="product.php">Products</a>
                </li>
                <li>
                    <a href="contact-us.php">Contact Us</a>
                </li>
                <li>
                    <a href="blog.php">Blog</a>
                </li>
                <li>
                    <a href="about-us.php">About Us</a>
                </li>
            </ul>
        </div>
    </div>
	<!-- sticky icons-->
	<div class="sticky-icons-wrapper">
		<div class="sticky-icon-links">
			<ul>
                <?php 
                    if(session_start() AND isset($_SESSION['register_id'])){
                    ?>
                    <li>
                        <a href="account.php">
                            <i class="fas fa-regular fa-user"></i>
                            <span><?php echo " ".$_SESSION['register_name'] ;?></span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                    <li>
                    <a href="https://d-themes.com/buynow/riodehtml">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Buy now!</span>
                    </a>
                </li>
                 <?php
                    }else{
                ?>
                <li>
                    <a href="https://d-themes.com/buynow/riodehtml">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Buy now!</span>
                    </a>
                </li>

                <?php     
                    }
                ?>
                
			</ul>
		</div>
	</div>
	<!-- Plugins JS File -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/sticky/sticky.min.js"></script>
	<script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
	<script src="vendor/photoswipe/photoswipe.min.js"></script>
	<script src="vendor/photoswipe/photoswipe-ui-default.min.js"></script>
	<!-- Main JS File -->
	<script src="js/main.min.js"></script>
</body>

</html>