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
                            <span class="price-old">{{ ($data['original_price'])}} VNĐ</span>
                        </span>
                        <div class="product-ratings">
                            <span class="star-rating">
                                <span class="rating-active" style="width: {{ $data['average_rating'] ?? 0 }}%"></span>
                            </span>
                            <a href="#reviews" class="review-link">(<span class="count">{{ $data['total_reviews'] ?? 0 }}</span>
                                khách hàng đánh giá)</a>
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
    <div class="product-reviews mt-5" id="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title text-center mb-4">Review sản phẩm</h3>
                    
                    <!-- Review Summary -->
                    <div class="review-summary mb-5">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="average-rating text-center">
                                    <h4 class="mb-3">Đánh giá trung bình</h4>
                                    <div class="rating-number mb-2">
                                        <span id="average-rating">0</span><span>/5</span>
                                    </div>
                                    <div class="stars mb-2" id="average-stars"></div>
                                    <p class="text-muted">Dựa trên <span id="total-reviews">0</span> reviews</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="rating-bars">
                                    <!-- Rating bars will be dynamically added here -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review Form (for logged in users) -->
                    @auth
                    <div class="review-form mb-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Viết đánh giá</h4>
                                <form id="review-form">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <div class="rating-input">
                                            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="comment">Đánh giá của bạn</label>
                                        <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Đăng</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="alert alert-info text-center">
                        Please <a href="{{ route('login') }}" class="alert-link">Login</a> để viết đánh giá.
                    </div>
                    @endauth

                    <!-- Reviews List -->
                    <div class="reviews-list" id="reviews-list">
                        <!-- Reviews will be loaded here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if jQuery is loaded
        if (typeof jQuery === 'undefined') {
            console.error('jQuery is not loaded');
            return;
        }

        const productId = {{ $data['id'] }};

        // Function to render stars
        function renderStars(rating, element) {
            let stars = '';
            for (let i = 1; i <= 5; i++) {
                stars += `<span class="star ${i <= rating ? 'filled' : ''}">☆</span>`;
            }
            if (element instanceof jQuery) {
                element.html(stars);
            } else {
                element.innerHTML = stars;
            }
            return stars;
        }

        // Simple scroll to reviews
       const reviewLink = document.querySelector('.review-link');
        if (reviewLink) {
            reviewLink.addEventListener('click', function (e) {
                e.preventDefault();
                const reviewsSection = document.getElementById('reviews');
                if (reviewsSection) {
                    setTimeout(() => {
                        const offset = 100; // Adjust for fixed header if necessary
                        const top = reviewsSection.getBoundingClientRect().top + window.scrollY - offset;

                        window.scrollTo({
                            top: top,
                            behavior: 'smooth'
                        });
                    }, 100); // Wait for reviews to render
                }
            });
        }

        // Load reviews
        function loadReviews() {
            fetch(`/product/${productId}/reviews`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(response => {
                    // Update average rating and total reviews
                    document.getElementById('average-rating').textContent = response.averageRating || 0;
                    document.getElementById('total-reviews').textContent = response.totalReviews || 0;
                    renderStars(response.averageRating || 0, document.getElementById('average-stars'));

                    // Update the product ratings at the top
                    const ratingWidth = (response.averageRating || 0) * 20;
                    document.querySelector('.rating-active').style.width = `${ratingWidth}%`;
                    document.querySelector('.count').textContent = response.totalReviews || 0;

                    // Calculate rating distribution
                    const ratingCounts = {};
                    for (let i = 1; i <= 5; i++) {
                        ratingCounts[i] = 0;
                    }
                    if (response.reviews && response.reviews.length > 0) {
                        response.reviews.forEach(review => {
                            ratingCounts[review.rating]++;
                        });
                    }

                    // Update rating bars
                    let ratingBarsHtml = '';
                    for (let i = 5; i >= 1; i--) {
                        const count = ratingCounts[i] || 0;
                        const percentage = response.totalReviews ? (count / response.totalReviews) * 100 : 0;
                        ratingBarsHtml += `
                            <div class="rating-bar-item mb-2">
                                <div class="d-flex align-items-center">
                                    <span class="rating-label">${i} sao</span>
                                    <div class="progress flex-grow-1 mx-2">
                                        <div class="progress-bar" role="progressbar" style="width: ${percentage}%"></div>
                                    </div>
                                    <span class="rating-count">${count}</span>
                                </div>
                            </div>
                        `;
                    }
                    document.querySelector('.rating-bars').innerHTML = ratingBarsHtml;

                    // Update reviews list
                    let reviewsHtml = '';
                    if (!response.reviews || response.reviews.length === 0) {
                        reviewsHtml = `
                            <div class="alert alert-info text-center">
                                Chưa có đánh giá nào. Hãy là người đầu tiên đánh giá sản phẩm này!
                            </div>
                        `;
                    } else {
                        response.reviews.forEach(review => {
                            const starsHtml = renderStars(review.rating, document.createElement('div'));
                            reviewsHtml += `
                                <div class="review-item card mb-4">
                                    <div class="card-body">
                                        <div class="review-header d-flex align-items-center mb-3">
                                            <div class="reviewer-info me-3">
                                                <h5 class="reviewer-name mb-0">${review.user.name}</h5>
                                                <small class="text-muted">${new Date(review.created_at).toLocaleDateString()}</small>
                                            </div>
                                            <div class="stars" style="padding-bottom:25px;">${starsHtml}</div>
                                        </div>
                                        <div class="review-content">
                                            <p class="mb-0">${review.comment}</p>
                                        </div>
                                    </div>
                                </div>
                            `;
                        });
                    }
                    document.getElementById('reviews-list').innerHTML = reviewsHtml;
                })
                .catch(error => {
                    console.error('Error loading reviews:', error);
                    document.getElementById('reviews-list').innerHTML = `
                        <div class="alert alert-danger text-center">
                            Có lỗi xảy ra khi tải đánh giá. Vui lòng thử lại sau.
                        </div>
                    `;
                });
        }

        // Submit review
        const reviewForm = document.getElementById('review-form');
        if (reviewForm) {
            reviewForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const rating = document.querySelector('input[name="rating"]:checked')?.value;
                const comment = document.getElementById('comment').value;
                const token = document.querySelector('input[name="_token"]').value;

                if (!rating) {
                    alert('Vui lòng chọn số sao');
                    return;
                }

                if (!comment.trim()) {
                    alert('Vui lòng nhập đánh giá của bạn');
                    return;
                }

                const formData = {
                    rating: rating,
                    comment: comment,
                    _token: token
                };

                fetch(`/product/${productId}/review`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': token,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(formData)
                })
                .then(response => {
                    if (!response.ok) {
                        return response.json().then(err => {
                            if (err.errors) {
                                // Get the first error message from each field
                                const errorMessages = Object.values(err.errors).map(messages => messages[0]);
                                throw new Error(errorMessages.join('\n'));
                            }
                            throw new Error(err.message || 'Có lỗi xảy ra khi gửi đánh giá');
                        });
                    }
                    return response.json();
                })
                .then(response => {
                    if (response.status === 'success') {
                        alert('Đánh giá đã được gửi thành công');
                        reviewForm.reset();
                        loadReviews();
                    } else {
                        alert(response.message || 'Có lỗi xảy ra khi gửi đánh giá');
                    }
                })
                .catch(error => {
                    console.error('Error submitting review:', error);
                    alert(error.message || 'Có lỗi xảy ra khi gửi đánh giá. Vui lòng thử lại sau.');
                });
            });
        }

        // Initial load
        loadReviews();
    });
    </script>

    <style>
    .rating-input {
        display: flex;
        justify-content: flex-start;
    }

    .rating-input input {
        display: none;
    }

    .rating-input label {
        cursor: pointer;
        font-size: 30px;
        color: #ddd;
        padding: 5px;
        transition: color 0.2s ease;
    }

    .rating-input input:checked ~ label,
    .rating-input label:hover,
    .rating-input label:hover ~ label {
        color: #ffd700;
    }

    .star {
        font-size: 20px;
        color: #ddd;
        transition: color 0.2s ease;
    }

    .star.filled {
        color: #ffd700;
    }

    .review-item {
        transition: transform 0.2s ease;
        border: 1px solid #e9ecef;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .review-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .review-header {
        border-bottom: 1px solid #e9ecef;
        padding-bottom: 1rem;
    }

    .reviewer-info {
        min-width: 70px;
    }

    .reviewer-name {
        color: #333;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .review-content {
        color: #666;
        line-height: 1.6;
        padding-top: 1rem;
    }

    .rating-number {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
    }

    .rating-number span:first-child {
        color: #ffd700;
    }

    .progress {
        height: 8px;
        background-color: #f0f0f0;
    }

    .progress-bar {
        background-color: #ffd700;
    }

    .rating-label {
        min-width: 70px;
    }

    .rating-count {
        min-width: 40px;
        text-align: right;
    }

    .section-title {
        position: relative;
        padding-bottom: 15px;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 2px;
        background-color: #ffd700;
    }

    .alert-info {
        background-color: #f8f9fa;
        border-color: #e9ecef;
        color: #495057;
    }

    .alert-info .alert-link {
        color: #0056b3;
        text-decoration: none;
    }

    .alert-info .alert-link:hover {
        text-decoration: underline;
    }

    .star-rating {
        position: relative;
        display: inline-block;
        width: 80px;
        height: 16px;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23ddd"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>') repeat-x;
        background-size: 16px;
    }

    .rating-active {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23ffd700"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>') repeat-x;
        background-size: 16px;
    }
    </style>
@endsection
