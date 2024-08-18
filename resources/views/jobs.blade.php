@extends('layout.web')

@section('title', 'Jobs')

@section('main')

<section class="page-hero-area" style="background-image: url({{ asset('assets/web/image/bg/banner5.jpg') }})">
    <div class="hero-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumbs-area">
            <h1>Career</h1>
            <ul>
              <li>
                <a href="{{ route('web.home') }}">Home</a>
              </li>
              <li>Career</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="job-post-page">
    <div class="container">
        <div class="row">
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
                <div class="d-flex justify-content-center">
                    <div class="mt-4 mb-4">
                        {{ $jobs->withQueryString()->links() }}
                    </div>
                </div>
                {{-- <div class="single-page-right">
                    <div class="job-opport-cat-list border p-4">
                        <h5>Assistant Manager: Finance &amp; Admin</h5>
                        <p><strong>Added: </strong> January 1, 2023 </p>
                        <p><strong>Role Type: </strong>One-year fixed term with the possibility of
                            extension.</p>
                        <p><strong>Location: </strong> Dhaka </p>
                        <a href="job-details.html" class="btn common-btn">Job details</a>
                    </div>
                </div>
                <div class="single-page-right">
                    <div class="job-opport-cat-list border p-4">
                        <h5>Management Trainee </h5>
                        <p><strong>Added:</strong> October 6, 2022</p>
                        <p><strong>Role Type:</strong> 6 months, Contractual</p>
                        <p><strong>Location:</strong> Dhaka</p>
                        <a href="job-details.html" class="btn common-btn">Job details</a>
                    </div>
                </div>
                <div class="single-page-right">
                    <div class="job-opport-cat-list border p-4">
                        <h5>Graphic Designer</h5>
                        <p><strong>Added:</strong> July 1, 2022</p>
                        <p><strong>Role Type:</strong> Full time, Contractual </p>
                        <p><strong>Location:</strong> Dhaka</p>
                        <a href="Job-details.html" class="btn common-btn">Job details</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>

@endsection
