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
                         <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Message/</span> Contact </h4>
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
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-2">

                                @foreach ( $contacts as $contact)


                                <tr>

                                    <td><i class="  fa-lg text-danger me-3"></i> {{ $loop->iteration }}
                                    <td><i class="  fa-lg text-danger me-3"></i> {{ $contact->name }}
                                    </td>
                                    <td><i class="  fa-lg text-danger me-3"></i> {{ $contact->email}}
                                    </td>

                                    <td><i class="  fa-lg text-danger me-3"></i> {{ $contact->subject }}
                                    </td>
                                    
                                    <td><i class="  fa-lg text-danger me-3"></i> {{ $contact->message }}
                                    </td>
                                
                                    <td>
                                        <a href="{{ route ('contacts.show' , $contact->id)}}" class="btn btn-sm btn-warning"> Show </a>
                                        <a href="\" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$contact->id}}"> Done </a>
                                    </td>


                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$contact->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                        <form action="{{route('contacts.destroy', $contact->id)}}" method="POST" enctype="multipart/form-data">
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

                        
                       <div class="pt-3">{{ $contacts->links()}}</div>
                        
                    </div>
                </div>
            </div>
        </div>
        @endsection
