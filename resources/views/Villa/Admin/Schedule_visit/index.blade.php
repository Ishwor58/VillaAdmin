@extends('Villa.Admin.inc.main')

@section('container')

<div class="container">
    @if(session('message'))
    {{-- <div class="alert alert-success" id="alert"> --}}
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @elseif(session('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('delete') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    {{-- </div> --}}
    @endif
</div>
<div class="content-wrapper">

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="container ">
                <div class="row">
                    <div class="col">
                         <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Message/</span> Schedule-vist </h4>
                    </div>
                    <div class="col text-end pt-2">
                        
                    </div>
                </div>
            </div>
            <!-- Basic with Icons -->
            <div class="col-xxl">
                <div class="card p-2">
                 
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead >
                                <tr >
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Purpose of Visit</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Message</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-2">

                                @foreach ( $schedule_visits as $schedule_visit)


                                <tr>

                                    <td><i class="  fa-lg text-danger me-1"></i> {{ $loop->iteration }}
                                    <td><i class="  fa-lg text-danger me-0"></i> {{ $schedule_visit->name }}
                                    </td>
                                    <td><i class="  fa-lg text-danger me-0"></i> {{ $schedule_visit->email}}
                                    </td>

                                    <td><i class="  fa-lg text-danger me-0"></i> {{ $schedule_visit->pnumber }}
                                    </td>
                                    <td><i class="  fa-lg text-danger me-0"></i> {{ $schedule_visit->purpose_of_visit }}
                                    </td>
                                    <td><i class="  fa-lg text-danger me-0"></i> {{ $schedule_visit->date }}
                                    </td>
                                    <td><i class="  fa-lg text-danger me-0"></i> {{ $schedule_visit->time }}
                                    </td>
                                    
                                    <td>
                                        <i class="fa-lg text-danger me-0"></i> 
                                        {{ strlen($schedule_visit->message) > 20 ? substr($schedule_visit->message, 0, 20) . '...' : $schedule_visit->message }}
                                    </td>
                                    
                                
                                    <td>
                                        <a href="{{ route ('schedule_visits.show' , $schedule_visit->id)}}" class="btn btn-sm btn-warning"> Show </a>
                                        <a href="\" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$schedule_visit->id}}"> Done </a>
                                    </td>


                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$schedule_visit->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog        ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <form action="{{route('schedule_visits.destroy', $schedule_visit->id)}}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('delete')

                                                            <button type="submit" class="btn btn-danger">Done</button>                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    
                       <div class="p-3">{{ $schedule_visits->links()}}</div>
                        
                    </div>
                </div>
            </div>
        </div>
        @endsection
