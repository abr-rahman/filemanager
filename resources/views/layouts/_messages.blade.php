@if($message = Session::get('success'))
<div class="alert alert-success alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">x</button>
    {{ $message }}
    {{-- <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Your work has been success',
        showConfirmButton: false,
        timer: 1500
        })
    </script> --}}
</div>
@endif

@if($message = Session::get('error'))
<div class="alert alert-danger alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">x</button>
    {{ $message }}
</div>
@endif

@if($message = Session::get('warning'))
<div class="alert alert-warning alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">x</button>
    {{ $message }}
</div>
@endif

@if($message = Session::get('warning'))
<div class="alert alert-warning alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">x</button>
    {{ $message }}
    {{-- <script>
        Swal.fire({
        position: 'top-end',
        icon: 'warning',
        title: 'Your work has been warning',
        showConfirmButton: false,
        timer: 1500
        })
    </script> --}}
</div>
@endif

@if(count($errors) > 0 )
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <ul class="p-0 m-0" style="list-style: none;">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

