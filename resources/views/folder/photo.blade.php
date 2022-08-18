@extends('layouts.dashboard_mother')

@section('content')
<div class="row">
    @foreach ($images as $image)
    <div class="col-lg-2 m-2 ">
        <div class="card-body text-center " style="width: 100%; content-visibility: auto; height: 200px; position: relative;">
            <img class=" radius-10 border" src="{{ URL::asset("files/$image->filename")}}" width="195" height="200" class="border" alt="" />
        </div>
    </div>
    @endforeach
</div>
@endsection
