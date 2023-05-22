@extends('front.layout.master')
@section('title', 'shop')
@section('body')

    <!-- Shopping Cart Section Begin  -->
    <div class="checkout-section spad">
        <div class="container">
            <form action="" method="POST" class="checkout-form">
                @csrf
                <div class="row">
                    @if (Cart::count() > 0)
                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <a href="./account/login" class="content-btn">nhấp vào đây để Đăng nhập</a>
                            </div>
                            <h4>Thông Tin khách Hàng</h4>
                            <div class="row">
                                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id ?? '' }}">
                                <div class="col-lg-6">
                                    <label for="fir">Tên <span>*</span></label>
                                    <input type="text" id="fir" name="first_name"
                                        value="{{ Auth::user()->name ?? '' }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="last">Họ <span>*</span></label>
                                    <input type="text" id="last" name="last_name">
                                </div>
                                <div class="col-lg-12">
                                    <label for="cun-name">Tên công ty</label>
                                    <input type="text" id="cun-name" name="company_name"
                                        value="{{ Auth::user()->company_name ?? '' }}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="cun">Quốc gia<span>*</span></label>
                                    <input type="text" id="cun" name="country_name"
                                        value="{{ Auth::user()->country ?? '' }}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="street">Địa chỉ <span>*</span></label>
                                    <input type="text" id="street" name="street_address" class="street-first"
                                        value="{{ Auth::user()->street_address ?? '' }}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="zip">Mã bưu chính</label>
                                    <input type="text" id="zip" name="postcode_zip"
                                        value="{{ Auth::user()->postcode_zip ?? '' }}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="town">Thị trấn / Thành phố <span>*</span></label>
                                    <input type="text" id="town" name="town_city"
                                        value="{{ Auth::user()->town_city ?? '' }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email">Địa chỉ email<span>*</span></label>
                                    <input type="text" id="email" name="email"
                                        value="{{ Auth::user()->email ?? '' }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="phone">Điện thoại <span>*</span></label>
                                    <input type="text" id="phone" name="phone"
                                        value="{{ Auth::user()->phone ?? '' }}">
                                </div>
                                <div class="col-lg-12">
                                    <div class="create-item">
                                        <label for="acc-create">
                                            Tạo tài khoản
                                            <input type="checkbox" id="acc-create">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <input type="text" placeholder="Nhập Mã giảm giá của bạn">
                            </div>
                            <div class="place-order">
                                <h4>Đơn hàng của bạn</h4>
                                <div class="order-total">
                                    <ul class="order-table">
                                        <li>Sản Phẩm <span>Tất Cả</span></li>
                                        @foreach ($carts as $cart)
                                            <li class="fw-normal">{{ number_format($cart->price, 0, ',', '.') }} x
                                                {{ $cart->qty }}
                                                <span>{{ number_format($cart->price * $cart->qty, 0, ',', '.') }}₫</span>
                                            </li>
                                        @endforeach

                                        <li class="fw-normal">Tổng thu
                                            <span>{{ number_format(floatval($subtotal), 0, ',', '.') }}₫</span>
                                        </li>
                                        <li class="total-price">Tất Cả
                                            <span>{{ number_format(floatval($total), 0, ',', '.') }}₫</span>
                                        </li>



                                    </ul>
                                    <div class="payment-check">
                                        <div class="pc-item">
                                            <label class="pc-check">
                                                Thanh toán khi nhận hàng
                                                <input type="radio" name="payment_type" value="pay_later" id="pc-check"
                                                    checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="pc-item">
                                            <label for="pc-paypal">
                                                Thanh toán với VNPAY
                                                <input type="radio" name="payment_type" value="online_payment"
                                                    id="pc-paypal">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="order-btn">
                                        <button type="submit" class="site-btn place-btn">Đặt Hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <h4> Giỏ hàng của bạn đang trống!</h4>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
    <!-- Shopping Cart Section End -->

@endsection
