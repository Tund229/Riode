<?php
	session_start();
	include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>Riode - Shop</title>

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
	<link rel="stylesheet" type="text/css" href="vendor/nouislider/nouislider.min.css">

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
						<li class="active">
							<a href="shop.php">Categories</a>
						</li>
						<li>
							<a href="product.php">Products</a>
						</li>
						<li>
							<a href="contact-us.php">Contact Us</a>
						</li>
						<li>
							<a href="blog-classic.php">Blog</a>
						</li>
						<li>
							<a href="about-us.php">About Us</a>
						</li>

					</ul>
				</nav>
			</div>
		</header>
		<!-- End Header -->
		<main class="main shop">
			<div class="page-header"
				style="background-image: url('images/demos/demo15/page-header.jpg'); background-color: #3C63A4;">
				<h1 class="page-title">New Arrivals</h1>
			</div>
			<!-- End PageHeader -->
			<div class="page-content mb-10">
				<div class="container">
					<div class="row main-content-wrap gutter-lg">
						<aside
							class="col-lg-3 sidebar sidebar-fixed sidebar-toggle-remain shop-sidebar sticky-sidebar-wrapper">
							<div class="sidebar-overlay">
								<a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
							</div>
							<div class="sidebar-content">
								<div class="sticky-sidebar" data-sticky-options="{'top': 10}">
									<div class="filter-actions mb-4">
										<a href="#"
											class="sidebar-toggle-btn toggle-remain btn btn-sm btn-outline btn-primary">Filter<i
												class="d-icon-arrow-left"></i></a>
										<a href="#" class="filter-clean text-primary">Clean All</a>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">All Categories</h3>
										<ul class="widget-body filter-items search-ul">
											<li><a href="#">Bags</a></li>
											<li><a href="#">Sport Shorts</a></li>
											<li class="with-ul show">
												<a href="#">Clothing</a>
												<ul style="display: block">
													<li><a href="#">Summer sale</a></li>
													<li><a href="#">Shirts</a></li>
													<li><a href="#">Trunks</a></li>
												</ul>
											</li>
											<li><a href="#">Shoes</a></li>
											<li class="with-ul">
												<a href="#">Sweaters</a>
												<ul>
													<li><a href="#">T-Shirts</a></li>
													<li><a href="#">Dress</a></li>
													<li><a href="#">Blouse</a></li>
												</ul>
											</li>
											<li class="with-ul">
												<a href="#">Fashion</a>
												<ul>
													<li><a href="#">Trousers</a></li>
													<li><a href="#">Jacket</a></li>
													<li><a href="#">Caps</a></li>
												</ul>
											</li>
											<li class="with-ul">
												<a href="#">Women</a>
												<ul>
													<li><a href="#">Summer sales</a></li>
													<li><a href="#">Shirts</a></li>
													<li><a href="#">Trunks</a></li>
												</ul>
											</li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Price</h3>
										<div class="widget-body">
											<form action="#">
												<div class="filter-price-slider"></div>

												<div class="filter-actions">
													<div class="filter-price-text">Price:
														<span class="filter-price-range"></span>
													</div>

													<button type="submit"
														class="btn btn-filter btn-sm btn-dark mt-4">Filter</button>
												</div>
											</form><!-- End Filter Price Form -->
										</div>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Size</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Small<span>(2)</span></a></li>
											<li><a href="#">Medium<span>(1)</span></a></li>
											<li><a href="#">Large<span>(9)</span></a></li>
											<li><a href="#">Extra Large<span>(1)</span></a></li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Color</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Black<span>(2)</span></a></li>
											<li><a href="#">Blue<span>(1)</span></a></li>
											<li><a href="#">Green<span>(9)</span></a></li>
										</ul>
									</div>
									<div class="widget widget-collapsible">
										<h3 class="widget-title">Brands</h3>
										<ul class="widget-body filter-items">
											<li><a href="#">Black<span>(2)</span></a></li>
											<li><a href="#">Blue<span>(1)</span></a></li>
											<li><a href="#">Green<span>(9)</span></a></li>
										</ul>
									</div>

									<div class="widget widget-products mt-2">
										<h4 class="widget-title">Our Featured</h4>
										<div class="widget-body">
											<div class="owl-carousel owl-nav-top row cols-1" data-owl-options="{
												'items': 1,
												'loop': true,
												'nav': true,
												'dots': false,
