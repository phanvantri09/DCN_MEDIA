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
            <p class="form-description">Nhập thông tin bạn cần tìm</p>
        </div>
    </div>
    <!-- Main Search End -->

    <!-- Slider/Intro Section Start -->
    <div class="intro-slider-wrap section">
        <div class="intro-section section" data-bg-image="assetsUserSite/images/intro/intro.png">

            <div class="container-fluid">
                <div class="row row-cols-lg-1 row-cols-1">

                    <div class="col align-self-center">
                        <div class="intro-content text-center">
                            <span class="sub-title">Chào mừng bạn đến với</span>
                            <h2 class="title">DCN MEDIA</h2>
                            <a href="#" class="btn btn-primary btn-hover-secondary btn-width-290-80">Thu âm</a>
                            <a href="#" class="btn btn-outline-white btn-hover-primary btn-width-290-80">Quay chụp</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- About Section Start -->
    <div class="section section-padding-t100-b140 section-fluid">
        <div class="container">
            <div class="stroke-text">
                <h2 class="heading-title">ÂM <br> NHẠC</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-up">
                </div>
                <div class="col-lg-5" data-aos="fade-up">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <h3 class="title">Nơi nghệ thuật bắt đầu</h3>
                        <p>Phòng thu âm, quay, chụp chuyên nghiệp.</p>
                        <a href="https://www.facebook.com/Bell6393" class="btn btn-primary btn-hover-dark">Bắt đầu ngay</a>
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Coaches Section Start -->
    @if (!empty($users))
        <div class="section section-padding-t100-b140 section-fluid-240 bg-linear-black">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title color-light text-center" data-aos="fade-up">
                    <h2 class="title">Thành viên chính</h2>
                    <p class="sub-title">Với tôn chỉ khách hàng là thượng đế</p>
                </div>
                <!-- Section Title End -->

                <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 mb-n6">
                    @foreach ($users as $item)
                        <div class="col mb-6" data-aos="fade-right">
                            <!-- Single Coach Start -->
                            <div class="single-coach">
                                <div class="thumbnial">
                                    <a class="image" href="#"><img src="assetsUserSite/images/team/avt.jpg"
                                            alt=""></a>
                                    <div class="inner-block">
                                        <div class="slider-top-right"></div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ $item->name ?? 'Try92' }}</h3>
                                    <span class="designation">{{ $item->tag ?? 'Kỹ sư âm thanh, hình ảnh' }}</span>
                                </div>
                            </div>
                            <!-- Single Coach End -->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <!-- Coaches Section End -->
    <!-- Video Section Start -->
    <div class="section section-padding-t185-b150 section-fluid" data-bg-image=""
        style="background-color: black; margin-bottom: 10px">
        <div class="container">
            <div class="video-stroke-text">
                <h2 class="heading-title">Sản phẩm <br> 2024</h2>
            </div>
            <div class="play-btn-area">
                <a class="play-btn icon video-popup" href="https://www.youtube.com/watch?v=0wpjoCOeqJY"><i
                        class="fal fa-play"></i></a>
            </div>
        </div>
    </div>
    <!-- Video Section End -->

    <!-- Banner Section Start -->
    <div class="section">
        <div class="container-fulid">
            <div class="row row-cols-lg-2 row-cols-1 g-0">

                <div class="col" data-aos="fade-up">
                    <!-- Single Banner Start -->
                    <div class="single-banner">
                        <div class="thumbnail">
                            <a class="image" href="#"><img src="assetsUserSite/images/banner/banner-22.jpg"
                                    alt=""></a>
                            <div class="inner-block">
                                <div class="slider-top-right"></div>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">DỊCH VỤ <br>THU ÂM</h3>
                            <a href="#" class="btn btn-primary btn-hover-dark">XEM NGAY</a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>

                <div class="col" data-aos="fade-up" data-aos-delay="300">
                    <!-- Single Banner Start -->
                    <div class="single-banner">
                        <div class="thumbnail">
                            <a class="image" href="#"><img src="assetsUserSite/images/banner/banner-22.jpg"
                                    alt=""></a>
                            <div class="inner-block">
                                <div class="slider-top-right"></div>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">DỊCH VỤ <br>QUAY CHỤP </h3>
                            <a href="#" class="btn btn-primary btn-hover-dark">XEM NGAY</a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Testimonial Section Start -->
    <div class="section section-padding-t120-b100 section-fluid-240">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <!-- Section Title Start -->
                    <div class="section-title text-left mb-lg-0 mb-40" data-aos="fade-up">
                        <h2 class="title">Đánh giá gần nhất</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
                <div class="col-lg-8">
                    <!--Testimonial Slider Start -->
                    <div class="testimonial-slider swiper-container" data-aos="fade-up" data-aos-delay="300">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="qute-icon">
                                        <img src="assetsUserSite/images/icon/qute.svg" alt="qute">
                                    </div>
                                    <div class="testimonial-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="content">
                                        <p>Dịch vụ tuyệt vời, nhanh gọn sản phẩm cho ra âm thanh chất lượng, team quay chụp
                                            làm việc chuyên nghiệp, quá trình là việc rõ ràng và vui vẻ.</p>
                                    </div>
                                    <div class="author-info">
                                        <div class="image">
                                            <img src="assetsUserSite/images/about\about-3.jpg" alt="">
                                        </div>
                                        <div class="cite">
                                            <p class="name">Try92</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="qute-icon">
                                        <img src="assetsUserSite/images/icon/qute.svg" alt="qute">
                                    </div>
                                    <div class="testimonial-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="content">
                                        <p>Tư vấn giải thích đúng vấn đề mình cần, sản phẩm tốt</p>
                                    </div>
                                    <div class="author-info">
                                        <div class="image">
                                            <img src="assetsUserSite/images/testimonial/testimonial-1.png" alt="">
                                        </div>
                                        <div class="cite">
                                            <p class="name">Kim Oanh</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial">
                                    <div class="qute-icon">
                                        <img src="assetsUserSite/images/icon/qute.svg" alt="qute">
                                    </div>
                                    <div class="testimonial-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="content">
                                        <p>Ảnh đẹp lắm ạ, giá cả rất hợp lý shop ơi.</p>
                                    </div>
                                    <div class="author-info">
                                        <div class="image">
                                            <img src="assetsUserSite/images/testimonial/testimonial-1.png" alt="">
                                        </div>
                                        <div class="cite">
                                            <p class="name">Kiệt Trương</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <!--Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Blog Section Start -->
    @if (!empty($blogs))
        <div class="section section-padding section-fluid-240 blog-bg">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center" data-aos="fade-up">
                    <h2 class="title">Các bài viết liên quan đến dự án đã thực hiện</h2>
                </div>
                <!-- Section Title End -->
                <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 gx-xl-12 mb-n6">
                    @foreach ($blogs as $item)
                        <div class="col mb-6" data-aos="fade-up" data-aos-delay="300">
                            <!-- Single Blog Grid Start -->
                            <div class="blog">
                                <div class="thumbnail">
                                    <a href="blog-details.html" class="image"><img
                                            src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($item->img) }}" alt="Blog Image"></a>
                                    <span class="badge"><i class="fal fa-quote-left"></i></span>
                                </div>
                                <div class="info">
                                    {{-- <ul class="meta">
                                        <li><a href="#">Fitness,</a> <a href="#">Lifestyle</a></li>
                                        <li>03 Jul, 2020</li>
                                    </ul> --}}
                                    <h3 class="title"><a href="blog-details.html">{{$item->name}}</a></h3>
                                    <div class="desc">
                                        <p>{!! $item->content_pre !!}
                                        </p>
                                    </div>
                                    <a href="{{ route('blogs', ['id'=>$item->id]) }}" class="btn btn-outline-secondary btn-hover-primary">Đọc Thêm</a>
                                </div>
                            </div>
                            <!-- Single Blog Grid End -->
                        </div>
                    @endforeach


                </div>
                {{-- <div class="view-blog-btn text-center mt-lg-12 mt-md-8 mt-6" data-aos="fade-up">
            <a href="blog-grid.html">View all blog</a>
        </div> --}}
            </div>
        </div>
    @endif

    <!-- Blog Section End -->

    <!-- Newsletter Section Start -->
    <div class="section section-padding-70" data-bg-color="#ff2c2c">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="newsletter-title mb-md-0 mb-6" data-aos="fade-up">
                        <h3 class="title">Liên hệ ngay</h3>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="newsletter-form-area" data-aos="fade-up" data-aos-delay="300">
                        <form action="#">
                            <input type="email" name="email" placeholder="dcnmedia43@gmail.com">
                            <button class="form-submit">Gửi mail</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
