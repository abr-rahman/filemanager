@extends('layouts.dashboard_mother')

@section('content')
<div class="row">
    @foreach ($images as $image)
    <div class="col-lg-3">
        <div class="card radius-15">
            <div class="card-body text-center">
                <img class=" radius-15" src="{{ URL::asset("files/$image->filename")}}" width="150" height="150" class="border" alt="" />
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
