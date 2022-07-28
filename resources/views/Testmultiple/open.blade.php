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
    <div class="col-12">
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



        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card radius-15">
                <div class="card-body">
                    <div class="card-title">
                        <h4 class="mb-0">Fancy File Upload</h4>
                    </div>
                    <hr/>
                    <input id="fancy-file-upload" type="file" name="product_photo[]" multiple>
                </div>
            </div>
            <button class="btn btn-success">Add</button>
        </form>
    </div>

</div>

<script>
    $('#yourElement').addClass('animated bounceOutLeft');
</script>

@endsection



<script>
    $('#fancy-file-upload').FancyFileUpload({
        params: {
            action: 'fileuploader'
        },
        maxfilesize: 1000000
    });
</script>
<script>
    $(document).ready(function () {
        $('#image-uploadify').imageuploadify();
    })
</script>




@section('footer_script')
<script src="assets/js/bootstrap.bundle.min.js"></script>


@endsection
