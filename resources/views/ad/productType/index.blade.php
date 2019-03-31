@extends('ad.master')
@section('content')
<div class="container-fluid Admin_Size_content">
    <h4 class="text-center"> DANH MỤC SẢN PHẨM</h4>
    <a href="{{ route('ad')}}" class="btn btn-primary" ><i class="fa fa-arrow-left"></i>Quay lại</a>
    <a href="{{route('productType.create')}}" class="btn btn-success" ><i class="fa fa-plus-circle"></i>Thêm</a>
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Description </th>
                <th> Created_at </th>
                <th> Updated_at </th>
                <th> Xem </th>
                <th> Sửa </th>
                <th> Xóa </th>
            </tr>
        </thead>
        <tbody>
            @foreach($types as $type)
                <tr>
                    <td> {{$type->id}} </td>
                    <td> {{$type->name}} </td>
                    <td> {{$type->description}} </td>
                    <td> {{$type->created_at}} </td>
                    <td> {{$type->updated_at}} </td>
                    <td class="center">
                        <a href="{{route('productType.show', $type->id)}}" title="" class="btn btn-success btn-md"><i class="fa fa-edit "></i> Xem</a>
                    </td>
                    <td class="center">
                        <a href="{{route('productType.edit', $type->id)}}" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                    </td>
                    <td class="center">
                        <form action="{{route('productType.destroy', $type->id)}}" method="POST">
                            {{csrf_field()}}
                                <input type='hidden' value='DELETE' name='_method' method="POST">

                                <button type="submit" class='btn btn-danger'> <i class="fa fa-times-circle"></i>Xóa</button> 
                        </form>
                    </td>  
                </tr>
            @endforeach
        </tbody>
    </table>
    
    
</div>
@endsection