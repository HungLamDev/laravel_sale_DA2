@extends('front.layout.master')
@section('title', 'Home')
@Section('body')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    `<section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="front/img/sale.jpg">

            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/cuahang.jpg">
                <div class="container">
                    {{-- <div class="row">
                        <div class="col-lg-5">
                            <span>Bag, Kids</span>
                            <h1>Black Friday</h1>
                            <p>San pham khong phai la thuoc khong co tac dung thay the thuoc chua benh</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div> --}}
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/new.jpg">

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Nam</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Nữ</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="front/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Trẻ Em</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                        <h2>Nữ</h2>
                        <a href="shop/category/Nữ">Xem Thêm</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active item" data-tag="*" data-category="women">Tất Cả</li>
                            <li class="item" data-tag=".Clothing" data-category="women">Quần Áo</li>
                            <li class="item" data-tag=".HandBag" data-category="women">Túi Xách</li>
                            <li class="item" data-tag=".Shoes" data-category="women">Giày</li>
                            <li class="item" data-tag=".Accessories" data-category="women">Phụ kiện</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">
                        @foreach ($featuredProducts['women'] as $product)
                            @include('front.components.product-item')
                        @endforeach
                    </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal of The Week Section Begin -->
    <section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Ưu đãi trong tuần</h2>
                    <p>Đồng giá chỉ từ 99k-149k-199k <br />SALE UP TO 70%
                    </p>
                    <div class="product-price">
                        Mua nhiều giảm nhiều
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Ngày</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Giờ</p>
                    </div>
                    <div class="cd-item">
                        <span>48</span>
                        <p>Phút</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Giây</p>
                    </div>
                </div>
                <a href="" class="primary-btn">Mua Ngay</a>
            </div>
        </div>
    </section>
    <!-- Deal of The Week Section End -->

    <!-- Men Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/products/man-large.jpg">
                        <h2>Nam</h2>
                        <a href="shop/category/Nam">Xem Thêm</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <ul>
                                <ul>
                                    <li class="active item" data-tag="*" data-category="men">Tất Cả</li>
                                    <li class="item" data-tag=".Clothing" data-category="men">Quần Áo</li>
                                    <li class="item" data-tag=".HandBag" data-category="men">Túi Xách</li>
                                    <li class="item" data-tag=".Shoes" data-category="men">Giày</li>
                                    <li class="item" data-tag=".Accessories" data-category="men">Phụ kiện</li>
                                </ul>
                            </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        @foreach ($featuredProducts['men'] as $product)
                            @include('front.components.product-item')
                        @endforeach
                    </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Summer_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Summer_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Summer_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Summer_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Summer_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Summer_Collection</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->


    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>TIN TỨC THỜI TRANG </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-blog">
                            <img src="front/img/blog/{{ $blog->image }}" alt="">
                            <div class="latest-text">
                                <div class="tag-list">
                                    <div class="tag-item">
                                        <i class="fa fa-calendar-o"></i>
                                        {{ date('M d, Y', strtotime($blog->created_at)) }}
                                    </div>
                                    <div class="tag-item">
                                        <i class="fa fa-comment-o"></i>
                                        {{-- chưa lấy được thông tin comments blog --}}
                                        {{ count($blog->blog_Comments) }}
                                    </div>
                                </div>
                                <a href="">
                                    <h4>{{ $blog->title }}</h4>
                                </a>
                                <p>{{ $blog->content }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="/front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Freeship toàn quốc</h6>
                                <p>Với hóa đơn trên 500.000₫</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="/front/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Giao Hàng Nhanh</h6>
                                <p>Giao nội tỉnh 6-12h
                                    Giao nội miền 24-36h
                                    Giao liên miền 48h</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="/front/img/icon-3.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Thanh toán an toàn</h6>
                                <p>bảo mật thông tin 100%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
@endsection
