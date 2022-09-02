@extends('layouts.dashboard_mother')

<style>
        /* .image_size{ */
            /* max-width: 200px; */
            /* max-height: 200px; */
            /* width: 100%;  */
            /* height: 200px; position: relative; */
        /* } */

        .image_size {
            width: 100%;
            height: auto;
        }
</style>


@section('content')
<div class="row">
    @foreach ($images as $image)
    <div class="col-lg-2 m-2 ">

        <img class="image_size radius-10 border" src="{{ URL::asset("files/$image->filename") }}"  width="200" />

    </div>
    @endforeach
</div>
@endsection

@section('footerScript')
    <script>


    </script>

@endsection
