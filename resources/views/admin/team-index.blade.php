@extends('admin.layout.panel')
@section('title', 'Team List')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Team List</h5>
                <div class="p-4">
                    <a href="{{ route('panel.team.create') }}" class="btn btn-primary">Create Team</a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Designation</th>
                            <th>Position No</th>
                            <th width="10%">Status</th>
                            <th width="10%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($teams as $team)
                            <tr>
                                <td>
                                    <img src="{{ asset($team->image) }}" width="100px" alt="">
                                </td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->type == 1 ? 'DIRECTOR' : 'OFFICER' }}</td>
                                <td>{{ $team->designation }}</td>
                                <td>{{ $team->position }}</td>
                                <td>
                                    <a type="button"
                                        class="btn btn-sm {{ $team->status ? 'btn-success' : 'btn-warning' }} text-white"
                                        href="{{ route('panel.team.status', $team) }}">
                                        {{ $team->status ? 'Publish' : 'Unpublish' }}
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{ route('panel.team.edit', $team) }}" class="btn btn-sm btn-primary"><i
                                                class='bx bx-edit'></i></a>
                                        <form action="{{ route('panel.team.destroy', $team) }}" method="POST">
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
