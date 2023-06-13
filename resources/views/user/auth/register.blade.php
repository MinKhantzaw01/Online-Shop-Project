@extends('user.layout.master')


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <b>Register</b>
            </div>
            <div class="card-body">
                <form action="{{url('/register')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Enter Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <input type="submit"  value="Register" class="btn btn-dark" id="">
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
