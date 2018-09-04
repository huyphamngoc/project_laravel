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
                <div class="col-md-5">
                    <h3>{{$book->title}}</h3>
                    <p>Tác giả : {{$book->author}}</p>
                    <p>Chú thích : {{$book->description}}</p>
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