@extends('user.layout.master')

@section('content')
    @if ($status=='pending')
    <h2>Your Pending Order List</h2>
    @else
    <h2>Your Complete Order List</h2>
    @endif
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
                @foreach ($orders as $o)


                <td>{{$o->product->name}}</td>
                <td>
                    <img src="{{asset($o->product->image)}}" style="width:50px;border-radius:30%" alt="">
                </td>
                <td>{{$o->product->price}}</td>
                <td>{{$o->qty}}</td>

            </tr>
            @endforeach
        </tbody>

    </table>
     @if ($status=='pending')
    <a href="{{url('/order/make')}}" class="btn btn-primary">Make Order</a>
    @else
    <h2>Thank!</h2>
    @endif

@endsection
