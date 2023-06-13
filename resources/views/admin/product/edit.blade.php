@extends('admin.layout.master')

@section('content')

<a href="{{route('admin.product.index')}}" class="btn btn-sm btn-dark">All Category</a>
<form action="{{route('admin.product.update',$product->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="">Enter Name</label>
        <input type="text" placeholder="{{$product->name}}" name="name" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="">Enter Price</label>
        <input type="number" placeholder="{{$product->price}}" name="price" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="">Choose Category</label>
        <select name="cat_id" id="" class="form-control">
            @foreach ($cat as $c)
                <option value="{{$c->id}}"
                    @if ($c->id==$product->category_id)
                        selected
                    @endif
                    >{{$c->name}}</option>
            @endforeach
        </select>
    </div><div class="form-group">
        <label for="">Enter Description</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control">
            {{$product->description}}
        </textarea>
    </div>
    <div class="form-group">
        <label for="">Choose Image</label>
        <input type="file" name="image" class="form-control" id="">
        <img src="{{asset($product->image)}}" class="mt-3" style="width: 30%;border-radius:20px" alt="">
    </div>
    <input type="submit" name="" class="btn btn-dark" id="" value="Update">

</form>

@endsection
