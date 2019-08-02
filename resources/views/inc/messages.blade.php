@if(count($errors) > 0)
  @foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
         {{$error}}
      </div>
  @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{session('error')}}
    </div>
@endif