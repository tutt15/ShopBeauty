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
        
        <div class="col-xs-4 col-xs-offset-4">
            <form action="{{route('productType.store')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Tên danh mục</label>
                    <input type="text" class="form-control" id="name" name="name" maxlength="255" required />
                </div>
                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <input type="text" class="form-control" id="description"  name="description" maxlength="100" required />
                </div>     
                <center><button type="submit" class="btn btn-danger"><i class="fa fa-plus-circle"></i>Thêm</button></center>
                <center><a href="{{ route('productType.index')}}" class="btn btn-primary" ><i class="fa fa-arrow-left"></i></a></center>
            </form>
        </div>
        </div>
    </div>
@endsection