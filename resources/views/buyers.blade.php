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
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                @include('shared.success')
            </div>
        </div>
    </div>
    <section class="buyers-contact-form">
        <div class="container">
            <form class="form" action="{{ route('web.buyers.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h5>explore the options</h5>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-4">
                        <div class="buyers-contact-form-wrap">
                            <h4>A.Your Valued Interest</h4>
                            <div class="mb-3">
                                <label class="form-label" for="preferred_location">Preferred Location</label>
                                <input type="text" class="form-control" id="preferred_location" name="preferred_location" placeholder="Enter your preferred location/neighbourhood" required value="{{ old('preferred_location') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="preferred_size">Preferred Size</label>
                                <input type="text" class="form-control" id="preferred_size" name="preferred_size" placeholder="Enter your preferred size of the unit in sft" required value="{{ old('preferred_size') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="no_of_car_parking_requirement">Car Parking Requirement</label>
                                <input type="text" class="form-control" id="no_of_car_parking_requirement" name="no_of_car_parking_requirement" placeholder="Enter your no. of parking required" required value="{{ old('no_of_car_parking_requirement') }}">
                            </div>
                            <div>
                                <label class="form-label" for="expected_handover_date">Expected Handover Date</label>
                                <input type="date" class="form-control" id="expected_handover_date" name="expected_handover_date" placeholder="Enter your expected handover/move in date" required value="{{ old('expected_handover_date') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="buyers-contact-form-wrap">
                            <h4>B.Others Preferences</h4>
                            <div class="mb-3">
                                <label class="form-label" for="facing_of_the_apartment">Facing Of The Apartment</label>
                                <select class="form-select" id="facing_of_the_apartment" name="facing_of_the_apartment" required>
                                    <option value="" selected disabled hidden>Select option</option>
                                    <option value="1" {{ old('facing_of_the_apartment') == 1 ? 'selected' : '' }}>North</option>
                                    <option value="2" {{ old('facing_of_the_apartment') == 2 ? 'selected' : '' }}>South</option>
                                    <option value="3" {{ old('facing_of_the_apartment') == 3 ? 'selected' : '' }}>East</option>
                                    <option value="4" {{ old('facing_of_the_apartment') == 4 ? 'selected' : '' }}>West</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="preferred_floor">Preferred Floor</label>
                                <input type="text" class="form-control" id="preferred_floor" name="preferred_floor" placeholder="Enter your preferred floor" required value="{{ old('preferred_floor') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="minimum_number_of_bedrooms">Minimum Number Of Bedrooms</label>
                                <input type="text" class="form-control" id="minimum_number_of_bedrooms" name="minimum_number_of_bedrooms" placeholder="Enter the minimum no. of bedrooms" required value="{{ old('minimum_number_of_bedrooms') }}">
                            </div>
                            <div>
                                <label class="form-label" for="minimum_number_of_bathrooms">Minimum Number Of Bathrooms</label>
                                <input type="text" class="form-control" id="minimum_number_of_bathrooms" name="minimum_number_of_bathrooms" placeholder="Enter the minimum no. of bathrooms" required value="{{ old('minimum_number_of_bathrooms') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="buyers-contact-form-wrap">
                            <h4>C.Contact Information</h4>
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name here" required value="{{ old('name') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="profession">Profession</label>
                                <input type="text" class="form-control" id="profession" name="profession" placeholder="Enter your profession here" required value="{{ old('profession') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="email">Email ID</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email ID here" required value="{{ old('email') }}">
                            </div>
                            <div>
                                <label class="form-label" for="phone">Contact Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your contact number here" required value="{{ old('phone') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="mail_address">Mailing Address</label>
                                <input type="text" class="form-control" id="mail_address" name="mail_address" placeholder="Enter your mailing address here" required value="{{ old('mail_address') }}">
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
            </form>
        </div>
    </section>
@endSection
