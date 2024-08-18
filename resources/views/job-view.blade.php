@extends('layout.web')

@section('title', 'Job Details')

@section('main')

<section class="page-hero-area" style="background-image: url(./image/bg/banner5.jpg)">
    <div class="hero-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumbs-area">
            <h1>Career</h1>
            <ul>
              <li>
                <a href="index.html">Home</a>
              </li>
              <li>Career</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="job-post-details-page">
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-xl-8">
                <div class="details-post-data">
                    <div class="post-date">{{ $job->created_at->format('M d, Y') }}</div>
                    <h3 class="post-title">{{ $job->title }}</h3>
                    <div class="sharethis-area mb-5">
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>
                    <div class="post-block border-style">
                        <div class="d-flex align-items-center">
                            <div class="block-numb text-center text-white rounded-circle me-2">1
                            </div>
                            <h4 class="block-title">Overview</h4>
                        </div>
                        {!! $job->overview !!}
                    </div>
                    <div class="post-block border-style">
                        <div class="d-flex align-items-center">
                            <div class="block-numb text-center text-white rounded-circle me-2">2 </div>
                            <h4 class="block-title">Job Description</h4>
                        </div>
                        {!! $job->description !!}
                    </div>
                    <div class="post-block border-style">
                        <div class="d-flex align-items-center">
                            <div class="block-numb text-center fw-500 text-white rounded-circle me-2">3
                            </div>
                            <h4 class="block-title">Responsibilities</h4>
                        </div>
                        <div class="list-type-one style-none mb-15">
                            {!! $job->responsibilities !!}
                        </div>
                    </div>
                    <div class="post-block border-style">
                        <div class="d-flex align-items-center">
                            <div class="block-numb text-center fw-500 text-white rounded-circle me-2">4
                            </div>
                            <h4 class="block-title">Required Skills:</h4>
                        </div>
                        <div class="list-type-two style-none mb-15">
                            {!! $job->required_skills !!}
                        </div>
                    </div>
                    <div class="post-block border-style">
                        <div class="d-flex align-items-center">
                            <div class="block-numb text-center fw-500 text-white rounded-circle me-2">5
                            </div>
                            <h4 class="block-title">Benefits:</h4>
                        </div>
                        <ul class="list-type-two style-none mb-15">
                            <li>We are a remote-first company.</li>
                            <li>100% company-paid health insurance premiums for you &amp; your
                                dependents</li>
                            <li>Vacation stipend</li>
                            <li>Unlimited paid vacation and paid company holidays</li>
                            <li>Monthly wellness/gym stipend</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-xl-4">
                <div class="job-company-info ms-xl-5 ms-xxl-0 lg-mt-50">
                    <div class="job-details-sidebar">
                        <ul class="job-meta-data row style-none">
                            <li class="col-xl-7 col-md-4 col-sm-6">
                                <span>Salary</span>
                                <div>Negotiable</div>
                            </li>
                            <li class="col-xl-5 col-md-4 col-sm-6">
                                <span>Expertise</span>
                                <div>Intermediate</div>
                            </li>
                            <li class="col-xl-7 col-md-4 col-sm-6">
                                <span>Location</span>
                                <div>Dhaka, Bangladesh</div>
                            </li>
                            <li class="col-xl-5 col-md-4 col-sm-6">
                                <span>Job Type</span>
                                <div>Fulltime</div>
                            </li>
                            <li class="col-xl-7 col-md-4 col-sm-6">
                                <span>Date</span>
                                <div>12 jun, 2024 </div>
                            </li>
                            <li class="col-xl-5 col-md-4 col-sm-6">
                                <span>Experience</span>
                                <div>2 Years</div>
                            </li>
                        </ul>
                        <a href="jobApplication.html" class="btn common-btn w-100">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
