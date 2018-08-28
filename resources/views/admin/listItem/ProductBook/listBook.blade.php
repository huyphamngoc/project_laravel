@extends('admin.homepage.master')
@section('title', 'List Product Book')
@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    List Product
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="demo-get">
                            </tbody>
                            <tbody >
                            @foreach($product as $item)
                                <tr id="{{$item->id}}">
                                    <td>{{$item->id}}</td>
                                    <th class="col-md-2">
                                        <div class="card"
                                             style="background-image: url('{{$item->image}}'); background-size: cover; width: 60px; height: 60px;">
                                        </div>
                                        {{--<img src="" style=" with:60px; height: 60px" class="img-thumbnail">--}}
                                    </th>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>

                                        <a href="/AdminProductBook/{{$item->id}}/edit" id="putUser" class="btn btn-success"> Edit</a> <p> </p>

                                        <form action="{{'/AdminProductBook/'.$item->id}}" method="post">
                                            {{csrf_field()}}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-primary">Delete</button>
                                        </form>
                                        {{--<a href="#" id="delete-{{$item->id}}" class="fa fa-trash btn-delete"> Delete</a>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="col-md-12">
                        <div class="col-md-9">
                            <label></label>
                        </div>
                        <div class="col-md-3">
                            <div class="float-right">
                                {{ $product->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>


@endsection

@section('js')
    {{--<script src="{{asset('js/admin/listProduct.js')}}"></script>--}}
@endsection