@extends('front.layout.master')
@section('title', 'Product')
@section('body')

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('front.shop.components.products-sidebar-fiter')
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img"
                                    src="front/img/products/{{ $product->productImages[0]->path ?? '' }}" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    @foreach ($product->productImages as $productImage)
                                        <div class="pt active"
                                            data-imgbigurl="front/img/product-single/products/{{ $productImage->path }}">
                                            <img src="front/img/products/{{ $productImage->path }}" alt="">
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>{{ $product->tag }}</span>
                                    <h3>{{ $product->name }}</h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $product->avgRating)
                                            <i class="fa fa-star"></i>
                                        @else
                                            <i class="fa fa-star-0"></i>
                                        @endif
                                    @endfor
                                    <span>({{ count($product->productComments) }})</span>
                                </div>
                                <div class="pd-desc">
                                    <p>{{ $product->content }}</p>

                                    @if ($product->discount != null)
                                        <h4> {{ number_format($product->discount, 0, ',', ',') }}<span>{{ number_format($product->price, 0, ',', ',') }}₫</span>
                                        </h4>
                                    @else
                                        <h4>{{ number_format($product->price, 0, ',', '.') }}₫</h4>>
                                    @endif

                                </div>
                                <div class="pd-color">
                                    <h6>Color</h6>
                                    <div class="pd-color-choose">
                                        @foreach (array_unique(array_column($product->productDetails->toArray(), 'Màu')) as $productColor)
                                            <div class="cc-item">
                                                <input type="radio" id="cc-{{ $productColor }}">
                                                <label for="cc-{{ $productColor }}"
                                                    class="cc-{{ $productColor }}"></label>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="pd-size-choose">
                                    @foreach (array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                                        <div class="sc-item">
                                            <input type="radio" id="sm-{{ $productSize }}">
                                            <label for="sm-{{ $productSize }}">{{ $productSize }}</label>
                                        </div>
                                    @endforeach


                                </div>
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                    <a href="javascript:addCart({{ $product->id }})" class="primary-btn pd-cart">Thêm vào
                                        giỏ</a>
                                </div>
                                <ul class="pd-tags">
                                    <li><span>Bộ sưu tập</span>: {{ $product->productCategory->name }}</li>
                                    <li><span>TAGS</span>: {{ $product->tag }}</li>
                                </ul>
                                <div class="pd-share">
                                    <div class="p-code">Mã sản phẩm : {{ $product->sku }}</div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab">
                            <div class="tab-item">
                                <ul class="nav" role="tablist">
                                    <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">Mô tả</a>
                                    </li>
                                    <li><a href="#tab-2" data-toggle="tab" role="tab">Bộ sưu tập</a></li>
                                    <li><a href="#tab-3" data-toggle="tab" role="tab">Đánh giá khách hàng
                                            ({{ count($product->productComments) }})</a></li>
                                </ul>
                            </div>
                            <div class="tab-item-content">
                                <div class="tab-content">
                                    <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                        <div class="product-content">
                                            <div class="row">
                                                <div class="col-lg-7">
                                                    {!! $product->description !!}
                                                </div>
                                                {{-- <div class="col-lg-5">
                                                    <img src="front/img/product-single/tab-desc.jpg" alt="">
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                        <div class="specification-table">
                                            <table>
                                                <tr>
                                                    <td class="p-category">Đánh giá của khách hàng</td>
                                                    <td>
                                                        <div class="pd-rating">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $product->avgRating)
                                                                    <i class="fa fa-star"></i>
                                                                @else
                                                                    <i class="fa fa-star-0"></i>
                                                                @endif
                                                            @endfor
                                                            <span>({{ count($product->productComments) }})</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">GIÁ</td>
                                                    <td>
                                                        <div class="p-price">
                                                            {{ number_format($product->price, 0, ',', '.') }}₫
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">THÊM VÀO GIỎ</td>
                                                    <td>
                                                        <div class="cart-add"
                                                            href="javascript:addCart({{ $product->id }})">+THÊM VÀO GIỎ
                                                            HÀNG</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">HÀNG CÓ SẴN</td>
                                                    <td class="p-stock">{{ $product->qty }} in stock</td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">TRỌNG LƯỢNG</td>
                                                    <td>
                                                        <div class="p-weight">{{ $product->weight }}</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">KÍCH THƯỚC</td>
                                                    <td>
                                                        <div class="p-size">
                                                            @foreach (array_unique(array_column($product->productDetails->toArray(), 'size')) as $productSize)
                                                                {{ $productSize }}
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">MÀU</td>
                                                    <td>
                                                        @foreach (array_unique(array_column($product->productDetails->toArray(), 'color')) as $productColor)
                                                            <span
                                                                class="cs-{{ $productColor }}">{{ $productColor }},</span>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-catagory">MÃ SẢN PHẨM</td>
                                                    <td>
                                                        <div class="p-code">{{ $product->sku }}</div>
                                                    </td>
                                                </tr>


                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                        <div class="customer-review-option">
                                            <h4>{{ count($product->productComments) }} bình luận</h4>
                                            <div class="comment-option">
                                                {{-- chưa lấy comment từ khách hàng ram  --}}

                                                <div class="leave-comment">
                                                    <h4>Viết bình luận</h4>
                                                    <form action="" method="POST" class="comment-form">
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $product->id }}">
                                                        <input type="hidden" name="user_id"
                                                            value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null }}">

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <input type="text" placeholder="Tên" name="name">
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="text" placeholder="Email" name="email">
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <textarea placeholder="Nội Dung" name="messages"></textarea>
                                                                <div class="personal-rating">
                                                                    <h6>Đánh giá của bạn</h6>
                                                                    <div class="rate">
                                                                        <input type="radio" id="star5"
                                                                            name="rating" value="5" />
                                                                        <label for="star5" title="text">5
                                                                            stars</label>
                                                                        <input type="radio" id="star4"
                                                                            name="rating" value="4" />
                                                                        <label for="star4" title="text">4
                                                                            stars</label>
                                                                        <input type="radio" id="star3"
                                                                            name="rating" value="3" />
                                                                        <label for="star3" title="text">3
                                                                            stars</label>
                                                                        <input type="radio" id="star2"
                                                                            name="rating" value="2" />
                                                                        <label for="star2" title="text">2
                                                                            stars</label>
                                                                        <input type="radio" id="star1"
                                                                            name="rating" value="1" />
                                                                        <label for="star1" title="text">1
                                                                            star</label>
                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="site-btn">Đăng</button>
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
                </div>
            </div>
    </section>
    <!-- Product Shop Section End -->

    <!-- Related Products Section Begin -->
    <div class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>SẢN PHẨM LIÊN QUAN</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($relatedProduct as $product)
                    <div class="col-lg-3 col-sm-6">
                        @include('front.components.product-item')

                    </div>
                @endforeach

            </div>
        </div>
        <!-- Related Products Section End -->
    @endsection
