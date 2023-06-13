@if($errors->any())

@foreach ($errors->all() as $e)
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>{{$e}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endforeach

@endif


@if(session()->has('success'))

<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>{{session()->get('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

@endif
