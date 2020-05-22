@if(count($errors))
@foreach($errors->all() as $error)
<div class="row justify-content-center">
  <div class="form-group col-md-4">
    <div class="alert alert-danger">
      <ul class="list-group">
        <li class="list-item">{{ $error }}</li>
      </ul>
    </div>
  </div>
</div>
@endforeach
@endif

@if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif