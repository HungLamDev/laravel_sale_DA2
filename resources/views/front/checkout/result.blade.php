@extends('front.layout.master')
@section('title', 'shop')
@section('body')

    <!-- Shopping Cart Section Begin  -->
    <div class="checkout-section spad">
        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <h4>{{ $notification }}</h4>
                    <a href="./" class="primary-btn mt-5">tiếp tục mua hàng</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Shopping Cart Section End -->

@endsection
