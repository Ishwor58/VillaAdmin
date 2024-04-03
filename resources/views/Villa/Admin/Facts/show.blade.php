@extends('Villa.Admin.inc.main')

@section('container')

<div class="container">
    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">fact/</span> Details</h4>

        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">fact Details</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">No:</label>
                    <div class="col-sm-10">
                        <p>{{ $fact->no }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Title:</label>
                    <div class="col-sm-10">
                        <p>{{ $fact->title }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                   <label class="col-sm-2 col-form-label">Sub-title:</label>
                    <div class="col-sm-10">
                        <p>{{ $fact->sub_title }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-sm-10">
                <a href="{{ route('facts.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</div>

@endsection
