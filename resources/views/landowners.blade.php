@extends('layout.web')
@section('title', 'Landowners')
@section('main')
    <section class="page-hero-area" style="background-image: url({{ asset('assets/web/image/bg/banner5.jpg') }})">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>landowners</h1>
                        <ul>
                            <li><a href="{{ route('web.home') }}">Home</a></li>
                            <li>landowners</li>
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
                        <img class="img-fluid" src="{{ $landowners->image1 }}" alt="landowners" title="landowners">
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="buyers-contact-text">
                        <h5>{{ $landowners->title }}</h5>
                        {!! $landowners->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="buyers-contact-form">
        <div class="container">
            <form class="form" action="#" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h5>meet the professionals</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="buyers-contact-form-wrap">
                            <h4>Land Information</h4>
                            <div class="mb-3">
                                <label class="form-label">Locality</label>
                                <input type="text" class="form-control" placeholder="Full address of the land">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control"
                                    placeholder="Size of the land in kathas (rounded)">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Width of the road in front</label>
                                <input type="text" class="form-control" placeholder="In feet">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Expected Handover Date</label>
                                <input type="text" class="form-control"
                                    placeholder="Enter your expected handover/move in date">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Category of land</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Select option</option>
                                    <option value="1">Freehold</option>
                                    <option value="2">Leasehold</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Facing</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Select option</option>
                                    <option value="1">West</option>
                                    <option value="2">North</option>
                                    <option value="3">South</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Attractive features (if any)</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected="">Select option</option>
                                    <option value="1">Lakeside</option>
                                    <option value="2">Corner Plot</option>
                                    <option value="3">Park View</option>
                                    <option value="4">Main Road</option>
                                    <option value="5">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="buyers-contact-form-wrap">
                            <h4>Landowners Profile</h4>
                            <div class="mb-3">
                                <label class="form-label">Name of the landowner*</label>
                                <input type="text" class="form-control"
                                    placeholder="Full name of the registered landowner">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contact person</label>
                                <input type="text" class="form-control" placeholder="Enter your preferred floor">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Preferred Floor</label>
                                <input type="text" class="form-control"
                                    placeholder="Name (if different from the landowner)">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email ID</label>
                                <input type="email" class="form-control" placeholder="Enter the minimum no. of bathrooms">
                            </div>
                            <div>
                                <label class="form-label">Contact number*</label>
                                <input type="email" class="form-control" placeholder="Contact person's number">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="submit-btn text-center">
                            <button class="common-btn border-0" type="submit" name="buyer-info-submit" >Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>




@endSection
