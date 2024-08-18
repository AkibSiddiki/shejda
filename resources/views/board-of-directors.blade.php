@extends('layout.web')
@section('title', 'Board of directors')
@section('main')
    <section class="page-hero-area" style="background-image: url({{ asset('assets/web/image/bg/banner4.jpg') }})">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Board of Directors</h1>
                        <ul>
                            <li>
                                <a href="{{ route('web.home') }}">Home</a>
                            </li>
                            <li>Board of directors</li>
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
                    @foreach ($directors as $director)
                    <div class="board-of-directors-wrap">
                        <img class="img-fluid" src="{{ asset($director->image) }}" alt="{{ $director->name }}" title="{{ $director->name }}">
                        <h5>{{ $director->name }}</h5>
                        <h6>{{ $director->designation }}</h6>
                        <p>{{ $director->bio }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
