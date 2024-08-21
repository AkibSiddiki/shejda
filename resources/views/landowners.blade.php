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
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                @include('shared.success')
            </div>
        </div>
    </div>
    <section class="buyers-contact-form">
        <div class="container">
            <form class="form" action="{{ route('web.landowners.store') }}" method="post">
                @csrf
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
                                <input name="locality" type="text" class="form-control" placeholder="Area/neighborhood the land is located" value="{{ old('locality') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input name="address" type="text" class="form-control"
                                    placeholder="Full address of the land" value="{{ old('address') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Size of the land</label>
                                <input name="size" type="text" class="form-control" placeholder="Size of the land In kathas (rounded)" value="{{ old('size') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Width of the road in front</label>
                                <input name="road_width" type="text" class="form-control" placeholder="In feet" value="{{ old('road_width') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Category of land</label>
                                <select name="category" class="form-select" aria-label="Default select example">
                                    <option selected="">Select option</option>
                                    <option value="1" {{ old('category') == 1 ? 'selected' : '' }}>Freehold</option>
                                    <option value="2" {{ old('category') == 2 ? 'selected' : '' }}>Leasehold</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Facing</label>
                                <select name="facing" class="form-select" aria-label="Default select example">
                                    <option selected="">Select option</option>
                                    <option value="1" {{ old('facing') == 1 ? 'selected' : '' }}>North</option>
                                    <option value="2" {{ old('facing') == 2 ? 'selected' : '' }}>South</option>
                                    <option value="3" {{ old('facing') == 3 ? 'selected' : '' }}>East</option>
                                    <option value="4" {{ old('facing') == 4 ? 'selected' : '' }}>West</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Attractive feature (if any)</label>
                                <select name="feature" class="form-select" aria-label="Default select example">
                                    <option selected="">Select option</option>
                                    <option value="1" {{ old('feature') == 1 ? 'selected' : '' }}>Lakeside</option>
                                    <option value="2" {{ old('feature') == 2 ? 'selected' : '' }}>Corner Plot</option>
                                    <option value="3" {{ old('feature') == 3 ? 'selected' : '' }}>Park View</option>
                                    <option value="4" {{ old('feature') == 4 ? 'selected' : '' }}>Main Road</option>
                                    <option value="5" {{ old('feature') == 5 ? 'selected' : '' }}>Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="buyers-contact-form-wrap">
                            <h4>Landowners Profile</h4>
                            <div class="mb-3">
                                <label class="form-label">Name of the landowner*</label>
                                <input name="name" type="text" class="form-control"
                                    placeholder="Full name of the registered landowner" value="{{ old('name') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contact person</label>
                                <input name="contact_person" type="text" class="form-control" placeholder="Enter your preferred floor" value="{{ old('contact_person') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email ID</label>
                                <input name="email" type="email" class="form-control" placeholder="Enter the minimum no. of bathrooms" value="{{ old('email') }}">
                            </div>
                            <div>
                                <label class="form-label">Contact number*</label>
                                <input name="phone" type="text" class="form-control" placeholder="Contact person's number" value="{{ old('phone') }}">
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

