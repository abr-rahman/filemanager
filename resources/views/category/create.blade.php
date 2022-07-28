@extends('layouts.dashboard_mother')

<style>
    .imageFile{
        border-radius: 50px;
    }
</style>

@section('dashboard_bar')
   Add Category
@endsection

@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">File Manager</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->

<div class="row">
    <div class="col-3 border m-3">
        <h6 class="mb-0 text-uppercase">Add File Manager</h6>
        <hr/>

        @if (session('success'))
        <script>
            Swal.fire(
                'Category Added successfully!',
                'Important!',
                'success'
                )
        </script>
        @endif
        @if (session('delete'))
        <script>
            Swal.fire(
                'File Delete successfully!',
                'Important!',
                'success'
                )
        </script>
        @endif

        @if (session('error'))
        @error('message')
            <div class="alert alert-danger">
                <script>
                Swal.fire(
                    'Category opps !',
                    'Important!',
                    'success'
                    )
                </script>
            </div>
        @enderror
        @endif
            <a href="{{ route('create.file') }}"><button id="btn_id" type="submit" class="btn btn-primary m-1 col-5">Upload File</button></a>
        <hr>
        <div class="col-4 p-3">
            <a><i class="lni lni-google-drive"></i>GoogleDrive</a>
            <a><i class="lni lni-dropbox-original"></i>DropeBox</a>
            <a><i class="bx bxs-door-open"></i>Mega</a>
        </div>

    </div>
    <div class="col-8">
       <h2>My files</h2>
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="card radius-15 overflow-hidden border">
                    <div class="card-body" style="position: relative;">
                        <div class="d-flex">
                            <div>
                                <p class="mb-0 font-weight-bold"><i class="bx bx-image"></i></p>
                                <h4 class="mb-0">Photo</h4>
                                <p>245 Photo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card radius-15 overflow-hidden border">
                    <div class="card-body" style="position: relative;">
                        <div class="d-flex">
                            <div>
                                <p class="mb-0 font-weight-bold"><i class="bx bx-video-recording"></i></p>
                                <h4 class="mb-0">Video</h4>
                                <p>245 Photo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card radius-15 overflow-hidden border">
                    <div class="card-body" style="position: relative;">
                        <div class="d-flex">
                            <div>
                                <p class="mb-0 font-weight-bold"><i class="bx bx-music me-2"></i></p>
                                <h4 class="mb-0">Odio</h4>
                                <p>245 Photo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 ">
                <div class="card radius-15 overflow-hidden border">
                    <div class="card-body" style="position: relative;">
                        <div class="d-flex">
                            <div>
                                <p class="mb-0 font-weight-bold"><i class="bx bxs-file-doc"></i></p>
                                <h4 class="mb-0">Document</h4>
                                <p>245 Photo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card radius-15 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <th>File</th>
                                <th>Date</th>
                                {{-- <th>Edit</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>join date</td>
                                <td>
                                    <div class="product-img bg-transparent border">
                                        <a href=""> {{ $category->product_photo }}</a>
                                        {{-- <img src="{{ asset('uploads/product_photo')}}/{{ $category->product_photo }}" width="50" alt="not found"> --}}
                                    </div>
                                </td>
                                <td class="border col-3">
                                    {{ $category->created_at->format('d M Y') }}
                                    @if ( $category->created_at->diffinseconds() < 60 )
                                        <div class="badge bg-dark text-white btn btn-tumblr">Just Naw</div>
                                    @else
                                        <div class="badge text-white btn-tumblr bg-dark ">{{  $category->created_at->diffforhumans() }}</div>
                                    @endif
                                </td>

                                <td class=border>

                                    <div class="btn-group m-1" role="group" >
                                        <button type="button" class="btn "><a href="{{ route('category.edit', $category->id) }}"><i class="fadeIn animated bx bx-edit-alt"></i></a></button>
                                        {{-- <button type="button" class="btn "><i class="bx bx-share"></i></button> --}}
                                        <button type="button" class="btn "><form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class=""><i class="bx bx-trash-alt me-2"></i></button>
                                            </form>
                                        </button>
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

<script>
    $('#yourElement').addClass('animated bounceOutLeft');
</script>

@endsection

@section('footer_script')

@endsection
