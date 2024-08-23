@extends('admin.layout.panel')
@section('title', 'Buyer List')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title m-0 me-2">Buyer List</h5>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Preferred Location</th>
                            <th width="4%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($buyers as $buyer)
                            <tr class="{{ $buyer->is_seen == 1 ? '' : 'table-warning' }}">
                                <td>{{ $buyer->name }}</td>
                                <td>{{ $buyer->preferred_location }}</td>
                                <td>
                                    <a href="{{ route('panel.buyer.view', $buyer) }}" class="btn btn-sm btn-primary text-white">
                                        View <i class='bx bx-show ms-2'></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                {{ $buyers->links() }}
            </div>
        </div>
    </div>
@endsection

