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
        <tr>
            <th>T-shirt</th>
            <th>Option</th>
        </tr>
    </tbody>
</table>

@endsection
