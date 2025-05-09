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
                        {{-- <div class="product-ratings">
                            <span class="star-rating">
                                <span class="rating-active">ratings</span>
                            </span>
                            <a href="#reviews" class="review-link">(<span class="count">2</span>
                                customer reviews)</a>
                        </div> --}}
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

    <!-- Reviews Section -->
    <div class="product-reviews mt-5">
        <h3>Customer Reviews</h3>
        
        <!-- Review Summary -->
        <div class="review-summary mb-4">
            <div class="average-rating">
                <h4>Average Rating: <span id="average-rating">0</span>/5</h4>
                <div class="stars" id="average-stars"></div>
            </div>
            <p>Total Reviews: <span id="total-reviews">0</span></p>
        </div>

        <!-- Review Form (for logged in users) -->
        @auth
        <div class="review-form mb-4">
            <h4>Write a Review</h4>
            <form id="review-form">
                @csrf
                <div class="form-group">
                    <label>Rating</label>
                    <div class="rating-input">
                        <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                        <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                        <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                        <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                        <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="comment">Your Review</label>
                    <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Review</button>
            </form>
        </div>
        @else
        <div class="alert alert-info">
            Please <a href="{{ route('login') }}">login</a> to write a review.
        </div>
        @endauth

        <!-- Reviews List -->
        <div class="reviews-list" id="reviews-list">
            <!-- Reviews will be loaded here -->
        </div>
    </div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    const productId = {{ $data['id'] }};
    
    // Function to render stars
    function renderStars(rating, element) {
        let stars = '';
        for (let i = 1; i <= 5; i++) {
            stars += `<span class="star ${i <= rating ? 'filled' : ''}">☆</span>`;
        }
        element.html(stars);
    }

    // Load reviews
    function loadReviews() {
        $.get(`/product/${productId}/reviews`, function(response) {
            $('#average-rating').text(response.averageRating);
            $('#total-reviews').text(response.totalReviews);
            renderStars(response.averageRating, $('#average-stars'));

            let reviewsHtml = '';
            response.reviews.forEach(review => {
                reviewsHtml += `
                    <div class="review-item mb-3">
                        <div class="review-header">
                            <div class="stars">${renderStars(review.rating, $('<div>')).html()}</div>
                            <span class="reviewer-name">${review.user.name}</span>
                            <span class="review-date">${new Date(review.created_at).toLocaleDateString()}</span>
                        </div>
                        <div class="review-content">
                            <p>${review.comment}</p>
                        </div>
                    </div>
                `;
            });
            $('#reviews-list').html(reviewsHtml);
        });
    }

    // Submit review
    $('#review-form').submit(function(e) {
        e.preventDefault();
        
        const formData = {
            product_id: productId,
            rating: $('input[name="rating"]:checked').val(),
            comment: $('#comment').val(),
            _token: $('input[name="_token"]').val()
        };

        $.ajax({
            url: `/product/${productId}/review`,
            method: 'POST',
            data: formData,
            success: function(response) {
                if (response.status === 'success') {
                    alert('Review submitted successfully and pending approval');
                    $('#review-form')[0].reset();
                    loadReviews();
                }
            },
            error: function(xhr) {
                const response = xhr.responseJSON;
                alert(response.message || 'Error submitting review');
            }
        });
    });

    // Initial load
    loadReviews();
});
</script>

<style>
.rating-input {
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
}

.rating-input input {
    display: none;
}

.rating-input label {
    cursor: pointer;
    font-size: 30px;
    color: #ddd;
    padding: 5px;
}

.rating-input input:checked ~ label,
.rating-input label:hover,
.rating-input label:hover ~ label {
    color: #ffd700;
}

.star {
    font-size: 20px;
    color: #ddd;
}

.star.filled {
    color: #ffd700;
}

.review-item {
    border-bottom: 1px solid #eee;
    padding: 15px 0;
}

.review-header {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
}

.reviewer-name {
    font-weight: bold;
}

.review-date {
    color: #666;
    font-size: 0.9em;
}
</style>
@endsection
