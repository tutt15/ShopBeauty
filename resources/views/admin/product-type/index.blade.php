@extends('admin.home')
@section('content-right')

<div class="container-fluid Admin_Size_content">
    <h4 class="text-center"> Product Type </h4>
    <table class="table table-hover table-bordered text-center">
        <thead>
            <tr>
                <th> # </th>
                <th> Name </th>
                <th> Description </th>
                <th> Created_at </th>
                <th> Updated_at </th>
                <th> Action </th>
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
                        
                        <td >
                        <div class="d-flex flex-row justify-content-center">
                            <form action="{{route('producttype.show', $type->id)}}" method="GET">
                                <button class='btn btn-danger ml-2'> <i class="far fa-eye"></i> </button>
                            </form>
                            
                            <form action="{{route('producttype.edit', $type->id)}}" method="GET">
                                <button class='btn btn-success ml-2'> <i class="far fa-edit"></i> </button> 
                            </form>

                            <form action="{{route('producttype.destroy', $type->id)}}" method="POST">
                            {{csrf_field()}}
                                <input type='hidden' value='DELETE' name='_method' method="POST">

                                <button type="submit" class='btn btn-success ml-2'> <i class="far fa-trash-alt"></i>  </button> 
                            </form>
                        </div>       
                        </td> 
                    </tr>
                @endforeach
          
        </tbody>
    </table>
    
</div>

@endsection