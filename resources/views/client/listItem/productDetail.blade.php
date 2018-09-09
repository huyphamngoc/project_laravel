@extends('client.homepage.master1.master')
@section('title', 'List Product')
@section('css')
    <link href="{{asset('css/client/productDetail.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div id="productDetail">
        <div class="container">
            <div class="row pt-3">
                <div class="col-md-4">
                    <img class="img-fluid" src="{{$book->image}}" alt="">
                </div>
                <div class="col-md-5 pt-3">
                    <div class="infor-bookDetail">
                        <h3>{{$book->title}}</h3>
                        <p>Tác giả : <a href="#">{{$book->author}}</a></p>
                        <button></button>
                        <p style="font-size: 15px; line-height: 26px; color: #66645c; font-family: Arial ;">{{$book->description}}</p>
                    </div>
                    <div>
                        <h5>Thông tin kèm theo</h5>
                        <p>Có dịch vụ bọc sách plastic cao cấp cho sách này(<a href="#">Chi tiết</a>)</p>
                        <p>Miễn phí giao hàng toàn quốc cho Đơn hàng từ 250.000đ (Áp dụng từ 1/2/2015. <a href="#">Xem chi tiết</a>)</p>
                    </div>
                </div>
                <div class="col-md-3 title-mycart">
                    <h4 class="pt-3 pb-3">Thông tin thanh toán</h4>

                    <div class="title-detail">
                        <p>Giá bán : <span class="float-right">{{$book->price}}</span> </p>
                        <p>Hạ giá : <span class="float-right">{{$book->price}}</span> </p>
                    </div>

                    <div class="mycart-productDetail">
                        <p class="text-white">aa <span class="text-dark float-right">{{$book->price}}</span> </p>
                        <p>Hạ giá : <span class="float-right">{{$book->price}}</span> </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection