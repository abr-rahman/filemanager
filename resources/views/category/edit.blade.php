@extends('layouts.dashboard_mother')

@section('dashboard_bar')
   Add Category
@endsection

@section('content')

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Category</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Date Time Pickers</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->

<div class="row">
    <div class="col-xl-9 mx-auto">
        <h6 class="mb-0 text-uppercase">Add Category</h6>
        <hr/>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ 'You are field empthy!' }}
                @endforeach
            </div>
        @endif
        {{-- @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif --}}

        <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Add Category</label>
                        <input type="text" class="form-control datepicker" placeholder="Add Category" name="category_name" value="{{ $category->category_name }}"/>

                        @error('category_name')
                            <span class="text-danger">  {{ $message }} </span>
                        @enderror
                    </div>

                    <button id="btn_id" type="submit" class="btn btn-primary m-1 px-5">Add Category</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
