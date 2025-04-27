<!-- Header Section Start -->
<div class="header-section header-transparent sticky-header header-fluid section">
    <div class="header-inner">
        <div class="container position-relative">
            <div class="row justify-content-between align-items-center">

                <!-- Header Logo Start -->
                <div class="col-xl-2 col-auto">
                    <div class="header-logo">
                        <a href="{{ route('index') }}">
                            <img class="dark-logo" src="{{ asset('assetsUsersite/logo.jpg') }}" alt="DCN Media Logo">
                            <img class="light-logo" src="{{ asset('assetsUsersite/logo.jpg') }}" alt="DCN Media Logo">
                        </a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Main Menu Start -->
                <div class="col d-none d-xl-block">
                    <div class="menu-column-area d-none d-xl-block position-static">
                        <nav class="site-main-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('index') }}"><span class="menu-text">Trang chủ</span></a>
                                </li>
                                {{-- <li class="has-children"> --}}
                                <li>
                                    <a href="{{ route('products.list') }}"><span class="menu-text">Cửa hàng</span></a>
                                    {{-- <span class="menu-toggle"><i class="far fa-angle-down"></i></span> --}}
                                    {{-- <ul class="sub-menu">
                                        <li><a href="shop.html"><span class="menu-text">Shop</span></a></li>
                                        <li><a href="product-details.html"><span class="menu-text">Product
                                                    Details</span></a></li>
                                        <li><a href="shopping-cart.html"><span class="menu-text">Shopping
                                                    Cart</span></a></li>
                                        <li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a>
                                        </li>
                                        <li><a href="checkout.html"><span class="menu-text">Checkout</span></a>
                                        </li>
                                    </ul> --}}
                                </li>
                                {{-- <li class="has-children"> --}}
                                <li>
                                    <a href="{{ route('blogs') }}"><span class="menu-text">Bài viết</span></a>
                                    {{-- <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html"><span class="menu-text">Blog
                                                    Grid</span></a></li>
                                        <li><a href="blog-details.html"><span class="menu-text">Blog
                                                    Details</span></a></li>
                                    </ul> --}}
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}"><span class="menu-text">Liên hệ</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Header Main Menu End -->

                <!-- Header Right Start -->
                <div class="col-xl-2 col-auto d-flex align-items-center justify-content-end">
                    <!-- Header Search Start -->
                    <div class="header-search-area mr-xl-4 mr-0">

                        <!-- Header Login Start -->
                        <div class="header-search">
                            <a href="javascript:void(0)" class="header-search-toggle"><i
                                    class="pe-7s-search pe-2x pe-va"></i></a>
                        </div>
                        <!-- Header Login End -->
                    </div>
                    <!-- Header Search End -->

                    <!-- Header Cart Start -->
                    <div class="header-cart">

                        {{-- <a class="header-cart-btn" href="shopping-cart.html"><span class="cart-count">2</span><i
                                class="far fa-shopping-cart"></i></a> --}}

                        <!-- Header Mini Cart Start -->
                        {{-- <div class="header-mini-cart">
                            <div class="inner">

                                <!-- Header Mini Cart Product Start -->
                                <div class="mini-cart-products">
                                    <div class="mini-cart-product">
                                        <a href="#" class="thumb"><img
                                                src="assets/images/shop/shopping-cart/product-1.jpg" alt=""></a>
                                        <div class="content">
                                            <a href="#" class="title">Online Student: Strategies for Effective
                                                Learning</a>
                                            <span class="quantity">1 x <span class="price">$67.00</span></span>
                                        </div>
                                        <a href="#" class="remove"><i class="far fa-times"></i></a>
                                    </div>
                                    <div class="mini-cart-product">
                                        <a href="#" class="thumb"><img
                                                src="assets/images/shop/shopping-cart/product-2.jpg" alt=""></a>
                                        <div class="content">
                                            <a href="#" class="title">Principles of Business Administration</a>
                                            <span class="quantity">1 x <span class="price">$52.00</span></span>
                                        </div>
                                        <a href="#" class="remove"><i class="far fa-times"></i></a>
                                    </div>
                                </div>
                                <!-- Header Mini Cart Product End -->

                                <!-- Header Mini Cart Footer Start -->
                                <div class="mini-cart-footer">
                                    <div class="mini-cart-total">
                                        <b>Total:</b>
                                        <span class="amount">$119.00</span>
                                    </div>
                                    <div class="mini-cart-buttons">
                                        <a href="shopping-cart.html" class="btn btn-primary btn-hover-secondary">View
                                            Cart</a>
                                        <a href="checkout.html" class="btn btn-primary btn-hover-secondary">Checkout</a>
                                    </div>
                                </div>
                                <!-- Header Mini Cart Footer End -->
                            </div>
                        </div> --}}
                        <!-- Header Mini Cart End -->
                    </div>
                    <!-- Header Cart End -->

                    <!-- Header Mobile Menu Toggle Start -->
                    <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
                        <button class="toggle">
                            <i class="icon-top"></i>
                            <i class="icon-middle"></i>
                            <i class="icon-bottom"></i>
                        </button>
                    </div>
                    <!-- Header Mobile Menu Toggle End -->
                </div>
                <!-- Header Right End -->

            </div>
        </div>
    </div>
</div>
<!-- Header Section End -->
