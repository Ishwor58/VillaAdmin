@extends('Villa.Admin.inc.main')

@section('container')

>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Message/</span> Details</h4>

        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Message Details</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-10">
                        <p>{{ $schedule_visit->name }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <p>{{ $schedule_visit->email }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                   <label class="col-sm-2 col-form-label">Phone Number:</label>
                    <div class="col-sm-10">
                        <p>{{ $schedule_visit->pnumber }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                   <label class="col-sm-2 col-form-label">Purpose of Visit:</label>
                    <div class="col-sm-10">
                        <p>{{ $schedule_visit->purpose_of_visit }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                   <label class="col-sm-2 col-form-label">Date:</label>
                    <div class="col-sm-10">
                        <p>{{ $schedule_visit->date }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                   <label class="col-sm-2 col-form-label">Time:</label>
                    <div class="col-sm-10">
                        <p>{{ $schedule_visit->time }}</p>
                    </div>
                </div>
                <div class="row mb-3">
                   <label class="col-sm-2 col-form-label">Message:</label>
                    <div class="col-sm-10">
                        <p>{{ $schedule_visit->message}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-sm-10">
                <a href="{{ route('schedule_visits.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</div>

@endsection
