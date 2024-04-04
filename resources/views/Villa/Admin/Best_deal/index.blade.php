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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Property Management/</span> Best Deals List</h4>
        <!-- Best Deals List -->
        <div class="col-xxl">
            <div class="card">
                <h5 class="card-header">Best Deals List</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Type</th>
                                <th>Total Flat Space</th>
                                <th>Floor Number</th>
                                <th>Number of Rooms</th>
                                <th>Parking Available</th>
                                <th>Payment Process</th>
                                <th>Additional Info</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-2">
                            @foreach ($best_deals as $bestDeal)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bestDeal->type }}</td>
                                <td>{{ $bestDeal->total_flat_space }}</td>
                                <td>{{ $bestDeal->floor_number }}</td>
                                <td>{{ $bestDeal->number_of_rooms }}</td>
                                <td>{{ $bestDeal->parking_available }}</td>
                                <td>{{ $bestDeal->payment_process }}</td>
                                <td>{{ $bestDeal->additional_info }}</td>
                                <td>
                                    <a href="{{ asset('uploads/' . $bestDeal->img) }}" target="_blank">
                                        <img src="{{ asset('uploads/' . $bestDeal->img) }}" alt="img" width="50px" height="50px">
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('best_deals.edit', $bestDeal->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('best_deals.show', $bestDeal->id) }}" class="btn btn-sm btn-warning">Show</a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $bestDeal->id }}">
                                        Delete
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $bestDeal->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Best Deal</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this best deal?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <form action="{{ route('best_deals.destroy', $bestDeal->id) }}" method="POST">
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
                    {{ $best_deals->links() }}
                </div>
                <div class="bg-light mt-3 mb-3 mx-2 px-3 text-end">
                    <a href="{{ route('best_deals.create') }}" class="btn btn-primary btn-m">Add <i class="fa fa-plus" style="font-size:14px;color:white; padding-left:1px;"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
