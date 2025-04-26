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
                    <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6656.301844242596!2d106.647565676866!3d10.713187489431796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f007f75a6ef%3A0x5fbc6ad30c1dc16b!2sDCN%20Media!5e1!3m2!1svi!2s!4v1745513519392!5m2!1svi!2s" aria-hidden="false" tabindex="0"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {{-- <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}
                </div>
                <!-- Google Map End -->
            </div>
            <div class="col" data-aos="fade-up" data-aos="fade-up" data-aos-delay="300">
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
                                <input type="email" name="email" disabled value="dcnmedia43@gmail.com" placeholder="Your Email *">
                            </div>
                            <!-- Single Input End -->
                            <!-- Single Input Start -->
                            <div class="single-input mb-6">
                                <input type="text" name="website" disabled value="dcnmedia.com" placeholder="You Website">
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
                                <button class="btn btn-primary btn-hover-dark w-100 btn-height-80">Liên hệ chúng tôi ngay </button>
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
