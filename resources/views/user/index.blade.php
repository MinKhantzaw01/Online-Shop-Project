@extends('user.layout.master')


@section('content')

<div class="row">
    <!-- Loop Product -->
    @foreach ($products as $p)
    <div class="col-md-4 ">
        <a href="{{url('product/'.$p->slug)}}">
                <div class="card">
                        <img class="card-img-top"
                                src="{{asset($p->image)}}"
                                alt="">
                        <div class="card-body">
                                <div class="row">
                                        <div class="col-md-12">
                                                <b class="text-dark">{{$p->name}}
                                                </b>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-4">
                                                <a href=""
                                                        class="badge badge-primary">{{$p->price}}ks</a>
                                        </div>
                                        <div class="col-md-4">
                                                <a href=""
                                                        class="badge badge-warning">{{$p->category->name}}</a>
                                        </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <a href="{{url('product/cart/add/'.$p->slug)}}" class="btn btn-sm btn-danger text-white btn-block">Add To Cart</a>
                                </div>
                        </div>
                </div>
        </a>

</div>
    @endforeach



</div>
<div class="row mt-3">
    <div class="col-md-6 offset-3">
          {{$products->links()}}
    </div>
</div>

@endsection
