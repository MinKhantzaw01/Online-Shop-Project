@extends('admin.layout.master')

@section('content')

<a href="{{route('admin.category.index')}}" class="btn btn-sm btn-dark">All Category</a>
<form action="{{route('admin.category.update',$cat->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Enter Name</label>
        <input type="text" name="name" placeholder="{{$cat->name}}" class="form-control" id="">
    </div>
    <input type="submit" name="" class="btn btn-dark" id="" value="Update">
</form>

@endsection