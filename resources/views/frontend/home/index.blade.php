<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Digital Market Place HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon-two.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome-all.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <!-- line awesome -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/line-awesome.min.css') }}">
    <!-- Tabler Icons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/3.21.0/tabler-icons.min.css"
        integrity="sha512-XrgoTBs7P5YtpkeKqKOKkruURsawIaRrhe8QrcWeMnFeyRZiOcRNjBAX+AQeXOvx9/9fSY32dVct1PccRoCICQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">

</head>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="preloader_area">
        <div class="preloader_img">
            <img src="assets/images/thumbs/preloader.gif" alt="Preloader">
        </div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- ==================== Mobile Menu Start Here ==================== -->
    <div class="mobile-menu d-lg-none d-block">
        <button type="button" class="close-button"> <i class="las la-times"></i> </button>
        <div class="mobile-menu__inner">
            <a href="index.html" class="mobile-menu__logo">
                <img src="assets/images/logo/logo-two.png" alt="Logo" class="white-version">
            </a>
            <div class="mobile-menu__menu">
                <div class="header-right__inner d-lg-none my-3 gap-1 d-flex flx-align">

                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="assets/images/icons/user.svg" alt="">
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sign Up</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                        </ul>
                    </div>
                </div>

                <ul class="nav-menu flx-align nav-menu--mobile">
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="index.html" class="nav-submenu__link"> Home One</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="index-two.html" class="nav-submenu__link"> Home Two</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="index-three.html" class="nav-submenu__link"> Home Three</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Products</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="all-product.html" class="nav-submenu__link"> All Products</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="product-details.html" class="nav-submenu__link"> Product Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="profile.html" class="nav-submenu__link"> Profile</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart.html" class="nav-submenu__link"> Shopping Cart</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-personal.html" class="nav-submenu__link"> Mailing Address</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-payment.html" class="nav-submenu__link"> Payment Method</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-thank-you.html" class="nav-submenu__link"> Preview Order</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="dashboard.html" class="nav-submenu__link"> Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="blog.html" class="nav-submenu__link"> Blog</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="blog-details.html" class="nav-submenu__link"> Blog Details</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="blog-details-sidebar.html" class="nav-submenu__link"> Blog Details Sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="contact.html" class="nav-menu__link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ==================== Mobile Menu End Here ==================== -->

    <main class="change-gradient">

        <!-- ============================ Sale Offer Start =========================== -->
        <div class="sale-offer ">
            <div class="container container-full ">
                <div class="sale-offer__content flx-between position-relative">
                    <div class="sale-offer__countdown">

                        <div class="countdown" data-date="14-10-2026" data-time="12:00">
                            <div class="day"><span class="num"></span><span class="word"></span></div>
                            <div class="hour"><span class="num"></span><span class="word"></span></div>
                            <div class="min"><span class="num"></span><span class="word"></span></div>
                            <div class="sec"><span class="num"></span><span class="word"></span></div>
                        </div>

                    </div>
                    <div class="sale-offer__discount flx-align gap-2">
                        <span class="sale-offer__text text-heading text-capitalize">New Year Flash Sale Offer</span>
                        <strong class="sale-offer__qty text-heading font-heading">45% OFF</strong>
                        <a href="#" class="btn btn-sm btn-white fw-500">Shop Now</a>
                    </div>
                    <div class="sale-offer__button">
                        <button type="submit" class="sale-offer__close text-heading"><i
                                class="las la-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================ Sale Offer End =========================== -->

        <!-- ==================== Header Start Here ==================== -->
        <header class="header">
            <div class="container container-full">
                <nav class="header-inner flx-between">
                    <!-- Logo Start -->
                    <div class="logo">
                        <a href="index.html" class="link white-version">
                            <img src="assets/images/logo/logo-two.png" alt="Logo">
                        </a>
                        <a href="index.html" class="link dark-version">
                            <img src="assets/images/logo/white-logo.png" alt="Logo">
                        </a>
                    </div>
                    <!-- Logo End  -->

                    <!-- Menu Start  -->
                    <div class="header-menu d-lg-block d-none">
                        <ul class="nav-menu flx-align ">
                            <li class="nav-menu__item">
                                <a href="javascript:void(0)" class="nav-menu__link">Home</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="javascript:void(0)" class="nav-menu__link">Products</a>
                                <ul class="nav-submenu">
                                    <li class="nav-submenu__item">
                                        <a href="all-product.html" class="nav-submenu__link"> All Products</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="product-details.html" class="nav-submenu__link"> Product Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item has-submenu">
                                <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                                <ul class="nav-submenu">
                                    <li class="nav-submenu__item">
                                        <a href="profile.html" class="nav-submenu__link">Test 01</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="profile.html" class="nav-submenu__link">Test 02</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item">
                                <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
                                <ul class="nav-submenu">
                                    <li class="nav-submenu__item">
                                        <a href="blog.html" class="nav-submenu__link"> Blog</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="blog-details.html" class="nav-submenu__link"> Blog Details</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="blog-details-sidebar.html" class="nav-submenu__link"> Blog Details
                                            Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-menu__item">
                                <a href="contact.html" class="nav-menu__link">Contact</a>
                            </li>
                            <li class="nav-menu__item">
                                <a href="#" class="nav-menu__link">Start Selling</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Menu End  -->

                    <!-- Header Right start -->
                    <div class="header-right flx-align">
                        <a href="cart.html" class="header-right__button cart-btn position-relative">
                            <i class="ti ti-basket"></i>
                            <span class="qty-badge font-12">0</span>
                        </a>

                        <div class="header-right__inner gap-3 flx-align d-lg-flex d-none">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="assets/images/icons/user.svg" alt="">
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Sign Up</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                </ul>
                            </div>
                        </div>
                        <button type="button" class="toggle-mobileMenu d-lg-none"> <i class="las la-bars"></i> </button>
                    </div>
                    <!-- Header Right End  -->
                </nav>
            </div>
        </header>
        <!-- ==================== Header End Here ==================== -->

        <!-- ==================== Category Menu Start ==================== -->
        <section class="category_menu_area d-none d-lg-block">
            <div class="container container-full">
                <ul class="category_menu">
                    <li class="category_menu_list has-submenu">
                        <a class="category_menu_link" href="#">Web Themes & Templates</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="#" class="nav-submenu__link">WordPress</a>
                                <ul class="child_menu">
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 01</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 02</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 03</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="#" class="nav-submenu__link">Elementor</a>
                                <ul class="child_menu">
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 01</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 02</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 03</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="#" class="nav-submenu__link">Hosting</a>
                                <ul class="child_menu">
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 01</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 02</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 03</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="#" class="nav-submenu__link">HTML</a>
                                <ul class="child_menu">
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 01</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 02</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 03</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="#" class="nav-submenu__link">Shopify</a>
                                <ul class="child_menu">
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 01</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 02</a>
                                    </li>
                                    <li class="nav-submenu__item">
                                        <a href="#" class="nav-submenu__link">Child Menu 03</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="#" class="nav-submenu__link">Jamstack</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="#" class="nav-submenu__link">Marketing</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="#" class="nav-submenu__link">Jamstack</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="#" class="nav-submenu__link">CMS</a>
                            </li>
                        </ul>
                    </li>
                    <li class="category_menu_list has-submenu">
                        <a class="category_menu_link" href="#">Code</a>
                    </li>
                    <li class="category_menu_list has-submenu">
                        <a class="category_menu_link" href="#">Video</a>
                    </li>
                    <li class="category_menu_list has-submenu">
                        <a class="category_menu_link" href="#">Audio</a>
                    </li>
                    <li class="category_menu_list has-submenu">
                        <a class="category_menu_link" href="#">Graphics</a>
                    </li>
                    <li class="category_menu_list has-submenu">
                        <a class="category_menu_link" href="#">Photos</a>
                    </li>
                    <li class="category_menu_list has-submenu">
                        <a class="category_menu_link" href="#">3D Files</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- ==================== Category Menu End ==================== -->

        <!--========================== Banner Section Start ==========================-->
        <section class="hero section-bg z-index-1">
            <img src="assets/images/gradients/banner-gradient.png" alt="" class="bg--gradient white-version">

            <div class="container container-two">
                <div class="row gy-sm-5 gy-4">
                    <div class="col-xl-6 col-lg-9 col-12">
                        <div class="hero-inner position-relative">
                            <div>
                                <h1 class="hero-inner__title">2 million+ well chosen digital</h1>
                                <p class="hero-inner__desc font-18">Explore the best premium themes and plugins
                                    available for sale. Our unique collection is hand-curated by experts. Find and buy
                                    the perfect premium theme today.</p>

                                <div class="position-relative">
                                    <div class="search-box">
                                        <input type="text"
                                            class="common-input common-input--lg shadow-sm auto-suggestion-input"
                                            placeholder="Search theme, plugins & more...">
                                        <button type="submit" class="btn btn-main btn-icon icon border-0"><img
                                                src="assets/images/icons/search.svg" alt=""></button>
                                    </div>

                                    <ul class="auto-suggestion-list">
                                        <li>
                                            <a href="#" class="auto-suggestion-list__item w-100 text-body">Business in
                                                HTML</a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto-suggestion-list__item w-100 text-body">Business in
                                                WordPress</a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto-suggestion-list__item w-100 text-body">Business in
                                                CMS</a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto-suggestion-list__item w-100 text-body">Ecommerce in
                                                HTML</a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto-suggestion-list__item w-100 text-body">Ecommerce in
                                                WordPress</a>
                                        </li>
                                        <li>
                                            <a href="#" class="auto-suggestion-list__item w-100 text-body">Ecommerce in
                                                CMS</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Tech List Start -->
                                <div class="popular-search d-flex flex-wrap align-items-start gap-3">
                                    <h6
                                        class="popular-search__title font-18 fw-700 mb-0 mt-1 flex-shrink-0 flx-align gap-1">
                                        <span class="d-md-flex d-none">Popular</span> Search:
                                    </h6>
                                    <ul class="search-list">
                                        <li class="search-list__item">
                                            <a href="all-product.html"
                                                class="search-list__link font-14 text-heading">theme</a>
                                        </li>
                                        <li class="search-list__item">
                                            <a href="all-product.html"
                                                class="search-list__link font-14 text-heading">plugins</a>
                                        </li>
                                        <li class="search-list__item">
                                            <a href="all-product.html" class="search-list__link font-14 text-heading">ui
                                                template</a>
                                        </li>
                                        <li class="search-list__item">
                                            <a href="all-product.html"
                                                class="search-list__link font-14 text-heading">mobile app</a>
                                        </li>
                                        <li class="search-list__item">
                                            <a href="all-product.html"
                                                class="search-list__link font-14 text-heading">html template</a>
                                        </li>
                                        <li class="search-list__item">
                                            <a href="all-product.html"
                                                class="search-list__link font-14 text-heading">dashboard</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 col-md-6 col-lg-4">
                        <div class="hero-thumb">
                            <ul class="direction_right">
                                <li><a href="#"><img src="assets/images/thumbs/product-img1.png" alt="" /></a></li>
                                <li><a href="#"><img src="assets/images/thumbs/product-img2.png" alt="" /></a></li>
                                <li><a href="#"><img src="assets/images/thumbs/product-img3.png" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 col-md-6 col-lg-4 pt-5 sm_margin">
                        <div class="hero-thumb">
                            <ul class="direction_left">
                                <li><a href="#"><img src="assets/images/thumbs/product-img4.png" alt="" /></a></li>
                                <li><a href="#"><img src="assets/images/thumbs/product-img5.png" alt="" /></a></li>
                                <li><a href="#"><img src="assets/images/thumbs/product-img6.png" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========================== Banner Section End ==========================-->

        <!-- ======================== popular Section Start =========================== -->
        <section class="popular padding-y-120 overflow-hidden">
            <div class="container container-two">
                <div class="section-heading style-left mb-0">
                    <h5 class="section-heading__title">Frequently Used Categories</h5>
                    <a href="all-product.html"
                        class="font-18 fw-600 text-heading hover-text-main text-decoration-underline font-heading">Explore
                        More</a>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <i class="ti ti-brand-wordpress"></i>
                            </span>
                            <h6 class="popular-item__title font-18">WordPress</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <i class="ti ti-settings-plus"></i>
                            </span>
                            <h6 class="popular-item__title font-18">Plugin</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <i class="ti ti-brand-html5"></i>
                            </span>
                            <h6 class="popular-item__title font-18">HTML</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <i class="ti ti-file-type-js"></i>
                            </span>
                            <h6 class="popular-item__title font-18">Java Script</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <i class="ti ti-device-mobile-heart"></i>
                            </span>
                            <h6 class="popular-item__title font-18">Mobile App</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <i class="ti ti-brand-php"></i>
                            </span>
                            <h6 class="popular-item__title font-18">PHP Script</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <i class="ti ti-brand-php"></i>
                            </span>
                            <h6 class="popular-item__title font-18">PHP Script</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <i class="ti ti-device-mobile-heart"></i>
                            </span>
                            <h6 class="popular-item__title font-18">Mobile App</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <i class="ti ti-file-type-js"></i>
                            </span>
                            <h6 class="popular-item__title font-18">Java Script</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                    <div class="col-auto">
                        <a href="all-product.html" class="popular-item w-100">
                            <span class="popular-item__icon">
                                <i class="ti ti-brand-html5"></i>
                            </span>
                            <h6 class="popular-item__title font-18">HTML</h6>
                            <span class="popular-item__qty text-body">15,296</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================== popular Section End =========================== -->

        <!-- =========================== Arrival Product Section Start ========================== -->
        <section class="arrival-product padding-y-120 position-relative z-index-1">
            <div class="container container-two">

                <div class="section-heading">
                    <h3 class="section-heading__title">Recently Arrived New Items</h3>
                </div>

                <ul class="nav common-tab justify-content-center nav-pills mb-48" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
                            type="button" role="tab" aria-controls="pills-all" aria-selected="false" tabindex="-1">All
                            Item</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-wordPress-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-wordPress" type="button" role="tab" aria-controls="pills-wordPress"
                            aria-selected="true">wordPress</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-php-tab" data-bs-toggle="pill" data-bs-target="#pills-php"
                            type="button" role="tab" aria-controls="pills-php" aria-selected="false"
                            tabindex="-1">php</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-siteTemplate-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-siteTemplate" type="button" role="tab"
                            aria-controls="pills-siteTemplate" aria-selected="false" tabindex="-1">site
                            Template</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-blogging-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-blogging" type="button" role="tab" aria-controls="pills-blogging"
                            aria-selected="false" tabindex="-1">blogging</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-marketing" type="button" role="tab" aria-controls="pills-marketing"
                            aria-selected="false" tabindex="-1">marketing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-plugins-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-plugins" type="button" role="tab" aria-controls="pills-plugins"
                            aria-selected="false" tabindex="-1">plugins</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-uiTemplate-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-uiTemplate" type="button" role="tab" aria-controls="pills-uiTemplate"
                            aria-selected="false" tabindex="-1">UI Template</button>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                        tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    1200</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (66)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    108</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (78)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    2415</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (89)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4257</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (77)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    758</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (2689)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4598</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/payment-method7.png" alt=""
                                                class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (510)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    578</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/payment-method8.png" alt=""
                                                class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (4502)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    9875</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="pills-wordPress" role="tabpanel"
                        aria-labelledby="pills-wordPress-tab" tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    1200</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (66)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    108</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (78)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    2415</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (89)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4257</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (77)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    758</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (2689)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4598</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (510)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    578</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (4502)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    9875</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-php" role="tabpanel" aria-labelledby="pills-php-tab"
                        tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    1200</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (66)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    108</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (78)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    2415</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (89)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4257</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (77)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    758</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (2689)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4598</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (510)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    578</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (4502)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    9875</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-siteTemplate" role="tabpanel"
                        aria-labelledby="pills-siteTemplate-tab" tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    1200</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (66)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    108</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (78)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    2415</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (89)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4257</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (77)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    758</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (2689)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4598</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (510)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    578</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (4502)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    9875</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-blogging" role="tabpanel" aria-labelledby="pills-blogging-tab"
                        tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    1200</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (66)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    108</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (78)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    2415</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (89)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4257</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (77)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    758</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (2689)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4598</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (510)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    578</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (4502)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    9875</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-marketing" role="tabpanel"
                        aria-labelledby="pills-marketing-tab" tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    1200</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (66)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    108</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (78)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    2415</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (89)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4257</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (77)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    758</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (2689)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4598</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (510)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    578</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (4502)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    9875</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-plugins" role="tabpanel" aria-labelledby="pills-plugins-tab"
                        tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    1200</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (66)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    108</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (78)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    2415</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (89)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4257</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (77)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    758</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (2689)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4598</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (510)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    578</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (4502)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    9875</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-uiTemplate" role="tabpanel"
                        aria-labelledby="pills-uiTemplate-tab" tabindex="0">
                        <div class="row gy-4">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    1200</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (66)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    108</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (78)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    2415</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (89)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4257</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img5.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (77)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    758</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$99</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img6.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (2689)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4598</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$256</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (510)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    578</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (4502)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    9875</span>

                                            </div>
                                        </div>

                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="text-center mt-64">
                    <a href="all-product.html" class="btn btn-main btn-lg fw-300">
                        View All Products
                    </a>
                </div>

            </div>
        </section>
        <!-- =========================== Arrival Product Section End ========================== -->

        <!-- ======================= Featured Products Start =============================== -->
        <section class="featured-product padding-y-120 position-relative z-index-1">
            <div class="container container-two">
                <div class="row justify-content-evenly">
                    <div class="col-xl-5">
                        <div class="section-content featured_product_text">
                            <div class="section-heading">
                                <h3 class="section-heading__title">Highlighted Products</h3>
                                <p class="section-heading__desc font-18 w-sm">Every month we pick some best products for
                                    you. This month's best web themes & templates have arrived, chosen by our content
                                    specialists.</p>
                            </div>
                            <a href="all-product.html" class="btn btn-main btn-lg  fw-300">
                                View All Items
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row gy-4">

                            <div class="col-sm-6 col-lg-4 col-xl-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (16)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    1200</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$120</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$259</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4 col-xl-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (66)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    108</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$129</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$236</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4 col-xl-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (78)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    2415</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$79</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$99</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4 col-xl-6">
                                <div class="product-item ">
                                    <div class="product-item__thumb d-flex">
                                        <a href="product-details.html" class="link w-100">
                                            <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                        </a>
                                        <button type="button" class="product-item__wishlist"><i
                                                class="fas fa-heart"></i></button>
                                    </div>
                                    <div class="product-item__content">
                                        <div class="product-item__bottom flx-between gap-2">
                                            <div
                                                class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                        <li class="star-rating__item font-11"><i
                                                                class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="star-rating__text text-heading fw-500 font-14">
                                                        (89)</span>
                                                </div>
                                                <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                    4257</span>

                                            </div>
                                        </div>
                                        <h6 class="product-item__title">
                                            <a href="product-details.html" class="link">SaaS dashboard digital products
                                                Title here</a>
                                        </h6>
                                        <div class="product-item__info flx-between gap-2">
                                            <span class="product-item__author">
                                                by
                                                <a href="profile.html" class="link hover-text-decoration-underline">
                                                    themepix</a>
                                            </span>
                                            <div class="flx-align gap-2">
                                                <h6 class="product-item__price mb-0">$59</h6>
                                                <span
                                                    class="product-item__prevPrice text-decoration-line-through">$129</span>
                                            </div>
                                        </div>
                                        <div class="product_item_footer">
                                            <a class="product_cart" href="#">
                                                <i class="ti ti-shopping-cart-plus"></i>
                                            </a>
                                            <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                                Demo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Featured Products End =============================== -->

        <!-- ======================= Selling Products Start ========================= -->
        <section class="selling-product padding-y-120 position-relative z-index-1 overflow-hidden"
            style="background: url(assets/images/thumbs/selling-product-bg.jpg);">

            <div class="container container-two">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-5">
                        <div class="section-heading style-left style-white flx-between max-w-unset gap-4 mb-0">
                            <div>
                                <h3 class="section-heading__title">Products with the highest weekly sales</h3>
                                <p class="section-heading__desc font-18">Every month we pick some best products for you.
                                    This
                                    month's best web themes &amp; templates have arrived, chosen by our content
                                    specialists.</p>
                            </div>
                            <a href="all-product.html" class="btn btn-main btn-lg  fw-300">
                                View All Items
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="selling-product-slider">

                            <div class="product-item shadow-sm overlay-none">
                                <div class="product-item__thumb d-flex max-h-unset">
                                    <a href="product-details.html" class="link w-100">
                                        <img src="assets/images/thumbs/product-img1.png" alt="" class="cover-img">
                                    </a>
                                </div>
                                <div class="product-item__content">
                                    <div class="product-item__bottom flx-between gap-2">
                                        <div class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                </ul>
                                                <span class="star-rating__text text-heading fw-500 font-14">
                                                    (16)</span>
                                            </div>
                                            <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                1200</span>

                                        </div>
                                    </div>
                                    <h6 class="product-item__title">
                                        <a href="product-details.html" class="link">Title here digital products new
                                            marketplace
                                            theme</a>
                                    </h6>
                                    <div class="product-item__info flx-between gap-2">
                                        <span class="product-item__author">
                                            by
                                            <a href="profile.html" class="link hover-text-decoration-underline">
                                                themepix</a>
                                        </span>
                                        <div class="flx-align gap-2">
                                            <h6 class="product-item__price mb-0">$56</h6>
                                            <span
                                                class="product-item__prevPrice text-decoration-line-through">$65</span>
                                        </div>
                                    </div>
                                    <div class="product_item_footer">
                                        <a class="product_cart" href="#">
                                            <i class="ti ti-shopping-cart-plus"></i>
                                        </a>
                                        <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                            Demo</a>
                                    </div>
                                </div>
                            </div>

                            <div class="product-item shadow-sm overlay-none">
                                <div class="product-item__thumb d-flex max-h-unset">
                                    <a href="product-details.html" class="link w-100">
                                        <img src="assets/images/thumbs/product-img2.png" alt="" class="cover-img">
                                    </a>
                                </div>
                                <div class="product-item__content">
                                    <div class="product-item__bottom flx-between gap-2">
                                        <div class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                </ul>
                                                <span class="star-rating__text text-heading fw-500 font-14">
                                                    (16)</span>
                                            </div>
                                            <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                1200</span>

                                        </div>
                                    </div>
                                    <h6 class="product-item__title">
                                        <a href="product-details.html" class="link">Title here digital products new
                                            marketplace
                                            theme</a>
                                    </h6>
                                    <div class="product-item__info flx-between gap-2">
                                        <span class="product-item__author">
                                            by
                                            <a href="profile.html" class="link hover-text-decoration-underline">
                                                themepix</a>
                                        </span>
                                        <div class="flx-align gap-2">
                                            <h6 class="product-item__price mb-0">$56</h6>
                                            <span
                                                class="product-item__prevPrice text-decoration-line-through">$65</span>
                                        </div>
                                    </div>
                                    <div class="product_item_footer">
                                        <a class="product_cart" href="#">
                                            <i class="ti ti-shopping-cart-plus"></i>
                                        </a>
                                        <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                            Demo</a>
                                    </div>
                                </div>
                            </div>

                            <div class="product-item shadow-sm overlay-none">
                                <div class="product-item__thumb d-flex max-h-unset">
                                    <a href="product-details.html" class="link w-100">
                                        <img src="assets/images/thumbs/product-img3.png" alt="" class="cover-img">
                                    </a>
                                </div>
                                <div class="product-item__content">
                                    <div class="product-item__bottom flx-between gap-2">
                                        <div class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                </ul>
                                                <span class="star-rating__text text-heading fw-500 font-14">
                                                    (16)</span>
                                            </div>
                                            <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                1200</span>

                                        </div>
                                    </div>
                                    <h6 class="product-item__title">
                                        <a href="product-details.html" class="link">Title here digital products new
                                            marketplace
                                            theme</a>
                                    </h6>
                                    <div class="product-item__info flx-between gap-2">
                                        <span class="product-item__author">
                                            by
                                            <a href="profile.html" class="link hover-text-decoration-underline">
                                                themepix</a>
                                        </span>
                                        <div class="flx-align gap-2">
                                            <h6 class="product-item__price mb-0">$56</h6>
                                            <span
                                                class="product-item__prevPrice text-decoration-line-through">$65</span>
                                        </div>
                                    </div>
                                    <div class="product_item_footer">
                                        <a class="product_cart" href="#">
                                            <i class="ti ti-shopping-cart-plus"></i>
                                        </a>
                                        <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                            Demo</a>
                                    </div>
                                </div>
                            </div>

                            <div class="product-item shadow-sm overlay-none">
                                <div class="product-item__thumb d-flex max-h-unset">
                                    <a href="product-details.html" class="link w-100">
                                        <img src="assets/images/thumbs/product-img4.png" alt="" class="cover-img">
                                    </a>
                                </div>
                                <div class="product-item__content">
                                    <div class="product-item__bottom flx-between gap-2">
                                        <div class="d-flex flex-wrap justify-content-between align-items-center w-100">

                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i>
                                                    </li>
                                                </ul>
                                                <span class="star-rating__text text-heading fw-500 font-14">
                                                    (16)</span>
                                            </div>
                                            <span class="product-item__sales font-14"><i class="ti ti-download"></i>
                                                1200</span>

                                        </div>
                                    </div>
                                    <h6 class="product-item__title">
                                        <a href="product-details.html" class="link">Title here digital products new
                                            marketplace
                                            theme</a>
                                    </h6>
                                    <div class="product-item__info flx-between gap-2">
                                        <span class="product-item__author">
                                            by
                                            <a href="profile.html" class="link hover-text-decoration-underline">
                                                themepix</a>
                                        </span>
                                        <div class="flx-align gap-2">
                                            <h6 class="product-item__price mb-0">$56</h6>
                                            <span
                                                class="product-item__prevPrice text-decoration-line-through">$65</span>
                                        </div>
                                    </div>
                                    <div class="product_item_footer">
                                        <a class="product_cart" href="#">
                                            <i class="ti ti-shopping-cart-plus"></i>
                                        </a>
                                        <a href="product-details.html" class="btn btn-outline-light btn-sm ">Live
                                            Demo</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Selling Products End ========================= -->

        <!-- ======================= To Featured Author Start =============================== -->
        <section class="top-author padding-y-120 position-relative z-index-1">
            <div class="container container-two">
                <div class="row gy-4 align-items-center justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="position-relative">
                            <div class="row gy-4">
                                <div class="col-sm-6">
                                    <div class="product-item box-shadow">
                                        <div class="product-item__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="assets/images/thumbs/product-img1.png" alt=""
                                                    class="cover-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-item box-shadow">
                                        <div class="product-item__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="assets/images/thumbs/product-img2.png" alt=""
                                                    class="cover-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-item box-shadow">
                                        <div class="product-item__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="assets/images/thumbs/product-img3.png" alt=""
                                                    class="cover-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="product-item box-shadow">
                                        <div class="product-item__thumb d-flex">
                                            <a href="product-details.html" class="link w-100">
                                                <img src="assets/images/thumbs/product-img4.png" alt=""
                                                    class="cover-img">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-2">
                        <div class="section-content">
                            <div class="section-heading style-left">
                                <h3 class="section-heading__title">Top Featured Author</h3>
                                <p class="section-heading__desc font-18 w-sm">Every month we pick some best products for
                                    you. This month's best web themes & templates have arrived, chosen by our content
                                    specialists.</p>
                            </div>
                            <div class="flx-align gap-2 mt-48">
                                <a href="profile.html" class="btn btn-main btn-lg  fw-300"> View Profile </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= To Featured Author End =============================== -->

        <!-- ======================= Top performance Author Start =============================== -->
        <section class="top-performance overflow-hidden padding-y-120 position-relative z-index-1">
            <div class="container container-two">
                <div class="row gy-4 align-items-center flex-wrap-reverse">
                    <div class="col-lg-5">
                        <div class="section-content">
                            <div class="section-heading style-left">
                                <h3 class="section-heading__title">Top Performance</h3>
                                <p class="section-heading__desc font-18 w-sm">Every month we pick some best products for
                                    you. This month's best web themes & templates have arrived, chosen by our content
                                    specialists.</p>
                            </div>
                            <a href="register.html" class="btn btn-main btn-lg  fw-300"> Get Started </a>
                        </div>
                    </div>
                    <div class="col-lg-7 pe-lg-5">
                        <div class="position-relative">
                            <div class="performance-content">
                                <div class="performance-content__item">
                                    <span class="performance-content__text font-18">Email Subscription</span>
                                    <h4 class="performance-content__count">49,000+</h4>
                                </div>
                                <div class="performance-content__item">
                                    <span class="performance-content__text font-18"> Total Products</span>
                                    <h4 class="performance-content__count">45,000+</h4>
                                </div>
                                <div class="performance-content__item">
                                    <span class="performance-content__text font-18"> Total Download</span>
                                    <h4 class="performance-content__count">48,000+</h4>
                                </div>
                                <div class="performance-content__item">
                                    <span class="performance-content__text font-18"> Monthly Visitor</span>
                                    <h4 class="performance-content__count">65,000+</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Top performance Author End =============================== -->

        <!-- ======================= Become seller section start ==================== -->
        <section class="seller padding-y-120">
            <div class="container container-two">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="seller-item position-relative z-index-1"
                            style="background: url(assets/images/thumbs/seller-bg.png);">
                            <h3 class="seller-item__title">Earn 75% of the ItemD Price</h3>
                            <p class="seller-item__desc fw-500 text-heading">Sellers receive 75% of the Itemp Price for
                                items Dsold exclusively and 50%</p>
                            <a href="register.html" class="btn btn-static-outline-black  fw-600">Become a
                                Seller</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="seller-item bg-two position-relative z-index-1"
                            style="background: url(assets/images/thumbs/seller-bg-two.png);">
                            <h3 class="seller-item__title">Earn until 40% commission</h3>
                            <p class="seller-item__desc fw-500 text-heading">Sellers receive 75% of the Itemp Price for
                                items Dsold exclusively</p>
                            <a href="register.html" class="btn btn-static-outline-black  fw-600">Become an
                                Affiliate</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Become seller section End ==================== -->

        <!-- ==================== Footer Start Here ==================== -->
        <footer class="footer-section " style="background: url(assets/images/shapes/footer-bg.png);">
            <div class="container">
                <div class="subscription pt_55 pb_45" style="background: url(assets/images/thumbs/subscrib_bg.jpg);">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 wow fadeInLeft"
                            style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="subscription_text ">
                                <h2>Have a project? Create your website now.</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 wow fadeInRight"
                            style="visibility: visible; animation-name: fadeInRight;">
                            <div class="subscription_right">
                                <form action="#">
                                    <input type="text" placeholder="enter your mail">
                                    <button class="btn btn-main btn-lg" type="submit">subscription</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-two">
                <div class="row gy-5">
                    <div class="col-xl-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-widget__logo">
                                <a href="index.html"> <img src="assets/images/logo/white-logo.png" alt=""></a>
                            </div>
                            <p class="footer-widget__desc">Lorem consultancy elitsed do eiusmod tempor inci didunt ut
                                labore dolore magna aliqua sed do eiusmod.</p>
                            <div class="footer-widget__social">
                                <ul class="social-icon-list">
                                    <li class="social-icon-list__item">
                                        <a href="https://www.facebook.com" class="social-icon-list__link flx-center"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social-icon-list__item">
                                        <a href="https://www.twitter.com" class="social-icon-list__link flx-center"> <i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="social-icon-list__item">
                                        <a href="https://www.linkedin.com" class="social-icon-list__link flx-center"> <i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="social-icon-list__item">
                                        <a href="https://www.pinterest.com" class="social-icon-list__link flx-center">
                                            <i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li class="social-icon-list__item">
                                        <a href="https://www.pinterest.com" class="social-icon-list__link flx-center">
                                            <i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-xs-6">
                        <div class="footer-widget">
                            <h5 class="footer-widget__title text-white">Useful Link</h5>
                            <ul class="footer-lists">
                                <li class="footer-lists__item"><a href="all-product.html"
                                        class="footer-lists__link">Product </a></li>
                                <li class="footer-lists__item"><a href="product-details.html"
                                        class="footer-lists__link">Product Details</a></li>
                                <li class="footer-lists__item"><a href="profile.html" class="footer-lists__link">Profile
                                    </a></li>
                                <li class="footer-lists__item"><a href="cart.html" class="footer-lists__link">Shopping
                                        Cart</a></li>
                                <li class="footer-lists__item"><a href="dashboard.html"
                                        class="footer-lists__link">Dashboard</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-xs-6 ps-xl-5">
                        <div class="footer-widget">
                            <h5 class="footer-widget__title text-white">Quick Links</h5>
                            <ul class="footer-lists">
                                <li class="footer-lists__item"><a href="dashboard.html"
                                        class="footer-lists__link">Dashboard </a></li>
                                <li class="footer-lists__item"><a href="login.html" class="footer-lists__link">Login
                                    </a></li>
                                <li class="footer-lists__item"><a href="register.html"
                                        class="footer-lists__link">Register</a></li>
                                <li class="footer-lists__item"><a href="blog.html" class="footer-lists__link">Blog </a>
                                </li>
                                <li class="footer-lists__item"><a href="blog-details.html"
                                        class="footer-lists__link">Blog Details</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="footer_widget_count">
                            <ul>
                                <li>
                                    <h4>58,547,547</h4>
                                    <p>items sold</p>
                                </li>
                                <li>
                                    <h4>$1,190,099,074 </h4>
                                    <p>community earnings</p>
                                </li>
                            </ul>
                            <div class="img">
                                <img src="assets/images/thumbs/pay_brand.png" alt="Payment" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- bottom Footer -->
            <div class="bottom-footer">
                <div class="container container-two">
                    <div class="bottom-footer__inner flx-between gap-3">
                        <p class="bottom-footer__text font-14"> Copyright &copy; 2024 DigiMart, All rights reserved.</p>
                        <div class="footer-links">
                            <a href="#" class="footer-link font-14">Terms of service</a>
                            <a href="#" class="footer-link font-14">Privacy Policy</a>
                            <a href="contact.html" class="footer-link font-14">cookies</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ==================== Footer End Here ==================== -->

    </main>

    <!-- Jquery js -->
    <script src="{{ asset('assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('assets/frontend/js/boostrap.bundle.min.js') }}"></script>
    <!-- CountDown -->
    <script src="{{ asset('assets/frontend/js/countdown.js') }}"></script>
    <!-- counter up -->
    <script src="{{ asset('assets/frontend/js/counterup.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.js') }}"></script>
    <!-- apex chart -->
    <script src="{{ asset('assets/frontend/js/apexchart.js') }}"></script>
    <!-- marquee -->
    <script src="{{ asset('assets/frontend/js/marquee.min.js') }}"></script>
    <!-- infinite slide  -->
    <script src="{{ asset('assets/frontend/js/infiniteslidev2.js') }}"></script>
    <!-- select 2  -->
    <script src="{{ asset('assets/frontend/js/select2.min.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>


</body>

</html>
