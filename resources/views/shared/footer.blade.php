<footer class="footer-one">
    <div class="footer-one__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-one__top-wrapper">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 d-flex justify-content-md-center justify-content-start wow animated fadeInUp animated"
                                data-wow-delay="0.1s">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__about-logo">
                                        <a href="{{ route('web.home') }}"> <img class="img-fluid"
                                                src="{{ asset('assets/web/image/bg/logo.png') }}"
                                                alt="{{ env('APP_NAME') }}" title="{{ env('APP_NAME') }}"> </a>
                                    </div>
                                    <p class="footer-widget__about-text">Shejda Development & Holdings Ltd.<br>977,
                                        East Shewrapara (1st Floor), <br>Orbit Lane, Dhaka-1216, Bangladesh.</p>
                                    <p class="footer-widget__about-email"><a href="tel:01758000000">01758000000</a>
                                    </p>
                                    <p class="footer-widget__about-email"><a
                                            href="mailto:info@shajda.com">info@shajda.com</a></p>
                                </div>
                            </div>

                            <!--Start Footer Widget Column-->
                            <div class="col-lg-4 col-md-3 d-flex justify-content-md-center justify-content-start wow animated fadeInUp animated"
                                data-wow-delay="0.5s">
                                <div class="footer-widget__column footer-widget__quick-links">
                                    <h2 class="footer-widget__title">Quick Links</h2>
                                    <ul class="footer-widget__quick-links-list">
                                        <li class="footer-widget__quick-links-list-item"><a
                                                href="{{ route('web.ourStory') }}">About</a></li>
                                        <li class="footer-widget__quick-links-list-item"><a
                                                href="{{ route('web.missionVision') }}">Mission & Vision</a></li>
                                        <li class="footer-widget__quick-links-list-item"><a
                                                href="#">Career</a></li>
                                        <li class="footer-widget__quick-links-list-item"><a
                                                href="{{ route('web.contactUs') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Footer Widget Column-->

                            <!--Start Footer Widget Column-->
                            <div class="col-lg-3 col-md-4 d-flex justify-content-md-center justify-content-start wow animated fadeInUp animated"
                                data-wow-delay="0.7s">
                                <div class="footer-widget__column footer-widget__contact-info">
                                    <h2 class="footer-widget__title">Get In Touch</h2>
                                    <div class="footer-widget__contact-info-social-links">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End Footer Widget Column-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start Footer One Bottom-->
    <div class="footer-one__bottom clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="footer-one__bottom-inner">
                        <div class="footer-one__bottom-text">
                            <p>Copyright &copy; 2024. All right &reg; reserved by Shejda.com. Designed & Developed
                                by</p>
                        </div>
                        <div class="footer-one__bottom-list">
                            <ul>
                                <li><a href="{{ route('web.ourStory') }}">About us</a></li>
                                <li><a href="#"> Careers</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer One Bottom-->
</footer>
