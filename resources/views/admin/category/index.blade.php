@extends('admin.layout.master')

@section('content')

<a href="{{route('admin.category.create')}}" class="btn btn-sm btn-dark">Create Category</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Option</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($categories as $c)
       <tr>
            <th>{{$c->name}}</th>
            <th>
                <a href="{{route('admin.category.edit',$c->id)}}" class="badge badge-success">Update</a>
                <form action="{{route('admin.category.destroy',$c->id)}}" class="d-inline" id="delete" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="#" onclick="confirm('Are you Sure! Delete?')?document.getElementById('delete').submit():false;" class="badge badge-danger">Delete</a>
                </form>

            </th>
        </tr>
       @endforeach
    </tbody>
</table>

@endsection
