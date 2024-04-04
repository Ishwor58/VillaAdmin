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
                    <form method="POST" enctype="multipart/form-data" action="{{ route('best_deals.update', $best_deal->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Type</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <div class="col-12">
                                        <select class="form-select" id="basic-icon-default-type" name="type">
                                            <option selected> {{ $best_deal-> type }} </option>
                                            <option value="Apartments">Apartments</option>
                                            <option value="Villa house">Villa House</option>
                                            <option value="Penthouse">Penthouse</option>

                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname"> Total flat space</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-area" class="input-group-text">
                                        <i class="fa-solid fa-chart-area" aria-hidden="true"></i>
                                    </span>
                                    <input type="number" class="form-control" id="basic-icon-default-area" placeholder="area" aria-label="area" aria-describathby="basic-icon-default-area" name="total_flat_space" value="{{ $best_deal-> total_flat_space }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Floor number</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-floor" class="input-group-text">
                                        <i class="fa-regular fa-building" aria-hidden="true"></i>
                                    </span>
                                    <input type="number" class="form-control" id="basic-icon-default-floor" placeholder="floor" aria-label="floor" aria-describedby="basic-icon-default-floor" name="floor_number" value="{{ $best_deal-> floor_number }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Number of rooms</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-bedrooms" class="input-group-text">
                                        <i class="fa fa fa-bed" aria-hidden="true"></i>
                                    </span>
                                    <input type="number" class="form-control" id="basic-icon-default-bedrooms" placeholder="bedrooms" aria-label="bedrooms" aria-describedby="basic-icon-default-bedrooms" name="number_of_rooms" value="{{ $best_deal-> number_of_rooms }}" />
                                </div>
                            </div>
                        </div>



                        <div class="row mb-3 align-items-center">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Parking available</label>
                            <div class="col-sm-2 ">
                                <div class="input-group input-group-merge d-flex mt-1 align-items-center border rounded">
                                    <i class="fa fa-automobile mx-2 px-2" aria-hidden="true"></i>
                                    <div class="row align-items-center mx-0">
                                        <div class="col-auto pe-2 m-2 ">
                                            <div class="form-check form-check-inline m-n3">
                                                <input class="form-check-input" type="radio" name="parking_available" value="Yes" id="parkingYes" {{ $best_deal->parking_available == 'Yes' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="parkingYes">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-auto ">
                                            <div class="form-check form-check-inline m-0">
                                                <input class="form-check-input" type="radio" name="parking_available" value="No" id="parkingNo" {{ $best_deal->parking_available == 'No' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="parkingNo">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Payment process</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <div class="col-12">
                                        <select class="form-select" id="basic-icon-default-type" name="payment_process">
                                            <option selected> {{ $best_deal->payment_process }} </option>
                                            <option value="Bank">Bank</option>
                                            <option value="Cash-in-hand">Cash-in-hand</option>
                                            <option value="E-wallet">E-wallet</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 form-label" for="basic-icon-default-additional_info1">Additional info</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-additional_info" class="input-group-text">
                                        <i class="fa fa-file-o" style="margin-bottom:46px;"></i></span>
                                    <textarea id="basic-icon-default-additional_info" class="form-control" placeholder="additional_info of the best_deal" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-additional_info" name="additional_info" rows="2" cols="30"> {{ $best_deal-> additional_info }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-img">Img</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3 col">

                                    <input id="imagebox" type="text" class="form-control" name="img" @readonly('true') value="{{ $best_deal->img }}">

                                    <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#modalId">
                                        Choose Image
                                    </button>
                                </div>
                                <a href="{{ asset('uploads/' . $best_deal->img) }}" target="_blank">
                                    <img src="{{ asset('uploads/' . $best_deal->img) }}" alt="img" width="50px" height="50px">
                                </a>
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
