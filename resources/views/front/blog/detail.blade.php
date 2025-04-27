@extends('front.layout.index')
@section('content')
    <div class="page-title-section section" data-bg-image="assetsUsersite/images/bg/breadcrumb-shop.jpg">
        <div class="page-title pt-lg-10 pt-10">
            <div class="container">
                <h1 class="title">{{ $title ?? 'DCN Media Bài Viết' }}</h1>
            </div>
        </div>
    </div>
    <!-- Blog Details Section Start -->
    <div class="section section-padding-170">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Blog Start -->
                    <div class="blog-details">
                        <div class="thumbnail" data-aos="fade-up">
                            <img src="assetsUserSite/images/blog/blog-details/blog-details.jpg" alt="Blog Image">
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-lg-8 m-auto" data-aos="fade-up" data-aos-delay="300">
                                    {!! $data->content !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8 m-auto" data-aos="fade-up" data-aos-delay="1200">
                                    <div class="row justify-content-between align-items-center mt-10">
                                        <div class="col-auto">
                                            {{-- <div class="entry-post-tags">
                                                <div class="tag">
                                                    <a href="#">Gym, </a>
                                                    <a href="#">Fitness, </a>
                                                    <a href="#">Healthy, </a>
                                                    <a href="#">Body Build</a>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="col-auto">
                                            <div class="post-share">
                                                <span class="label">Chia sẽ</span>
                                                <div class="media">
                                                    <a href="https://www.facebook.com/dcn.media1163" class="icon"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                    <a href="https://www.facebook.com/dcn.media1163" class="icon"><i
                                                            class="fab fa-twitter"></i></a>
                                                    <a href="https://www.facebook.com/dcn.media1163" class="icon"><i
                                                            class="fab fa-youtube"></i></a>
                                                    <a href="https://www.facebook.com/dcn.media1163" class="icon"><i
                                                            class="fab fa-dribbble"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog End -->

                    {{-- <div class="comment-list-wrapper" data-aos="fade-up">

                        <div class="row">
                            <div class="col-lg-10 m-auto">
                                <h4 class="title">4 Comment</h4>
                            </div>
                            <div class="col-lg-10 m-auto">

                                <ol class="comment-list">
                                    <li class="comment border-bottom">
                                        <div class="comment-5">
                                            <div class="comment-author vcard">
                                                <img alt="" src="assetsUserSite/images/comment/comment1.png">
                                            </div>
                                            <div class="comment-content">
                                                <div class="meta">
                                                    <h6 class="fn">James Scott</h6>
                                                </div>
                                                <div class="comment-text">
                                                    <p>“Theme is very flexible and easy to use. Perfect for us. Customer
                                                        support has been excellent and answered every question we've thrown
                                                        at them with 12 hours.”</p>
                                                </div>

                                                <div class="comment-actions">
                                                    <div class="comment-datetime">35 mins ago, 15 November 2019</div><span>
                                                        | </span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <ol class="children">
                                            <li class="comment pb-0">
                                                <div class="comment-6">
                                                    <div class="comment-author vcard">
                                                        <img alt="" src="assetsUserSite/images/comment/comment2.png">
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="meta">
                                                            <h6 class="fn">Harry Ferguson</h6>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p>“This theme is indeed a great purchase. Support center is
                                                                also helpful and quick to answer. No issues so far.”</p>
                                                        </div>

                                                        <div class="comment-actions">
                                                            <div class="comment-datetime"> 35 mins ago, 15 November 2019
                                                            </div><span> | </span>
                                                            <a class="comment-reply-link" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li><!-- comment End -->
                                        </ol><!-- children End -->
                                    </li><!-- comment End-->
                                    <li class="comment border-bottom">
                                        <div class="comment-2">
                                            <div class="comment-author vcard">
                                                <img alt="" src="assetsUserSite/images/comment/comment3.png">
                                            </div>
                                            <div class="comment-content">
                                                <div class="meta">
                                                    <h6 class="fn">Edna Watson</h6>
                                                </div>
                                                <div class="comment-text">
                                                    <p>“Exceptional service, beautiful and straightforward theme! Can't
                                                        recommend enough.”</p>
                                                </div>

                                                <div class="comment-actions">
                                                    <div class="comment-datetime">35 mins ago, 15 November 2019</div><span>
                                                        | </span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!-- comment End-->
                                    <li class="comment">
                                        <div class="comment-2">
                                            <div class="comment-author vcard">
                                                <img alt="" src="assetsUserSite/images/comment/comment4.png">
                                            </div>
                                            <div class="comment-content">
                                                <div class="meta">
                                                    <h6 class="fn">Owen Christ</h6>
                                                </div>
                                                <div class="comment-text">
                                                    <p>“Highly customizable. Excellent design. Customer services has
                                                        exceeded my expectation. They are quick to answer and even when they
                                                        don't know the answer right away. They'll work with you towards a
                                                        solution.”</p>
                                                </div>

                                                <div class="comment-actions">
                                                    <div class="comment-datetime"> 35 mins ago, 15 November 2019 </div>
                                                    <span> | </span>
                                                    <a class="comment-reply-link" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li><!-- comment End-->
                                </ol>
                            </div>
                        </div>
                    </div> --}}

                    <div class="comment-form-wrap" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-10 m-auto">
                                <div class="comment-respond">
                                    <h3 class="title">Để lại bình luận</h3>
                                    <p class="comment-notes"><span id="email-notes">Địa chỉ email của bạn sẽ không được công
                                            bố. Các trường bắt buộc được đánh dấu *<span class="required">*</span></p>
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-4 col-12 mb-6">
                                                <input type="text" placeholder="Tên Bạn*" name="name">
                                            </div>
                                            <div class="col-md-4 col-12 mb-6">
                                                <input type="email" placeholder="Email *" name="email">
                                            </div>
                                            <div class="col-md-4 col-12 mb-6">
                                                <input type="text" placeholder="Website" name="website">
                                            </div>
                                            <div class="col-12 mb-6">
                                                <textarea name="message" placeholder="Bình luận của bạn"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <p class="comment-form-cookies-consent justify-content-start text-left">
                                                    <input id="comment-cookies-consent" name="comment-cookies-consent"
                                                        type="checkbox" value="yes">
                                                    <label for="comment-cookies-consent">Lưu tên, email và trang web của tôi
                                                        trong trình duyệt này cho lần bình luận tiếp theo của tôi.</label>
                                                </p>
                                            </div>
                                            <div class="col-12 text-left">
                                                <button
                                                    class="btn btn-primary btn-hover-secondary btn-width-180 btn-height-60">Gửi
                                                    đi</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->
@endsection
