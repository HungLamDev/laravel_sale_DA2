{{-- {{-- những phần trong trang index được sử dụng chung sẽ được đặt ở đây  gồm page-header-foodter --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | K$H </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
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
            <div class="ht-left">
                <div class="container">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                        nvkien2000710@student.ctuet.edu.vn
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        +84 941840***
                    </div>
                </div>
            </div>
            <div class="ht-right">
                <a href="login.html" class="login-panel"><i class="fa fa-user"></i> login</a>
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width: 300px;">
                        <option value="yt" data-image="img/flag-1.jpg" data-imagecss="flag yt" data-title="English">
                            English</option>
                        <option value="yt" data-image="img/flag-2.jpg" data-imagecss="flag yt"
                            data-title="Bangladesh">German</option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" height="25" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="Bạn đang muốn tìm kiếm ?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
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
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="img/select-product-1.jpg"
                                                            alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Ngo Van Kien</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shopping-cart.html" class="primary-btn view-card">View Card</a>
                                        <a href="check-out.html" class="primary-btn checkout-btn">Check Out</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$150.00</li>
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
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#"></a>Men's Clothing</li>
                            <li><a href="#"></a>Women's Clothing</li>
                            <li><a href="#"></a>Underwear</li>
                            <li><a href="#"></a>Kid's Clothing</li>
                            <li><a href="#"></a>Brand</li>
                            <li><a href="#"></a>Accessories Shoes</li>
                            <li><a href="#"></a>Luxury Brands</li>
                            <li><a href="#"></a>brand Outdoor Apparel</li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="">Collection</a>
                            <ul class="dropdown">
                                <li><a href="">Men's</a></li>
                                <li><a href="">Women's</a></li>
                                <li><a href="">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="">Pages</a>
                            <ul class="dropdown">
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="check-out.html">Checkout</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
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
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <a href="index.html">
                            <img src="img/footer-logo.png" height="25" alt="">
                        </a>
                    </div>
                    <ul>
                        <li>311 Nguyen Van Cu, Q.Ninh Kieu, TP.Can Ther</li>
                        <li>Phone: +84 94.18.40.474</li>
                        <li>Email: nvkien2000710@student.ctuet.edu.vn</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5> Information</h5>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">CheckOut</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5> My Account</h5>
                        <ul>
                            <li><a href="">My Account</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">shopping Cart</a></li>
                            <li><a href="">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newletter Now</h5>
                        <p>Get E-mail updates about latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter your Email">
                            <button type="button">Subcrise</button>
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
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Js Plugins -->
    <script src="{{ asset('front/js/main.js') }}"></script>
    <script src="{{ asset('front/js/jquery-3.3.1.min.js') }} "></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.zoom.min.js') }} "></script>
    <script src="{{ asset('front/js/jquery.dd.min.js') }} "></script>
    <script src="{{ asset('front/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>


</body>

</html>