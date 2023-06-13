@extends('admin.layout.master')

@section('content')

<a href="{{route('admin.category.index')}}" class="btn btn-sm btn-dark">All Category</a>
<form action="{{route('admin.category.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Enter Name</label>
        <input type="text" name="name" class="form-control" id="">
    </div>
    <input type="submit" name="" class="btn btn-dark" id="" value="Create">
</form>

@endsection