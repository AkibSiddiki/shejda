@extends('layout.web')
@section('title', 'Vision & Mission')
@section('main')
    <section class="page-hero-area" style="background-image: url({{ asset('assets/web/image/bg/banner4.jpg') }})">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Vision & Mission</h1>
                        <ul>
                            <li>
                                <a href="{{ route('web.home') }}">Home</a>
                            </li>
                            <li>Vision & Mission</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-page-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('shared.sidemenu-about')
                </div>
                <div class="col-lg-9">
                    <div class="about-us-taps-details-wrap">
                        <div class="about-tabs-body">
                            <h2>{{ $mission->title }}</h2>
                            {!! $mission->content !!}
                            <div class="mt-4">
                                <h2>{{ $vision->title }}</h2>
                                {!! $vision->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
