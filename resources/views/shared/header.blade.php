<header class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 d-flex align-items-center justify-content-sm-start justify-content-center">
                    <div class="header-top-left">
                        <p><a href="tel:+8801972729264">Call: +8801972(72 9264)</a></p>
                    </div>
                </div>
                <div class="col-sm-6 d-flex  justify-content-sm-end justify-content-center align-items-center">
                    <div class="header-top-right">
                        <ul>
                            <li><a href="#">Follow us on: </a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="{{ route('web.home') }}">
                                <div class="logo">
                                    <img class="img-fluid" src="{{ asset('assets/web/image/bg/logo.png') }}"
                                        alt="" title="">
                                </div>
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('web.home') }}">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ route('web.ourStory') }}" id="navbarDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false"> About
                                            us </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="{{ route('web.ourStory') }}">Our
                                                    Story</a></li>
                                            <li><a class="dropdown-item" href="{{ route('web.missionVision') }}">Vision &
                                                    Mission</a></li>
                                            <li><a class="dropdown-item" href="{{ route('web.boardOfDirectors') }}">Board of
                                                    Directors</a></li>
                                            <li><a class="dropdown-item" href="{{ route('web.managementTeam') }}">Management
                                                    Team</a></li>
                                            <li><a class="dropdown-item" href="{{ route('web.clients') }}">Our Clients</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Projects </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="{{ route('web.project.list', ['type' => 1], ['p_type' => null]) }}">Upcoming</a></li>
                                            <li><a class="dropdown-item" href="{{ route('web.project.list', ['type' => 2], ['p_type' => null]) }}">Ongoing</a></li>
                                            <li><a class="dropdown-item" href="{{ route('web.project.list', ['type' => 3], ['p_type' => null]) }}">Complete</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('web.news.list') }}">News & Event</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('web.job.list') }}">Career</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ route('web.contactUs') }}" id="navbarDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Contact </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="{{ route('web.landowners') }}">landowners</a></li>
                                            <li><a class="dropdown-item" href="{{ route('web.buyers') }}">Buyers</a></li>
                                            <li><a class="dropdown-item" href="{{ route('web.customers') }}">Customers</a></li>
                                            <li><a class="dropdown-item" href="{{ route('web.contactUs') }}">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <div class="searchbox-wrap">
                                            <div class="searchBox">
                                                <div class="search">
                                                    <ion-icon name="search"><i
                                                            class="fa-solid fa-magnifying-glass"></i>
                                                    </ion-icon>
                                                </div>
                                                <div class="searchInput">
                                                    <form action="">
                                                        <input type="text" placeholder="Search Here">
                                                    </form>
                                                </div>
                                                <div class="close">
                                                    <ion-icon name="close">
                                                        <i class="fa-solid fa-xmark"></i>
                                                    </ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
