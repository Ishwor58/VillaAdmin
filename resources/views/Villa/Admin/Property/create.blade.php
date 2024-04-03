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
                    <form method="POST" enctype="multipart/form-data" action="{{ route('properties.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Type</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                

                                    <div class="col-12">
                                        <select class="form-select" id="basic-icon-default-type" name="type" >
                                         
                                            <option value="Apartments">Apartments</option>
                                            <option value="Villa house">Villa House</option>
                                            <option value="Penthouse">Penthouse</option>
                                            <option value="Cooperation">Cooperation</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Address</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-address" class="input-group-text">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" id="basic-icon-default-address" placeholder="address" aria-label="address" 
                                    aria-describedby="basic-icon-default-address" name="address" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Price</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-price" class="input-group-text">
                                        <i class="fa fa fa-dollar" aria-hidden="true"></i>
                                    </span>
                                    <input type="number" class="form-control" id="basic-icon-default-price" placeholder="price" aria-label="price"
                                     aria-describedby="basic-icon-default-price" name="price" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Bedrooms</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-bedrooms" class="input-group-text">
                                        <i class="fa fa fa-bed" aria-hidden="true"></i>
                                    </span>
                                    <input type="number" class="form-control" id="basic-icon-default-bedrooms" placeholder="bedrooms" aria-label="bedrooms" 
                                    aria-describedby="basic-icon-default-bedrooms" name="bedrooms" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Bathrooms</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-bathrooms" class="input-group-text">
                                        <i class="fa fa fa-bathtub" aria-hidden="true"></i>
                                    </span>
                                    <input type="number" class="form-control" id="basic-icon-default-bathrooms" placeholder="bathrooms" aria-label="bathrooms" 
                                    aria-describathby="basic-icon-default-bathrooms" name="bathrooms" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Area</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-area" class="input-group-text">
                                        <i class="fa-solid fa-chart-area" aria-hidden="true"></i>
                                    </span>
                                    <input type="number" class="form-control" id="basic-icon-default-area" placeholder="area" aria-label="area" 
                                    aria-describathby="basic-icon-default-area" name="area" />
                                </div>
                            </div>
                        </div>
                        

                        

                        
                         <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Floor</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-floor" class="input-group-text">
                                        <i class="fa-regular fa-building" aria-hidden="true"></i>
                                    </span>
                                    <input type="number" class="form-control" id="basic-icon-default-floor" placeholder="floor" aria-label="floor" 
                                    aria-describedby="basic-icon-default-floor" name="floor" />
                                </div>
                            </div>
                        </div>

                         <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Parking</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-parking" class="input-group-text">
                                        <i class="fa fa-automobile" style="color:grey" aria-hidden="true"></i>
                                    </span>
                                    <input type="number" class="form-control" id="basic-icon-default-parking" placeholder="parking" aria-label="parking" 
                                    aria-describedby="basic-icon-default-parking" name="parking" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                                    <label class="col-sm-2 form-label" for="basic-icon-default-description1">Description</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-description" class="input-group-text">
                                            <i class="fa fa-file-o" style="margin-bottom:46px;"></i></span>
                                            <textarea id="basic-icon-default-description" class="form-control" placeholder="description of the property"
                                                aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-description" name="description" rows="2" cols="30"></textarea>
                                        </div>
                                    </div>
                                </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-img">Img</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3 col">

                                    <input id="imagebox" type="text" class="form-control" disabled name="img" readonly>

                                    <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#modalId">
                                        Choose Image
                                    </button>
                                </div>

                                <div class="mb-3">
                                    <!-- Modal trigger button -->
                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId">Choose
                                                        photo
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">


                                                    <style>
                                                        [type=radio]:checked+img {
                                                            outline: 2px solid #f00;
                                                        }

                                                    </style>

                                                    @foreach ($files as $file)
                                                    <label>
                                                        <input type="radio" name="img" value="{{ $file->img }}" style="opacity: 0;" />
                                                        <img src="{{ asset('uploads/' . $file->img) }}" alt="" height="100px;" width="100px;" style="margin-right:20px; margin-bottom:10px;">
                                                    </label>
                                                    @endforeach
                                                    <div>
                                                        {{ $files->links() }}
                                                    </div>
                                                    <?php
                                                        ?>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick=" firstFunction()">Save</button>
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
                                    <button type="submit" class="btn btn-primary">Send</button> <br> <br>
                                    <a href="{{ route('properties.index') }}" class="btn btn-primary">Back to List</a>
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
