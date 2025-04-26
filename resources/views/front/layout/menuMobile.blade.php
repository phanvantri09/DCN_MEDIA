<style>
    .logo-mobie {
        max-width: 70px !important;
    }

    @media only screen and (max-width: 479px) {
        .logo-mobie {
            max-width: 40px !important;
        }
    }
</style>
<div id="site-main-mobile-menu" class="site-main-mobile-menu">
    <div class="site-main-mobile-menu-inner">
        <div class="mobile-menu-header">
            <div class="mobile-menu-logo">
                <a href="{{ route('index') }}"><img class="logo-mobie" src="assetsUsersite/images/logo/logo.jpg"
                        alt=""></a>
            </div>
            <div class="mobile-menu-close">
                <button class="toggle">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-menu-content">
            <nav class="site-mobile-menu">
                <ul>
                    <li>
                        <a href="{{ route('index') }}"><span class="menu-text">Trang Chủ</span></a>
                    </li>
                    <li class="has-children">
                        <a href="{{ route('products.list') }}"><span class="menu-text">Cửa hàng</span></a>
                        {{-- <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="about.html"><span class="menu-text">About</span></a></li>
                            <li><a href="team.html"><span class="menu-text">Our Team</span></a></li>
                            <li><a href="contact.html"><span class="menu-text">Contact</span></a></li>
                        </ul> --}}
                    </li>
                    <li>
                        <a href="{{ route('blogs') }}"><span class="menu-text">Bài viết</span></a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"><span class="menu-text">Liên hệ</span></a>
                    </li>
                    {{-- <li class="has-children">
                        <a href="shop.html"><span class="menu-text">Shop</span></a>
                        <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="shop.html"><span class="menu-text">Shop</span></a></li>
                            <li><a href="product-details.html"><span class="menu-text">Product Details</span></a>
                            </li>
                            <li><a href="shopping-cart.html"><span class="menu-text">Shopping Cart</span></a></li>
                            <li><a href="wishlist.html"><span class="menu-text">Wishlist</span></a></li>
                            <li><a href="checkout.html"><span class="menu-text">Checkout</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="blog-grid.html"><span class="menu-text">Blog</span></a>
                        <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.html"><span class="menu-text">Blog Grid</span></a></li>
                            <li><a href="blog-details.html"><span class="menu-text">Blog Details</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="event.html"><span class="menu-text">Event</span></a>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </div>
</div>
