@extends('front.layout.index')
@section('content')
<!-- Main Search Start -->
<div class="main-search-active">
    <div class="sidebar-search-icon">
        <button class="search-close"><i class="fal fa-times"></i></button>
    </div>
    <div class="sidebar-search-input">
        <form action="#">
            <div class="form-search">
                <input id="search" class="input-text" value="" placeholder="" type="search">
                <button>
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
        {{-- <p class="form-description">Hit enter to search or ESC to close</p> --}}
    </div>
</div>
<!-- Main Search End -->

<!-- Page Title Section Start -->
<div class="page-title-section section" data-bg-image="assetsUsersite/images/bg/breadcrumb-shop.jpg">
    <div class="page-title pt-lg-10 pt-10">
        <div class="container">
            <h1 class="title">DCN SHOP</h1>
        </div>
    </div>
</div>
<!-- Page Title Section End -->

<!-- Shop Page Section Start -->
<div class="section section-fluid pt-10">
    <div class="container">
        {{-- <div class="row mb-10">
            <div class="col-12">
                <!-- Shop Top Bar Start -->
                <div class="shop-top-bar shop-top-bar-flex" data-aos="fade-up">
                    <div class="shop-topbar-left">
                        <div class="page-show">
                            <ul>
                                <li>Show</li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">12</a></li>
                                <li><a href="#">18</a></li>
                                <li><a href="#">24</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="shop-topbar-right shop-tab-flex">
                        <div class="short-by">
                            <a href="#">Short By</a>
                            <ul class="sort-by-dropdown">
                                <li class="active"><a href="#">Default sorting</a></li>
                                <li><a href="#">Sort by popularity</a></li>
                                <li><a href="#">Sort by average rating</a></li>
                                <li><a href="#">Sort by newness</a></li>
                                <li><a href="#">Sort by price: low to high</a></li>
                                <li><a href="#">Sort by price: high to low</a></li>
                            </ul>
                        </div>
                        <div class="filter short-by">
                            <a href="#">filter</a>
                            <ul class="sort-by-dropdown">
                                <li class="active"><a href="#">Default Filter</a></li>
                                <li><a href="#">9 items</a></li>
                                <li><a href="#">16 items</a></li>
                                <li><a href="#">13 items</a></li>
                            </ul>
                        </div>
                        <div class="shop-tab nav">
                            <a class="active" href="#">
                                <i class="fa fa-th"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Shop Top Bar End -->
            </div>
        </div> --}}
        <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 mb-n10">
            @foreach ($data as $item)
                <div class="col mb-10" data-aos="fade-up">
                    <!--  Single Grid product Start -->
                    <div class="single-grid-product">
                        <div class="product-image">
                            <a href="{{ route('products.detail', ['id'=>$item->id]) }}">
                                <img src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($item->image) }}" class="w-100" alt="">
                            </a>
                            {{-- <div class="product-action">
                                <ul>
                                    <li><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="cart.html"><i class="fal fa-shopping-cart"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="product-content text-left">
                            <h3 class="title"><a href="product-details.html">{{$item->name}}</a></h3>
                            <p class="product-price">
                                <span class="main-price discounted"><del>{{number_format($item->price)}} VNĐ</del></span>
                                {{-- <span class="discounted-price">$19.99</span> --}}
                            </p>
                        </div>
                    </div>
                    <!--  Single Grid product End -->
                </div>
            @endforeach


        </div>
        {{-- <div class="row" data-aos="fade-up">
            <div class="col-12 mt-xl-20 mt-10 text-center">
                <a class="shop-load-more-btn" href="#">Load More <i class="fal fa-arrow-down"></i></a>
            </div>
        </div> --}}
    </div>
</div>
<div class="pt-10">.</div>
@endsection
