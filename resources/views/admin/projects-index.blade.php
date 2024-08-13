@extends('admin.layout.panel')
@section('title', 'Projects List')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Projects List</h5>
                <div class="p-4">
                    <a href="{{ route('panel.project.create') }}" class="btn btn-primary">Create Project</a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Type</th>
                            <th width="10%">Status</th>
                            <th width="25%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->title }}</td>
                                <td>
                                    <img src="{{ asset($project->image) }}" width="100" alt="">
                                </td>
                                <td>
                                    @switch($project->type)
                                        @case(1)
                                            Upcoming
                                        @break

                                        @case(2)
                                            Ongoing
                                        @break

                                        @case(3)
                                            Completed
                                        @break
                                    @endswitch
                                </td>
                                <td>
                                    <a type="button"
                                        class="btn btn-sm {{ $project->status ? 'btn-success' : 'btn-warning' }} text-white"
                                        href="{{ route('panel.project.status', $project) }}">
                                        {{ $project->status ? 'Publish' : 'Unpublish' }}
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{ route('panel.project.bookings', $project) }}"
                                            class="btn btn-sm btn-primary">Booking
                                            @if ($project->unseenBookingsCount() > 0)
                                                <span
                                                    class="badge rounded-pill bg-danger ms-1">{{ $project->unseenBookingsCount() }}</span>
                                            @endif
                                        </a>
                                        <a href="{{ route('panel.project.photos.create', $project) }}"
                                            class="btn btn-sm btn-info">Add Photos</a>
                                        <a href="{{ route('panel.project.edit', $project) }}"
                                            class="btn btn-sm btn-primary"><i class='bx bx-edit'></i></a>
                                        <form action="{{ route('panel.project.destroy', $project) }}" method="POST">
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
            <div class="d-flex justify-content-center align-items-center">
                {{ $projects->links() }}
            </div>
        </div>
    </div>
@endsection
