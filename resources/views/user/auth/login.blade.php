@extends('user.layout.master')


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <b>Login</b>
            </div>
            <div class="card-body">
                @include('user.error')
                <form action="{{url('/login')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="">Enter Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <input type="submit" name="" value="Login" class="btn btn-dark" id="">
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
