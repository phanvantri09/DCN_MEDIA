@extends('front.layout.index')
@section('content')
    <div class="page-title-section section"  data-bg-image="assetsUsersite/images/bg/breadcrumb-shop.jpg">
        <div class="page-title pt-lg-10 pt-10">
            <div class="container">
                <h1 class="title">{{ $title ?? "DCN Media Sản Phẩm"}}</h1>
            </div>
        </div>
    </div>
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
                            <span class="price-new">{{ number_format($data['price'])}} VNĐ</span>
                            <span class="price-old">{{ number_format($data['price'] + ($data['price']/100*($data['discount'] ?? 5)))}} VNĐ</span>
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
                            <a href="https://www.facebook.com/Bell6393" target="_blank">
                                <button class="btn btn-primary btn-hover-secondary">Liên hệ</button>
                            </a>
                            {{-- <button class="btn btn-wishlist btn-box">
                                <i class="fal fa-heart"></i>
                            </button> --}}
                            <a href="https://www.facebook.com/Bell6393" target="_blank">
                                <button class="btn btn-compare btn-box">
                                    <i class="fal fa-random"></i>
                                </button>
                            </a>
                        </div>

                        {{-- <div class="product-meta">
                            <div class="meta-item">
                                <h6>Sku:</h6>
                                <div class="meta-content">
                                    <span class="sku">MCB-001</span>
                                </div>
                            </div>

                            <div class="meta-item">
                                <h6>Category:</h6>
                                <div class="meta-content">
                                    <a href="#" rel="tag">GYM</a>
                                </div>
                            </div>
                            <div class="meta-item">
                                <h6>Tags:</h6>
                                <div class="meta-content">
                                    <a href="#" rel="tag">business</a>
                                    /
                                    <a href="#" rel="tag">seo</a>
                                </div>
                            </div>
                        </div> --}}

                        <div class="entry-product-share">
                            <h6>Chia sẽ:</h6>
                            <div class="author-social-networks">
                                <div class="inner">

                                    <a class="hint--bounce hint--top hint--primary" aria-label="Facebook" href="https://www.facebook.com/Bell6393"
                                        target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                    <a class="hint--bounce hint--top hint--primary" aria-label="Twitter" href="https://www.facebook.com/Bell6393"
                                        target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a class="hint--bounce hint--top hint--primary" aria-label="Linkedin" href="https://www.facebook.com/Bell6393"
                                        target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>

                                    <a class="hint--bounce hint--top hint--primary" aria-label="Tumblr" href="https://www.facebook.com/Bell6393"
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
                        {{-- <div class="tab-pane fade" id="tab-reviews">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2">
                                    <div class="comment-list-wrapper review-list-wrapper">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <ol class="comment-list">
                                                    <li class="comment border-bottom">
                                                        <div class="comment-2">
                                                            <div class="comment-author vcard">
                                                                <img alt="" src="assetsUserSite/images/comment/comment1.png">
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="meta">
                                                                    <h6 class="fn">Edna Watson</h6>
                                                                    <span class="star-rating">
                                                                        <span class="rating-active">ratings</span>
                                                                    </span>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <p>Thanks for always keeping your HTML Template up to
                                                                        date. Your level of support and dedication is second
                                                                        to none.</p>
                                                                </div>

                                                                <div class="comment-actions">
                                                                    <div class="comment-datetime">
                                                                        November 16, 2018 at 4:31 am
                                                                    </div>
                                                                    <span>
                                                                        |
                                                                    </span>
                                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="comment border-bottom pb-25">
                                                        <div class="comment-2">
                                                            <div class="comment-author vcard">
                                                                <img alt="" src="assetsUserSite/images/comment/comment2.png">
                                                            </div>
                                                            <div class="comment-content">
                                                                <div class="meta">
                                                                    <h6 class="fn">Owen Christ</h6>
                                                                    <span class="star-rating">
                                                                        <span class="rating-active">ratings</span>
                                                                    </span>
                                                                </div>
                                                                <div class="comment-text">
                                                                    <p>Thanks for always keeping your HTML Template up to
                                                                        date. Your level of support and dedication is second
                                                                        to none.</p>
                                                                </div>

                                                                <div class="comment-actions">
                                                                    <div class="comment-datetime">
                                                                        November 19, 2018 at 4:31 am
                                                                    </div>
                                                                    <span>
                                                                        |
                                                                    </span>
                                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment-form-wrap review-form-wrap">
                                        <div class="comment-respond">
                                            <h3 class="title">Add a review</h3>
                                            <p class="comment-notes max-mb-20">
                                                <span id="email-notes">Your email address will not be published.</span>
                                                Required fields are marked
                                                <span class="required">*</span>
                                            </p>


                                            <div class="comment-form-rating mb-6">
                                                <label>Your rating:</label>
                                                <span class="rating">
                                                    <span class="star"></span>
                                                </span>
                                            </div>

                                            <form action="#" method="post">
                                                <div class="row">
                                                    <div class="col-md-6 col-12 mb-6">
                                                        <input type="text" placeholder="Your Name *" name="name">
                                                    </div>
                                                    <div class="col-md-6 col-12 mb-6">
                                                        <input type="email" placeholder="Email *" name="email">
                                                    </div>
                                                    <div class="col-12 mb-6">
                                                        <textarea name="message" placeholder="Your Comment"></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <p
                                                            class="comment-form-cookies-consent justify-content-start text-left">
                                                            <input id="comment-cookies-consent"
                                                                name="comment-cookies-consent" type="checkbox" value="yes">
                                                            <label for="comment-cookies-consent">Save my name, email, and
                                                                website in this browser for the next time I comment.</label>
                                                        </p>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <button
                                                            class="btn btn-primary btn-hover-secondary btn-width-180 btn-height-60">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Products Information Section End -->
@endsection
