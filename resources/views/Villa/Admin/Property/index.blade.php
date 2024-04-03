@extends('Villa.Admin.inc.main')

@section('container')

<div class="container">
    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('delete') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Property Management/</span> Properties List</h4>
        <!-- Property List -->
        <div class="col-xxl">
            <div class="card">
                <h5 class="card-header">Property List</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Type</th>
                                <th>Address</th>
                                <th>Price</th>
                                <th>Bedrooms</th>
                                <th>Bathrooms</th>
                                <th>Area</th>
                                <th>Floor</th>
                                <th>Parking</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-2">
                            @foreach ($properties as $property)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $property->type }}</td>
                                <td>{{ $property->address }}</td>
                                <td>{{ $property->price }}</td>
                                <td>{{ $property->bedrooms }}</td>
                                <td>{{ $property->bathrooms }}</td>
                                <td>{{ $property->area }}</td>
                                <td>{{ $property->floor }}</td>
                                <td>{{ $property->parking }}</td>
                                <td>{{ $property->description }}</td>
                                <td>
                                    <a href="{{ asset('uploads/' . $property->img) }}" target="_blank">
                                        <img src="{{ asset('uploads/' . $property->img) }}" alt="img" width="50px" height="50px">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('properties.show', $property->id) }}" class="btn btn-sm btn-warning">Show</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $property->id }}">
                                        Delete
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $property->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Property</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this property?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <form action="{{ route('properties.destroy', $property->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $properties->links() }}
                </div>
                <div class="bg-light mt-3 mb-3 mx-2 px-3 text-end">
                  
                            <a href="{{ route('properties.create') }}" class="btn btn-primary btn-m">Add <i class="fa fa-plus" style="font-size:14px;color:white; padding-left:1px;"></i></a>
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
