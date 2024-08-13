@extends('admin.layout.panel')
@section('title', 'Jobs List')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Jobs List</h5>
                <div class="p-4">
                    <a href="{{ route('panel.job.create') }}" class="btn btn-primary">Create Job</a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Due Date</th>
                            <th>Type</th>
                            <th width="10%">Status</th>
                            <th width="25%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($jobs as $job)
                            <tr>
                                <td>{{ $job->title }}</td>
                                <td>
                                    {{ $job->due_date }}
                                </td>
                                <td>
                                    @switch($job->type)
                                        @case(1)
                                            Full Time
                                        @break

                                        @case(2)
                                            Part Time
                                        @break

                                        @case(3)
                                            Internship
                                        @break
                                    @endswitch
                                </td>
                                <td>
                                    <a type="button"
                                        class="btn btn-sm {{ $job->status ? 'btn-success' : 'btn-warning' }} text-white"
                                        href="{{ route('panel.job.status', $job) }}">
                                        {{ $job->status ? 'Publish' : 'Unpublish' }}
                                    </a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="{{ route('panel.job.applicants', $job) }}"
                                            class="btn btn-sm btn-primary">Applicants
                                            @if ($job->unseenApplicantsCount() > 0)
                                                <span
                                                    class="badge rounded-pill bg-danger ms-1">{{ $job->unseenApplicantsCount() }}</span>
                                            @endif
                                        </a>
                                        <a href="{{ route('panel.job.edit', $job) }}"
                                            class="btn btn-sm btn-primary"><i class='bx bx-edit'></i></a>
                                        <form action="{{ route('panel.job.destroy', $job) }}" method="POST">
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
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
@endsection

