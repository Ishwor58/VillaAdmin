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
    <div class="container-xxl flex-grow-1 container-p-y ">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Property Details</span></h4>

        <div class="bg-light p-4 rounded">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4 h-100 shadow-sm ">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Property Information</h5>
                            <div class="mb-3">
                                <strong>Type:</strong> {{ $property->type }}
                            </div>
                            <div class="mb-3">
                                <strong>Address:</strong> {{ $property->address }}
                            </div>
                            <div class="mb-3">
                                <strong>Price:</strong> {{ $property->price }}
                            </div>
                            <div class="mb-3">
                                <strong>Bedrooms:</strong> {{ $property->bedrooms }}
                            </div>
                            <div class="mb-3">
                                <strong>Bathrooms:</strong> {{ $property->bathrooms }}
                            </div>
                            <div class="mb-3">
                                <strong>Area:</strong> {{ $property->area }}
                            </div>
                            <div class="mb-3">
                                <strong>Floor:</strong> {{ $property->floor }}
                            </div>
                            <div class="mb-3">
                                <strong>Parking:</strong> {{ $property->parking }}
                            </div>
                            <div class="mb-3">
                                <strong>Description:</strong> {{ $property->description }}
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm ">
                        <div class="card-body">
                            <h5 class="card-title text-primary mb-4">Property Image</h5>
                            <img src="{{ asset('uploads/' . $property->img) }}" alt="Property Image" class="img-fluid" style="max-width: 100%; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-end mb-2 pt-5 px-5 mx-5">
            <div class="px-3">
                       <a href="{{ url()->previous() }}" class="btn btn-primary ">Back</a>
          </div>
          </div>
        </div>
    </div>
</div>

@endsection
