@extends('layout.web')
@section('title', 'Customers')
@section('main')
    <section class="page-hero-area" style="background-image: url({{ asset('assets/web/image/bg/banner5.jpg') }})">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Customers</h1>
                        <ul>
                            <li><a href="{{ route('web.home') }}">Home</a></li>
                            <li>Customers</li>
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
                        <img class="img-fluid" src="{{ $customers->image1 }}" alt="Customers" title="Customers">
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="buyers-contact-text">
                        <h5>{{ $customers->title }}</h5>
                        {!! $customers->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endSection
