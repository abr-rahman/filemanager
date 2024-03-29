{{-- <html lang="en">
    <head>
      <title>Laravel Multiple File Upload Example</title>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
      <div class="container"> --}}

{{-- kidfhasdkfasdkfa --}}

{{-- @extends('layouts.dashboard_mother')
        <style>
             @import url(https://fonts.googleapis.com/css?family=Open+Sans:700,300);

.frame {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 400px;
	height: 400px;
	/* margin-top: -200px; */
	margin-left: -200px;
	border-radius: 2px;
	box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
	overflow: hidden;
	background: linear-gradient(to top right, darkmagenta 0%, hotpink 100%);
	color: #333;
	font-family: "Open Sans", Helvetica, sans-serif;
}

.center {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 300px;
	height: 260px;
	border-radius: 3px;
	box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2);
	background: #fff;
	display: flex;
	align-items: center;
	justify-content: space-evenly;
	flex-direction: column;
}

.title {
	width: 100%;
	height: 50px;
	border-bottom: 1px solid #999;
	text-align: center;
}

h1 {
	font-size: 16px;
	font-weight: 300;
	color: #666;
}

.dropzone {
	width: 100px;
	height: 80px;
	border: 1px dashed #999;
	border-radius: 3px;
	text-align: center;
}

.upload-icon {
	margin: 25px 2px 2px 2px;
}

.upload-input {
	position: relative;
	top: -62px;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
}

.my-btn {
	display: block;
    width: 90px;
    height: 35px;
    background: darkmagenta;
    color: #fff;
    border-radius: 3px;
    border: 0;
    box-shadow: 0 3px 0 0 hotpink;
    transition: all 0.3s ease-in-out;
    font-size: 14px;
    margin-top: 29px;
}

.my-btn:hover {
	background: rebeccapurple;
	box-shadow: 0 3px 0 0 deeppink;
}
        </style>
        @section('content')

            <div class="page-content">
                <div class="card radius-15">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif

                      @if (session('success'))
                      <div class="alert alert-success">
                        {{ session('success') }}
                      </div>
                      @endif

                      <div class="frame">
                        <div class="center">
                            <form method="post" action="{{  route('testmultiple.store') }}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="dropzone upload-icon">
                                    <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                                    <input type="file" name="filename" class="upload-input form-control upload-icon p-5">
                                </div>
                                <button type="submit" class="my-btn" name="uploadbutton">Upload file</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @endsection

        <script>
            @if (Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('message') }}");
            @endif

            @if (Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
            @endif

            @if (Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.info("{{ session('info') }}");
            @endif

            @if (Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.warning("{{ session('warning') }}");
            @endif
        </script> --}}



@extends('layouts.dashboard_mother')
@section('content')
    <div class="card" style="height:500px;">
        <div class="card-body image-form">
            <form method="post" action="{{ route('testmultiple.store') }}" enctype="multipart/form-data">
                @csrf

                <input type="file" class="dropify" name="filename" data-default-file="url_of_your_file"/>
                <button type="submit" class="img-submit btn btn-outline-dark m-2">submit</button>

            </form>
        </div>
    </div>
@endsection

@section('footerScript')

    <script>
        $(document).ready(function() {

            $('.dropify').dropify();


            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });


            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>

    {{-- end doropzone --}}


@endsection
