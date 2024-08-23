@extends('layout.web')
@section('title', 'Project' . ' | ' . $project->title)
@section('main')
    @include('shared.projects-header')
    <section class="projects-details">
        <div class="container">
            <div class="row">
                <div class="proejct-details-text">
                    <div class="row">
                        <div class="col-12">
                            @include('shared.success')
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="proejct-details-img">
                                <img class="img-fluid w-100" src="{{ asset($project->image) }}" alt="{{ $project->title }}"
                                    title="{{ $project->title }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="project-AtAGlance-wrap">
                                <h2 class="project-title">At a Glance</h2>
                                <ul class="project-info">
                                    <li>
                                        <div class="project-info-label">Client</div>
                                        <div class="project-info-content">{{ $project->client }}</div>
                                    </li>
                                    <li>
                                        <div class="project-info-label">Architect</div>
                                        <div class="project-info-content">{{ $project->architect }}</div>
                                    </li>
                                    <li>
                                        <div class="project-info-label">Location</div>
                                        <div class="project-info-content">{{ $project->location }}</div>
                                    </li>
                                    <li>
                                        <div class="project-info-label">Size</div>
                                        <div class="project-info-content">{{ $project->size }}</div>
                                    </li>
                                    <li>
                                        <div class="project-info-label">Year Completed</div>
                                        <div class="project-info-content">{{ $project->year_completed }}</div>
                                    </li>
                                    <li>
                                        <div class="project-info-label">Categories</div>
                                        <div class="project-info-content">{{ $project->categories }}</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="proejct-detials-wrap">
                                <h2 class="project-title">Features &amp; Amenities</h2>
                                <div class="content-inner-page">
                                    {!! $project->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php
        $photos = $project->photos;
        $i = 1;
    @endphp
    @if($photos->count() > 0)
    <section class="photo-gallery-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-heading mb-5">
                        <h2>Project Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0">
                @foreach ($photos as $photo)
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-img">
                            <a href="{{ asset($photo->image) }}" data-fancybox="gallery"
                                data-caption="{{ $i }}">
                                <div class="gllery-img-wrap">
                                    <img class="img-fluid" src="{{ asset($photo->image) }}" alt="{{ $project->title }}"
                                        title="{{ $project->title }}">
                                </div>
                                <div class="photo-caption">
                                    <h3>{{ $i++ }}</h3>
                                </div>
                                <div class="photo-icon">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <section class="booking-now-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-heading mb-5">
                        <h2>Booking</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="booking-img-wrap">
                        <img class="img-fluid w-100" src="{{ asset('assets/web/image/bg/project/1627919131g61t1.jpg') }}"
                            alt="" title="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="booking-form-wrap">
                        <form action="{{ route('web.project.booking.store', $project) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Enter your full name here">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email"
                                    placeholder="Enter your email ID here">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contact number</label>
                                <input type="text" class="form-control" name="phone"
                                    placeholder="Enter your contact number here">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" name="message" placeholder="Enter your message here" rows="5"></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="common-btn mt-0" href="about-us.php">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
