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
                            action="{{ route('carousels.update', $carousel->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Title</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-title" class="input-group-text">
                                            <i class="bx bx-user"></i>
                                        </span>
                                        <input type="text" class="form-control" id="basic-icon-default-title"
                                            placeholder="title" aria-label="title"
                                            aria-describedby="basic-icon-default-title" name="title"
                                            value="{{ $carousel->title }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Location</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-location" class="input-group-text">
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                        </span>
                                        <input type="text" class="form-control" id="basic-icon-default-location"
                                            placeholder="location" aria-label="location"
                                            aria-describedby="basic-icon-default-location" name="location" value="{{ $carousel->location }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-img">Img</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3 col">

                                        <input id="imagebox" type="text" class="form-control" name="img"
                                            @readonly('true') value="{{ $carousel->img }}">

                                        <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal"
                                            data-bs-target="#modalId">
                                            Choose Image
                                        </button>
                                    </div>
                                    <a href="{{ asset('uploads/' . $carousel->img) }}" target="_blank">
                                        <img src="{{ asset('uploads/' . $carousel->img) }}" alt="img" width="50px"
                                            height="50px">
                                    </a>
                                    <div class="mb-3">
                                        <!-- Modal trigger button -->
                                        <!-- Modal Body -->
                                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static"
                                            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalTitleId">Choose
                                                            photo
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">


                                                        <style>
                                                            [type=radio]:checked+img {
                                                                outline: 2px solid #f00;
                                                            }
                                                        </style>

                                                        @foreach ($files as $file)
                                                            <label>
                                                                <input type="radio" name="img"
                                                                    value="{{ $file->img }}" style="opacity: 0;" />
                                                                <img src="{{ asset('uploads/' . $file->img) }}"
                                                                    alt="" height="100px;" width="100px;"
                                                                    style="margin-right:20px; margin-bottom:10px;">
                                                            </label>
                                                        @endforeach
                                                        <div>
                                                            {{ $files->links() }}
                                                        </div>
                                                        <?php
                                                        ?>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-dismiss="modal"
                                                            onclick=" firstFunction()">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Optional: Place to the bottom of scripts -->
                                        <script>
                                            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                                        </script>
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
        <script>
            function firstFunction() {
                var x = document.querySelector('input[name=img]:checked').value;
                document.getElementById('imagebox').value = x;
            }
        </script>
    @endsection