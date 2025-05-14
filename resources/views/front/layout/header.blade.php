<!-- Header Section Start -->
<style>
    .has-children{
        color: white !important;
    }
</style>
<div class="header-section header-transparent sticky-header header-fluid section">
    <div class="header-inner">
        <div class="container position-relative">
            <div class="row justify-content-between align-items-center">

                <!-- Header Logo Start -->
                <div class="col-xl-2 col-auto">
                    <div class="header-logo">
                        <a href="{{ route('index') }}">
                            <img class="dark-logo" src="{{ asset('storage/images/logo/logo.jpg') }}" alt="DCN Media Logo">
                            <img class="light-logo" src="{{ asset('storage/images/logo/logo.jpg') }}" alt="DCN Media Logo">
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
                                <li class="has-children">
                                {{-- <li> --}}
                                    @php
                                        use App\Helpers\ConstCommon;
                                         $menuus = ConstCommon::getAllCategory();
                                        //  dd($menuus);
                                    @endphp
                                    <a><span class="menu-text">Cửa hàng</span></a>
                                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                                    <ul class="sub-menu">
                                        @foreach ($menuus as $item)
                                        <li><a href="{{ route('products.list', ["id_category"=>$item->id ]) }}"><span class="menu-text">{{ $item->title }}</span></a></li>
                                        @endforeach
                                    </ul>
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
                                <li>
                                    <a href="{{ route('services') }}"><span class="menu-text">Báo giá</span></a>
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
                        <div class="header-search">
                            <a href="javascript:void(0)" class="header-search-toggle" id="searchToggle">
                                <i class="pe-7s-search pe-2x pe-va"></i>
                            </a>
                        </div>
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

<!-- Search Overlay Start -->
<div class="search-overlay" id="searchOverlay">
    <div class="search-overlay-close" id="searchClose"></div>
    <div class="search-overlay-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('product.list') }}" method="GET" class="search-form">
                        <div class="search-input-group">
                            <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." value="{{ request('search') }}">
                            <button type="submit">
                                <i class="pe-7s-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Overlay End -->

<style>
.search-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.95);
    z-index: 9999;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.search-overlay.active {
    opacity: 1;
    visibility: visible;
}

.search-overlay-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    max-width: 600px;
    padding: 0 20px;
}

.search-input-group {
    position: relative;
    margin-bottom: 20px;
}

.search-input-group input {
    width: 100%;
    height: 60px;
    padding: 0 60px 0 20px;
    border: none;
    border-radius: 30px;
    background: #fff;
    font-size: 18px;
    color: #333;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.search-input-group button {
    position: absolute;
    right: 5px;
    top: 5px;
    width: 50px;
    height: 50px;
    border: none;
    border-radius: 25px;
    background: #ff6b6b;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.search-input-group button:hover {
    background: #ff5252;
    transform: scale(1.05);
}

.search-overlay-close {
    position: absolute;
    top: 30px;
    right: 30px;
    width: 40px;
    height: 40px;
    cursor: pointer;
}

.search-overlay-close:before,
.search-overlay-close:after {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 2px;
    background: #fff;
}

.search-overlay-close:before {
    transform: rotate(45deg);
}

.search-overlay-close:after {
    transform: rotate(-45deg);
}

@media (max-width: 767px) {
    .search-overlay-content {
        padding: 0 15px;
    }
    
    .search-input-group input {
        height: 50px;
        font-size: 16px;
    }
    
    .search-input-group button {
        width: 40px;
        height: 40px;
        font-size: 16px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchToggle = document.getElementById('searchToggle');
    const searchOverlay = document.getElementById('searchOverlay');
    const searchClose = document.getElementById('searchClose');
    const searchInput = document.querySelector('.search-input-group input');

    // Only show search on home page
    if (window.location.pathname === '/') {
        searchToggle.style.display = 'block';
    } else {
        searchToggle.style.display = 'none';
    }

    searchToggle.addEventListener('click', function() {
        searchOverlay.classList.add('active');
        setTimeout(() => {
            searchInput.focus();
        }, 300);
    });

    searchClose.addEventListener('click', function() {
        searchOverlay.classList.remove('active');
    });

    // Close on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && searchOverlay.classList.contains('active')) {
            searchOverlay.classList.remove('active');
        }
    });

    // Close on click outside
    searchOverlay.addEventListener('click', function(e) {
        if (e.target === searchOverlay) {
            searchOverlay.classList.remove('active');
        }
    });
});
</script>
