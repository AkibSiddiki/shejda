@extends('admin.layout.panel')
@section('title', 'Message List')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title m-0 me-2">Message List</h5>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th width="4%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($messages as $message)
                            <tr class="{{ $message->is_seen == 1 ? '' : 'table-warning' }}">
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->phone }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->message }}</td>
                                <td>
                                    <a href="{{ route('panel.message.seen', $message) }}" class="btn btn-sm">
                                        @if ($message->is_seen == 1)
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
                {{ $messages->links() }}
            </div>
        </div>
    </div>
@endsection

