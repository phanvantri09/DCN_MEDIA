@extends('front.layout.index')
@section('content')
    <!-- Page Title Section Start -->
    <div class="page-title-section section" data-bg-image="assetsUserSite/images/bg/breadcrumb-blog.jpg">
        <div class="page-title pt-lg-10 pt-10">
            <div class="container">
                <h1 class="title">GYM BLOG</h1>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->

    <!-- Blog Grid Section Start -->
    <div class="section section-padding-t140-b120 section-fluid-80">
        <div class="container">
            <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 mb-xl-n12 mb-n6">
                @foreach ($data as $item)
                    <div class="col mb-xl-12 mb-6" data-aos="fade-up">
                        <!-- Single Blog Grid Start -->
                        <div class="blog blog-grid-style-two">
                            <div class="thumbnail">
                                <a href="blog-details.html" class="image"><img
                                        src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($item->img) }}"
                                        alt="Blog Image"></a>
                                <span class="badge"><i class="fal fa-quote-left"></i></span>
                            </div>
                            <div class="info">
                                <h3 class="title"><a href="blog-details.html">{{ $item->name ?? '' }}</a></h3>
                                {{-- <ul class="meta">
                                    <li>19 Augs, 2018 - by John Snow</li>
                                    <li><a href="#">Gym,</a> <a href="#">Healthy</a></li>
                                </ul> --}}
                                <div class="desc">
                                    <p>{!! $item->content_pre ?? '' !!}</p>
                                </div>
                                <a href="{{ route('blogs', ['id' => $item->id]) }}"
                                    class="btn btn-outline-secondary btn-hover-primary fz-10">Đọc bài viết</a>
                            </div>
                        </div>
                        <!-- Single Blog Grid End -->
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Blog Grid Section End -->
@endsection
