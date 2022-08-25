@extends('layouts.dashboard_mother')

<style>
    .imageFile {
        border-radius: 50px;
    }

    .btn i {
        font-size: 1.0em !important;
    }
</style>


@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Applications</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">File Manager</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                {{-- <a href="{{ route('grid.layout') }}" id="gridlayout" type="button" class="btn btn-primary"><i class="lni lni-grid-alt"></i> --}}
                <a id="gridlayout" type="button" class="btn btn-primary"><i class="lni lni-grid-alt"></i>
                    Grid</a>
            </div>
        </div>
    </div>
    {{-- <!--end breadcrumb--> --}}
    <div class="row">
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('testmultiple.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-7">
                                <input type="file" class="form-control" name="filename" placeholder="Add File">
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary"> add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-0 text-primary font-weight-bold">45.5 GB <span class="float-end text-secondary">50
                            GB</span></h5>
                    <p class="mb-0 mt-2"><span class="text-secondary">Used</span><span
                            class="float-end text-primary"></span>
                    </p>
                    <div class="progress mt-3" style="height:7px;">
                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                            aria-valuemax="100"></div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-3"></div>
                    <div class="d-flex align-items-center">
                        <div class="fm-file-box bg-light-primary text-primary"><i class='bx bx-image'></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <a href="{{ route('photo.folder') }}">
                                <h6 class="mb-0">Images</h6>
                                <p class="mb-0 text-secondary"> Files </p>
                            </a>
                        </div>
                        <h6 class="text-primary mb-0 text-center">{{ $imagesCount }} <br> <small>Photo</small></h6>
                    </div>

                    <div class="d-flex align-items-center mt-3">
                        <div class="fm-file-box bg-light-danger text-success"><i class='bx bx-music'></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <a href="{{ route('odio.folder') }}">
                                <h6 class="mb-0">Audio Files</h6>
                                <p class="mb-0 text-secondary"> Files</p>
                            </a>
                        </div>
                        <h6 class="text-primary mb-0 text-center">{{ $audiosCount }} <br> <small>Audio</small></h6>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                        <div class="fm-file-box bg-light-danger text-danger"><i class='bx bx-video'></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <a href="{{ route('video.folder') }}">
                                <h6 class="mb-0">Media Files</h6>
                                <p class="mb-0 text-secondary"> Files</p>
                            </a>
                        </div>
                        <h6 class="text-primary mb-0 text-center">{{ $videosCount }} <br> <small>Video</small></h6>
                    </div>

                    <div class="d-flex align-items-center mt-3">
                        <div class="fm-file-box bg-light-success text-success"><i class='bx bxs-file-doc'></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                            <a href="{{ route('document.folder') }}">
                                <h6 class="mb-0">Documents</h6>
                                <p class="mb-0 text-secondary"> Files</p>
                            </a>
                        </div>
                        <h6 class="text-primary mb-0 text-center">{{ $documentsCount }} <br><small>Documents</small></h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            <div class="card">
                <div class="card-body">
                    {{-- <div class="row mt-3">
                        <div class="col-12 col-lg-12">
                            <div class="card shadow-none border radius-15">
                                <a href="{{ route('photo.folder') }}">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="font-30 text-primary"><i class='bx bx-image'></i>
                                            </div>
                                        </div>
                                        <h6 class="mb-0 text-primary">Image</h6>
                                        <small>{{ $images }} Files</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12">
                            <div class="card shadow-none border radius-15">
                                <a href="{{ route('video.folder') }}">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="font-30 text-primary"><i class='bx bx-video'></i>
                                            </div>
                                        </div>
                                        <h6 class="mb-0 text-primary">Video</h6>
                                        <small>{{ $videos }} Files</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12">
                            <div class="card shadow-none border radius-15">
                                <a href="{{ route('odio.folder') }}">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="font-30 text-primary"><i class="bx bx-music me-2"></i>
                                            </div>
                                        </div>
                                        <h6 class="mb-0 text-primary">Audio</h6>
                                        <small>{{ $audios }} Files</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12">
                            <div class="card shadow-none border radius-15">
                                <a href="{{ route('document.folder') }}">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="font-30 text-primary"><i class="bx bx-file me-2"></i>
                                            </div>
                                        </div>
                                        <h6 class="mb-0 text-primary">Document</h6>
                                        <small>{{ $documents }} Files</small>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div> --}}
                    <!--end row-->
                    <div class="table-responsive mt-3">
                        <table class="table table-striped table-hover table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Name <i class='bx bx-up-arrow-alt ms-2'></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($images as $image)
                                    <tr>
                                        <td data-toggle="modal" data-target="#myModal-{{$image->id}}" class="pointer">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <i class="fadeIn animated bx bx-photo-album me-2 font-24 text-success"></i>
                                                </div>
                                                <a href="#" class="font-weight-bold text-dark">
                                                    {{ $image->filename }}
                                                </a>

                                                {{-- <a href="{{ URL::asset("files/$testmulti->filename")  }}"  class="font-weight-bold text-dark"  target="_blank">{{ substr($testmulti->filename, 0 , 10)  }}</a> --}}

                                            </div>
                                        </td>

                                        <div class="container">
                                            <div class="modal modal-fullscreen-lg" id="myModal-{{$image->id}}" role="dialog">
                                                <div class="modal-dialog" style="max-width: 90%">
                                                    <div class="modal-content">
                                                        <div class="m-3" style="height:5px">
                                                            <h6 class="modal-title ">Edit Your Description</h6>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close" style="margin-top: -27px;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-6 ">
                                                                <div class="p-4 ">
                                                                    <img src="{{ URL::asset("files/$image->filename") }}" style="width:535px;"
                                                                        alt="no found">
                                                                </div>
                                                                <div class="d-flex justify-content-center mb-4">
                                                                    <a href="{{ route('testmultiple.edit', $image->id) }}" type="submit"
                                                                        class="btn btn-outline-secondary">Change
                                                                        Image</a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 edit_des">
                                                                <div class="modal-body">
                                                                    <div class="card-body p-2">
                                                                        <div class="">
                                                                            <small class="fw-bold">Uploaded On: </small>
                                                                            <span>{{ $image->created_at }}</span><br>

                                                                            <small class="fw-bold">Uploaded By:
                                                                            </small><span>{{ Auth::user()->name }}</span><br>

                                                                            <small class="fw-bold">File Name:</small>
                                                                            <span> {{ $image->filename }}</span><br>

                                                                            <small class="fw-bold">File Type: </small>
                                                                            <span>
                                                                                {{ substr($image->filename, -4) }}</span><br>

                                                                            <small class="fw-bold">File File Size:

                                                                                {{-- {{ $image->filename }}
                                                                                @php
                                                                                $size = File::size(public_path("files/$image->filename")) / 1024;
                                                                                $sizeFormatted = number_format($size, 2, '.');
                                                                                @endphp

                                                                                ( {{ $sizeFormatted }} KB) --}}

                                                                            </small>
                                                                            <br>
                                                                        </div>
                                                                        <hr>
                                                                    </div>
                                                                    <div class="md-form mb-3">
                                                                        <div class="input-group">
                                                                            <span
                                                                                class="input-group-text edit_input">Alternative
                                                                                Text</span>
                                                                            <input type="text" aria-label="First name"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="md-form mb-3">
                                                                        <div class="input-group">
                                                                            <span
                                                                                class="input-group-text edit_input">Title</span>
                                                                            <input type="text" aria-label="First name"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="md-form mb-3">
                                                                        <div class="input-group">
                                                                            <span
                                                                                class="input-group-text edit_input">Caption</span>
                                                                            <textarea name="" class="form-control" rows="2"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="md-form mb-3">
                                                                        <div class="input-group">
                                                                            <span
                                                                                class="input-group-text edit_input">Description</span>
                                                                            <textarea name="" class="form-control" rows="2"></textarea>
                                                                        </div>
                                                                    </div>



                                                                    <div class="d-flex justify-content-center">
                                                                        <button type="submit"
                                                                            class="btn  btn-outline-dark">Description
                                                                            Update</button>
                                                                        <span class="m-1"></span>
                                                                        <form action="" method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <a href="{{ route('testmultiple.destroy', $image->id) }}"
                                                                                type="submit"
                                                                                class="btn btn-outline-danger">Delete</a>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <button type="button" class="btn btn-primary" ></button> --}}
                        <!-- The Modal -->
                    </div>
                </div>
            </div>
        @endsection

        <style>
            .btn-design {
                height: 28px !important;
                border-radius: 0px !important;
            }
        </style>

        @section('footerScript')
            <script>
                $(document).ready(function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    // $('#gridlayout').click(function(){
                    //     alert('hi');
                    // });

                    $.ajax({
                        data: $('#gridlayout').serialize(),
                        url: "/grid/layet",
                        type: "POST",
                        // dataType: 'json',
                        success: function(data) {
                            alert('hi');
                        },
                        error: function(data) {
                            console.log('Error:', data);
                            $('#btn-save').html('Save Changes');
                        }
                    });


                    //     $('#create-new-post').click(function() {
                    //         $('#btn-save').val("create-post");
                    //         $('#postForm').trigger("reset");
                    //         $('#postCrudModal').html("Add New post");
                    //         $('#ajax-crud-modal').modal('show');
                    //     });

                    //     $('body').on('click', '#edit-post', function() {
                    //         var post_id = $(this).data('id');
                    //         //   $.get('ajax-posts/'+post_id+'/edit', function (data) {
                    //         $('#postCrudModal').html("Edit post");
                    //         $('#btn-save').val("edit-post");
                    //         $('#ajax-crud-modal').modal('show');
                    //         $('#post_id').val(data.id);
                    //         $('#title').val(data.title);
                    //         $('#body').val(data.body);
                    //     })
                    // });
                    // $('body').on('click', '.delete-post', function() {
                    //     var post_id = $(this).data("id");
                    //     confirm("Are You sure want to delete !");

                    //     $.ajax({
                    //         type: "DELETE",
                    //         url: "{{ url('ajax-posts') }}" + '/' + post_id,
                    //         success: function(data) {
                    //             $("#post_id_" + post_id).remove();
                    //         },
                    //         error: function(data) {
                    //             console.log('Error:', data);
                    //         }
                    //     });
                    // });
                });

                // if ($("#postForm").length > 0) {
                //     $("#postForm").validate({

                //         submitHandler: function(form) {
                //             var actionType = $('#btn-save').val();
                //             $('#btn-save').html('Sending..');

                //             $.ajax({
                //                 data: $('#postForm').serialize(),
                //                 //   url: "",
                //                 type: "POST",
                //                 dataType: 'json',
                //                 success: function(data) {
                //                     var post = '<tr id="post_id_' + data.id + '"><td>' + data.id +
                //                         '</td><td>' + data.title + '</td><td>' + data.body + '</td>';
                //                     post += '<td><a href="javascript:void(0)" id="edit-post" data-id="' +
                //                         data.id + '" class="btn btn-info">Edit</a></td>';
                //                     post += '<td><a href="javascript:void(0)" id="delete-post" data-id="' +
                //                         data.id +
                //                         '" class="btn btn-danger delete-post">Delete</a></td></tr>';


                //                     if (actionType == "create-post") {
                //                         $('#posts-crud').prepend(post);
                //                     } else {
                //                         $("#post_id_" + data.id).replaceWith(post);
                //                     }

                //                     $('#postForm').trigger("reset");
                //                     $('#ajax-crud-modal').modal('hide');
                //                     $('#btn-save').html('Save Changes');

                //                 },
                //                 error: function(data) {
                //                     console.log('Error:', data);
                //                     $('#btn-save').html('Save Changes');
                //                 }
                //             });
                //         }
                //     })
                // }
            </script>
        @endsection
