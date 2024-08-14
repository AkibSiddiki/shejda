<section class="page-hero-area" style="background-image: url({{ asset('assets/web/image/bg/banner5.jpg') }})">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    @if ($view ?? false)
                        <h1>{{ $view ?? false ? $project->title : 'Project List' }}</h1>
                        <h4>{{ $type == 2 ? 'Ongoing' : ($type == 1 ? 'Upcoming' : 'Completed') }} Projects</h4>
                    @else
                        <h1>{{ $type == 2 ? 'Ongoing' : ($type == 1 ? 'Upcoming' : 'Completed') }} Projects</h1>
                    @endif
                    <ul>
                        <li>
                            <a href="{{ route('web.home') }}">Home</a>
                        </li>
                        <li>{{ $type == 2 ? 'Ongoing' : ($type == 1 ? 'Upcoming' : 'Completed') }} Projects</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
