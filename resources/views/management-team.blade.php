@extends('layout.web')
@section('title', 'Management Team')
@section('main')
    <section class="page-hero-area" style="background-image: url({{ asset('assets/web/image/bg/banner4.jpg') }})">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Management Team</h1>
                        <ul>
                            <li>
                                <a href="{{ route('web.home') }}">Home</a>
                            </li>
                            <li>Management Team</li>
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
                    @if($managements->count() > 0)
                    <div class="row">
                        <div class="col-md-5">
                            <div class="team-big-profile-img">
                                <img class="img-fluid" src="{{ asset($managements->first()->image) }}" alt="{{ $managements->first()->name }}" title="{{ $managements->first()->name }}">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="team-big-profile-text">
                                <h5>{{ $managements->first()->name }}</h5>
                                <h6>{{ $managements->first()->designation }}</h6>
                                {!! $managements->first()->bio !!}
                            </div>
                        </div>
                    </div>
                    <div class="our-team-wrap">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="our-team-heading">
                                    <h5>Senior Management</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($managements->slice(1) as $member)
                            <div class="col-md-4">
                                <div class="management-team-profile-wrap">
                                    <div class="man-team-img">
                                        <img class="img-fluid" src="{{ asset($member->image) }}" alt="{{ $member->name }}" title="{{ $member->name }}">
                                    </div>
                                    <div class="man-team-info">
                                        <h5>{{ $member->name }}</h5>
                                        <h6>{{ $member->designation }}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
