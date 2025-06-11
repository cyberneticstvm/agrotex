@extends("base")
@section("content")
<!-- Body Content -->
<div id="page-content">
    <!-- Home Banner slider -->
    <div class="slideshow slideshow-wrapper pb-section sliderFull">
        <div class="home-slideshow">
            <div class="slide slide1 d-block">
                <div class="slideimg blur-up lazyload bg-size">
                    <img class="blur-up lazyload bg-img" data-src="{{ asset('/assets/images/slideshow-banners/one.webp') }}" src="{{ asset('/assets/images/slideshow-banners/one.webp') }}" alt="Welcome to Agro Tex New Fashion style" title="Welcome to Agro Tex New Fashion style" />
                    <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                        <div class="slideshow__text-content mt-0 text-shadow center">
                            <div class="container">
                                <div class="wrap-caption left">
                                    <p class="mega-small-title">Welcome to</p>
                                    <h2 class="h1 mega-title slideshow__title">Agro Tex New Fashion style</h2>
                                    <span class="mega-subtitle slideshow__subtitle">Made with love and passion</span>
                                    <a href="collection-3columns.html" class="btn btn--large">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide slide2 d-block">
                <div class="slideimg blur-up lazyload bg-size">
                    <img class="blur-up lazyload bg-img" data-src="{{ asset('/assets/images/slideshow-banners/two.webp') }}" src="{{ asset('/assets/images/slideshow-banners/two.webp') }}" alt="Happy Customers" title="Happy Customers" />
                    <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                        <div class="slideshow__text-content mt-0 center">
                            <div class="container">
                                <div class="wrap-caption right">
                                    <h2 class="h1 mega-title slideshow__title">Happy Customers</h2>
                                    <span class="mega-subtitle slideshow__subtitle">Save up to 50% off this weekend only</span>
                                    <a href="collection-4columns.html" class="btn btn--large">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide slide3 d-block">
                <div class="slideimg blur-up lazyload bg-size">
                    <img class="blur-up lazyload bg-img" data-src="{{ asset('/assets/images/slideshow-banners/three.webp') }}" src="{{ asset('/assets/images/slideshow-banners/three.webp') }}" alt="Unique Styles" title="Unique Styles" />
                    <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                        <div class="slideshow__text-content mt-0 text-shadow center">
                            <div class="container">
                                <div class="wrap-caption left">
                                    <h2 class="h1 mega-title slideshow__title">Unique Styles</h2>
                                    <span class="mega-subtitle slideshow__subtitle">We design and developed theme that are amazingly Unique</span>
                                    <a class="btn btn--large">Buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home Banner slider -->

    <!-- Collection Tab slider -->
    <div class="tab-slider-product section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">best selling products</h2>
                        <p>Here you can set up to 8 tabs for your store collection.<br />This will look perfect on all device.</p>
                    </div>

                    <div class="tabs-listing">
                        <ul class="tabs clearfix">
                            <li class="active" rel="women">Women</li>
                            <li rel="men">Men</li>
                            <li rel="sale">Sale</li>
                        </ul>
                        <div class="tab_container">
                            <!-- Tab 1 -->
                            <div id="women" class="tab_content grid-products grid-products-hover-btn">
                                <div class="productSlider">
                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                                <!-- Product Label -->
                                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                <!-- End Product Label -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Countdown -->
                                            <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                            <!-- End Countdown -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Square Cardigan Casual Top</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="old-price">$800.00</span>
                                                <span class="price">$600.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star-half-alt"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>

                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                                <!-- Product Label -->
                                                <div class="product-labels rectangular"><span class="lbl on-sale">Exclusive</span></div>
                                                <!-- End Product Label -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Fit & Flare Trim Dress</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$30.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches">
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>

                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                                <!-- Product Label -->
                                                <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                                <!-- End Product Label -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Pau Jacket in all colors</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$600.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star-half-alt"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>

                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                                <!-- Product Label -->
                                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                <!-- End Product Label -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Frayed Layered Sleeve Top</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="old-price">$160.00</span>
                                                <span class="price">$146.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star-half-alt"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches"></ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>

                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                                <!-- Product Label -->
                                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                <!-- End Product Label -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Paper Dress</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$550.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab 1 -->

                            <!-- Tab 2 -->
                            <div id="men" class="tab_content grid-products grid-products-hover-btn">
                                <div class="productSlider">
                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                                <!-- Product Label -->
                                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                <!-- End Product Label -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Zipper Jacket</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$788.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star-half-alt"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>

                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Zipper Jacket</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$748.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                            </div>
                                            <!-- End Product Review -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>

                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                                <!-- Product label -->
                                                <div class="sold-out"><span class="lbl">Sold out</span></div>
                                                <!-- Product label -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="Sold Out">
                                                    <form class="addtocart" action="#" method="post">
                                                        <button class="btn cartIcon btn-addto-cart soldout" type="button"><i class="icon an an-ban"></i></button>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Workers Shirt Jacket</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$238.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star-half-alt"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches"></ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>

                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Watercolor Sport Jacket in Brown/Blue</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$348.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star-half-alt"></i>
                                            </div>
                                            <!-- End Product Review -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>

                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Washed Wool Blazer</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$1,078.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches"></ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab 2 -->

                            <!-- Tab 3 -->
                            <div id="sale" class="tab_content grid-products grid-products-hover-btn">
                                <div class="productSlider">
                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product label -->
                                            <div class="product-labels rectangular"><span class="lbl pr-label3">Best Seller</span></div>
                                            <!-- End Product label -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Azur Bracelet in Blue Azurite</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$168.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star-half-alt"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>

                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Bi-Goutte Earrings</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$58.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches">
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>

                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Ashton Necklace</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$228.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>

                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Ara Ring</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$198.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star-half-alt"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>

                                    <div class="col-12 item">
                                        <!-- Product Image -->
                                        <div class="product-image">
                                            <!-- Product Image -->
                                            <a href="product-layout1.html">
                                                <!-- Image -->
                                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Image -->
                                                <!-- Hover Image -->
                                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                                <!-- End Hover Image -->
                                            </a>
                                            <!-- End Product Image -->
                                            <!-- Product Button -->
                                            <div class="button-set">
                                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                                </div>
                                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                                    </form>
                                                </div>
                                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                                </div>
                                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!-- End Product Image -->
                                        <!-- Product Details -->
                                        <div class="product-details text-center">
                                            <!-- Product Name -->
                                            <div class="product-name">
                                                <a href="product-layout1.html">Ara Ring</a>
                                            </div>
                                            <!-- End Product Name -->
                                            <!-- Product Price -->
                                            <div class="product-price">
                                                <span class="price">$198.00</span>
                                            </div>
                                            <!-- End Product Price -->
                                            <!-- Product Review -->
                                            <div class="product-review">
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                                <i class="an an-star"></i>
                                            </div>
                                            <!-- End Product Review -->
                                            <!-- Variant -->
                                            <ul class="swatches">
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                            </ul>
                                            <!-- End Variant -->
                                        </div>
                                        <!-- End Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab 3 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Collection Tab slider -->

    <!-- Custom Content -->
    <div class="section custom-content-section">
        <div class="container">
            <div class="row custom-content">
                <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center custom-item">
                    <div class="custom-item-inner custom-item-inner-image">
                        <img class="custom-image blur-up ls-is-cached lazyloaded" data-src="{{ asset('/assets/images/product-images/p2.webp') }}" src="{{ asset('/assets/images/product-images/p2.webp') }}" alt="Cool T-shirts Closet" title="Cool T-shirts Closet" />
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center custom-item">
                    <div class="custom-item-inner custom-item-inner-text text-md-left">
                        <h2 class="h3">Cool T-shirts Closet</h2>
                        <p>It’s time for a SS18 wardrobe update! We’ve got the<br> latest arrivals and all the hottest trends.<br> Shop our newest clothing, footwear &amp; accessories.</p>
                        <a href="collection-3columns.html" class="btn border-btn-2">Discover More</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center custom-item">
                    <div class="custom-item-inner custom-item-inner-text text-md-left">
                        <h2 class="h3">All Fresh Picks</h2>
                        <p>Discover your new SS18 wardrobe favourites from<br> our latest collection of clothing, footwear &amp; accessories. <br>Treat yourself to some new staple pieces to see you through<br> the new season and beyond.</p>
                        <a href="collection-4columns.html" class="btn border-btn-2">Find Blouses Here</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 d-flex align-items-center justify-content-center custom-item">
                    <div class="custom-item-inner custom-item-inner-image">
                        <img class="custom-image blur-up ls-is-cached lazyloaded" data-src="{{ asset('/assets/images/product-images/p2.webp') }}" src="{{ asset('/assets/images/product-images/p2.webp') }}" alt="All Fresh Picks" title="All Fresh Picks" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Custom Content -->

    <!-- Featured Product -->
    <div class="product-rows section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="h2">Agro Tex's Picks</h2>
                        <p>Shop Agro Tex's favourite pieces from the Spring Summer '18 collections</p>
                    </div>
                </div>
            </div>
            <div class="grid-products grid-products-hover-btn">
                <div class="productSlider-style1">
                    <div class="col-12 item">
                        <!-- Product Image -->
                        <div class="product-image">
                            <!-- Product Image -->
                            <a href="product-layout1.html">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                <!-- End Hover Image -->
                                <!-- Product Label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                <!-- End Product Label -->
                            </a>
                            <!-- End Product Image -->
                            <!-- countdown -->
                            <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                            <!-- countdown End -->
                            <!-- Product Button -->
                            <div class="button-set">
                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                </div>
                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                    <form class="addtocart" action="#" method="post">
                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                    </form>
                                </div>
                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                </div>
                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                </div>
                            </div>
                            <!-- End Product Button -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Product Details -->
                        <div class="product-details text-center">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Square Cardigan Casual Top</a>
                            </div>
                            <!-- End Product Name -->
                            <!-- Product Price -->
                            <div class="product-price">
                                <span class="old-price">$800.00</span>
                                <span class="price">$600.00</span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Product Review -->
                            <div class="product-review">
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star-half-alt"></i>
                            </div>
                            <!-- End Product Review -->
                            <!-- Variant -->
                            <ul class="swatches">
                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End Product Details -->
                    </div>

                    <div class="col-12 item">
                        <!-- Product Image -->
                        <div class="product-image">
                            <!-- Product Image -->
                            <a href="product-layout1.html">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                <!-- End Hover Image -->
                                <!-- Product Label -->
                                <div class="product-labels rectangular"><span class="lbl on-sale">Exclusive</span></div>
                                <!-- End Product Label -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product Button -->
                            <div class="button-set">
                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                </div>
                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                    <form class="addtocart" action="#" method="post">
                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                    </form>
                                </div>
                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                </div>
                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                </div>
                            </div>
                            <!-- End Product Button -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Product Details -->
                        <div class="product-details text-center">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Fit & Flare Trim Dress</a>
                            </div>
                            <!-- End Product Name -->
                            <!-- Product Price -->
                            <div class="product-price">
                                <span class="price">$30.00</span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Product Review -->
                            <div class="product-review">
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                            </div>
                            <!-- End Product Review -->
                            <!-- Variant -->
                            <ul class="swatches">
                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End Product Details -->
                    </div>

                    <div class="col-12 item">
                        <!-- Product Image -->
                        <div class="product-image">
                            <!-- Product Image -->
                            <a href="product-layout1.html">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                <!-- End Hover Image -->
                                <!-- Product Label -->
                                <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                <!-- End Product Label -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product Button -->
                            <div class="button-set">
                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                </div>
                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                    <form class="addtocart" action="#" method="post">
                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                    </form>
                                </div>
                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                </div>
                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                </div>
                            </div>
                            <!-- End Product Button -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Product Details -->
                        <div class="product-details text-center">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Pau Jacket in all colors</a>
                            </div>
                            <!-- End Product Name -->
                            <!-- Product Price -->
                            <div class="product-price">
                                <span class="price">$600.00</span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Product Review -->
                            <div class="product-review">
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star-half-alt"></i>
                            </div>
                            <!-- End Product Review -->
                            <!-- Variant -->
                            <ul class="swatches">
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End Product Details -->
                    </div>

                    <div class="col-12 item">
                        <!-- Product Image -->
                        <div class="product-image">
                            <!-- Product Image -->
                            <a href="product-layout1.html">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                <!-- End Hover Image -->
                                <!-- Product Label -->
                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                <!-- End Product Label -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product Button -->
                            <div class="button-set">
                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                </div>
                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                    <form class="addtocart" action="#" method="post">
                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                    </form>
                                </div>
                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                </div>
                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                </div>
                            </div>
                            <!-- End Product Button -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Product Details -->
                        <div class="product-details text-center">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Frayed Layered Sleeve Top</a>
                            </div>
                            <!-- End Product Name -->
                            <!-- Product Price -->
                            <div class="product-price">
                                <span class="old-price">$160.00</span>
                                <span class="price">$146.00</span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Product Review -->
                            <div class="product-review">
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star-half-alt"></i>
                            </div>
                            <!-- End Product Review -->
                            <!-- Variant -->
                            <ul class="swatches">
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End Product Details -->
                    </div>

                    <div class="col-12 item">
                        <!-- Product Image -->
                        <div class="product-image">
                            <!-- Product Image -->
                            <a href="product-layout1.html">
                                <!-- Image -->
                                <img class="primary blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                <!-- End Image -->
                                <!-- Hover Image -->
                                <img class="hover blur-up lazyload" data-src="{{ asset('/assets/images/product-images/p1.webp') }}" src="{{ asset('/assets/images/product-images/p1.webp') }}" alt="image" title="product" />
                                <!-- End Hover Image -->
                                <!-- Product Label -->
                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                <!-- End Product Label -->
                            </a>
                            <!-- End Product Image -->
                            <!-- Product Button -->
                            <div class="button-set">
                                <div class="quickview-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="quick view">
                                    <a href="#open-quickview-popup" class="btn quick-view-popup quick-view"><i class="icon an an-search"></i></a>
                                </div>
                                <div class="variants add" data-bs-toggle="tooltip" data-bs-placement="top" title="add to cart">
                                    <form class="addtocart" action="#" method="post">
                                        <a href="#open-addtocart-popup" class="btn cartIcon btn-addto-cart open-addtocart-popup"><i class="icon an an-shopping-bag"></i></a>
                                    </form>
                                </div>
                                <div class="wishlist-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to wishlist">
                                    <a href="#open-wishlist-popup" class="open-wishlist-popup wishlist add-to-wishlist"><i class="icon an an-heart"></i></a>
                                </div>
                                <div class="compare-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="add to compare">
                                    <a href="compare.html" class="compare add-to-compare"><i class="icon an an-random"></i></a>
                                </div>
                            </div>
                            <!-- End Product Button -->
                        </div>
                        <!-- End Product Image -->
                        <!-- Product Details -->
                        <div class="product-details text-center">
                            <!-- Product Name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Paper Dress</a>
                            </div>
                            <!-- End Product Name -->
                            <!-- Product Price -->
                            <div class="product-price">
                                <span class="price">$550.00</span>
                            </div>
                            <!-- End Product Price -->
                            <!-- Product Review -->
                            <div class="product-review">
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                                <i class="an an-star"></i>
                            </div>
                            <!-- End Product Review -->
                            <!-- Variant -->
                            <ul class="swatches">
                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Blue" /></li>
                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Maroon" /></li>
                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Pink" /></li>
                                <li class="swatch large radius"><img src="{{ asset('/assets/images/product-images/variant1_200x200.jpg') }}" alt="image" data-bs-toggle="tooltip" data-bs-placement="top" title="Green" /></li>
                            </ul>
                            <!-- End Variant -->
                        </div>
                        <!-- End Product Details -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Product -->

    <!-- Store Feature -->
    <div class="store-feature section no-pb-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="display-table store-info">
                        <li class="display-table-cell">
                            <i class="icon an an-truck"></i>
                            <div class="store-info-text">
                                <h5>Free Worldwide Shipping</h5>
                                <span class="sub-text">Free shipping on all US orders</span>
                            </div>
                        </li>
                        <li class="display-table-cell">
                            <i class="icon an an-money-bill-alt"></i>
                            <div class="store-info-text">
                                <h5>Money Guarantee</h5>
                                <span class="sub-text">30 days money back guarantee</span>
                            </div>
                        </li>
                        <li class="display-table-cell">
                            <i class="icon an an-question-circle"></i>
                            <div class="store-info-text">
                                <h5>Top Notch Support</h5>
                                <span class="sub-text">We support online 24/7 on day</span>
                            </div>
                        </li>
                        <li class="display-table-cell">
                            <i class="icon an an-lock"></i>
                            <div class="store-info-text">
                                <h5>Secure Payments</h5>
                                <span class="sub-text">All payment are Secured and trusted.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Store Feature -->
</div>
<!-- End Body Content -->
@endsection