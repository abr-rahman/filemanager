@extends('layouts.dashboard_mother')

@section('content')
<div class="row">
    @foreach ($videos as $video)
    <div class="col-lg-3">
        <div class="card radius-15">
            <div class="card-body text-center">
                {{-- <video width="120" height="140" controls><source src="{{ URL::asset("files/$video->filename")}}"></video> --}}
                <video width="120" height="140" controls><source src="{{ URL::asset("/files/$video->filename")}}"></video>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
