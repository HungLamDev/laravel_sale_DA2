@extends('front.layout.master')
@section('title', 'Login')
@section('body')

    <!-- Breadcrunb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
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
                    <div class="register-form">
                        <h2>Register</h2>
                        @if (session('notification'))
                            <div class="alert alert-warning" role="alert
                    ">
                                {{ session('notification') }}

                            </div>
                        @endif
                        <form action="" method="POST">
                            @csrf
                            <div class="group-input">
                                <label for="name">Name *</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div class="group-input">
                                <label for="email">Username or Email address *</label>
                                <input type="text" id="username" name="email">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input type="password" id="pass" name="password">
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Confirm Password *</label>
                                <input type="password" id="con-pass" name="passwork_confirmation">
                            </div>
                            <button type="submit" class="site-btn login-btn">REGISTER</button>
                        </form>
                        <div class="switch-login">
                            <a href="./account/login" class="or-login">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Section End -->

@endsection
