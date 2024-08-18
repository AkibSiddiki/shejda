@extends('layout.web')
@section('title', 'Clients')

@section('main')

<section class="page-hero-area" style="background-image: url({{ asset('assets/web/image/bg/banner4.jpg') }})">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Clients</h1>
                    <ul>
                        <li>
                            <a href="{{ route('web.home') }}">Home</a>
                        </li>
                        <li>Clients</li>
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
                    <div class="row">
                        @foreach ($clients as $client)
                        <div class="col-md-4">
                            <div class="client-list-wrap">
                                <div class="client-logo">
                                    <img class="img-fluid" src="{{ $client->image }}" alt="{{ $client->title }}" title="{{ $client->title }}">
                                </div>
                                <div class="client-text">
                                    <h5>{{ $client->title }}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-md-4">
                            <div class="client-list-wrap">
                                <div class="client-logo">
                                    <img class="img-fluid" src="image/bg/client-logo/15975563418Ebxj.jpg" alt="" title="">
                                </div>
                                <div class="client-text">
                                    <h5>MARICO</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="client-list-wrap">
                                <div class="client-logo">
                                    <img class="img-fluid" src="image/bg/client-logo/15975563418Jall.jpg" alt="" title="">
                                </div>
                                <div class="client-text">
                                    <h5>DELL</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="client-list-wrap">
                                <div class="client-logo">
                                    <img class="img-fluid" src="image/bg/client-logo/15975563419frn4.jpg" alt="" title="">
                                </div>
                                <div class="client-text">
                                    <h5>QATAR</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="client-list-wrap">
                                <div class="client-logo">
                                    <img class="img-fluid" src="image/bg/client-logo/1597556341ER2nW.jpg" alt="" title="">
                                </div>
                                <div class="client-text">
                                    <h5>DELLOITTE</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="client-list-wrap">
                                <div class="client-logo">
                                    <img class="img-fluid" src="image/bg/client-logo/1597556341RvdOV.jpg" alt="" title="">
                                </div>
                                <div class="client-text">
                                    <h5>HSBC</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="client-list-wrap">
                                <div class="client-logo">
                                    <img class="img-fluid" src="image/bg/client-logo/1597556341WM6od.jpg" alt="" title="">
                                </div>
                                <div class="client-text">
                                    <h5>GE HEALTHCARE</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="client-list-wrap">
                                <div class="client-logo">
                                    <img class="img-fluid" src="image/bg/client-logo/1639983196zSvZI.jpg" alt="" title="">
                                </div>
                                <div class="client-text">
                                    <h5>MARKS &amp; SPENCER</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="client-list-wrap">
                                <div class="client-logo">
                                    <img class="img-fluid" src="image/bg/client-logo/uniliver.jpeg" alt="" title="">
                                </div>
                                <div class="client-text">
                                    <h5>UNILEVER</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="client-list-wrap">
                                <div class="client-logo">
                                    <img class="img-fluid" src="image/bg/client-logo/1597556341mjQtI.jpg" alt="" title="">
                                </div>
                                <div class="client-text">
                                    <h5>THAI</h5>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
    </div>
</section>

@endsection
