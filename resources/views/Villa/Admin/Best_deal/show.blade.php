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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Best deal details</span></h4>

        <div class="bg-light p-4 rounded">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4 h-100 shadow-sm ">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Best deal Information</h5>
                            <div class="mb-3">
                                <strong>Type:</strong> {{ $best_deal->type }}
                            </div>
                            <div class="mb-3">
                                <strong>Total flat space:</strong> {{ $best_deal->total_flat_space }}
                            </div>
                            <div class="mb-3">
                                <strong>Floor number:</strong> {{ $best_deal->floor_number }}
                            </div>
                            <div class="mb-3">
                                <strong>Number of rooms:</strong> {{ $best_deal->number_of_rooms }}
                            </div>
                            <div class="mb-3">
                                <strong>Parking available:</strong> {{ $best_deal->parking_available }}
                            </div>
                            <div class="mb-3">
                                <strong>Payment process:</strong> {{ $best_deal->payment_process }}
                            </div>
                            <div class="mb-3">
                                <strong>Additional info:</strong> {{ $best_deal->additional_info }}
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm ">
                        <div class="card-body">
                            <h5 class="card-title text-primary mb-4"> Image </h5>
                            <img src="{{ asset('uploads/' . $best_deal->img) }}" alt="best_deal Image" class="img-fluid" style="max-width: 100%; height: auto;">
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
