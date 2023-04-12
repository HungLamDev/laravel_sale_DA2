@extends('front.layout.master')
@section('title', 'My Order')
@section('body')
    <!-- Breadcrunb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i> Home</a>
                        <span>My Order</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrunb Section End -->
    <!-- Shopping Cart Section Begin -->
    <div class="checkout-section spad">
        <div class="container">
            <form action="" method="POST" class="checkout-form">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="login.html" class="content-btn">Order ID: <b>{{ $order->id }}</b></a>
                        </div>
                        <h4>Billing Detials</h4>
                        <div class="row">
                            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id ?? '' }}">
                            <div class="col-lg-6">
                                <label for="fir">first Name <span>*</span></label>
                                <input type="text" id="fir" name="first_name" value="{{ $order->first_name }}">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Last Name <span>*</span></label>
                                <input type="text" id="last" name="last_name" {{ $order->last_name }}>
                            </div>
                            <div class="col-lg-12">
                                <label for="cun-name">Company Name</label>
                                <input type="text" id="cun-name" name="company_name" value="{{ $order->company_name }}">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun">Country<span>*</span></label>
                                <input type="text" id="cun" name="country_name" value="{{ $order->country_name }}">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Street Address<span>*</span></label>
                                <input type="text" id="street" name="street_address" class="street-first"
                                    value="{{ $order->street_address }}">
                            </div>
                            <div class="col-lg-12">
                                <label for="zip">Postcode / ZIP (optinal)</label>
                                <input type="text" id="zip" name="postcode_zip" value="{{ $order->postcode_zip }}">
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Town / City <span>*</span></label>
                                <input type="text" id="town" name="town_city" value="{{ $order->town_city }}">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email Address <span>*</span></label>
                                <input type="text" id="email" name="email" value="{{ $order->email }}">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone <span>*</span></label>
                                <input type="text" id="phone" name="phone" value="{{ $order->phone }}">
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Create an account
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="" class="content-btn">Status::
                                <b>{{ \App\Utilities\Constant::$order_status[$order->status] }}</b></a>
                        </div>
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>
                                    @foreach ($order->orderDetails as $orderDetail)
                                        <li class="fw-normal">{{ $orderDetail->product->name }} x {{ $orderDetail->qty }}
                                            <span>{{ $orderDetail->total }} vnđ</span>
                                        </li>
                                    @endforeach
                                    <li class="total-price">Total
                                        <span>{{ array_sum(array_column($order->orderDetails->toArray(), 'total')) }} vnđ
                                        </span>
                                    </li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label class="pc-check">
                                            Thanh toán khi nhận hàng
                                            <input type="radio" name="payment_type" value="pay_later" id="pc-check"
                                                {{ $order->payment_type == 'pay_later' ? 'checked' : '' }}>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Thanh toán với VNPAY
                                            <input type="radio" name="payment_type" value="online_payment"
                                                id="pc-paypal"
                                                {{ $order->payment_type == 'online_payment' ? 'checked' : '' }}>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- Shopping Cart Section End -->
@endsection
