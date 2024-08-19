@extends('admin.layout.panel')
@section('title', 'Projects List')
@section('main')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title m-0 me-2">Job Applicants List | {{ $job->title }}</h5>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Nationality</th>
                            <th>Date of birth</th>
                            <th>CV</th>
                            <th width="4%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($applicants as $applicant)
                            <tr class="{{ $applicant->is_seen == 1 ? '' : 'table-warning' }}">
                                <td>{{ $applicant->fname . ' ' . $applicant->lname }}</td>
                                <td>{{ $applicant->phone }}</td>
                                <td>{{ $applicant->email }}</td>
                                <td>{{ $applicant->nationality }}</td>
                                <td>{{ $applicant->date_of_birth }}</td>
                                <td><a href="{{ asset($applicant->cv) }}" target="_blank"></a></td>
                                <td>
                                    <a href="{{ asset($applicant->cv) }}" target="_blank" class="btn btn-sm btn-primary text-white p-2">
                                        CV
                                    </a>

                                    @if ($applicant->is_seen == 1)
                                        <i class='bx bx-low-vision'></i>
                                    @else
                                        <a href="{{ route('panel.applicant.seen', $applicant) }}" class="btn btn-sm btn-info text-white">
                                            <i class='bx bx-show'></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                {{ $applicants->links() }}
            </div>
        </div>
    </div>
@endsection

