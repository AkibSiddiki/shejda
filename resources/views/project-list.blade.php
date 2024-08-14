@extends('layout.web')
@section('title', 'Project List')
@section('main')
    @include('shared.projects-header')
    <section class="project-page-wrap">
        <div class="container">
            <div class="row mb-4">
                <div class="col-xl-12">
                    <div class="project-menu text-center">
                        <div class="project-navbar">
                            <a class="{{ $p_type == null ? 'active' : '' }}" href="{{ route('web.project.list', ['type' => $type, 'p_type' => null]) }}">
                                All Projects
                            </a>
                            <a class="{{ $p_type == 1 ? 'active' : '' }}" href="{{ route('web.project.list', ['type' => $type, 'p_type' => 1]) }}">
                                Residential
                            </a>
                            <a class="{{ $p_type == 2 ? 'active' : '' }}" href="{{ route('web.project.list', ['type' => $type, 'p_type' => 2]) }}">
                                Commercial
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row grid">
                @foreach ($projects as $project)
                <div class="col-lg-3 col-md-4 col-sm-6 grid-item cat-1">
                    <div class="Hproject-wrap">
                        <a href="{{ route('web.project.view', $project) }}">
                            <div class="hproject-img-wrap">
                                <img class="img-fluid" src="{{ asset($project->image) }}" alt="{{ $project->title }}"
                                    title="{{ $project->title }}">
                            </div>
                            <div class="hproject-img-text">
                                <h5>{{ $project->title }}</h5>
                                <p>{{ $project->location }}</p>
                            </div>
                            <div class="hproject-cat-text">
                                <h2>{{ $project->property_type == 1 ? 'Residential' : 'Commercial' }}</h2>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                <div class="col-12">
                    <div class="pagination-wrap">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
