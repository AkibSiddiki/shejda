@extends('layout.web')

@section('title', 'News and Event List')

@section('main')

    @include('shared.news-header')

  <section class="blog-details-page">
      <div class="container">
          <div class="row">
              <div class="col-lg-10 m-auto">
                  <div class="blog-post-single">
                      <div class="post-info">
                          <div class="post-media">
                              <img class="img-fluid w-100" src="{{ asset($news->image) }}" alt="{{ $news->title }}" title="{{ $news->title }}">
                          </div>
                          <div class="post-title ">
                              <div class="publi-date">
                                  <p>{{ $news->created_at->format('F d, Y') }}</p>
                              </div>
                              <h3 class="post-title">
                                  {{ $news->title }}
                              </h3>
                          </div>

                          <div class="post-discription">
                              {!! $news->content !!}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection
