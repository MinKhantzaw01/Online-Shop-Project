@extends('admin.layout.master')

@section('content')

<a href="{{route('admin.category.create')}}" class="btn btn-sm btn-dark">Create Category</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Eamil</th>
            <th>Image</th>
            <th>Order_Count</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $u)
            <tr>
                <td>{{$u->name}}</td>    
                <td>{{$u->email}}</td>    
                <td>
                    <img src="{{asset($u->image)}}" style="width:50px;border-radius:10px;" alt="">    
                </td> 
                <td>{{$u->order_count}}</td>   
            </tr>            
        @endforeach
    </tbody>
</table>

@endsection
