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

    <div class="shopping-cart spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th>Mã sản phẩm</th>
                                    <th class="p-name">Tên sản phẩm</th>
                                    <th>Tổng cộng</th>
                                    <th>Chi tiết</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr data-rowid="">
                                        <td class="cart-pic first-row">
                                            <img class="pl-5" style="height: 100px;"
                                                src="front/img/products/{{ $order->orderDetails[0]->product->productImages[0]->path }}"
                                                alt="">
                                        </td>
                                        <td class="first-row">{{ $order->id }}
                                        </td>
                                        <td class="cart-title first-row">
                                            <h5>{{ $order->orderDetails[0]->product->name }}
                                                @if (count($order->orderDetails) > 1)
                                                    (and {{ count($order->orderDetails) }} other products)
                                                @endif
                                            </h5>
                                        </td>
                                        <td class="total-price first-row">
                                            {{ array_sum(array_column($order->orderDetails->toArray(), 'total')) }} vnđ</td>
                                        <td class=" first-row"><a class="btn"
                                                href="./account/my-order/{{ $order->id }}">Chi tiết</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Shopping Cart Section End -->
    @endsection
