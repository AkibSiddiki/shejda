@extends('admin.layout.panel')
@section('title', 'Client List')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Client List</h5>
                <div class="p-4">
                    <a href="{{ route('panel.client.create') }}" class="btn btn-primary">Create Client</a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="10%">Image</th>
                            <th>Name</th>
                            <th width="10%">Status</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($clients as $client)
                            <tr>
                                <td>
                                    <img src="{{ asset($client->image) }}" class="img-fluid">
                                </td>
                                <td>{{ $client->title }}</td>
                                <td>
                                    <a type="button"
                                        class="btn btn-sm {{ $client->status ? 'btn-success' : 'btn-warning' }} text-white"
                                        href="{{ route('panel.client.status', $client) }}">
                                        {{ $client->status ? 'Publish' : 'Unpublish' }}
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{ route('panel.client.edit', $client) }}"
                                            class="btn btn-sm btn-primary"><i class='bx bx-edit'></i></a>
                                        <form action="{{ route('panel.client.destroy', $client) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i
                                                    class='bx bx-trash'></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