'margin': 20											}">
												<div class="products-col">
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.php">
																<img src="images/shop/product-widget1.jpg" alt="product"
																	width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.php">Fashion Hiking Hat</a>
															</h3>
															<div class="product-price">
																<span class="price">$199.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.php">
																<img src="images/shop/product-widget2.jpg" alt="product"
																	width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.php">Men's Fashion Hood</a>
															</h3>
															<div class="product-price">
																<span class="price">$19.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.php">
																<img src="images/shop/product-widget3.jpg" alt="product"
																	width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.php">Women's Summer Clothing</a>
															</h3>
															<div class="product-price">
																<ins class="new-price">$99.00</ins><del
																	class="old-price">$150.00</del>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
												</div><!-- End Products Col -->
												<div class="products-col">
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.php">
																<img src="images/shop/product-widget1.jpg" alt="product"
																	width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.php">Fashion Hiking Hat</a>
															</h3>
															<div class="product-price">
																<span class="price">$199.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.php">
																<img src="images/shop/product-widget2.jpg" alt="product"
																	width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.php">Men's Fashion Hood</a>
															</h3>
															<div class="product-price">
																<span class="price">$19.00</span>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
													<div class="product product-list-sm">
														<figure class="product-media">
															<a href="product.php">
																<img src="images/shop/product-widget3.jpg" alt="product"
																	width="100" height="100">
															</a>
														</figure>
														<div class="product-details">
															<h3 class="product-name">
																<a href="product.php">Women's Summer Clothing</a>
															</h3>
															<div class="product-price">
																<ins class="new-price">$99.00</ins><del
																	class="old-price">$150.00</del>
															</div>
															<div class="ratings-container">
																<div class="ratings-full">
																	<span class="ratings" style="width:100%"></span>
																	<span class="tooltiptext tooltip-top"></span>
																</div>
															</div>
														</div>
													</div>
												</div><!-- End Products Col -->
											</div>
										</div>
									</div><!-- End Widget Products -->
								</div>
							</div>
						</aside>
						<div class="col-lg-9 main-content">
							<nav class="toolbox sticky-toolbox sticky-content fix-top">
								<div class="toolbox-left">
									<a href="#"
										class="toolbox-item left-sidebar-toggle btn btn-sm btn-outline btn-primary d-lg-none">Filter<i
											class="d-icon-arrow-right"></i></a>
									<div class="toolbox-item toolbox-sort select-box">
										<label>Sort By :</label>
										<select name="orderby" class="form-control">
											<option value="default">Default</option>
											<option value="popularity" selected="selected">Most Popular</option>
											<option value="rating">Average rating</option>
											<option value="date">Latest</option>
											<option value="price-low">Sort forward price low</option>
											<option value="price-high">Sort forward price high</option>
											<option value="">Clear custom sort</option>
										</select>
									</div>
								</div>
								<div class="toolbox-right">
									<div class="toolbox-item toolbox-show select-box">
										<label>Show :</label>
										<select name="count" class="form-control">
											<option value="12">12</option>
											<option value="24">24</option>
											<option value="36">36</option>
										</select>
									</div>
									<div class="toolbox-item toolbox-layout">
										<a href="shop-list-mode.php" class="d-icon-mode-list btn-layout"></a>
										<a href="shop.php" class="d-icon-mode-grid btn-layout active"></a>
									</div>
								</div>
							</nav>
							<div class="row cols-2 cols-sm-3 cols-md-4 product-wrapper split-line gutter-sm">
								<div class="product-wrap">
									<div class="product product-slideup text-center">
										<figure class="product-media">
											<a href="demo15-product.php">
												<img src="images/demos/demo15/products/1.jpg" alt="product" width="300"
													height="338">
											</a>
											<div class="product-label-group">
												<label class="product-label label-new">new</label>
											</div>
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
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
											<div class="product-label-group">
												<label class="product-label label-sale">27% off</label>
											</div>
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
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
												<img src="images/demos/demo15/products/5.jpg" alt="product" width="300"
													height="338">
											</a>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo15-shop.php">Men</a>,
												<a href="demo15-shop.php">Fashion</a>
											</div>
											<h3 class="product-name">
												<a href="demo15-product.php">Black Leather Bag</a>
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
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
												<img src="images/demos/demo15/products/6.jpg" alt="product" width="300"
													height="338">
											</a>
											<div class="product-label-group">
												<label class="product-label label-new">new</label>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo15-shop.php">Women</a>,
												<a href="demo15-shop.php">Fashion</a>
											</div>
											<h3 class="product-name">
												<a href="demo15-product.php">Women's Fashion Shoes</a>
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
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
												<img src="images/demos/demo15/products/7.jpg" alt="product" width="300"
													height="338">
											</a>
											<div class="product-label-group">
												<label class="product-label label-sale">27% off</label>
											</div>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo15-shop.php">Men</a>,
												<a href="demo15-shop.php">Fashion</a>
											</div>
											<h3 class="product-name">
												<a href="demo15-product.php">Brown Watch</a>
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
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
												<img src="images/demos/demo15/products/8.jpg" alt="product" width="300"
													height="338">
											</a>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo15-shop.php">Men</a>,
												<a href="demo15-shop.php">Fashion</a>
											</div>
											<h3 class="product-name">
												<a href="demo15-product.php">Black Sport Watch</a>
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
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
												<img src="images/demos/demo15/products/9.jpg" alt="product" width="300"
													height="338">
											</a>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo15-shop.php">Men</a>,
												<a href="demo15-shop.php">Fashion</a>
											</div>
											<h3 class="product-name">
												<a href="demo15-product.php">Men's Bag</a>
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
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
												<img src="images/demos/demo15/products/10.jpg" alt="product" width="300"
													height="338">
											</a>
										</figure>
										<div class="product-details">
											<div class="product-cat">
												<a href="demo15-shop.php">Women</a>,
												<a href="demo15-shop.php">Fashion</a>
											</div>
											<h3 class="product-name">
												<a href="demo15-product.php">Women Sport Shoes</a>
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
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
												<img src="images/demos/demo15/products/3.jpg" alt="product" width="300"
													height="338">
											</a>
											<div class="product-label-group">
												<label class="product-label label-sale">27% off</label>
											</div>
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
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
												<a href="#" class="btn-product-icon btn-wishlist"
													title="Add to wishlist"><i class="d-icon-heart"></i></a>
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
							<nav class="toolbox toolbox-pagination justify-content-center">
								<ul class="pagination">
									<li class="page-item disabled">
										<a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
											aria-disabled="true">
											<i class="d-icon-arrow-left"></i>Prev
										</a>
									</li>
									<li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item page-item-dots"><a class="page-link" href="#">6</a></li>
									<li class="page-item">
										<a class="page-link page-link-next" href="#" aria-label="Next">
											Next<i class="d-icon-arrow-right"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
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
            if( session_start() AND isset($_SESSION['register_id'])){
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
	<script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendor/nouislider/nouislider.min.js"></script>
	<!-- Main JS File -->
	<script src="js/main.min.js"></script>
</body>

</html>