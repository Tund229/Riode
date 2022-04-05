<?php
	session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Riode - about-us</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Riode - Best of online selling">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:300,400,500,600,700' ] }
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

<body class="about-us">

    <div class="page-wrapper">
        <header class="header header-border">
            <div class="header-top">
                <div class="container">
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
                        <a class="login-link" href="ajax/log.html" data-toggle="login-modal"><i
                                class="d-icon-user"></i>Sign in</a>
                        <span class="delimiter">/</span>
                        <a class="register-link ml-0" href="ajax/log.html" data-toggle="login-modal">Register</a>
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
                        <a href="index.php" class="logo">
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
                            <a href="wishlist.html" class="wishlist-toggle">
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
                                            <a href="product.html">
                                                <img src="images/wishlist/product-1.jpg" width="100" height="100"
                                                    alt="product" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Girl's Dark Bag</a>
                                            <div class="price-box">
                                                <span class="product-price">$84.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of wishlist Product -->
                                    <div class="product product-wishlist">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="images/wishlist/product-2.jpg" width="100" height="100"
                                                    alt="product" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Women's Fashional Comforter
                                            </a>
                                            <div class="price-box">
                                                <span class="product-price">$84.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of wishlist Product -->
                                    <div class="product product-wishlist">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="images/wishlist/product-3.jpg" width="100" height="100"
                                                    alt="product" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Wide Knickerbockers</a>
                                            <div class="price-box">
                                                <span class="product-price">$84.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End of wishlist Product -->
                                </div>
                                <a href="wishlist.html" class="btn btn-dark wishlist-btn mt-4"><span>Go To
                                        Wishlist</span></a>
                                <!-- End of Products  -->
                            </div>
                            <!-- End Dropdown Box -->
                        </div>
                        <span class="divider"></span>
                        <div class="dropdown cart-dropdown type2 off-canvas mr-0 mr-lg-2">
                            <a href="#" class="cart-toggle label-block link">
                                <div class="cart-label d-lg-show">
                                    <span class="cart-name">Shopping Cart:</span>
                                    <span class="cart-price">$0.00</span>
                                </div>
                                <i class="d-icon-bag"><span class="cart-count">2</span></i>
                            </a>
                            <div class="canvas-overlay"></div>
                            <!-- End Cart Toggle -->
                            <div class="dropdown-box">
                                <div class="canvas-header">
                                    <h4 class="canvas-title">Shopping Cart</h4>
                                    <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                                            class="d-icon-arrow-right"></i><span class="sr-only">Cart</span></a>
                                </div>
                                <div class="products scrollable">
                                    <div class="product product-cart">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="images/cart/product-1.jpg" alt="product" width="80"
                                                    height="88" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Riode White Trends</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$21.00</span>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End of Cart Product -->
                                    <div class="product product-cart">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="images/cart/product-2.jpg" alt="product" width="80"
                                                    height="88" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Dark Blue Women’s
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
                                    <a href="cart.html" class="btn btn-dark btn-link">View Cart</a>
                                    <a href="checkout.html" class="btn btn-dark"><span>Go To Checkout</span></a>
                                </div>
                                <!-- End of Cart Action -->
                            </div>
                            <!-- End Dropdown Box -->
                        </div>
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
                                <li>
                                    <a href="blog.php">Blog</a>
                                </li>
                                <li class="active">
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
            <div class="page-header pl-4 pr-4" style="background-image: url(images/page-header/about-us.jpg)">
                <h3 class="page-subtitle font-weight-bold">Welcome to Riode</h3>
                <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">Our Services</h1>
                <p class="page-desc text-white mb-0">Lorem quis bibendum auctor, nisi elit consequat ipsum,<br> nec
                    sagittis sem nibh id elit.</p>
            </div>
            <div class="page-content mt-10 pt-10">
                <section class="about-section pb-10 appear-animate">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-4 mb-10 mb-lg-4">
                                <h5 class="section-subtitle lh-2 ls-md font-weight-normal">01. What We Do</h5>
                                <h3 class="section-title lh-1 font-weight-bold">Provide perfect and practical services
                                </h3>
                                <p class="section-desc">Lorem quis bibendum auctar, nisi elit consequat ipsum, nec
                                    sagittis sem nibh id elit.</p>
                            </div>
                            <div class="col-lg-8 ">
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="counter text-center text-dark">
                                            <span class="count-to" data-fromvalue="0" data-tovalue="34"
                                                data-duration="900" data-delimiter=",">0</span>
                                            <h5 class="count-title font-weight-bold text-body ls-md">Business Year</h5>
                                            <p class="text-grey mb-0">Lorem ipsum dolor sit<br>amet, conctetur adipisci
                                                elit. viverra erat orci.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="counter text-center text-dark">
                                            <span class="count-to" data-fromvalue="0" data-tovalue="50"
                                                data-duration="900" data-delimiter=",">0</span>
                                            <h5 class="count-title font-weight-bold text-body ls-md">Design Brands</h5>
                                            <p class="text-grey mb-0">Lorem ipsum dolor sit<br>amet, conctetur adipisci
                                                elit. viverra erat orci.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="counter text-center text-dark">
                                            <span class="count-to" data-fromvalue="0" data-tovalue="130"
                                                data-duration="900" data-delimiter=",">0</span>
                                            <h5 class="count-title font-weight-bold text-body ls-md">Team Members</h5>
                                            <p class="text-grey mb-0">Lorem ipsum dolor sit<br>amet, conctetur adipisci
                                                elit. viverra erat orci.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End About Section-->

                <section class="customer-section pb-10 appear-animate">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7 mb-4">
                                <figure>
                                    <img src="images/subpages/customer.jpg" alt="Happy Customer" width="580"
                                        height="507" class="banner-radius" style="background-color: #BDD0DE;" />
                                </figure>
                            </div>
                            <div class="col-md-5 mb-4">
                                <h5 class="section-subtitle lh-2 ls-md font-weight-normal">02. Happy Customer</h5>
                                <h3 class="section-title lh-1 font-weight-bold">Provide fashionable and<br>qualifed
                                    products</h3>
                                <p class="section-desc text-grey">
                                    Already millions of people are very satisfied by thi.<br>
                                    s page builder and the number is growing more and more. Technolog<br>
                                    developing, requirements are increasing. Riode has brought.
                                </p>
                                <a href="#" class="btn btn-dark btn-link btn-underline ls-m">Visit Our Store<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Customer Section -->

                <section class="store-section pb-10 appear-animate">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 order-md-first mb-4">
                                <h5 class="section-subtitle lh-2 ls-md font-weight-normal mb-1">03. Our Store</h5>
                                <h3 class="section-title lh-1 font-weight-bold">Expect Restless<br>Amazing Support</h3>
                                <p class="section-desc text-grey">
                                    Already millions of people are very satisfied by thi.<br>
                                    s page builder and the number is growing more and more. Technolog<br>
                                    developing, requirements are increasing. Riode has brought.
                                </p>
                                <a href="#" class="btn btn-dark btn-link btn-underline ls-m">Get Our Store<i
                                        class="d-icon-arrow-right"></i></a>
                            </div>
                            <div class="col-md-6 mb-4">
                                <figure>
                                    <img src="images/subpages/store.jpg" alt="Our Store" width="580" height="507"
                                        class="banner-radius" style="background-color: #DEE6E8;" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Store-section -->

                <section class="brand-section grey-section pt-10 pb-10 appear-animate">
                    <div class="container mt-8 mb-10">
                        <h5 class="section-subtitle lh-2 ls-md font-weight-normal mb-1 text-center">04. Our Clients</h5>
                        <h3 class="section-title lh-1 font-weight-bold text-center mb-5">Popular Brands</h3>
                        <div class="owl-carousel owl-theme row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2"
                            data-owl-options="{
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 5
                                },
                                '1200': {
                                    'items': 6
                                }
                            }
                        }">
                            <figure class="brand-wrap bg-white banner-radius">
                                <img src="images/brands/1.png" alt="Brand" width="180" height="100" />
                            </figure>
                            <figure class="brand-wrap bg-white banner-radius">
                                <img src="images/brands/2.png" alt="Brand" width="180" height="100" />
                            </figure>
                            <figure class="brand-wrap bg-white banner-radius">
                                <img src="images/brands/3.png" alt="Brand" width="180" height="100" />
                            </figure>
                            <figure class="brand-wrap bg-white banner-radius">
                                <img src="images/brands/4.png" alt="Brand" width="180" height="100" />
                            </figure>
                            <figure class="brand-wrap bg-white banner-radius">
                                <img src="images/brands/5.png" alt="Brand" width="180" height="100" />
                            </figure>
                            <figure class="brand-wrap bg-white banner-radius">
                                <img src="images/brands/6.png" alt="Brand" width="180" height="100" />
                            </figure>
                        </div>
                    </div>
                </section>

                <section class="team-section pt-8 mt-10 pb-10 mb-6 appear-animate">
                    <div class="container">
                        <h5 class="section-subtitle lh-2 ls-md font-weight-normal mb-1 text-center">04. Our Leaders</h5>
                        <h3 class="section-title lh-1 font-weight-bold text-center mb-5">Meet our team</h3>
                        <div class="row cols-sm-2 cols-md-4">
                            <div class="member appear-animate" data-animation-options="{'name': 'fadeInLeftShorter'}">
                                <figure class="banner-radius">
                                    <img src="images/subpages/team1.jpg" alt="team member" width="280" height="280"
                                        style="background-color: #EEE;">
                                    <div class="overlay social-links">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </figure>
                                <h4 class="member-name">Tomasz Treflerzan</h4>
                                <h5 class="member-job">Ceo / Founder</h5>
                            </div>
                            <div class="member appear-animate"
                                data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.3s'}">
                                <figure class="banner-radius">
                                    <img src="images/subpages/team2.jpg" alt="team member" width="280" height="280"
                                        style="background-color: #121A1F;">
                                    <div class="overlay social-links">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </figure>
                                <h4 class="member-name">Dylan Chavez</h4>
                                <h5 class="member-job">Support manager / founder</h5>
                            </div>
                            <div class="member appear-animate"
                                data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.4s'}">
                                <figure class="banner-radius">
                                    <img src="images/subpages/team3.jpg" alt="team member" width="280" height="280"
                                        style="background-color: #E8E7E3;">
                                    <div class="overlay social-links">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </figure>
                                <h4 class="member-name">Viktoriia Demianenko</h4>
                                <h5 class="member-job">Designer</h5>
                            </div>
                            <div class="member appear-animate"
                                data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.5s'}">
                                <figure class="banner-radius">
                                    <img src="images/subpages/team4.jpg" alt="team member" width="280" height="280"
                                        style="background-color: #465D7F;">
                                    <div class="overlay social-links">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                    </div>
                                </figure>
                                <h4 class="member-name">Mikhail Hnatuk</h4>
                                <h5 class="member-job">Support</h5>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Team Section -->
            </div>
        </main>
        <!-- End Main -->
        <footer class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="demo1.html" class="logo-footer">
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
                                        <a href="about-us.html">About Us</a>
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
                                        <a href="cart.html">View Cart</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">My Wishlist</a>
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
        <a href="shop.html" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="wishlist.html" class="sticky-link">
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
                        <a href="account.html">
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
    <script src="vendor/jquery.count-to/jquery-numerator.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="js/main.min.js"></script>
</body>

</html>