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
@endsection

@section('content-wrapper')
<div class="container">
  <div class="fof-blogs-container row">
      @foreach($posts as $post)
      @php
        $image = '/storage/news/' . $post->image;
      @endphp
      <div class="col col-lg-4 col-md-12 blog-container">
          <div class="blog-image-container"
              style="background: url('{{ $image }}') center center / cover no-repeat;">
              <a href="/blogs/{{ $post->url_key }}"></a>
          </div>
          <div class="blog-title"><a href="/blogs/{{ $post->url_key }}">{{ $post->title }}</a></div>
          <div class="blog-desc">
                {{ $post->except }}
          </div>
      </div>
      @endforeach
  </div>
</div>

@endsection
