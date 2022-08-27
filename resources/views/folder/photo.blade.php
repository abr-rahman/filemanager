@extends('layouts.dashboard_mother')

<style>
        .image_size{
            max-width: 200px;
            max-height: 200px;
            /* width: 100%;  */
            /* height: 200px; position: relative; */
        }
</style>


@section('content')
<div class="row">
    @foreach ($images as $image)
    <div class="col-lg-2 m-2 image_size">
        <div class="card-body text-center " >
            <img class="image_size radius-10 border" src="{{ URL::asset("files/$image->filename") }}"  class="border" alt="" />

            {{-- <div id="loading" style="background-image: url('{{ URL::asset("files/$image->filename") }}');" > --}}
        </div>
    </div>
    @endforeach
</div>
@endsection
