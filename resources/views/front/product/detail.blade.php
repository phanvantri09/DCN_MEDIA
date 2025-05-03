@extends('front.layout.index')
@section('content')
@include('front.layout.banner')
    <!-- Page Title Section End -->

    <!-- Single Product Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="single-product-image">
                        <img src="{{ $data['image']}}" alt="gym">
                        <div class="product-badges">
                            <span class="onsale">{{ $data['discount'] ?? 5}} %</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="single-product-content">
                        <h3 class="title">{{$data['name']}}</h3>
                        <span class="prices">
                            <span class="price-new">{{ ($data['price'])}} VNĐ</span>
                            <span class="price-old">{{ ($data['original_price'] )}} VNĐ</span>
                        </span>
                        <div class="product-ratings">
                            <span class="star-rating">
                                <span class="rating-active">ratings</span>
                            </span>
                            <a href="#reviews" class="review-link">(<span class="count">2</span>
                                customer reviews)</a>
                        </div>
                        <div class="product-description">
                            <p>{!! $data['sub_description'] !!}</p>
                        </div>
                        <div class="quantity-button-wrapper">
                            <div class="quantity">
                                <label>Số lượng</label>
                                <input type="number" value="{{ $data['amount']}}" min="1">
                            </div>
                            <p class="stock in-stock">({{ $data['amount']}})Luôn có hàng</p>
                        </div>
                        <div class="product-action">
                            <a href="https://www.facebook.com/dcn.media1163" target="_blank">
                                <button class="btn btn-primary btn-hover-secondary">Liên hệ</button>
                            </a>
                            {{-- <button class="btn btn-wishlist btn-box">
                                <i class="fal fa-heart"></i>
                            </button> --}}
                            <a href="https://www.facebook.com/dcn.media1163" target="_blank">
                                <button class="btn btn-compare btn-box">
                                    <i class="fal fa-random"></i>
                                </button>
                            </a>
                        </div>
                        <div class="entry-product-share">
                            <h6>Chia sẽ:</h6>
                            <div class="author-social-networks">
                                <div class="inner">

                                    <a class="hint--bounce hint--top hint--primary" aria-label="Facebook" href="https://www.facebook.com/dcn.media1163"
                                        target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a class="hint--bounce hint--top hint--primary" aria-label="Twitter" href="https://www.facebook.com/dcn.media1163"
                                        target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a class="hint--bounce hint--top hint--primary" aria-label="Linkedin" href="https://www.facebook.com/dcn.media1163"
                                        target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>

                                    <a class="hint--bounce hint--top hint--primary" aria-label="Tumblr" href="https://www.facebook.com/dcn.media1163"
                                        target="_blank">
                                        <i class="fab fa-tumblr-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product Section End -->

    <!-- Single Products Information Section Start -->
    <div class="single-product-information section section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <ul class="nav product-info-tab-list justify-content-center">
                        <li>
                            <a class="active" data-toggle="tab" href="#tab-description">Nội Dung chính</a>
                        </li>
                        {{-- <li>
                            <a data-toggle="tab" href="#tab-reviews">Reviews (2)</a>
                        </li> --}}
                    </ul>
                    <div class="tab-content product-infor-tab-content" data-aos="fade-up" data-aos-delay="300">
                        <div class="tab-pane fade show active" id="tab-description">
                            <div class="row">
                                <div class="offset-lg-2 col-lg-8">
                                    <div class="description-list">
                                        {!! $data['description'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Products Information Section End -->
@endsection
