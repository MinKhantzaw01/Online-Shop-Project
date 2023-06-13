@extends('admin.layout.master')

@section('content')

<a href="{{route('admin.product.index')}}" class="btn btn-sm btn-dark">All Products</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Category</th>
            <th>Price</th>
            <th>View_count</th>
        </tr>
    </thead>
    <tbody>

       <tr>
            <th>{{$product->name}}</th>
            <th>
                <img src="{{asset($product->image)}}" style="width:40px;border-radius:20px;" alt="">
            </th>
            <th>
                {{$product->category->name}}
            </th>
            <th>{{$product->price}}</th>
            <th>{{$product->view_count}}</th>
        </tr>

    </tbody>
</table>
<p>
    {{$product->description}}
</p>

@endsection
