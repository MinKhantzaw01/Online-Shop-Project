@extends('user.layout.master')

@section('content')
    <h2>Your Cart List</h2>
    @include('user.error')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>

                <th>Price</th>
                <th>Qty</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($cart as $c)


                <td>{{$c->product->name}}</td>
                <td>
                    <img src="{{asset($c->product->image)}}" style="width:50px;border-radius:30%" alt="">
                </td>
                <td>{{$c->product->price}}</td>
                <td>{{$c->qty}}</td>

            </tr>
            @endforeach
        </tbody>

    </table>
    <a href="{{url('/order/make')}}" class="btn btn-primary">Make Order</a>
@endsection
