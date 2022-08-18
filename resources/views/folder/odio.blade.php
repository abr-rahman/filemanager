@extends('layouts.dashboard_mother')

@section('content')
<div class="row">
    @foreach ($audios as $audio)
    <div class="col-lg-3">
        <div class="card radius-15">
            <div class="card-body text-center">
                <audio controls><source src="{{ URL::asset("files/$audio->filename") }}"></audio>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
