@extends('front.layout.index')
@section('content')
    @include('front.layout.banner')
    <!-- Page Title Section End -->

    <!-- Contact Us Section Start -->
    <div class="section">
        <div class="container-fluid px-0">
            <div class="row row-cols-lg-2 row-cols-1 g-0">
                <div class="col" data-aos="fade-up">
                    <!-- Google Map Start -->
                    <div class="contact-map-area">
                        <iframe class="contact-map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6656.301844242596!2d106.647565676866!3d10.713187489431796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f007f75a6ef%3A0x5fbc6ad30c1dc16b!2sDCN%20Media!5e1!3m2!1svi!2s!4v1745513519392!5m2!1svi!2s"
                            aria-hidden="false" tabindex="0" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        {{-- <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}
                    </div>

                    <!-- Google Map End -->
                </div>
                <div class="col" data-aos="fade-up" data-aos="fade-up" data-aos-delay="300">
                    <div style="padding: 20px">
                        <b>DCNMedia</b> là công ty hàng đầu trong lĩnh vực sản xuất và cung cấp dịch vụ thu âm, hòa âm phối khí,
                        quay
                        phim, chụp ảnh và dựng MV ca nhạc chuyên nghiệp. Với đội ngũ kỹ thuật viên và nghệ sĩ giàu kinh nghiệm,
                        cùng với trang thiết bị hiện đại, chúng tôi cam kết mang đến cho khách hàng những sản phẩm âm thanh và
                        hình ảnh chất lượng cao nhất.<br><br>

                        <b>Dịch vụ của chúng tôi bao gồm:</b><br>
                        <b>Thu âm nhạc:</b>
                        <br>
                        Dịch vụ thu âm cho các nghệ sĩ, ban nhạc, và nhà sản xuất âm nhạc.
                        Hòa âm phối khí: Tạo ra những bản phối âm hoàn hảo, giúp nâng cao chất lượng âm thanh cho các sản phẩm
                        âm nhạc.<br>
                        <b>Quay phim:</b> <br>Quay phim cho các sự kiện, quảng cáo, và video doanh nghiệp.<br>
                        <b>Chụp ảnh:</b> Dịch vụ chụp ảnh chuyên nghiệp cho sự kiện, sản phẩm, và chân dung.<br>
                        Quay dựng MV ca nhạc: Sản xuất và dựng video ca nhạc sáng tạo, mang lại trải nghiệm hình ảnh ấn
                        tượng.<br><br>
                        <b>Tại sao chọn DCNMedia?</b><br>
                        <b>Chất lượng vượt trội:</b> Chúng tôi sử dụng công nghệ tiên tiến và kỹ thuật chuyên nghiệp để đảm bảo sản
                        phẩm hoàn hảo.<br>
                        <b>Dịch vụ tận tâm:</b><br> Đội ngũ của chúng tôi luôn sẵn sàng lắng nghe và đáp ứng nhu cầu của khách
                        hàng.<br>
                        <b>Giá cả hợp lý:</b><br> Cung cấp các gói dịch vụ linh hoạt với mức giá cạnh tranh.<br>
                        <br>
                        Hãy đến với DCNMedia để trải nghiệm dịch vụ thu âm, hòa âm phối khí, quay phim và chụp ảnh tốt nhất,
                        biến ý tưởng của bạn thành hiện thực!<br>
                    </div>
                    <div class="contact-form-wrapper">
                        <div class="contact-form">
                            <form id="contact-form" action="https://htmlmail.hasthemes.com/shohel/richter-fitness/mail.php">
                                <!-- Single Input Start -->
                                <div class="single-input mb-6">
                                    <input disabled type="text" value="DCN MEDIA" name="name" placeholder="Name *">
                                </div>
                                <!-- Single Input End -->
                                <!-- Single Input Start -->
                                <div class="single-input mb-6">
                                    <input type="email" name="email" disabled value="dcnmedia43@gmail.com"
                                        placeholder="Your Email *">
                                </div>
                                <!-- Single Input End -->
                                <!-- Single Input Start -->
                                <div class="single-input mb-6">
                                    <input type="text" name="website" disabled value="0935444343"
                                        placeholder="You Website">
                                </div>
                                <!-- Single Input End -->
                                <!-- Single Input Start -->
                                {{-- <div class="single-input mb-6">
                                <select name="plan">
                                    <option value="Your Idea / plan">Your Idea / plan</option>
                                    <option value="plane-a">Plane A</option>
                                    <option value="plane-b">Plane B</option>
                                    <option value="plane-c">Plane C</option>
                                    <option value="plane-d">Plane D</option>
                                    <option value="plane-e">Plane E</option>
                                </select>
                            </div> --}}
                                <!-- Single Input End -->
                                <!-- Single Input Start -->
                                <div class="single-input mb-6">
                                    <textarea disabled name="message" placeholder="Message"> Rất vui vì được phục vụ quí khách</textarea>
                                </div>
                                <!-- Single Input End -->
                                <!-- Single Input Start -->
                                <div class="single-input mb-6">
                                    <a href="https://www.facebook.com/dcn.media1163" target="_blank" class="btn btn-primary btn-hover-dark w-100 btn-height-80">Liên hệ chúng tôi
                                        ngay </a>
                                </div>
                                <!-- Single Input End -->
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
