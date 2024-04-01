@extends('Villa.Admin.inc.main')

@section('container')

<div class="container">
    <!-- Display any success messages here -->
    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>

<div class="content-wrapper">
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">File Details</span></h4>
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">File Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <p>{{ $file->title }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <img src="{{ asset('uploads/' . $file->img) }}" alt="File Image" width="200px">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <!-- Add any additional buttons or links here -->
                                <a href="{{ route('files.index') }}" class="btn btn-primary">Back</a>
                                <!-- Example Delete Button (assuming you have a route for deleting files) -->
                                <!-- <form action="{{ route('files.destroy', $file->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
