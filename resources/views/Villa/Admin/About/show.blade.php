@extends('Villa.Admin.inc.main')

@section('container')



<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">about/</span> Details</h4>

        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">About Details</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Title:</label>
                    <div class="col-sm-10">
                        <p>{{ $about->title }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Description:</label>
                    <div class="col-sm-10">
                        <p>{{ $about->description }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Image:</label>
                    <div class="col-sm-10">
                        <img src="{{ asset('uploads/' . $about->img) }}" alt="about Image" width="200">
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-sm-10">
                <a href="{{ route('abouts.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</div>

@endsection
