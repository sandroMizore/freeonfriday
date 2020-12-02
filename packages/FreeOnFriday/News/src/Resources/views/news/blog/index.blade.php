@extends('shop::layouts.master')

@section('page_title')
    {{ __('news::app.blogs.page-title') }}
@endsection

@section('head')
    @isset($page->meta_title)
        <meta name="title" content="{{ __('news::app.blogs.page-title') }}" />
    @endisset

    @isset($page->meta_description)
        <meta name="description" content="{{ __('news::app.blogs.page-description') }}" />
    @endisset

    @isset($page->meta_keywords)
        <meta name="keywords" content="{{ __('news::app.blogs.page-keywords') }}" />
    @endisset
    @push('css')
      <link rel="stylesheet" href="{{ asset('/themes/freeonfriday/assets/css/parts/blog.css') }}">
    @endpush
@endsection

@section('content-wrapper')
<div class="container">
  <div class="fof-blogs-container row">
      <div class="fof-blogs-header">
        <div class="fof-blogs-header__left-part">
          Stories
        </div>
        <div class="fof-blogs-header__right-part">
          and news
        </div>
      </div>
      <div class="blog-content slider">
        <div class="blog__wrap slider__track">
          @foreach($posts as $post)
          @php
            $date = date("d.m.y", strtotime($post->created_at));
            $image = '/storage/news/' . $post->image;
          @endphp
          <div class="blog__block">
            <a href="/blogs/{{ $post->url_key }}" class="blog__img frame-decor frame-decor_sm">
              <img src="{{ $image }}" alt="">
            </a>
            <div class="blog__content">
              <a href="/blogs/{{ $post->url_key }}" class="title">
                {{ $post->title }}
              </a>
              <div class="description">
                {{ $post->except }}
              </div>
              <div class="bottom">
                <div class="data">
                  {{ $date }}
                </div>
                <!--<div class="section">
                  Акции
                </div>-->
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

  </div>
</div>

@endsection
