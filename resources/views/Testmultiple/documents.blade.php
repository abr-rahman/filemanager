@extends('layouts.dashboard_mother')

@section('content')
<div class="row">
    @foreach ($documents as $document)
    <div class="col-lg-12">
        <div class="card radius-15">
            <div class="card-body">
                <ol>
                    <li>
                        <a href="{{ URL::asset("files/$document->filename") }}">
                            {{$document->filename}}
                            @php
                                $size = File::size(public_path("files/$document->filename")) / 1024;
                                $sizeFormatted = number_format($size, 2, '.');
                            @endphp
                            ( {{ $sizeFormatted }} KB)
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
