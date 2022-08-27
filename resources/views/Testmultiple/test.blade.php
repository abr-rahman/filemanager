@extends('layouts.dashboard_mother')
@section('content')
<div class="text-content">
    <div class="span7 offset1">
    <div class="secure">Upload form</div>

    <form action="{{ route('apply.multiple_upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="filename[]" multiple class="form-control">
        <button type="submit">Add</button>
    </form>
  </div>

@endsection
