<?php
	session_start();
	include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Riode - Blog</title>

    <meta name="keywords" content="" />
    <meta name="description" content="Riode - Best of online selling">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:400,500,600,700' ] }
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

    <link rel="stylesheet" type="text/css" href="vendor/sticky-icon/stickyicon.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.min.css">
</head>

<body>

    <div class="page-wrapper">
        <header class="header header-border">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Riode store message or remove it!</p>
                    </div>
                    <div class="header-right">
                        <div class="dropdown">
                            <a href="#currency">USD</a>
                            <ul class="dropdown-box">
                                <li><a href="#USD">USD</a></li>
                                <li><a href="#EUR">EUR</a></li>
                            </ul>
                        </div>
                        <!-- End DropDown Menu -->
                        <div class="dropdown ml-5">
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
                        <span class="divider"></span>
                        <a href="contact-us.php" class="contact d-lg-show"><i class="d-icon-map"></i>Contact</a>
                        <a href="#" class="help d-lg-show"><i class="d-icon-info"></i> Need Help</a>
                        <?php
                            if(session_start() AND isset($_SESSION['register_id'])){
                        ?>
                        <?php
                        }else{
                        ?>
                        <a class="login-link" href="ajax/log.php" data-toggle="login-modal"><i
                                class="d-icon-user"></i>Sign in</a>
                        <span class="delimiter">/</span>
                        <a class="register-link ml-0" href="ajax/log.php" data-toggle="login-modal">Register</a>
                        <!-- End of Login -->
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- End HeaderTop -->
            <div class="header-middle sticky-header fix-top sticky-content">
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <a href="demo1.php" class="logo">
                            <img src="images/logo.png" alt="logo" width="153" height="44" />
                        </a>
                        <!-- End Logo -->

                        <div class="header-search hs-simple">
                            <form action="#" class="input-wrapper">
                                <input type="text" class="form-control" name="search" autocomplete="off"
                                    placeholder="Search..." required />
                                <button class="btn btn-search" type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End Header Search -->
                    </div>
                    <div class="header-right">
                        <a href="tel:#" class="icon-box icon-box-side">
                            <div class="icon-box-icon mr-0 mr-lg-2">
                                <i class="d-icon-phone"></i>
                            </div>
                            <div class="icon-box-content d-lg-show">
                                <h4 class="icon-box-title">Call Us Now:</h4>
                                <p>0(800) 123-456</p>
                            </div>
                        </a>
                        <span class="divider"></span>
                        <div class="dropdown wishlist wishlist-dropdown off-canvas">
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
                        <span class="divider"></span>
                        <div class="dropdown cart-dropdown type2 mr-0 mr-lg-2">
                            <a href="#" class="cart-toggle label-block link">
                                <div class="cart-label d-lg-show">
                                    <span class="cart-name">Shopping Cart:</span>
                                    <span class="cart-price">$0.00</span>
                                </div>
                                <i class="d-icon-bag"><span class="cart-count">2</span></i>
                            </a>
                            <!-- End Cart Toggle -->
                            <div class="dropdown-box">
                                <div class="products scrollable">
                                    <div class="product product-cart">
                                        <figure class="product-media">
                                            <a href="product.php">
                                                <img src="images/cart/product-1.jpg" alt="product" width="80"
                                                    height="88" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
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
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
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
                        <div class="header-search hs-toggle mobile-search">
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
                        <!-- End of Header Search -->
                    </div>
                </div>

            </div>

            <div class="header-bottom d-lg-show">
                <div class="container">
                    <div class="header-left">
                        <nav class="main-nav">
                            <ul class="menu menu-active-underline">
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
                                    <a href="contact-us.php">Contact us</a>
                                </li>
                                <li class="active">
                                    <a href="blog.php">Blog</a>
                                </li>
                                <li>
                                    <a href="about-us.php">About Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <a href="#"><i class="d-icon-card"></i>Special Offers</a>
                        <a href="https://d-themes.com/buynow/riodehtml" class="ml-6">Buy Riode!</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->
        <main class="main">
            <div class="page-content with-sidebar">
                <div class="container">
                    <div class="row gutter-lg">
                        <div class="col-lg-9">
                            <div class="posts">
                                <article class="post post-classic mb-7">
                                    <figure class="post-media overlay-zoom">
                                        <a href="post-single.php">
                                            <img src="images/blog/1_lg.jpg" width="870" height="420" alt="post" />
                                        </a>
                                    </figure>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author">John Doe</a>
                                            on <a href="#" class="post-date">Sep 6,2020</a>
                                            | <a href="#" class="post-comment"><span>3</span> Comments</a>
                                        </div>
                                        <h4 class="post-title"><a href="post-single.php">Explore Fashion Trending For
                                                Women In Autumn 2021</a>
                                        </h4>
                                        <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra,
                                            tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse
                                            potenti.
                                            Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.
                                        </p>
                                        <a href="post-single.php" class="btn btn-link btn-underline btn-primary">Read
                                            more<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </article>
                                <article class="post post-classic inner-video mb-7">
                                    <figure class="post-media">
                                        <a href="post-single.php">
                                            <img src="images/blog/2_lg.jpg" width="870" height="420" alt="post" />
                                        </a>
                                        <span class="video-play"></span>
                                        <video width="380">
                                            <source src="video/memory-of-a-woman.mp4" type="video/mp4">
                                        </video>
                                    </figure>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author">John Doe</a>
                                            on <a href="#" class="post-date">Nov 6,2019</a>
                                            | <a href="#" class="post-comment"><span>7</span> Comments</a>
                                        </div>
                                        <h4 class="post-title"><a href="post-single.php">Complete Set Of Ski Tools</a>
                                        </h4>
                                        <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra,
                                            tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse
                                            potenti.
                                            Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.
                                        </p>
                                        <a href="post-single.php" class="btn btn-link btn-underline btn-primary">Read
                                            more<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </article>
                                <article class="post post-classic mb-7">
                                    <figure class="post-media">
                                        <div class="owl-carousel owl-theme owl-dot-inner owl-dot-white row cols-1 gutter-no"
                                            data-owl-options="{
                                            'items': 1    
                                        }">
                                            <img src="images/blog/3_lg.jpg" width="870" height="420" alt="post" />
                                            <img src="images/blog/2_lg.jpg" width="870" height="420" alt="post" />
                                            <img src="images/blog/1_lg.jpg" width="870" height="420" alt="post" />
                                        </div>
                                    </figure>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author">John Doe</a>
                                            on <a href="#" class="post-date">May 17, 2018</a>
                                            | <a href="#" class="post-comment"><span>4</span> Comments</a>
                                        </div>
                                        <h4 class="post-title"><a href="post-single.php">Explore Fashion Ipad And
                                                Accessories</a>
                                        </h4>
                                        <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra,
                                            tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse
                                            potenti.
                                            Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.
                                        </p>
                                        <a href="post-single.php" class="btn btn-link btn-underline btn-primary">Read
                                            more<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </article>
                                <article class="post post-classic mb-5">
                                    <figure class="post-media overlay-zoom">
                                        <a href="post-single.php">
                                            <img src="images/blog/4_lg.jpg" width="870" height="420" alt="post" />
                                        </a>
                                    </figure>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author">John Doe</a>
                                            on <a href="#" class="post-date">Nov 18, 2019</a>
                                            | <a href="#" class="post-comment"><span>9</span> Comments</a>
                                        </div>
                                        <h4 class="post-title"><a href="post-single.php">Women's Trending Sunglasses
                                                And Clothing</a>
                                        </h4>
                                        <p class="post-content">Sed pretium, ligula sollicitudin laoreet viverra,
                                            tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse
                                            potenti.
                                            Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.
                                        </p>
                                        <a href="post-single.php" class="btn btn-link btn-underline btn-primary">Read
                                            more<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
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
                                <li class="page-item">
                                    <a class="page-link page-link-next" href="#" aria-label="Next">
                                        Next<i class="d-icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <aside class="col-lg-3 right-sidebar sidebar-fixed sticky-sidebar-wrapper">
                            <div class="sidebar-overlay">
                            </div>
                            <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                            <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-left"></i></a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar" data-sticky-options="{'top': 89, 'bottom': 70}">
                                    <div class="widget widget-search border-no mb-2">
                                        <form action="#" class="input-wrapper input-wrapper-inline btn-absolute">
                                            <input type="text" class="form-control" name="search" autocomplete="off"
                                                placeholder="Search in Blog" required />
                                            <button class="btn btn-search btn-link" type="submit">
                                                <i class="d-icon-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="widget widget-collapsible border-no">
                                        <h3 class="widget-title">Blog Categories</h3>
                                        <ul class="widget-body filter-items search-ul">
                                            <li><a href="#">Accessories</a></li>
                                            <li>
                                                <a href="#">Clothing</a>
                                                <ul class="children">
                                                    <li><a href="#">Summer Sale</a></li>
                                                    <li><a href="#">Winter Sale</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Musicial instruments</a>
                                                <ul class="children">
                                                    <li><a href="#">Headphone</a></li>
                                                    <li><a href="#">Speaker</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Fashion</a></li>
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Backpack & Fashion bags</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">Popular Posts</h3>
                                        <div class="widget-body">
                                            <div class="post-col">
                                                <div class="post post-list-sm">
                                                    <figure class="post-media">
                                                        <a href="post-single.php">
                                                            <img src="images/blog/1_xs.jpg" width="90" height="90"
                                                                alt="post" />
                                                        </a>
                                                    </figure>
                                                    <div class="post-details">
                                                        <div class="post-meta">
                                                            <a href="#" class="post-date">Nov 22, 2020</a>
                                                        </div>
                                                        <h4 class="post-title"><a href="post-single.php">The Best
                                                                Choice For
                                                                Spending Time</a></h4>
                                                    </div>
                                                </div>
                                                <div class="post post-list-sm">
                                                    <figure class="post-media">
                                                        <a href="post-single.php">
                                                            <img src="images/blog/2_xs.jpg" width="90" height="90"
                                                                alt="post" />
                                                        </a>
                                                    </figure>
                                                    <div class="post-details">
                                                        <div class="post-meta">
                                                            <a href="#" class="post-date">Jun 6, 2019</a>
                                                        </div>
                                                        <h4 class="post-title"><a href="post-single.php">Women's
                                                                Fashion
                                                                Summer Dress</a></h4>
                                                    </div>
                                                </div>
                                                <div class="post post-list-sm">
                                                    <figure class="post-media">
                                                        <a href="post-single.php">
                                                            <img src="images/blog/3_xs.jpg" width="90" height="90"
                                                                alt="post" />
                                                        </a>
                                                    </figure>
                                                    <div class="post-details">
                                                        <div class="post-meta">
                                                            <a href="#" class="post-date">May 13, 2020</a>
                                                        </div>
                                                        <h4 class="post-title"><a href="post-single.php">Women’s
                                                                Sneaker</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">About us</h3>
                                        <div class="widget-body">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt.</p>
                                        </div>
                                    </div>

                                    <div class="widget widget-posts widget-collapsible">
                                        <h3 class="widget-title">Tag Cloud</h3>
                                        <div class="widget-body">
                                            <a href="#" class="tag">Bag</a>
                                            <a href="#" class="tag">Classic</a>
                                            <a href="#" class="tag">Converse</a>
                                            <a href="#" class="tag">Leather</a>
                                            <a href="#" class="tag">Fit</a>
                                            <a href="#" class="tag">Green</a>
                                            <a href="#" class="tag">Man</a>
                                            <a href="#" class="tag">Jeans</a>
                                            <a href="#" class="tag">Women</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Main -->
        <footer class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="demo1.php" class="logo-footer">
                                <img src="images/logo-footer.png" alt="logo-footer" width="154" height="43" />
                            </a>
                            <!-- End FooterLogo -->
                        </div>
                        <div class="col-lg-9">
                            <div class="widget widget-newsletter form-wrapper form-wrapper-inline">
                                <div class="newsletter-info mx-auto mr-lg-2 ml-lg-4">
                                    <h4 class="widget-title">Subscribe to our Newsletter</h4>
                                    <p>Get all the latest information, Sales and Offers.</p>
                                </div>
                                <form action="#" class="input-wrapper input-wrapper-inline">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email address here..." required />
                                    <button class="btn btn-primary btn-rounded btn-md ml-2" type="submit">subscribe<i
                                            class="d-icon-arrow-right"></i></button>
                                </form>
                            </div>
                            <!-- End Newsletter -->
                        </div>
                    </div>
                </div>
                <!-- End FooterTop -->
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-info">
                                <h4 class="widget-title">Contact Info</h4>
                                <ul class="widget-body">
                                    <li>
                                        <label>Phone:</label>
                                        <a href="tel:#">Toll Free (123) 456-7890</a>
                                    </li>
                                    <li>
                                        <label>Email:</label>
                                        <a href="mailto:mail@riode.com">mail@riode.com</a>
                                    </li>
                                    <li>
                                        <label>Address:</label>
                                        <a href="#">123 Street Name, City, England</a>
                                    </li>
                                    <li>
                                        <label>WORKING DAYS / HOURS:</label>
                                    </li>
                                    <li>
                                        <a href="#">Mon - Sun / 9:00 AM - 8:00 PM</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget ml-lg-4">
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
                        <div class="col-lg-3 col-md-6">
                            <div class="widget ml-lg-4">
                                <h4 class="widget-title">Contact Info</h4>
                                <ul class="widget-body">
                                    <li>
                                        <a href="#">Sign in</a>
                                    </li>
                                    <li>
                                        <a href="cart.php">View Cart</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.php">My Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#">Track My Order</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-instagram">
                                <h4 class="widget-title">Instagram</h4>
                                <figure class="widget-body row">
                                    <div class="col-3">
                                        <img src="images/instagram/01.jpg" alt="instagram 1" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/02.jpg" alt="instagram 2" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/03.jpg" alt="instagram 3" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/04.jpg" alt="instagram 4" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/05.jpg" alt="instagram 5" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/06.jpg" alt="instagram 6" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/07.jpg" alt="instagram 7" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="images/instagram/08.jpg" alt="instagram 8" width="64" height="64" />
                                    </div>
                                </figure>
                            </div>
                            <!-- End Instagram -->
                        </div>
                    </div>
                </div>
                <!-- End FooterMiddle -->
                <div class="footer-bottom">
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
                <!-- End FooterBottom -->
            </div>
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
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="js/main.min.js"></script>
</body>

</html>