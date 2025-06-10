<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Agro Tex</title>
    <meta name="description" content="description" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.png') }}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins.css') }}" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}" />
</head>

<body class="page-template diva">
    <!-- Page Loader -->
    <div id="pre-loader"><img src="assets/images/loader.gif" alt="Loading..." /></div>
    <!-- End Page Loader -->

    <!-- Page Wrapper -->
    <div class="pageWrapper">
        <!-- Promotion Bar -->
        <div class="notification-bar mobilehide d-none">
            <a href="#" class="notification-bar__message">20% off your very first purchase, use promo code: Agro Tex Fashion</a>
            <span class="close-announcement icon an an-times"></span>
        </div>
        <!-- End Promotion Bar -->

        <!-- Search Form Drawer -->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon an an-search"></i></button>
                    <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off" />
                </form>
                <button type="button" class="search-trigger close-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Close"><i class="icon an an-times"></i></button>
            </div>
        </div>
        <!-- End Search Form Drawer -->

        <!-- Main Header -->
        <div class="header-section classicHeader clearfix animated hdr-sticky">
            <!-- Desktop Header -->
            <div class="header-1 classic-style">
                <!-- Top Header -->
                <div class="top-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-10 col-sm-8 col-md-7 col-lg-4">
                                <div class="currency picker float-start">
                                    <select class="nice-select" name="currency">
                                        <option value="INR">INR</option>
                                    </select>
                                </div>
                                <div class="language picker float-start">
                                    <select class="nice-select" name="language">
                                        <option value="EN">English</option>
                                    </select>
                                </div>
                                <p class="phone-no float-start"><i class="icon an an-phone me-1"></i><a href="tel:+917559983574">+91 7559983574</a></p>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 d-none d-md-none d-lg-block">
                                <div class="text-center">
                                    <p class="top-header_middle-text">FREE SHIPPING FOR ORDERS ABOVE ₹1000</p>
                                </div>
                            </div>
                            <div class="col-2 col-sm-4 col-md-5 col-lg-4 text-end d-none d-sm-block d-md-block d-lg-block">
                                <div class="header-social">
                                    <ul class="justify-content-end list--inline social-icons">
                                        <li><a class="social-icons__link" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Facebook"><i class="icon an an-facebook"></i> <span class="icon__fallback-text">Facebook</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Instagram"><i class="icon an an-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-2 col-sm-4 col-md-5 col-lg-4 text-end d-block d-sm-none d-md-none d-lg-none">
                                <!-- Mobile User Links -->
                                <!--<div class="user-menu-dropdown">
                                    <span class="user-menu"><i class="an an-user-alt"></i></span>
                                    <ul class="customer-links list-inline" style="display:none;">
                                        <li class="item"><a href="login.html">Login</a></li>
                                        <li class="item"><a href="register.html">Register</a></li>
                                        <li class="item"><a href="my-account.html">Orders</a></li>
                                        <li class="item"><a href="compare.html">Compare</a></li>
                                    </ul>
                                </div>-->
                                <!-- End Mobile User Links -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top Header -->

                <!-- Header -->
                <div class="header-wrap d-flex">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-4 col-md-4 col-lg-8 d-block d-lg-none">
                                <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Menu"><i class="icon an an-times"></i><i class="icon an an-bars"></i></button>
                                <!-- Mobile Search -->
                                <div class="site-header__search d-block d-lg-none mobile-search-icon">
                                    <button type="button" class="search-trigger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search"><i class="icon an an-search"></i></button>
                                </div>
                                <!-- End Mobile Search -->
                            </div>
                            <!-- Desktop Logo -->
                            <div class="logo col-4 col-sm-4 col-md-4 col-lg-2 align-self-center">
                                <a href="{{ route('index') }}">
                                    <h1>AGRO TEX</h1>
                                </a>
                            </div>
                            <!-- End Desktop Logo -->
                            <!-- Desktop Navigation -->
                            <div class="col-2 col-sm-3 col-md-3 col-lg-8 d-none d-lg-block">
                                <!-- Desktop Menu -->
                                <nav class="grid__item" id="AccessibleNav">
                                    <ul id="siteNav" class="d-flex flex-wrap site-nav medium center hidearrow">
                                        <li class="lvl1 parent dropdown">
                                            <a href="{{ route('index') }}">Home <i class="an an-angle-down"></i></a>
                                        </li>
                                        <li class="lvl1 parent dropdown">
                                            <a href="{{ route('index') }}">ABOUT US <i class="an an-angle-down"></i></a>
                                        </li>
                                        <li class="lvl1 parent dropdown">
                                            <a href="{{ route('index') }}">PRODUCTS <i class="an an-angle-down"></i></a>
                                        </li>
                                        <li class="lvl1 parent dropdown">
                                            <a href="{{ route('index') }}">CONTACT US <i class="an an-angle-down"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- End Desktop Menu -->
                            </div>
                            <!-- End Desktop Navigation -->
                            <!-- Right Side -->
                            <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                <div class="right-action d-flex-align-center justify-content-end">
                                    <!-- Search -->
                                    <div class="item site-header__search d-none d-lg-block">
                                        <button type="button" class="search-trigger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search"><i class="icon an an-search"></i></button>
                                    </div>
                                    <!-- End Search -->
                                </div>
                            </div>
                            <!-- End Right Side -->
                        </div>
                    </div>
                </div>
                <!-- End Header -->
            </div>
            <!-- End Desktop Header -->
        </div>
        <!-- End Main Header -->

        @include("nav")

        @yield("content")

        <!-- Footer -->
        <footer id="footer">
            <div class="site-footer">
                <div class="footer-top">
                    <div class="container">
                        <!-- Footer Links -->
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Quick Links</h4>
                                <ul>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Men</a></li>
                                    <li><a href="#">Kids</a></li>
                                    <li><a href="#">Deals</a></li>
                                    <li><a href="#">Accessories</a></li>
                                    <li><a href="#">New In</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                <h4 class="h4">Help</h4>
                                <ul>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">My Orders</a></li>
                                    <li><a href="{{ route('terms') }}">Terms And Conditions</a></li>
                                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                                <h4 class="h4">Contact Us</h4>
                                <ul class="addressFooter">
                                    <li>
                                        <i class="icon an an-map-marker"></i>
                                        <p>K P MUKKU, EAST PANOOR,<br>KANNUR, 670692</p>
                                    </li>
                                    <li class="phone">
                                        <i class="icon an an-phone-volume"></i>
                                        <p><a href="tel:+917559983574">+91 7559983574</a></p>
                                    </li>
                                    <li class="email">
                                        <i class="icon an an-envelope"></i>
                                        <p><a href="mailto:sales@agrotex.in">sales@agrotex.in</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 newsletter">
                                <div class="display-table">
                                    <div class="display-table-cell footer-newsletter">
                                        <form action="#" method="post">
                                            <label class="h4">Newsletter</label>
                                            <p>sign up for newsletter to know our latest news and offers.</p>
                                            <div class="input-group">
                                                <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required />
                                                <span class="input-group__btn">
                                                    <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Sign Up</span></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer Links -->
                </div>

                <div class="footer-middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-Start align-items-center">
                                <div class="footer-social w-100 text-start d-flex align-items-center">
                                    <h3 class="h4">Stay Connected</h3>
                                    <ul class="list--inline site-footer__social-icons social-icons">
                                        <li><a class="social-icons__link d-inline-block" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i class="icon an an-facebook"></i></a></li>
                                        <li><a class="social-icons__link d-inline-block" href="#" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i class="icon an an-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Footer Payment Icon-->
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex justify-content-end align-items-center">
                                <ul class="payment-icons list--inline w-100 justify-content-end text-end">
                                    <li><i class="icon an an-cc-visa" aria-hidden="true"></i></li>
                                    <li><i class="icon an an-cc-mastercard" aria-hidden="true"></i></li>
                                    <li><i class="icon an an-cc-amex" aria-hidden="true"></i></li>
                                    <li><i class="icon an an-cc-paypal" aria-hidden="true"></i></li>
                                    <li><i class="icon an an-cc-discover" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <!-- End Footer Payment Icon-->
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <!-- Footer Copyright -->
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 copyright text-center"><span>&copy; {{ date('Y') }} Agro Tex.</span> All Rights Reserved.</div>
                            <!-- End Footer Copyright -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Scoll Top -->
        <div id="site-scroll"><i class="icon an an-angle-up"></i></div>
        <!-- End Scoll Top -->

        <!-- Including Javascript -->
        <!-- Plugins JS -->
        <script src="{{ asset('/assets/js/plugins.js') }}"></script>
        <!-- Main JS -->
        <script src="{{ asset('/assets/js/main.js') }}"></script>
        <!-- For Newsletter Popup -->
        <script>
            jQuery(document).ready(function() {
                jQuery('.closepopup').click(function() {
                    jQuery('#popup-container').fadeOut();
                    jQuery('#modalOverly').fadeOut();
                });

                var visits = jQuery.cookie('visits') || 0;
                visits++;
                jQuery.cookie('visits', visits, {
                    expires: 1,
                    path: '/'
                });
                console.debug(jQuery.cookie('visits'));
                if (jQuery.cookie('visits') > 1) {
                    jQuery('#modalOverly').hide();
                    jQuery('#popup-container').hide();
                } else {
                    var pageHeight = jQuery(document).height();
                    jQuery('<div id="modalOverly"></div>').insertBefore('body');
                    jQuery('#modalOverly').css("height", pageHeight);
                    jQuery('#popup-container').show();
                }
                if (jQuery.cookie('noShowWelcome')) {
                    jQuery('#popup-container').hide();
                    jQuery('#active-popup').hide();
                }
            });

            jQuery(document).mouseup(function(e) {
                var container = jQuery('#popup-container');
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    container.fadeOut();
                    jQuery('#modalOverly').fadeIn(200);
                    jQuery('#modalOverly').hide();
                }
            });
        </script>
        <!-- End For Newsletter Popup -->

    </div>
    <!-- End Page Wrapper -->
</body>

</html>