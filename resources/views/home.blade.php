@extends('layout.web')
@section('title', 'Home')
@section('main')
    <!-- hero-area-start -->
    <section class="hero-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-slider">
                        @foreach ($sliders as $banner)
                            <div class="items">
                                <div class="hero-overlay"></div>
                                <div class="slider-img">
                                    <img class="img-fluid w-100" src="{{ asset($banner->image) }}" alt="{{ $banner->title }}"
                                        title="{{ $banner->title }}">
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="items">
                            <div class="hero-overlay"></div>
                            <div class="slider-img">
                                <img class="img-fluid w-100" src="{{ asset('assets/web/image/bg/banner5.webp') }}"
                                    alt="" title="">
                            </div>
                        </div>
                        <div class="items">
                            <div class="hero-overlay"></div>
                            <div class="slider-img">
                                <img class="img-fluid w-100" src="{{ asset('assets/web/image/bg/banner3.jpg') }}"
                                    alt="" title="">
                            </div>
                        </div>
                        <div class="items">
                            <div class="hero-overlay"></div>
                            <div class="slider-img">
                                <img class="img-fluid w-100" src="{{ asset('assets/web/image/bg/banner4.jpg') }}"
                                    alt="" title="">
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-btn-wrap">
            <div class="hero-btn-content">
                <a class="btn see-more-btn" href="ongoing.html" target="_blank">Ongoing</a>
                <a class="btn see-more-btn" href="ongoing.html" target="_blank">Upcoming</a>
                <a class="btn see-more-btn" href="ongoing.html" target="_blank">Complete</a>
            </div>
        </div>
    </section>
    <!-- hero-area-end -->

    <section class="Hproject-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig">
                    <div class="section-heading mb-5">
                        <h2>Your land to a <span>Landmark</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="Hproject-wrap">
                        <a href="project-details.html">
                            <div class="hproject-img-wrap">
                                <img class="img-fluid" src="{{ asset('assets/web/image/bg/project/1627919131g61t1.jpg') }}"
                                    alt="" title="">
                            </div>
                            <div class="hproject-img-text">
                                <h5>The Sanctum</h5>
                                <p>Road 81, Gulshan</p>
                            </div>
                            <div class="hproject-cat-text">
                                <h2>Residential</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="Hproject-wrap">
                        <a href="project-details.html">
                            <div class="hproject-img-wrap">
                                <img class="img-fluid" src="{{ asset('assets/web/image/bg/project/1633327175LaeLW.jpg') }}"
                                    alt="" title="">
                            </div>
                            <div class="hproject-img-text">
                                <h5>The Sanctum</h5>
                                <p>Road 81, Gulshan</p>
                            </div>
                            <div class="hproject-cat-text">
                                <h2>Residential</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="Hproject-wrap">
                        <a href="project-details.html">
                            <div class="hproject-img-wrap">
                                <img class="img-fluid" src="{{ asset('assets/web/image/bg/project/1635247386xAync.jpg') }}"
                                    alt="" title="">
                            </div>
                            <div class="hproject-img-text">
                                <h5>The Sanctum</h5>
                                <p>Road 81, Gulshan</p>
                            </div>
                            <div class="hproject-cat-text">
                                <h2>Residential</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="Hproject-wrap">
                        <a href="project-details.html">
                            <div class="hproject-img-wrap">
                                <img class="img-fluid" src="{{ asset('assets/web/image/bg/project/1672824915hEsmI.jpg') }}"
                                    alt="" title="">
                            </div>
                            <div class="hproject-img-text">
                                <h5>The Sanctum</h5>
                                <p>Road 81, Gulshan</p>
                            </div>
                            <div class="hproject-cat-text">
                                <h2>Residential</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="Hproject-wrap">
                        <a href="project-details.html">
                            <div class="hproject-img-wrap">
                                <img class="img-fluid" src="{{ asset('assets/web/image/bg/project/1627919131g61t1.jpg') }}"
                                    alt="" title="">
                            </div>
                            <div class="hproject-img-text">
                                <h5>The Sanctum</h5>
                                <p>Road 81, Gulshan</p>
                            </div>
                            <div class="hproject-cat-text">
                                <h2>Residential</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="Hproject-wrap">
                        <a href="project-details.html">
                            <div class="hproject-img-wrap">
                                <img class="img-fluid" src="{{ asset('assets/web/image/bg/project/1633327175LaeLW.jpg') }}"
                                    alt="" title="">
                            </div>
                            <div class="hproject-img-text">
                                <h5>The Sanctum</h5>
                                <p>Road 81, Gulshan</p>
                            </div>
                            <div class="hproject-cat-text">
                                <h2>Residential</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="Hproject-wrap">
                        <a href="project-details.html">
                            <div class="hproject-img-wrap">
                                <img class="img-fluid" src="{{ asset('assets/web/image/bg/project/1635247386xAync.jpg') }}"
                                    alt="" title="">
                            </div>
                            <div class="hproject-img-text">
                                <h5>The Sanctum</h5>
                                <p>Road 81, Gulshan</p>
                            </div>
                            <div class="hproject-cat-text">
                                <h2>Residential</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="Hproject-wrap">
                        <a href="project-details.html">
                            <div class="hproject-img-wrap">
                                <img class="img-fluid"
                                    src="{{ asset('assets/web/image/bg/project/1672824915hEsmI.jpg') }}" alt=""
                                    title="">
                            </div>
                            <div class="hproject-img-text">
                                <h5>The Sanctum</h5>
                                <p>Road 81, Gulshan</p>
                            </div>
                            <div class="hproject-cat-text">
                                <h2>Residential</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- about-us-area-start -->
    <section class="about-us-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-2 order-sm-1">
                    <div class="about-us-img">
                        <img class="aboutImgOne img-fluid" src="{{ asset('assets/web/image/bg/about-us4.jpg') }}"
                            alt="" title="">
                        <img class="aboutImgTwo img-fluid" src="{{ asset('assets/web/image/bg/about-us3.jpg') }}"
                            alt="" title="">
                    </div>
                </div>
                <div class="col-md-6 ps-xl-5 order-1 order-sm-2">
                    <div class="about-us-text">
                        <div class="section-heading">
                            <h2>Welcome to <span>Shejda</span></h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aspernatur iusto porro
                            praesentium enim fugiat ea. Esse dignissimos dolorem unde, optio omnis perspiciatis
                            distinctio autem, tenetur totam recusandae dolores itaque possimus aliquam minima
                            deleniti obcaecati magnam explicabo accusantium architecto excepturi sequi minus. Porro
                            veritatis saepe eligendi a voluptatibus impedit! Quos. Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Consequuntur laboriosam, veritatis possimus provident
                            quibusdam quis pariatur, reprehenderit voluptatem autem ab distinctio atque numquam
                            vero! Dolore cumque nobis modi, amet maiores incidunt esse vel earum quis at libero
                            velit voluptas quasi minus debitis autem iusto neque sint corporis explicabo provident
                            doloribus consectetur ut. Earum illum quibusdam et quidem, praesentium tenetur, commodi
                            culpa dolorem debitis mollitia ut. At quibusdam suscipit unde harum corrupti beatae,
                            sequi quas eveniet illum voluptatum ipsum pariatur veniam.</p>
                        <a class="common-btn" href="about-us.html">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us-area-end -->

    <!-- why-choose-us-area-start -->
    <section class="why-choose-us-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="why-choose-us-text">
                        <div class="section-heading">
                            <h2>Why <span>Shejda</span></h2>
                            <p>Shejda aspires to weave an unprecedented experience of fine living cocooned in
                                comfort for you. It’s the statement of prestige and elegant Architecture that sets
                                us apart.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="why-choose-us-list">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 d-flex">
                                <div class="feature-block-one align-self-stretch">
                                    <div class="inner-box">
                                        <div class="icon-box-img"><img class="img-fluid"
                                                src="{{ asset('assets/web/image/icon/quality.png') }}" alt=""
                                                title=""></div>
                                        <h3>Prime Locations</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 d-flex">
                                <div class="feature-block-one align-self-stretch">
                                    <div class="inner-box">
                                        <div class="icon-box-img"><img class="img-fluid"
                                                src="{{ asset('assets/web/image/icon/reasonable.png') }}" alt=""
                                                title="">
                                        </div>
                                        <h3>Top Consultants</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 d-flex">
                                <div class="feature-block-one align-self-stretch">
                                    <div class="inner-box">
                                        <div class="icon-box-img"><img class="img-fluid"
                                                src="{{ asset('assets/web/image/icon/scratch-proof.png') }}"
                                                alt="" title="">
                                        </div>
                                        <h3>Uncompromising Safety</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 d-flex">
                                <div class="feature-block-one align-self-stretch">
                                    <div class="inner-box">
                                        <div class="icon-box-img"><img class="img-fluid"
                                                src="{{ asset('assets/web/image/icon/water-absorption.png') }}"
                                                alt="" title="">
                                        </div>
                                        <h3>On-time Delivery</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 d-flex">
                                <div class="feature-block-one align-self-stretch">
                                    <div class="inner-box">
                                        <div class="icon-box-img"><img class="img-fluid"
                                                src="{{ asset('assets/web/image/icon/high-bending-strength.png') }}"
                                                alt="" title="">
                                        </div>
                                        <h3>Professional Management</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 d-flex">
                                <div class="feature-block-one align-self-stretch">
                                    <div class="inner-box">
                                        <div class="icon-box-img"><img class="img-fluid"
                                                src="{{ asset('assets/web/image/icon/chemical-resistance.png') }}"
                                                alt="" title="">
                                        </div>
                                        <h3> Highest Quality Materials</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why-choose-us-area-end -->

    <!-- buyers-area-start -->
    <section class="buyers-area">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="action-box">
                        <a href="landowners.html">
                            <span class="action-box-icon">
                                <i class="fa fa-map-marker"></i>
                            </span>
                            <div class="action-box-content">
                                <h3>Landowners</h3>
                                <p class="action-box-text">Meet the professionals</p>
                                <span><i class="fa fa-caret-right"></i>Find More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-box">
                        <a href="buyers.html">
                            <span class="action-box-icon">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <div class="action-box-content">
                                <h3>Buyers</h3>
                                <p class="action-box-text">Explore the options</p>
                                <span><i class="fa fa-caret-right"></i>Learn More</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-box">
                        <a href="customar.html">
                            <span class="action-box-icon">
                                <i class="fa-solid fa-users"></i>
                            </span>
                            <div class="action-box-content">
                                <h3>Customers</h3>
                                <p class="action-box-text">Share your feedback</p>
                                <span><i class="fa fa-caret-right"></i>Learn More</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- buyers-area-end -->

    <!-- blog-area-start-->
    <section class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-heading">
                        <h2>Get Our Every <span>Single Update</span></h2>
                    </div>
                </div>
                <div class="col-sm-6 d-flex align-items-end justify-content-sm-end justify-content-start">
                    <div class="section-read-more-btn">
                        <a href="blog.html">Read More<i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="blog-content-wrap">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="blog-content align-item-stretch">
                            <a href="blog-details.html">
                                <div class="blog-img">
                                    <img class="img-fluid" src="{{ asset('assets/web/image/bg/blog1.jpg') }}"
                                        alt="" title="">
                                </div>
                                <div class="blog-text-wrap">
                                    <h3>Is one single solution for all types of roofs possible?</h3>
                                </div>
                                <div class="date-more-btn">
                                    <p><i class="far fa-calendar-alt"></i>January 7, 2019</p>
                                    <span href="#">Read More <i class="fa-solid fa-arrow-right-long"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="blog-content align-item-stretch">
                            <a href="blog-details.html">
                                <div class="blog-img">
                                    <img class="img-fluid" src="{{ asset('assets/web/image/bg/blog2.jpg') }}"
                                        alt="" title="">
                                </div>
                                <div class="blog-text-wrap">
                                    <h3>What are the biggest construction companies</h3>
                                </div>
                                <div class="date-more-btn">
                                    <p><i class="far fa-calendar-alt"></i>November 9, 2018 </p>
                                    <span href="#">Read More <i class="fa-solid fa-arrow-right-long"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="blog-content align-item-stretch">
                            <a href="blog-details.html">
                                <div class="blog-img">
                                    <img class="img-fluid" src="{{ asset('assets/web/image/bg/blog4.jpg') }}"
                                        alt="" title="">
                                </div>
                                <div class="blog-text-wrap">
                                    <h3>Don’t miss this opportunity to innovate your business</h3>
                                </div>
                                <div class="date-more-btn">
                                    <p><i class="far fa-calendar-alt"></i>November 9, 2018</p>
                                    <span href="#">Read More <i class="fa-solid fa-arrow-right-long"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end-->

    <!--contact-area-start-->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1 order-2">
                    <div class="contact-img">
                        <img class="img-fluid" src="{{ asset('assets/web/image/bg/contact-bg.jpg') }}" alt=""
                            title="">
                    </div>
                </div>
                <div class="col-md-6 pq-bg-dark-side-right order-md-2 order-1">
                    <div class="contact-form-wrap">
                        <div class="section-heading">
                            <h2>Send your <span>Message</span></h2>
                        </div>
                        <div class="contact-input">
                            <div class="form">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-4">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-4">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-4">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email Addresss">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="">
                                            <textarea class="form-control" placeholder="Message Details" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn common-btn mt-4" href="#">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-area-end-->
@endsection
