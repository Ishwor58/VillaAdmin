@extends('Villa.Admin.inc.main')

@section('container')



<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">SiteConfigs/</span> Details</h4>

        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">SiteConfigs Details</h5>
            </div>
            <div class="card-body">
                
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Key:</label>
                    <div class="col-sm-10">
                        <p>{{ $siteconfig->site_key }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                   <label class="col-sm-2 col-form-label">Value:</label>
                    <div class="col-sm-10">
                        <p>{{ $siteconfig->site_value }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-sm-10">
                <a href="{{ route('siteconfigs.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</div>

@endsection
