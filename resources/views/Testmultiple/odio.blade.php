@extends('layouts.dashboard_mother')

@section('content')
<div class="row">
    @foreach ($audios as $audio)
    <div class="col-lg-3">
        <div class="card radius-15">
            <div class="card-body text-center">
                {{-- <img class=" radius-15" src="{{ URL::asset("files/$odio->filename")}}" width="150" height="150" class="border" alt="" /> --}}
                <audio controls><source src="{{ URL::asset("files/$audio->filename") }}"></audio>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
