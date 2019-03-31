@extends('ad.master')
@section('content')
    <div class="container mt-3">
        <div class="row"> 
            <div class="col-md-12 offset-md-3">
                <center><h4 class="text-info" style="font-size: 25px; text-align: center; margin-top: 20px;"> Thông tin danh mục sản phẩm </h4> </center>
            </div>
        </div>
        <div class="row"> 
            <div class="col-md-6 offset-md-3">
                <p class="mb-3 mt-3 text-success"> 
                @if( Session::has('thongbao')) {{Session::get('thongbao')}}
                @endif
                </p> 
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <form action="{{route('productType.update', $type->id)}}" method="POST">
                     {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT" />
                    <div class="form-group">
                        <label>Tên danh mục</label>
                        <input type="text" id="name" class="form-control" placeholder="Name" name="name" value="{{$type->name}}" >
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <input type="text" name="description" class="form-control" />
                    </div>
                    <a href="{{ route('productType.index')}}" class="btn btn-primary" ><i class="fa fa-arrow-left"></i>Quay lại</a>
                    <button type="submit" name="submit" class="btn btn-success btn-md">SAVE</button>

                </form>
            </div>
        </div>
    </div>
@endsection