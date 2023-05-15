@extends('front.layout.master')
@section('title', 'Login')
@section('body')

    <!-- Breadcrunb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i> Trang chủ</a>
                        <span>Đăng nhập</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrunb Section End -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Đăng nhập</h2>
                        @if (session('notification'))
                            <div class="alert alert-warning" role="alert
                        ">
                                {{ session('notification') }}

                            </div>
                        @endif
                        <form action="" method="POST">
                            @csrf
                            <div class="group-input">
                                <label for="email">Tên đăng nhập hoặc địa chỉ Email *</label>
                                <input type="text" id="email" name="email" />
                            </div>
                            <div class="group-input">
                                <label for="pass">Mật khẩu *</label>
                                <input id="pass" type="password" name='password' />
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                        Lưu mật khẩu
                                        <input type="checkbox" id="save-pass" name="remember" />
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#" class="forget-pass">Quên mật khẩu?</a>
                                </div>
                            </div>
                            <button type="submit" class="site-btn login-btn">
                                Đăng nhập
                            </button>
                        </form>
                        <div class="switch-login">
                            <a href="./account/register" class="or-login">Tạo tài khoản mới</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
