@extends('Villa.Admin.inc.main')

@section('container')

<div class="container">
    @if(session('message'))
    {{-- <div class="alert alert-success" id="alert"> --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
    {{-- </div> --}}
    @endif
</div>



    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Site Configs/</span> Create </h4>
                <a href="{{ route('siteconfigs.index') }}" class="btn btn-primary">Back to List</a> <hr>
            <!-- Basic Layout & Basic with Icons -->
            <!-- Basic with Icons -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('siteconfigs.store') }}">
                            @csrf
                            
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Site Key</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-site_key" class="input-group-text">
                                            <i class="fa fa-minus-square-o"></i>
                                        </span>
                                        <input type="text" class="form-control" id="basic-icon-default-site_key"
                                            placeholder="site_key" aria-label="site_key"
                                            aria-describedby="basic-icon-default-site_key" name="site_key" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Site Value</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-site_value" class="input-group-text">
                                            <i class="fa fa-list-alt"></i>
                                        </span>
                                        <input type="text" class="form-control" id="basic-icon-default-site_value"
                                            placeholder="site_value" aria-label="site_value"
                                            aria-describedby="basic-icon-default-site_value" name="site_value" />
                                    </div>
                                </div>
                            </div>

                           <div class="row justify-content-end">
                                <div class="col-sm-10">

                                    <button type="submit" class="btn btn-primary">Send</button> <br>  <br> 
                                  
                                </div>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
      
    @endsection