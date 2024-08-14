@extends('layout.web')
@section('title', 'News and Event List')
@section('main')
  @include('shared.news-header')
  <section class="blog-area blog-page">
      <div class="container">
          <div class="blog-content-wrap">
              <div class="row">
                @foreach ($news as $item)
                  <div class="col-lg-4 col-md-6 d-flex">
                      <div class="blog-content align-item-stretch">
                          <a href="{{ route('web.news.view', $item) }}">
                              <div class="blog-img">
                                  <img class="img-fluid" src="{{ asset($item->image) }}" alt="" title="">
                              </div>
                              <div class="blog-text-wrap">
                                  <h3>{{ $item->title }}</h3>
                              </div>
                              <div class="date-more-btn">
                                  <p><i class="far fa-calendar-alt"></i>{{ $item->created_at->format('d M, Y') }} </p>
                                  <span href="{{ route('web.news.view', $item) }}">Read More <i class="fa-solid fa-arrow-right-long"></i></span>
                              </div>
                          </a>
                      </div>
                  </div>
                @endforeach
                  <div class="col-12">
                      <div class="pagination-wrap">
                          {{ $news->links() }}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  @endsection
