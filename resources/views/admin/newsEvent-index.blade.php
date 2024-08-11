@extends('admin.layout.panel')
@section('title', 'News and Event List')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <div class="card-header">
                    <h5 class="card-title m-0 me-2">News and Event List</h5>
                </div>
                <div class="p-4">
                    <a href="{{ route('panel.newsEvent.create') }}" class="btn btn-primary">Create News and Event</a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="12%">Image</th>
                            <th>Title</th>
                            <th width="10%">Status</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($newsEvents as $newsEvent)
                            <tr>
                                <td><img src="{{ asset($newsEvent->image) }}" alt="image" class="img-fluid" /></td>
                                <td>{{ $newsEvent->title }}</td>
                                <td>
                                    <a type="button"
                                        class="btn btn-sm {{ $newsEvent->status ? 'btn-success' : 'btn-warning' }} text-white"
                                        href="{{ route('panel.newsEvent.status', $newsEvent) }}">
                                        {{ $newsEvent->status ? 'Publish' : 'Unpublish' }}
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{ route('panel.newsEvent.edit', $newsEvent) }}"
                                            class="btn btn-sm btn-primary"><i class='bx bx-edit'></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-center">
                {{ $newsEvents->links() }}
            </div>
        </div>
    </div>
@endsection
