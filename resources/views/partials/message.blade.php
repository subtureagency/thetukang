@if($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      {!! implode('', $errors->all('<li>:message</li>')) !!}
    </ul>
  </div>
@endif
@if (Session::has('error'))
  <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
    {!!Session::get('error')!!}
    {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button> --}}
  </div>
@endif
