@extends('front.layout.index')
@section('content')
    @include('front.layout.banner')
    <div class="section">
        <div class="container-fulid">
            <div class="row row-cols-lg-2 row-cols-1 g-0">

                <div class="col" data-aos="fade-up">
                    <!-- Single Banner Start -->
                    <div class="single-banner">
                        <div class="thumbnail">
                            <a class="image" href="#"><img src="assetsUserSite/images/banner/banner-1.jpg"
                                    alt=""></a>
                            <div class="inner-block">
                                <div class="slider-top-right"></div>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">DỊCH VỤ <br>THU ÂM</h3>
                            <a href="{{ route('services', ['type'=>"Thu Âm"]) }}" class="btn btn-primary btn-hover-dark">XEM NGAY</a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>

                <div class="col" data-aos="fade-up" data-aos-delay="300">
                    <!-- Single Banner Start -->
                    <div class="single-banner">
                        <div class="thumbnail">
                            <a class="image" href="#"><img src="assetsUserSite/images/banner/banner-2.jpg"
                                    alt=""></a>
                            <div class="inner-block">
                                <div class="slider-top-right"></div>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">DỊCH VỤ <br>QUAY CHỤP </h3>
                            <a href="{{ route('services', ['type'=>"Quay Chụp"]) }}" class="btn btn-primary btn-hover-dark">XEM NGAY</a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="300">
                    <!-- Single Banner Start -->
                    <div class="single-banner">
                        <div class="thumbnail">
                            <a class="image" href="#"><img src="assetsUserSite/images/banner/banner-3.jfif"
                                    alt=""></a>
                            <div class="inner-block">
                                <div class="slider-top-right"></div>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">DỊCH VỤ <br>Hòa Âm Phối Khí</h3>
                            <a href="{{ route('services', ['type'=>"Hòa Âm Phối Khí"]) }}" class="btn btn-primary btn-hover-dark">XEM NGAY</a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="300">
                    <!-- Single Banner Start -->
                    <div class="single-banner">
                        <div class="thumbnail">
                            <a class="image" href="#"><img src="assetsUserSite/images/banner/banner-4.jpg"
                                    alt=""></a>
                            <div class="inner-block">
                                <div class="slider-top-right"></div>
                            </div>
                        </div>
                        <div class="content">
                            <h3 class="title">DỊCH VỤ <br>Sáng Tác</h3>
                            <a href="{{ route('services', ['type'=>"Sáng Tác"]) }}" class="btn btn-primary btn-hover-dark">XEM NGAY</a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Program Section End -->
@endsection
