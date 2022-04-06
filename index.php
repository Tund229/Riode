<?php
    session_start();
    include 'config.php';
?>

<?php 
    if(isset($_GET["verify"])){
        $verify= $_GET["verify"];
        $confirm = 1;
        $sql= "UPDATE users SET verified=$confirm WHERE code='$verify'";
        $result=mysqli_query($conn, $sql);
        if($result){
            $sql="SELECT * FROM users WHERE verified='$confirm' AND code = '$verify'";
            $result=mysqli_query($conn, $sql);
            if($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION["register_id"]=$row["register_id"];
            $_SESSION["register_name"]=$row["register_name"];
            $_SESSION["register_email"]=$row["register_email"];
            $_SESSION["register_password"]=$row["register_password"];
            header("location:index.php?register_id=".$_SESSION["register_id"]);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Riode</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Riode - Best of online selling">
   
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.png">
    <!-- Preload Font -->
    <link rel="preload" href="fonts/riode.ttf?5gap68" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
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

    <link rel="stylesheet" type="text/css" href="vendor/sticky-icon/stickyicon.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="css/demo1.min.css">
</head>

<body class="home">

    <div class="page-wrapper">
        <h1 class="d-none">Riode - Riode - Best of online selling</h1>
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <?php
                        if($_GET["erreur"]){
                            echo '<font color="red">'.$_GET["erreur"]."</font>";
                        }else{
                    ?> 
                    <div class="header-left">
                        <p class="welcome-msg"> Welcome to Riode store message or remove it!</p>
                    </div>
                    <?php
                        }
                    ?>
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
                        <a href="contact-us.html" class="contact d-lg-show"><i class="d-icon-map"></i>Contact</a>
                        <a href="#" class="help d-lg-show"><i class="d-icon-info"></i> Need Help</a>

                        <?php
                            if(session_start() AND isset($_SESSION['register_id'])){
                        ?>
                        <?php
                        }else{
                        ?>
                        <a href="#signin" class="login-toggle link-to-tab d-md-show"><i class="d-icon-user"></i>Sign
                            in</a>
                        <span class="delimiter">/</span>
                        <a href="#register" class="register-toggle link-to-tab d-md-show ml-0">Register</a>
                        <?php
                        }
                        ?>
                        <div class="dropdown login-dropdown off-canvas">
                            <div class="canvas-overlay"></div>
                            <!-- End Login Toggle -->
                            <div class="dropdown-box scrollable">
                                <div class="login-popup">
                                    <div class="form-box">
                                        <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                                            <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active border-no lh-1 ls-normal"
                                                        href="#signin">Login</a>
                                                </li>
                                                <li class="delimiter">or</li>
                                                <li class="nav-item">
                                                    <a class="nav-link border-no lh-1 ls-normal"
                                                        href="#register">Register</a>
                                                </li>
                                            </ul>
                                            <!--Connexion-->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="signin">
                                                    <form action="login.php" method="post">
                                                        <div class="form-group mb-3">
                                                            <input type="email" class="form-control" id="singin-email"
                                                                name="connect_email"
                                                                placeholder=" Email Address *">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control"
                                                                id="singin_password" name="connect_password"
                                                                placeholder="Password *">
                                                        </div>
                                                        <div class="form-footer">
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="custom-checkbox"
                                                                    id="signin-remember" name="remember">
                                                                <label class="form-control-label"
                                                                    for="signin-remember">Remember
                                                                    me</label>
                                                            </div>
                                                            <a href="#" class="lost-link">Lost your password?</a>
                                                        </div>
                                                        <button class="btn btn-dark btn-block btn-rounded"
                                                            type="submit" name="s_submit">Login</button>
                                                    </form>
                                                    <div class="form-choice text-center">
                                                        <label class="ls-m">or Login With</label>
                                                        <div class="social-links">
                                                            <a href="#" title="social-link"
                                                                class="social-link social-google fab fa-google border-no"></a>
                                                            <a href="#" title="social-link"
                                                                class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                            <a href="#" title="social-link"
                                                                class="social-link social-twitter fab fa-twitter border-no"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Inscription-->
                                                <div class="tab-pane" id="register">
                                                    <form action="register.php" method="post">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="register-email"
                                                                name="register_name" placeholder="Your Name *"
                                                                 maxlength="25">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" id="register-email"
                                                                name="register_email" placeholder="Your Email Address *"
                                                                >
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control"
                                                                id="register_password" name="register_password"
                                                                placeholder="Password *" >
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control"
                                                                id="register_password" name="c_register_password"
                                                                placeholder=" Confirm your password *">
                                                        </div>
                                                        <div class="form-footer">
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="custom-checkbox"
                                                                    id="register-agree" name="register_agree"
                                                                    >
                                                                <label class="form-control-label" for="register-agree">I
                                                                    agree to the
                                                                    privacy policy</label>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-dark btn-block btn-rounded"
                                                            type="submit">Register</button>
                                                    </form>
                                                    <div class="form-choice text-center">
                                                        <label class="ls-m">or Register With</label>
                                                        <div class="social-links">
                                                            <a href="#" title="social-link"
                                                                class="social-link social-google fab fa-google border-no"></a>
                                                            <a href="#" title="social-link"
                                                                class="social-link social-facebook fab fa-facebook-f border-no"></a>
                                                            <a href="#" title="social-link"
                                                                class="social-link social-twitter fab fa-twitter border-no"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button title="Close (Esc)" type="button" class="mfp-close"><span>×</span></button>
                                </div>
                            </div>
                            <!-- End Dropdown Box -->
                        </div>
                        <!-- End of Login -->
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
                        <a href="index.html" class="logo">
                            <img src="images/logo.png" alt="logo" width="153" height="44" />
                        </a>
                        <!-- End Logo -->

                        <div class="header-search hs-simple">
                            <form action="#" class="input-wrapper">
                                <input type="text" class="form-control" name="search" autocomplete="off"
                                    placeholder="Search..." required />
                                <button class="btn btn-search" type="submit" title="submit-button">
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
                            <ul class=" menu menu-active-underline">
                                <li class="active">
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
                                    <a href="blog-classic.php">Blog</a>
                                </li>
                                <li>
                                    <a href="about-us.php">About Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <a href="#"><i class="d-icon-card"></i>Special Offers</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->
        <main class="main">
            <div class="page-content">
                <section class="intro-section">
                    <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no"
                        data-owl-options="{
                        'nav': false,
                        'dots': true,
                        'loop': false,
                        'items': 1,
                        'autoplay': false,
                        'autoplayTimeout': 8000
                    }">
                        <div class="banner banner-fixed intro-slide1" style="background-color: #46b2e8;">
                            <figure>
                                <img src="images/demos/demo1/slides/slide1.jpg" alt="intro-banner" width="1903"
                                    height="630" style="background-color: #34ace5;" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50">
                                    <h4 class="banner-subtitle font-weight-bold ls-l">
                                        <span class="d-inline-block slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">Buy
                                            2 Get</span>
                                        <span class="d-inline-block label-star bg-white text-primary slide-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.4s'}">1
                                            Free</span>
                                    </h4>
                                    <h2 class="banner-title font-weight-bold text-white lh-1 ls-md slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Fashionable</h2>
                                    <h3 class="font-weight-normal lh-1 ls-l text-white slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Collection</h3>
                                    <p class="slide-animate text-white ls-s mb-7"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                        Get Free Shipping on all orders over $99.00</p>
                                    <a href="shop.html" class="btn btn-dark btn-rounded slide-animate"
                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                                        Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner banner-fixed intro-slide2" style="background-color: #dddee0;">
                            <figure>
                                <img src="images/demos/demo1/slides/slide2.jpg" alt="intro-banner" width="1903"
                                    height="630" style="background-color: #d8d9d9;" />
                            </figure>
                            <div class="container">
                                <div class="banner-content y-50 ml-auto text-right">
                                    <h4 class="banner-subtitle ls-s mb-1 slide-animate"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '.7s'}"><span
                                            class="d-block text-uppercase mb-2">Coming soon</span><strong
                                            class="font-weight-semi-bold ls-m">Riode Birthday</strong></h4>
                                    <h2 class="banner-title mb-2 d-inline-block font-weight-bold text-primary slide-animate"
                                        data-animation-options="{'name': 'fadeInRight', 'duration': '1.2s', 'delay': '.5s'}">
                                        Sale</h2>
                                    <p class="slide-animate font-primary ls-s text-dark mb-4"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.2s'}">
                                        Up to 70% off on all products <br />online &amp; Free Shipping over $90</p>
                                    <a href="shop.html" class="btn btn-dark btn-rounded slide-animate"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.4s'}">Shop
                                        Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner banner-fixed video-banner intro-slide3" style="background-color: #dddee0;">
                            <figure>
                                <video src="video/memory-of-a-woman.mp4" width="1903" height="630"></video>
                            </figure>
                            <div class="container">
                                <div class="banner-content x-50 y-50 text-center">
                                    <h4 class="banner-subtitle text-white text-uppercase mb-3 ls-normal slide-animate"
                                        data-animation-options="{'name': 'fadeIn', 'duration': '.7s'}">Check out our
                                    </h4>
                                    <h2 class="banner-title mb-3 text-white font-weight-bold text-uppercase ls-m slide-animate"
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '.7s', 'delay': '.5s'}">
                                        Summer Season's</h2>
                                    <p class="slide-animate mb-7 text-white ls-s font-primary "
                                        data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '.8s'}">
                                        Up to 50% Off this Season’s &amp; Get free shipping<br />on all orders over
                                        $199.00</p>
                                    <a href="shop.html" class="btn btn-dark btn-rounded slide-animate mb-1"
                                        data-animation-options="{'name': 'fadeInLeft', 'duration': '1s', 'delay': '1.5s'}">Shop
                                        Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-6 appear-animate">
                        <div class="service-list">
                            <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                                    'items': 3,
                                    'nav': false,
                                    'dots': false,
                                    'loop': true,
                                    'autoplay': false,
                                    'autoplayTimeout': 5000,
                                    'responsive': {
                                        '0': {
                                            'items': 1
                                        },
                                        '576': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3,
                                            'loop': false
                                        }
                                    }
                                }">
                                <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.3s'
                                    }">
                                    <i class="icon-box-icon d-icon-truck"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal lh-1">Free Shipping &amp;
                                            Return
                                        </h4>
                                        <p class="ls-s lh-1">Free shipping on orders over $99</p>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.4s'
                                    }">
                                    <i class="icon-box-icon d-icon-service"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal lh-1">Customer Support 24/7
                                        </h4>
                                        <p class="ls-s lh-1">Instant access to perfect support</p>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.5s'
                                    }">
                                    <i class="icon-box-icon d-icon-secure"></i>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal lh-1">100% Secure Payment
                                        </h4>
                                        <p class="ls-s lh-1">We ensure secure payment!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="pt-10 mt-7 appear-animate" data-animation-options="{
                    'delay': '.3s'
                }">
                    <div class="container">
                        <h2 class="title title-center mb-5">Our Categories</h2>
                        <div class="row">
                            <div class="col-xs-6 col-lg-3 mb-4">
                                <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                    <a href="shop.html">
                                        <figure class="category-media">
                                            <img src="images/categories/category1.jpg" alt="category" width="280"
                                                height="280" style="background-color: #8c8c8d;" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name font-weight-bold ls-l"><a href="shop.html">For
                                                Men's</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-3 mb-4">
                                <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                    <a href="shop.html">
                                        <figure class="category-media">
                                            <img src="images/categories/category2.jpg" alt="category" width="280"
                                                height="280" style="background-color: #bcbdb7;" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name font-weight-bold ls-l"><a
                                                href="shop.html">Accessories</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-3 mb-4">
                                <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                    <a href="shop.html">
                                        <figure class="category-media">
                                            <img src="images/categories/category3.jpg" alt="category" width="280"
                                                height="280" style="background-color: #ececef;" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name font-weight-bold ls-l"><a href="shop.html">Fashionable
                                                Women's</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-3 mb-4">
                                <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                    <a href="shop.html">
                                        <figure class="category-media">
                                            <img src="images/categories/category4.jpg" alt="category" width="280"
                                                height="280" style="background-color: #e8eded;" />
                                        </figure>
                                    </a>
                                    <div class="category-content font-weight-bold">
                                        <h4 class="category-name font-weight-bold ls-l"><a href="shop.html">Cosmetic</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="product-wrapper container appear-animate mt-6 mt-md-10 pt-4 pb-8"
                    data-animation-options="{
                    'delay': '.3s'
                }">
                    <h2 class="title title-center mb-5">Best Sellers</h2>
                    <div class="owl-carousel owl-theme row owl-nav-full cols-2 cols-md-3 cols-lg-4" data-owl-options="{
                        'items': 5,
                        'nav': false,
                        'loop': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4,
                                'dots': false,
                                'nav': true
                            }
                        }
                    }">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/demos/demo1/products/product1.jpg" alt="Blue Pinafore Denim Dress"
                                        width="280" height="315" style="background-color: #f2f3f5;" />
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">new</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3cols.html">Clothing</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Solid pattern in fashion summer dress</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$140.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product.html" class="rating-reviews">( 12 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/demos/demo1/products/product2.jpg" alt="Blue Pinafore Denim Dress"
                                        width="280" height="315" style="background-color: #f2f3f5;" />
                                </a>
                                <div class="product-label-group">
                                    <span class="product-label label-sale">25% off</span>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3cols.html">Bags & Backpacks</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Mackintosh Poket backpack</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$125.99</ins><del class="old-price">$160.99</del>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:60%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product.html" class="rating-reviews">( 8 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/demos/demo1/products/product3.jpg" alt="Blue Pinafore Denim Dress"
                                        width="280" height="315" style="background-color: #f2f3f5;" />
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3cols.html">Clothing</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Fashionable Orginal Trucker</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$78.64</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:40%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product.html" class="rating-reviews">( 2 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/demos/demo1/products/product4.jpg" alt="Blue Pinafore Denim Dress"
                                        width="280" height="315" style="background-color: #f2f3f5;" />
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">New</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3cols.html">Clothing</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Women Red Fur Overcoat</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$184.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:80%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/demos/demo1/products/product2.jpg" alt="Blue Pinafore Denim Dress"
                                        width="280" height="315" style="background-color: #f2f3f5;" />
                                </a>
                                <div class="product-label-group">
                                    <span class="product-label label-sale">25% off</span>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3cols.html">Bags & Backpacks</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Mackintosh Poket backpack</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$125.99</ins><del class="old-price">$160.99</del>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:60%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product.html" class="rating-reviews">( 8 reviews )</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="banner-group mt-4">
                    <div class="container">
                        <h2 class="title d-none">Banner Group</h2>

                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="banner banner-3 overlay-zoom banner-fixed banner-radius content-middle appear-animate"
                                    data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1s', 'delay': '.2s'}">
                                    <figure>
                                        <img src="images/demos/demo1/banners/banner1.jpg" alt="banner" width="380"
                                            height="207" style="background-color: #836648;" />
                                    </figure>
                                    <div class="banner-content">
                                        <h3 class="banner-title text-white mb-1">For Men's</h3>
                                        <h4 class="banner-subtitle text-uppercase font-weight-normal text-white">
                                            Starting at $29
                                        </h4>
                                        <hr class="banner-divider">
                                        <a href="shop.html" class="btn btn-white btn-link btn-underline">Shop Now<i
                                                class="d-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-4 order-lg-auto order-sm-last">
                                <div class="banner banner-4 banner-fixed banner-radius overlay-effect2 content-middle content-center appear-animate"
                                    data-animation-options="{'name': 'fadeIn', 'duration': '1s', 'delay': '.2s'}">
                                    <figure>
                                        <img src="images/demos/demo1/banners/banner2.jpg" alt="banner" width="350"
                                            height="177" style="background-color: #1e1e1e;" />
                                    </figure>
                                    <div class="banner-content d-flex align-items-center w-100 text-left">
                                        <div class="mr-auto mb-4 mb-md-0">
                                            <h4 class="banner-subtitle text-white">
                                                Up to 20% Off<br><span class="ls-l">Black Friday</span>
                                            </h4>
                                            <h3 class="banner-title text-primary font-weight-bold lh-1 mb-0">Sale</h3>
                                        </div>
                                        <a href="shop.html"
                                            class="btn btn-primary btn-outline btn-rounded font-weight-bold text-white">Shop
                                            Now<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="banner overlay-zoom banner-5 banner-fixed banner-radius content-middle appear-animate"
                                    data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">
                                    <figure>
                                        <img src="images/demos/demo1/banners/banner3.jpg" alt="banner" width="380"
                                            height="207" style="background-color: #97928b;" />
                                    </figure>
                                    <div class="banner-content">
                                        <h3 class="banner-title text-white mb-1">Fashions</h3>
                                        <h4 class="banner-subtitle text-uppercase font-weight-normal text-white">30% Off
                                        </h4>
                                        <hr class="banner-divider">
                                        <a href="shop.html" class="btn btn-white btn-link btn-underline">Shop Now<i
                                                class="d-icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="product-wrapper mt-6 mt-md-10 pt-4 mb-10 pb-2 container appear-animate"
                    data-animation-options="{
                    'delay': '.6s'
                }">
                    <h2 class="title title-center">Our Featured</h2>
                    <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
                        'items': 5,
                        'nav': false,
                        'loop': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5,
                                'dots': false,
                                'nav': true
                            }
                        }
                    }">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/demos/demo1/products/product5.jpg" alt="Blue Pinafore Denim Dress"
                                        width="220" height="245" style="background-color: #f2f3f5;" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3cols.html">Watches</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Fashion Electric Wrist Watch</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$270.99</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:40%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product.html" class="rating-reviews">( 15 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/demos/demo1/products/product6.jpg" alt="Blue Pinafore Denim Dress"
                                        width="220" height="245" style="background-color: #f2f3f5;" />
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">New</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3cols.html">Women</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Hempen Hood a Mourner</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$12.83</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:20%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product.html" class="rating-reviews">( 3 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/demos/demo1/products/product7.jpg" alt="Blue Pinafore Denim Dress"
                                        width="220" height="245" style="background-color: #f2f3f5;" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3cols.html">Women</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Women Beautiful Headgear</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$78.24</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:40%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product.html" class="rating-reviews">( 8 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/demos/demo1/products/product8.jpg" alt="Blue Pinafore Denim Dress"
                                        width="220" height="245" style="background-color: #f2f3f5;" />
                                </a>
                                <div class="product-label-group">
                                    <span class="product-label label-new">New</span>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3cols.html">Shoes</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Converse Training Shoes</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$113.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:80%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product.html" class="rating-reviews">( 11 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="images/demos/demo1/products/product9.jpg" alt="Blue Pinafore Denim Dress"
                                        width="220" height="245" style="background-color: #f2f3f5;" />
                                </a>
                                <div class="product-label-group">
                                    <span class="product-label label-sale">27% Off</span>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                        data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                            class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3cols.html">Bags & Backpacks</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">Women's Fashion Handbag</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$53.99</ins><del class="old-price">$67.99</del>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:60%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="product.html" class="rating-reviews">( 16 reviews )</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="banner banner-background parallax text-center" data-option="{'offset': -60}"
                    data-image-src="images/demos/demo1/parallax.jpg" style="background-color: #2d2f33;">
                    <div class="container">
                        <div class="banner-content appear-animate"
                            data-animation-options="{'name': 'blurIn', 'duration': '1s', 'delay': '.2s'}">
                            <h4 class="banner-subtitle text-white font-weight-bold ls-l">
                                Extra<span class="d-inline-block label-star bg-dark text-primary ml-4 mr-2">30%
                                    Off</span>Online
                            </h4>
                            <h3 class="banner-title font-weight-bold text-white">Summer Season Sale</h3>
                            <p class="text-white ls-s">Free shipping on orders over $99</p>
                            <a href="shop.html" class="btn btn-primary btn-rounded btn-icon-right">Shop Now<i
                                    class="d-icon-arrow-right"></i></a>
                        </div>
                    </div>
                </section>

                <section class="blog-post-wrapper mt-6 mt-md-10 pt-7 appear-animate"
                    data-animation-options="{'name': 'fadeIn', 'duration': '1s'}">
                    <div class="container">
                        <h2 class="title title-center">Featured Articles</h2>
                        <div class="owl-carousel owl-theme post-slider row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                            'nav': false,
                            'dots': true,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '576': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 3,
                                    'dots': false
                                }
                            }
                        }">
                            <div class="blog-post mb-4">
                                <article class="post post-frame overlay-zoom">
                                    <figure class="post-media">
                                        <a href="post-single.html">
                                            <img src="images/blog/frame/1.jpg" alt="Blog post" width="340" height="206"
                                                style="background-color: #919fbc;" />
                                        </a>
                                        <div class="post-calendar">
                                            <span class="post-day">19</span>
                                            <span class="post-month">JAN</span>
                                        </div>
                                    </figure>
                                    <div class="post-details">
                                        <h4 class="post-title"><a href="post-single.html">20% Off Coupon for Cyber
                                                Week</a></h4>
                                        <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                            doeiu smod tempo...</p>
                                        <a href="post-single.html" class="btn btn-primary btn-link btn-underline">Read
                                            More<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="blog-post mb-4">
                                <article class="post post-frame overlay-zoom">
                                    <figure class="post-media">
                                        <a href="post-single.html">
                                            <img src="images/blog/frame/2.jpg" alt="Blog post" width="340" height="206"
                                                style="background-color: #e5e6e6;" />
                                        </a>
                                        <div class="post-calendar">
                                            <span class="post-day">19</span>
                                            <span class="post-month">JAN</span>
                                        </div>
                                    </figure>
                                    <div class="post-details">
                                        <h4 class="post-title"><a href="post-single.html">20% Off Coupon for Cyber
                                                Week</a></h4>
                                        <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                            doeiu smod tempo...</p>
                                        <a href="post-single.html" class="btn btn-primary btn-link btn-underline">Read
                                            More<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                            <div class="blog-post mb-4">
                                <article class="post post-frame overlay-zoom">
                                    <figure class="post-media">
                                        <a href="post-single.html">
                                            <img src="images/blog/frame/3.jpg" alt="Blog post" width="340" height="206"
                                                style="background-color: #eaeef1;" />
                                        </a>
                                        <div class="post-calendar">
                                            <span class="post-day">19</span>
                                            <span class="post-month">JAN</span>
                                        </div>
                                    </figure>
                                    <div class="post-details">
                                        <h4 class="post-title"><a href="post-single.html">20% Off Coupon for Cyber
                                                Week</a></h4>
                                        <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                            doeiu smod tempo...</p>
                                        <a href="post-single.html" class="btn btn-primary btn-link btn-underline">Read
                                            More<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-2 pb-6 pt-10 pb-md-10 appear-animate" data-animation-options="{
                    'delay': '.3s'
                }">
                    <h2 class="title d-none">Our Brand</h2>
                    <div class="container">
                        <div class="owl-carousel owl-theme row brand-carousel cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2"
                            data-owl-options="{
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'margin': 20,
                            'loop': true,
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
                            <figure><img src="images/brands/1.png" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="images/brands/2.png" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="images/brands/3.png" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="images/brands/4.png" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="images/brands/5.png" alt="brand" width="180" height="100" />
                            </figure>
                            <figure><img src="images/brands/6.png" alt="brand" width="180" height="100" />
                            </figure>
                        </div>
                    </div>
                </section>

                <section class="product-widget-wrapper pb-2 pb-md-10 appear-animate">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.5s'
                                }">
                                    <h4 class="widget-title border-no lh-1 font-weight-bold">Sale Products</h4>
                                    <div class="products-col">
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/demos/demo1/products/product10.jpg" alt="product"
                                                        width="100" height="114" style="background-color: #f2f3f5;" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Women’s Beautiful
                                                        Headgear</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$78.24</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:40%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/demos/demo1/products/product11.jpg" alt="product"
                                                        width="100" height="114" style="background-color: #f2f3f5;" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Hand Electric Cell</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$26.00</span>
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
                                                <a href="product.html">
                                                    <img src="images/demos/demo1/products/product12.jpg" alt="product"
                                                        width="100" height="114" style="background-color: #f2f3f5;" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Women Hempen Hood
                                                        a Mourner</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$30.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:20%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.3s'
                                }">
                                    <h4 class="widget-title border-no lh-1 font-weight-bold">Latest Products</h4>
                                    <div class="products-col">
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/demos/demo1/products/product13.jpg" alt="product"
                                                        width="100" height="114" style="background-color: #f2f3f5;" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Fashionable Orginal
                                                        Trucker</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$78.64</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:40%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/demos/demo1/products/product14.jpg" alt="product"
                                                        width="100" height="114" style="background-color: #f2f3f5;" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Men Summer Sneaker</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$79.45</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/demos/demo1/products/product15.jpg" alt="product"
                                                        width="100" height="114" style="background-color: #f2f3f5;" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Season Sports Cap</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$64.27</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:10%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.3s'
                                }">
                                    <h4 class="widget-title border-no lh-1 font-weight-bold">Best of the Week</h4>
                                    <div class="products-col">
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/demos/demo1/products/product16.jpg" alt="product"
                                                        width="100" height="114" style="background-color: #f2f3f5;" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Blue Sports Shoes</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$36.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:10%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/demos/demo1/products/product17.jpg" alt="product"
                                                        width="100" height="114" style="background-color: #f2f3f5;" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Fashion Handbag</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$53.99</ins><del
                                                        class="old-price">$67.99</del>
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
                                                <a href="product.html">
                                                    <img src="images/demos/demo1/products/product18.jpg" alt="product"
                                                        width="100" height="114" style="background-color: #f2f3f5;" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Women’s Beautiful
                                                        Headgear</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$82.23</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.5s'
                                }">
                                    <h4 class="widget-title border-no lh-1 font-weight-bold">Popular</h4>
                                    <div class="products-col">
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/demos/demo1/products/product19.jpg" alt="product"
                                                        width="100" height="114" style="background-color: #f2f3f5;" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Fashion Electric Wrist
                                                        Watch</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$270.99</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:40%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/demos/demo1/products/product20.jpg" alt="product"
                                                        width="100" height="114" style="background-color: #f2f3f5;" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Mackintosh Poket
                                                        Backpack</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$125.99</ins><del
                                                        class="old-price">$160.99</del>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="images/demos/demo1/products/product21.jpg" alt="product"
                                                        width="100" height="114" style="background-color: #f2f3f5;" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product.html">Hempen Hood a
                                                        Mourner
                                                    </a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$12.83</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:10%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
        </main>

        <!-- End of Main -->
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
                            <a href="#" title="social-link" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" title="social-link" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" title="social-link" class="social-link social-linkedin fab fa-linkedin-in"></a>
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
    <script src="vendor/parallax/parallax.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="js/main.min.js"></script>
</body>

</html>