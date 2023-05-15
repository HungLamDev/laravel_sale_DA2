{{-- {{-- những phần trong trang index được sử dụng chung sẽ được đặt ở đây  gồm page-header-foodter --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ asset('/') }}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | K$H </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.0/tailwind.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('front/css/slicknav.min.css') }}" ss type="text/css">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Start coding here -->
    <!-- Page Preloader -->
    <div id="preloder">
        <div class="loader">
        </div>
    </div>

    <!-- Header Section Begin -->
    <Header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                        nvkien2000710@student.ctuet.edu.vn
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        +84 941840847
                    </div>
                </div>

                <div class="ht-right">
                    @if (Auth::check())
                        <a href="./account/logout" class="login-panel"><i
                                class="fa fa-user"></i>{{ Auth::user()->name }} - Đăng Xuất</a>
                    @else
                        <a href="./account/login" class="login-panel"><i class="fa fa-user"></i>Đăng Nhập</a>
                    @endif

                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-twitter"></i></a>
                        <a href="#"><i class="ti-youtube"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="front/img/logo.png" height="25" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form action="shop">
                            <div class="advanced-search">
                                <button type="button " class="category-btn">Danh mục</button>
                                <div class="input-group">
                                    <input name="search" value="{{ request('search') }}" type="text"
                                        placeholder="Bạn đang muốn tìm kiếm ?">
                                    <button type="button"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="./cart">
                                    <i class="icon_bag_alt"></i>
                                    <span class="cart-count">{{ Cart::count() }}</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                @foreach (Cart::content() as $cart)
                                                    <tr data-rowId="{{ $cart->rowId }}">
                                                        <td class="si-pic"><img
                                                                src="front/img/products/{{ $cart->options->images[0]->path }}"
                                                                alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>{{ number_format(floatval($cart->price), 0, ',', '.') }}
                                                                    x {{ $cart->qty }}</p>
                                                                <h6>{{ $cart->name }}</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i onclick="removeCart('{{ $cart->rowId }}')"
                                                                class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>Tổng Cộng:</span>
                                        <h5>{{ Cart::total(0, ',', ',') }}₫</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="./cart" class="primary-btn view-card">Xem Giỏ Hàng</a>
                                        <a href="./checkout" class="primary-btn checkout-btn">Thanh Toán</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">{{ Cart::total(0, ',', ',') }}₫</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Tất Cả Sản phẩm</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Á0</a></li>
                            <li><a href="#">QUẦN</a></li>
                            <li><a href="#">QUẦN ÁO THỂ THAO</a></li>
                            <li><a href="#">BALO - TÚI XÁCH</a></li>
                            <li><a href="#">GIÀY DÉP</a></li>
                            <li><a href="#">GIÀY DÉP</a></li>
                            <li><a href="#">SET ÁO VEST</a></li>
                            <li><a href="#">SET ÁO QUẦN</a></li>
                            <li><a href="#">ĐỒ LÓT</a></li>
                            <li><a href="#">SET ÁO QUẦN</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="{{ request()->segment(1) == '' ? 'active' : '' }}"><a href="./">TRANG CHỦ</a>
                        </li>
                        <li class="{{ request()->segment(1) == 'shop' ? 'active' : '' }}"><a href="./shop">SẢN
                                PHẨM</a>
                        </li>
                        <li><a href="">BỘ SƯU TẬP</a>
                            <ul class="dropdown">
                                @foreach ($categories as $category)
                                    <li><a href="shop/category/{{ $category->name }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="contact.html">LiÊN HỆ</a>
                            <ul class="dropdown">
                                <li><a href="">HƯỚNG DẪN ĐẶT HÀNG</a></li>
                                <li>
                                    <a href="">KIỂM TRA SẢN PHẨM TẠI CHI NHÁNH</a>
                                </li>
                                <li><a href="">TÀI KHOẢN NGÂN HÀNG</a></li>
                                <li><a href="">CHÍNH SÁCH ĐỔI TRẢ</a></li>
                                <li><a href="">CHÍNH SÁCH KHÁCH HÀNG</a></li>
                                <li><a href="">CHƯƠNG TRÌNH ƯU ĐÃI SINH NHẬT</a></li>
                            </ul>
                        </li>
                        <li><a href="">THÔNG TIN</a>
                            <ul class="dropdown">
                                <li><a href="./account/my-order/">KIỂM TRA ĐƠN HÀNG</a></li>
                                <li><a href="./cart">GIỎ HÀNG</a></li>
                                <li><a href="./checkout">THANH TOÁN</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="register.html">ĐĂNG KÝ</a></li>
                                <li><a href="./account/login">ĐĂNG NHẬP</a></li>

                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>

    </Header>
    {{-- header-end --}}
    {{-- => sử dụng @yield('body')  --}}
    @yield('body')
    <!-- Partner Logo Section Begin -->

    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <a href="index.html">
                            <img src="front/img/footer-logo.png" height="25" alt="">
                        </a>

                    </div>
                    <div class="footer-widget">
                        <ul>
                            <li><a> Nguyen Van Cu, Q.Ninh Kieu, TP.Can Thơ </a></li>
                            <li><a>Phone: +84 94.18.40.474</a></li>
                            <li><a>Email: nvkien@student.ctuet.edu.vn</a></li>
                        </ul>
                    </div>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Thông tin</h5>
                        <ul>
                            <li><a href="">Về chúng tôi</a></li>
                            <li><a href="">Thanh toán</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Dịch vụ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Tài khoản của tôi</h5>
                        <ul>
                            <li><a href="">Tài khoản của tôi</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Giỏ hàng</a></li>
                            <li><a href="">Shop</a></li>
                            <li><a href="">Cửa hàng</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>ĐĂNG KÍ NHẬN TIN</h5>
                        <p>Nhận cập nhật qua email về cửa hàng mới nhất và chương trình khuyến mãi đặc biệt.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Nhập email của bạn">
                            <button type="button">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </div>
                        <div class="payment-pic">
                            <img src="front/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Js Plugins -->
    {{-- <script src="{{ asset('front/js/main.js') }}"></script> --}}
    <script src="{{ asset('front/js/jquery-3.3.1.min.js') }} "></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.zoom.min.js') }} "></script>
    <script src="{{ asset('front/js/jquery.nice-select.min.js') }} "></script>
    <script src="{{ asset('front/js/jquery.dd.min.js') }} "></script>
    <script src="{{ asset('front/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/owlcarousel2-filter.min.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>


</body>

</html>
