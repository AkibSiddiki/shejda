@extends('layout.web')
@section('title', 'Buyers')
@section('main')
    <section class="page-hero-area" style="background-image: url({{ asset('assets/web/image/bg/banner5.jpg') }})">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Buyers</h1>
                        <ul>
                            <li><a href="{{ route('web.home') }}">Home</a></li>
                            <li>Buyers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="buyers-contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <div class="buyers-contact-img">
                        <img class="img-fluid" src="{{ $buyers->image1 }}" alt="landowners" title="landowners">
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="buyers-contact-text">
                        <h5>{{ $buyers->title }}</h5>
                        {!! $buyers->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="buyers-contact-form">
        <div class="container">
            <div class="form">
                <div class="row">
                    <div class="col-lg-12">
                        <h5>explore the options</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="buyers-contact-form-wrap">
                            <h4>A.Your Valued Interest</h4>
                            <div class="mb-3">
                                <label class="form-label">Preferred Location</label>
                                <input type="text" class="form-control" placeholder="Enter your preferred location/neighbourhood">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Preferred Size</label>
                                <input type="text" class="form-control" placeholder="Enter your preferred size of the unit in sft">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Car Parking Requirement</label>
                                <input type="text" class="form-control" placeholder="Enter your no. of parking required">
                            </div>
                            <div>
                                <label class="form-label">Expected Handover Date</label>
                                <input type="text" class="form-control" placeholder="Enter your expected handover/move in date">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="buyers-contact-form-wrap">
                            <h4>B.Others Preferences</h4>
                            <div class="mb-3">
                                <label class="form-label">Facing Of The Apartment</label>
                                <input type="text" class="form-control" placeholder="Enter your preferred facing of the unit">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Preferred Floor</label>
                                <input type="text" class="form-control" placeholder="Enter your preferred floor">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Minimum Number Of Bedrooms</label>
                                <input type="text" class="form-control" placeholder="Enter the minimum no. of bedrooms">
                            </div>
                            <div>
                                <label class="form-label">Minimum Number Of Bathrooms</label>
                                <input type="text" class="form-control" placeholder="Enter the minimum no. of bathrooms">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="buyers-contact-form-wrap">
                            <h4>C.Contact Information</h4>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter your full name here">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Profession</label>
                                <input type="text" class="form-control" placeholder="Enter your profession here">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contact Number</label>
                                <input type="text" class="form-control" placeholder="Enter your contact number here">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email ID</label>
                                <input type="email" class="form-control" placeholder="Enter your email ID here">
                            </div>
                            <div>
                                <label class="form-label">Mailing Address</label>
                                <input type="text" class="form-control" placeholder="Enter your mailing address here">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="submit-btn text-center">
                            <input class="common-btn border-0" type="submit" name="buyer-info-submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>
@endSection
