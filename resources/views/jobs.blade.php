@extends('layout.web')

@section('title', 'Jobs')

@section('main')

    @include('shared.job-header')

    <section class="job-post-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    @include('shared.success')
                </div>
                <div class="col-lg-10 m-auto">
                    @foreach ($jobs as $job)
                        <div class="single-page-right">
                            <div class="job-opport-cat-list border p-4">
                                <h5>{{ $job->title }}</h5>
                                <p><strong>Added: </strong> {{ $job->created_at->format('d M, Y') }} </p>
                                <p><strong>Role Type: </strong>
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
                                </p>
                                <p><strong>Location: </strong>{{ $job->location }}</p>
                                <a href="{{ route('web.job.view', $job) }}" class="btn common-btn">Job details</a>
                            </div>
                        </div>
                    @endforeach
                    <div class="mt-4 mb-4">
                        {{ $jobs->withQueryString()->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
