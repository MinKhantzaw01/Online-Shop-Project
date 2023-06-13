@extends('admin.layout.master')

@section('content')

<a href="{{route('admin.product.create')}}" class="btn btn-sm btn-dark">Create Product</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Category</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($products as $p)
       <tr>
            <th style="padding:0.1rem">{{$p->name}}</th>
            <th>
                <img src="{{asset($p->image)}}" style="width:40px;border-radius:20px;" style="padding:0.7rem" alt="">
            </th>
            <th style="padding:0.1rem">
                {{$p->category->name}}
            </th>
            <th style="padding:0.1rem">
                <a href="{{route('admin.product.edit',$p->id)}}" class="badge badge-success">Update</a>
                <a href="{{route('admin.product.show',$p->id)}}" class="badge badge-dark text-white">Detail</a>
                <form action="{{route('admin.product.destroy',$p->id)}}" class="d-inline" id="delete" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="#" onclick="confirm('Are you Sure! Delete?')?document.getElementById('delete').submit():false;" class="badge badge-danger">Delete</a>
                </form>

            </th>
        </tr>
       @endforeach
    </tbody>
</table>
{{$products->links()}}
@endsection

