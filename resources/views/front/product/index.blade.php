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
                                <a>Danh mục</a>
                                <ul class="sort-by-dropdown">
                                    <li class="active"><a class="filter-category" data-category="">Tất cả</a></li>
                                    @foreach (\App\Models\Category::all() as $category)
                                        <li><a class="filter-category"
                                                data-category="{{ $category->id }}">{{ $category->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="short-by">
                                <a>Sắp xếp</a>
                                <ul class="sort-by-dropdown">
                                    <li class="active"><a class="sort-option" data-sort="default">Mặc định</a></li>
                                    <li><a class="sort-option" data-sort="price_low">Thấp đến Cao</a></li>
                                    <li><a class="sort-option" data-sort="price_high">Cao đến Thấp</a></li>
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
            @endif
        </div>
    </div>
    <!-- Shop Page Section End -->
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            let sort = 'default';
            let category = '';

            // Xử lý sắp xếp
            $('.sort-option').click(function (e) {
                e.preventDefault();
                sort = $(this).data('sort');
                updateProducts();
                $('.sort-option').parent().removeClass('active');
                $(this).parent().addClass('active');
            });

            // Xử lý lọc danh mục
            $('.filter-category').click(function (e) {
                e.preventDefault();
                category = $(this).data('category');
                updateProducts();
                $('.filter-category').parent().removeClass('active');
                $(this).parent().addClass('active');
            });

            function updateProducts() {
                $.ajax({
                    url: window.location.href,
                    method: 'GET',
                    data: {
                        sort: sort,
                        id_category: category
                    },
                    success: function (response) {
                        if (response.products && response.products.length > 0) {
                            let productsHtml = '';
                            response.products.forEach(function (product) {
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
                                                </div>
                                                <div class="product-content text-left">
                                                    <h3 class="title"><a href="${product.url}">${product.name}</a></h3>
                                                    <p class="product-price">
                                                        ${product.discount ? `<span class="main-price discounted"><del>${product.original_price} VNĐ</del></span>` : ''}
                                                        <span class="discounted-price">${product.price} VNĐ</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>`;
                            });
                            $('#product-list').html(productsHtml);
                        } else {
                            $('#product-list').html(`
                                    <div class="col-12">
                                        <div class="alert alert-info text-center">
                                            Không có sản phẩm nào được tìm thấy.
                                        </div>
                                    </div>
                                `);
                        }
                    },
                    error: function (xhr) {
                        console.error('Error:', xhr.status, xhr.responseText);
                        alert('Có lỗi xảy ra khi tải sản phẩm. Vui lòng thử lại sau.');
                    }
                });
            }
        });
    </script>
@endsection