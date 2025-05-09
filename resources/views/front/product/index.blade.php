@extends('front.layout.index')
@section('content')
@include('front.layout.banner')

    <!-- Shop Page Section Start -->
    <div class="section section-padding-t150-b130 section-fluid">
        <div class="container">
            <div class="row mb-10">
                <div class="col-12">
                    <!-- Shop Top Bar Start -->
                    <div class="shop-top-bar shop-top-bar-flex" data-aos="fade-up">
                        <div class="shop-topbar-left">
                            <div class="page-show"></div>
                        </div>
                        <div class="shop-topbar-right shop-tab-flex">
                            <div class="short-by">
                                <a>Sắp xếp</a>
                                <ul class="sort-by-dropdown">
                                    <li class="active"><a class="sort-option" data-sort="default">Mặc định</a></li>
                                    <li><a class="sort-option" data-sort="price_low">Thấp đến Cao</a></li>
                                    <li><a class="sort-option" data-sort="price_high">Cao đến Thấp</a></li>
                                </ul>
                            </div>
                            <div class="filter short-by">
                                <a style="border-top:0 ;">Lọc</a>
                                <ul class="sort-by-dropdown">
                                    <li><a class="filter-option" data-filter="all">Tất cả sản phẩm</a></li>
                                    @foreach ($perPageOptions as $option)
                                        <li><a class="filter-option" data-filter="limit_{{ $option }}"
                                                class="{{ $currentPerPage == $option ? 'active' : '' }}">{{ $option }} items</a>
                                        </li>
                                    @endforeach
                                    @foreach (\App\Models\Category::all() as $category)
                                        <li><a class="filter-option"
                                                data-filter="category_{{ $category->id }}">{{ $category->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="filter short-by">
                                <a style="border-top:0 ;">Loại</a>
                                <ul class="sort-by-dropdown">
                                    @foreach (\App\Models\Category::all() as $category)
                                        <li><a class="filter-option"
                                                data-filter="category_{{ $category->id }}">{{ $category->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="shop-tab nav">
                                <a class="active"><i class="fa fa-th"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Top Bar End -->
                </div>
            </div>
            @if ($products->isEmpty())
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        Không có sản phẩm nào được tìm thấy.
                    </div>
                </div>
            @else
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 mb-n10" id="product-list">
                    @foreach ($products as $product)
                        <div class="col mb-10" data-aos="fade-up">
                            <div class="single-grid-product">
                                <div class="product-image">
                                    @if ($product['discount'])
                                        <div class="product-label">
                                            <span class="sale">{{ '-' . $product['discount'] . '%' }}</span>
                                        </div>
                                    @endif
                                    <a href="{{ $product['url'] }}">
                                        <img src="{{ $product['image'] }}" class="w-100" alt="{{ $product['name'] }}">
                                    </a>
                                </div>
                                <div class="product-content text-left">
                                    <h3 class="title"><a href="{{ $product['url'] }}">{{ $product['name'] }}</a></h3>
                                    <p class="product-price">
                                        @if ($product['discount'])
                                            <span class="main-price discounted"><del>{{ $product['original_price'] }} VNĐ</del></span>
                                        @endif
                                        <span class="discounted-price">{{ $product['price'] }} VNĐ</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-12 mt-xl-20 mt-10 text-center">
                        <a class="shop-load-more-btn" id="load-more" data-offset="{{ count($products) }}"
                            data-limit="{{ $currentPerPage }}" data-total="{{ $totalProducts }}">Xem thêm <i
                                class="fal fa-arrow-down"></i></a>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Shop Page Section End -->
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            let offset = parseInt($('#load-more').data('offset') || 0);
            let limit = parseInt($('#load-more').data('limit') || {{ $currentPerPage }});
            let total = parseInt($('#load-more').data('total') || {{ $totalProducts }});
            let sort = 'default';
            let filter = 'all';
            let currentDisplayed = offset; // Biến để theo dõi trạng thái hiển thị hiện tại

            // Kiểm tra ban đầu xem có cần hiển thị nút Load More không
            if (currentDisplayed >= total) {
                $('#load-more').hide();
            }

            // Xử lý khi nhấn "Load More"
            $('#load-more').click(function (e) {
                e.preventDefault();

                // Kiểm tra nếu đã tải hết sản phẩm
                if (currentDisplayed >= total) {
                    $('#load-more').hide();
                    return;
                }
                // Gửi yêu cầu với offset hiện tại
                loadProducts(currentDisplayed, limit, sort, filter);
            });

            // Xử lý sắp xếp
            $('.sort-option').click(function (e) {
                e.preventDefault();
                sort = $(this).data('sort');
                offset = 0;
                $('#product-list').empty();
                loadProducts(0, currentDisplayed || limit, sort, filter);
                $('.sort-option').parent().removeClass('active');
                $(this).parent().addClass('active');
            });

            // Xử lý lọc và số lượng hiển thị
            $('.filter-option').click(function (e) {
                e.preventDefault();
                let filterValue = $(this).data('filter');
                offset = 0;
                $('#product-list').empty();

                if (filterValue === 'all') {
                    limit = total; // Đặt limit bằng total để tải tất cả sản phẩm
                    filter = 'all';
                } else if (filterValue.startsWith('limit_')) {
                    limit = parseInt(filterValue.replace('limit_', '')); // Cập nhật limit
                    filter = 'all'; // Reset filter danh mục
                    currentDisplayed = limit; // Cập nhật số lượng sản phẩm hiện tại
                } else {
                    filter = filterValue; // Filter theo danh mục
                }

                console.log('Filter:', filter, 'Limit:', limit, 'Offset:', offset);

                loadProducts(0, currentDisplayed || limit, sort, filter); // Hàm loadProducts(offset, limit, sort, filter);
                $('.filter-option').parent().removeClass('active');
                $(this).parent().addClass('active');
            });

            function loadProducts(offset, limit, sort, filter) {
                console.log('Sending AJAX with Offset:', offset, 'Limit:', limit, 'Total:', total); // Debug
                $.ajax({
                    url: "{{ route('products.load') }}",
                    method: "GET",
                    data: {
                        offset: offset,
                        limit: limit,
                        sort: sort,
                        filter: filter
                    },
                    success: function (response) {
                        console.log('Response:', response); // Debug phản hồi
                        if (response.products && response.products.length > 0) {
                            let productsHtml = '';
                            $.each(response.products, function (index, product) {
                                productsHtml += `
                                                <div class="col mb-10" data-aos="fade-up">
                                                    <div class="single-grid-product">
                                                        <div class="product-image">
                                                        ${(product.discount && product.discount > 0) ? `
                                                            <div class="product-label">
                                                                <span class="sale">-${product.discount}%</span>
                                                            </div>` : ''}
                                                            <a href="${product.url}">
                                                                <img src="${product.image}" class="w-100" alt="${product.name}">
                                                            </a>
                                                            <div class="product-action">
                                                                <ul>
                                                                    <li><a href="/wishlist/${product.id}"><i class="fal fa-heart"></i></a></li>
                                                                    <li><a href="/cart/${product.id}"><i class="fal fa-shopping-cart"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content text-left">
                                                            <h3 class="title"><a href="${product.url}">${product.name}</a></h3>
                                                            <p class="product-price">
                                                                ${product.discount ? `<span class="main-price discounted"><del>$${product.original_price} VNĐ</del></span>` : ''}
                                                                <span class="discounted-price">$${product.price} VNĐ</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>`;
                            });
                            $('#product-list').append(productsHtml);
                        }

                        // Cập nhật total từ server
                        total = response.total;

                        // cập nhật currentDisplayed
                        currentDisplayed = offset + response.products.length;

                        // Cập nhật hiển thị nút Load More
                        if (currentDisplayed >= total) {
                            $('#load-more').hide();
                        } else {
                            $('#load-more').show();
                        }
                    },
                    error: function (xhr) {
                        console.error('Error:', xhr.status, xhr.responseText); // Debug lỗi
                        alert('Error loading products: ' + xhr.status);
                    }
                });
            }
        });
    </script>
@endsection
