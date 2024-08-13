@extends('admin.layout.panel')
@section('title', 'Projects List')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title m-0 me-2">Projects Booking List | {{ $project->title }}</h5>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Massage</th>
                            <th width="4%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($bookings as $booking)
                            <tr class="{{ $booking->is_seen == 1 ? '' : 'table-warning' }}">
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->phone }}</td>
                                <td>{{ $booking->email }}</td>
                                <td>{{ $booking->message }}</td>
                                <td>
                                    <a href="{{ route('panel.project.seen', $booking) }}" class="btn btn-sm">
                                        @if ($booking->is_seen == 1)
                                            <i class='bx bx-low-vision'></i>
                                        @else
                                            <i class='bx bx-show'></i>
                                        @endif
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                {{ $bookings->links() }}
            </div>
        </div>
    </div>
@endsection
