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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal
                Layouts</h4>
            <!-- Basic Layout & Basic with Icons -->
            <!-- Basic with Icons -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Basic with Icons</h5>
                        <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data"
                            action="{{ route('facts.update', $fact->id) }}">
                            @csrf
                            @method('PUT')
                                 <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">No</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-No" class="input-group-text">
                                            <strong>*</strong>
                                        </span>
                                        <input type="text" class="form-control" id="basic-icon-default-No"
                                            placeholder="No" aria-label="No"
                                            aria-describedby="basic-icon-default-No" name="no" value="{{ $fact -> no }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Title</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-title" class="input-group-text">
                                            <i class="fa fa-minus-square-o"></i>
                                        </span>
                                        <input type="text" class="form-control" id="basic-icon-default-title"
                                            placeholder="title" aria-label="title"
                                            aria-describedby="basic-icon-default-title" name="title"  value="{{ $fact -> title }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">sub_title</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-sub_title" class="input-group-text">
                                            <i class="fa fa-list-alt"></i>
                                        </span>
                                        <input type="text" class="form-control" id="basic-icon-default-sub_title"
                                            placeholder="sub_title" aria-label="sub_title"
                                            aria-describedby="basic-icon-default-sub_title" name="sub_title"  value="{{ $fact -> sub_title }}" />
                                    </div>
                                </div>
                            </div>

                           <div class="row justify-content-end">
                                <div class="col-sm-10">

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                           
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        
    @endsection