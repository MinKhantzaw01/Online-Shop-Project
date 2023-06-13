@extends('user.layout.master')


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <b>Change Profile</b>
            </div>
            <div class="card-body">
                @include('user.error')
                <form action="{{url('/profile')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Enter Name</label>
                        <input type="text" value="{{$user->name}}" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Email</label>
                        <input type="email" value="{{$user->email}}" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Image</label>
                        <input type="file" name="image" class="form-control">
                        <img src="{{asset($user->image)}}" class="mt-2" style="width:50px;border-radius:10%;" alt="">
                    </div>
                    <input type="submit"  value="Change" class="btn btn-dark" id="">
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
