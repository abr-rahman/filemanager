@extends('layouts.dashboard_mother')

<style>
    .imageFile{
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

</div>
{{-- <!--end breadcrumb--> --}}
<div class="row">
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('folder.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-7">
                            <input type="text" class="form-control" name="folder_create" placeholder="Create File">
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
                <h5 class="mb-0 text-primary font-weight-bold">45.5 GB <span class="float-end text-secondary">50 GB</span></h5>
                <p class="mb-0 mt-2"><span class="text-secondary">Used</span><span class="float-end text-primary"></span>
                </p>
                <div class="progress mt-3" style="height:7px;">
                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="mt-3"></div>
                <div class="d-flex align-items-center">
                    <div class="fm-file-box bg-light-primary text-primary"><i class='bx bx-image'></i>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <a href="{{ route('photo.folder') }}">
                            <h6 class="mb-0">Images</h6>
                            <p class="mb-0 text-secondary">{{ $images }} Files</p>
                        </a>
                    </div>
                    <h6 class="text-primary mb-0">15.3 GB</h6>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <div class="fm-file-box bg-light-success text-success"><i class='bx bxs-file-doc'></i>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <a href="{{ route('document.folder') }}">
                            <h6 class="mb-0">Documents</h6>
                            <p class="mb-0 text-secondary">{{ $documents}} Files</p>
                        </a>
                    </div>
                    <h6 class="text-primary mb-0">256 MB</h6>
                </div>

                <div class="d-flex align-items-center mt-3">
                    <div class="fm-file-box bg-light-danger text-danger"><i class='bx bx-video'></i>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <a href="{{ route('video.folder') }}">
                            <h6 class="mb-0">Media Files</h6>
                            <p class="mb-0 text-secondary">{{ $videos}} Files</p>
                        </a>
                    </div>
                    <h6 class="text-primary mb-0">3.4 GB</h6>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <div class="fm-file-box bg-light-warning text-warning"><i class="bx bx-music me-2"></i>
                    </div>
                    <a href="{{ route('odio.folder') }}">
                        <div class="flex-grow-1 ms-2">
                            <h6 class="mb-0">Audio Files</h6>
                            <p class="mb-0 text-secondary">{{ $audios}} files</p>
                        </div>
                    </a>
                    <h6 class="text-primary mb-0">3 GB</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-9">
        <div class="card">
            <div class="card-body">
                <div class="row mt-3">
                    <div class="col-12 col-lg-3">
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
                    <div class="col-12 col-lg-3">
                        <div class="card shadow-none border radius-15">
                            <a href="{{ route('video.folder') }}">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="font-30 text-primary"><i class='bx bx-video'></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-0 text-primary">Video</h6>
                                    <small>{{ $videos}} Files</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card shadow-none border radius-15">
                            <a href="{{ route('odio.folder') }}">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="font-30 text-primary"><i class="bx bx-music me-2"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-0 text-primary">Audio</h6>
                                    <small>{{ $audios}} Files</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card shadow-none border radius-15">
                            <a href="{{ route('document.folder') }}">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="font-30 text-primary"><i class="bx bx-file me-2"></i>
                                        </div>
                                    </div>
                                    <h6 class="mb-0 text-primary">Document</h6>
                                    <small>{{ $documents}} Files</small>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <!--end row-->

                <div class="table-responsive mt-3">
                    <table class="table table-striped table-hover table-sm mb-0">
                        <thead>
                            <tr>
                                <th>Name <i class='bx bx-up-arrow-alt ms-2'></i></th>
                                {{-- <th>Members</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testmultiples as $testmulti)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div><i class='bx bx-right-arrow-alt me-2 font-24 text-success'></i></div>
                                        <a href=" {{ substr(URL::asset("files/$testmulti->filename"), 7, 10) }}" class="font-weight-bold text-dark"  target="_blank">{{ $testmulti->filename }}</a>
                                    </div>
                                </td>

                                {{-- <td>{{ $testmulti->created_at->format('d/m/y') }}</td> --}}
                                <td>
                                    <div class="btn-group m-1" role="group" aria-label="Basic example">
                                        <a href="{{ route('testmultiple.edit', $testmulti->id) }}"  class="btn-design  btn btn-outline-info"><i class="lni lni-syringe py-3"></i></a>

                                        <form action="" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('testmultiple.destroy', $testmulti->id) }}"  class="btn-design btn btn-outline-danger"><i class="fa-regular fa-trash-can fa-2x py-3"></i></a>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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
