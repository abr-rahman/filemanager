
@extends('layouts.dashboard_mother')
@section('content')
	<!-- wrapper -->
    <div class="page-content">
        <div class="card radius-15">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-0">Fancy File Upload</h4>
                </div>
                <hr/>
                <input id="fancy-file-upload" type="file" name="files" multiple>
            </div>
        </div>
    </div>
@endsection
