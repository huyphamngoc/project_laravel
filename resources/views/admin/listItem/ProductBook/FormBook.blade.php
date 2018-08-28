@extends('admin.homepage.master')
@section('title', 'Form Product Book')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Product Book</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading text-capitalize">
                    Thêm sản phẩm mới
                </div>
                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{$action}}" id="add-user" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @if($method == "PUT")
                            <input name="_method" type="hidden" value="PUT">
                        @endif
                        {{ csrf_field() }}
                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">Title hihi</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="title" value="{{$product->title}}" id="title" placeholder="Nhập tên sản phẩm" >
                                {{--<div class="fullname-icon-err">--}}
                                {{--<i class="fa fa-check"></i>--}}
                                {{--</div>--}}
                                {{--<p class="fullname-err font-weight-normal"></p>--}}
                                <small class="text-danger">{{$errors->first('title')}}</small>
                            </div>
                        </div>

                        <div class=" form-group row phone-group">
                            <label class="col-md-2 col-form-label text-right">Description</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="description" id="description" value="{{$product->description}}" placeholder="Nhập chú thích cho sản phẩm" >
                                {{--<div class="phone-icon-err">--}}
                                {{--<i class="fa fa-check"></i>--}}
                                {{--</div>--}}
                                {{--<p class="phone-err font-weight-normal"></p>--}}
                                <small class="text-danger">{{$errors->first('description')}}</small>
                            </div>
                        </div>

                        <div  class=" form-group row password-group">
                            <label class="col-md-2 col-form-label text-right">Price</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="price" id="price" value="{{$product->price}}" placeholder="Nhập giá cho sản phẩm" >
                                {{--<div class="password-icon-err">--}}
                                {{--<i class="fa fa-check"></i>--}}
                                {{--</div>--}}
                                {{--<p class="password-err font-weight-normal"></p>--}}
                                <small class="text-danger">{{$errors->first('price')}}</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Author</label>
                            <div class="col-md-8">
                                <input type="text" name="author" class="form-control" id="author" value="{{$product->author}}" placeholder="Nhập tác giả cho sách">
                                <small class="text-danger">{{$errors->first('author')}}</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-right">Thumnail</label>
                            <div class="col-md-8">
                                <input type="file" name="thumbnail" id="thumbnail">
                                <input type="text"  name="avatar2" id="avatar2" value="{{$product->image}}">
                                <small class="text-danger">{{$errors->first('image')}}</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label> </label>
                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-default">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('admin/vendor-admin/datatables/js/jquery.dataTables.min.js')}}"> </script>

    <script src="{{asset('admin/vendor-admin/datatables-plugins/dataTables.bootstrap.min.js')}}"> </script>

    <script src="{{asset('admin/vendor-admin/datatables-responsive/dataTables.responsive.js')}}"> </script>

    <script src="{{asset('admin/vendor-admin/datatables-responsive/dataTables.responsive.js')}}"> </script>

    <script src="{{asset('js/admin/formProductBook.js')}}"> </script>
@endsection