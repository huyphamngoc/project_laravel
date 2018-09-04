<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta content="{{csrf_token()}}" name="csrf-token">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/client/homepage.css')}}" rel="stylesheet">
    <link href="{{asset('css/client/banner-homepage.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"> </script>
    @yield('css')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Oswald|Source+Sans+Pro" rel="stylesheet">
</head>

<body>

<header id="header-lg">
    <div class="container mt-2">
        <div class="row">
            <img src="http://nhasachphuongnam.com/images/ads/201808/banner_web_tu-sach-vu-lan_1170x110.jpg">
        </div>

        <div class="row pt-3 pb-3">
            <div class="col-md-3">
                <h4><a href="/homepage"><img class="img-fluid" src="https://www.vinabook.com/public/assets/img/vnb_logo_2x.png" alt="MyCart"></a></h4>
            </div>
            <div class="col-md-7 top-infor-header">
                <ul class="nav">
                    <li class="nav-item col-md-4">
                        <div class="float-left text-header-icon">
                            <i class="fas fa-phone-volume pt-1"></i>
                        </div>
                        <div class="pl-5 text-header-title" >
                            <span >Hotline</span>
                            <p>0968 210 927</p>
                        </div>
                    </li>

                    <li class="nav-item col-md-4">
                        <div class="float-left text-header-icon">
                            <i class="fas fa-shipping-fast pt-1"></i>
                        </div>
                        <div class="pl-5 text-header-title" >
                            <span >Miễn phí giao hàng</span>
                            <p >Tận nơi - Toàn quốc</p>
                        </div>
                    </li>

                    <li class="nav-item col-md-4">
                        <div class="float-left text-header-icon">
                            <i class="fas fa-book pt-1"></i>
                        </div>
                        <div class="pl-5 text-header-title" >
                            <span >60,000 sách</span>
                            <p >Cập nhập hàng ngày</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="form-login col-md-2">
                <span>đăng nhập</span>
            </div>
        </div>
    </div>
    <div style="background: darkgreen;">
        <div class="container">
            <div class="row pt-2 pb-2" >
                <div class="col-md-3">
                    <h5 class="mt-2 text-uppercase text-light text-title-menu-header text-center">danh mục sách <i class="ml-4 fas fa-angle-down"></i></h5>
                </div>

                <div class="col-md-6">
                    <form class="form-inline">
                        <input type="text" class="form-control col-md-10" placeholder="Bạn muốn mua sách gì?" style="font-size: 14px">
                        <input type="submit" class="form-control bg-light text-dark" value="Search" style="font-size: 14px">
                    </form>
                </div>

                <div class="col-md-3">
                    <h3 class="text-center text-light text-menu-cart-header pl-4 pr-4 pt-2 pb-2">
                        <a href="#" class="text-light">
                            <i class="fas fa-cart-plus"></i>
                            Giỏ hàng
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer id="footer">
    <div class="container">
        <div class="row pt-3">
            <div class="row col-md-7">
                <div class="col-md-4">

                    <h5 class="ml-3 text-uppercase font-weight-bold ">về công ty </h5>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Giới thiệu công ty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Tuyển dụng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Góc báo chí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Chương trình đại lý</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Chính sách bảo mật</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Ứng dụng đọc ebook</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">

                    <h5 class="ml-3 text-uppercase font-weight-bold ">về công ty </h5>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Giới thiệu công ty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Tuyển dụng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Góc báo chí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Chương trình đại lý</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Chính sách bảo mật</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Ứng dụng đọc ebook</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">

                    <h5 class="ml-3 text-uppercase font-weight-bold ">về công ty </h5>

                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Giới thiệu công ty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Tuyển dụng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Góc báo chí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Chương trình đại lý</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Chính sách bảo mật</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Ứng dụng đọc ebook</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="row col-md-5">
                <div class="col-md-5">
                    <h5 class="ml-3 text-uppercase font-weight-bold ">FOLLOW US </h5>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img style="width: 26px" src="https://www.vinabook.com/public/assets/img/icon_fb_2x.jpg" alt="">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img style="width: 26px" src="https://www.vinabook.com/public/assets/img/icon_twt_2x.jpg" alt="">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img style="width: 26px" src="https://www.vinabook.com/public/assets/img/icon_g_2x.jpg" alt="">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img style="width: 26px" src="https://www.vinabook.com/public/assets/img/icon_p_2x.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <h5 class="ml-3 text-uppercase font-weight-bold ">chấp nhận thanh toán</h5>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a  class="nav-link" href="#">
                                <img src="https://www.vinabook.com/public/assets/img/visa.jpg" alt="">
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <img src="https://www.vinabook.com/public/assets/img/master_card.jpg" alt="">
                            </a>
                        </li>

                        <li class="nav-item">
                            <a  class="nav-link" href="#">
                                <img src="https://www.vinabook.com/public/assets/img/jsb.jpg" alt="">
                            </a>
                        </li>

                        <li class="nav-item">
                            <a  class="nav-link" href="#">
                                <img src="https://www.vinabook.com/public/assets/img/atm.jpg" alt="">
                            </a>
                        </li>

                        <li class="nav-item">
                            <a  class="nav-link" href="#">
                                <img src="https://www.vinabook.com/public/assets/img/cod.jpg" alt="">
                            </a>
                        </li>

                        <li class="nav-item">
                            <a  class="nav-link" href="#">
                                <img src="https://www.vinabook.com/public/assets/img/payoo.jpg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>