@extends('layouts.dashboard_mother')

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Category</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Category System</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->

<div class="card radius-15 overflow-hidden">
    <div class="card-header border-bottom-0">
        <div class="d-flex align-items-center">
            <div>
                {{-- <h5 class="mb-0">Recent Orders</h5> --}}
            </div>
            <div class="ms-auto">
                {{-- <button type="button" class="btn btn-white btn-sm px-4 radius-15">View More</button> --}}
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th class="text-center text-black">Serial No:</th>
                        <th class="text-center text-black">Category Name</th>
                        <th class="text-center text-black">Photo</th>
                        <th class="text-center text-black">Created At</th>
                        <th class="text-center text-black">Delete</th>
                        <th class="text-center text-black">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->index +1 }}</td>
                        <td class="border">{{ $category->category_name }}</td>
                        <td>
                            <div class="product-img bg-transparent border">
                                <img src="{{ asset('uploads/product_photo')}}/{{ $category->product_photo }}" width="50" alt="not found">
                            </div>
                        </td>
                        <td class="border">
                            {{ $category->created_at->format('d M Y') }}
                            @if ( $category->created_at->diffinseconds() < 60 )
                                <div class="badge bg-success text-white btn btn-tumblr">Just Naw</div>
                            @else
                                <div class="badge text-white btn-tumblr bg-success ">{{  $category->created_at->diffforhumans() }}</div>
                            @endif
                        </td>
                        <td><form action="{{ route('category.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-light-danger btn-block radius-5">Delete</button>
                        </form></td>

                        <td>
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-light-success btn-block radius-5">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
{{-- {{ route('category.show', $category->id) }} --}}

