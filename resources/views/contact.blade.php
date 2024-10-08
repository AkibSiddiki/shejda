@extends('layout.web')
@section('title', 'Contact')
@section('main')
    <section class="page-hero-area" style="background-image: url({{ asset('assets/web/image/bg/banner5.jpg') }})">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Contact</h1>
                        <ul>
                            <li><a href="{{ route('web.home') }}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4">
        <div class="container">
        <div class="row">
            <div class="col-12">
                @include('shared.success')
            </div>
        </div>
        </div>
    </section>
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1 order-2 wow fadeInLeftBig" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="contact-img">
                        <img class="img-fluid" src="{{ $contact->image1 }}" alt="Contact" title="Contact">
                    </div>
                </div>
                <div class="col-md-6 pq-bg-dark-side-right order-md-2 order-1 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="contact-form-wrap">
                        <div class="section-heading">
                            <h2>Fill the form and send <span>your query</span></h2>
                        </div>
                        <div class="contact-input">
                            <form class="form" action="{{ route('web.message.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-4">
                                            <input type="text" name="name" class="form-control" placeholder="Full name" autofocus="">
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-4">
                                            <input type="email" name="email" class="form-control" placeholder="Email Addresss">
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="">
                                            <textarea name="message" class="form-control" placeholder="Message Details" rows="5"></textarea>
                                            @error('message')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn common-btn mt-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('shared.map-iframe')
@endSection
