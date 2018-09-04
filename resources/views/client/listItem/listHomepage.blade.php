@extends('client.homepage.master1.master')
@section('title', 'List Product')
@section('css')
    <link href="{{asset('css/client/listHomepage.css')}}" rel="stylesheet">
@endsection


@section('content')
    <div id="banner-header" >
        <div class="container">
            <div class="row pb-4">
                <div class="col-md-3">
                    <ul class="menu-banner-item-left list-group">
                        <li class="list-group-item"> <a class="text-menu-banner-item-left-new" href="#">Sách bán chạy <i style="color: #b5b5b5;" class="float-right  fas fa-angle-right"></i></a> </li>
                        <li class="list-group-item"> <a class="text-menu-banner-item-left-new" href="#">Sách sắp phát hành <i style="color: #b5b5b5;" class="float-right  fas fa-angle-right"></i></a> </li>
                        <li class="list-group-item"> <a class="text-menu-banner-item-left-new" href="#">Sách mới phát hành <i style="color: #b5b5b5;" class="float-right  fas fa-angle-right"></i></a> </li>
                        <li class="list-group-item"> <a class="text-menu-banner-item-left" href="#">Sách mới phát hành <i style="color: #b5b5b5;" class="float-right  fas fa-angle-right"></i></a> </li>
                        <li class="list-group-item"> <a class="text-menu-banner-item-left" href="#">Sách mới phát hành <i style="color: #b5b5b5;" class="float-right  fas fa-angle-right"></i></a> </li>
                        <li class="list-group-item"> <a class="text-menu-banner-item-left" href="#">Sách mới phát hành <i style="color: #b5b5b5;" class="float-right  fas fa-angle-right"></i></a> </li>
                        <li class="list-group-item"> <a class="text-menu-banner-item-left" href="#">Sách mới phát hành <i style="color: #b5b5b5;" class="float-right  fas fa-angle-right"></i></a> </li>
                        <li class="list-group-item"> <a class="text-menu-banner-item-left" href="#">Sách mới phát hành <i style="color: #b5b5b5;" class="float-right  fas fa-angle-right"></i></a> </li>
                        <li class="list-group-item"> <a class="text-menu-banner-item-left" href="#">Sách mới phát hành <i style="color: #b5b5b5;" class="float-right  fas fa-angle-right"></i></a> </li>
                        <li class="list-group-item"> <a class="text-menu-banner-item-left" href="#">Sách mới phát hành <i style="color: #b5b5b5;" class="float-right  fas fa-angle-right"></i></a> </li>
                        <li class="list-group-item"> <a class="text-menu-banner-item-left" href="#">Sách mới phát hành <i style="color: #b5b5b5;" class="float-right  fas fa-angle-right"></i></a> </li>
                        <li class="list-group-item"> <a class="text-menu-banner-item-left" href="#">Sách mới phát hành <i style="color: #b5b5b5;" class="float-right  fas fa-angle-right"></i></a> </li>

                    </ul>
                </div>
                <div class="col-md-9">
                    <div id="carouselExampleIndicators" class="carousel slide mt-4 border border-success rounded " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img style="width: 850px;height: 480px" class="d-block w-100 img-fluid" src="http://nhasachphuongnam.com/images/banner/201808/banner_web_tu-hai-chu-du_925x412.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img style="width: 850px;height: 480px" class="d-block w-100" src="http://nhasachphuongnam.com/images/banner/201808/banner_web_khuyen-mai-he_925x412_CS.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img style="width: 850px;height: 480px" class="d-block w-100" src="http://nhasachphuongnam.com/images/banner/201808/banner_web_tu-sach-song-than-thai_925x412.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img style="width: 850px;height: 480px" class="d-block w-100" src="http://nhasachphuongnam.com/images/banner/201808/banner_web_tu-idol-kpop_925x412_CS.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img style="width: 850px;height: 480px" class="d-block w-100" src="http://nhasachphuongnam.com/images/banner/201808/banner_web_tu-sach-kinh-te-ky-nang_925x412.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img style="width: 850px;height: 480px" class="d-block w-100" src="http://nhasachphuongnam.com/images/banner/201808/banner_web_combo-tap-logical_925x412.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img style="width: 850px;height: 480px" class="d-block w-100" src="http://nhasachphuongnam.com/images/banner/201808/banner_web_phuong-nam-bestseller_925x412.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="title-list-product-homepage" >
                    <h1><a href="#">TOP sách bán chạy nhất</a></h1>
                </div>
                <div class="row col-md-12">
                    @foreach($book as $key =>$item)
                        <div class="col-md-3  product-item-listHomepage" >
                            <div class="img-product-css text-center pt-5">
                                <a href="/demo1/{{$item->id}}" ><img src="{{$item->image}}" style=" max-width: 100%;"></a>
                            </div>
                            <div class="text-product-listHomepage pt-3">
                                <a href="#" class="text-dark"> <p class="text-center mb-0">{{$item->title}}</p></a>
                                <a href="#" class="text-danger mt-3"> <p class="text-center font-weight-bold  mb-0">{{$item->price}} đ </p></a>


                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3 border border-success rounded bg-white">
                <div class="title-list-product-homepage" >
                    <h1><a style="font-size: 17px" href="#">Sách Bán Chạy Trong Tuần</a></h1>
                </div>

                    @foreach($book as $key =>$item)
                        <div class="row col-md-12 bg-white product-item pt-3 pb-2">
                            <div class=" col-md-5 " >
                                <div class="img-product float-left ">
                                    <a href="#"><img src="{{$item->image}}" style="height: auto; max-width: 100%;"></a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="text-product">
                                    <a href="#" class="text-dark"> <p class="text-center mb-0" style="font-size: 14px">{{$item->title}}</p></a>
                                    <a href="#" class="text-danger mt-3"> <p class="text-center font-weight-bold  mb-0">{{$item->price}} đ </p></a>

                                </div>
                                <div class="overlay">
                                    <div class="text"><a href="#" class="text-white">Xem chi tiết</a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

        </div>
    </div>
@endsection