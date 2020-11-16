@extends('shop::layouts.master')

@section('page_title')
    {{ $post->title }}
@endsection

@section('head')
    @isset($post->meta_title)
        <meta name="title" content="{{ $post->meta_title }}" />
        <meta property="og:title" content="{{ $post->meta_title }}" />


    @endisset

    @isset($post->meta_description)
        <meta name="description" content="{{ $post->meta_description }}" />
        <meta property="og:description" content="{{ $post->meta_description }}" />
    @endisset

    @isset($post->meta_keywords)
        <meta name="keywords" content="{{ $post->meta_keywords }}" />
    @endisset
    @isset($post->image)
    @php
      $ogimage = 'http://free.ams.agency/storage/news/' . $post->image;
    @endphp
    <meta property="og:image" content="{{ $ogimage }}" />
    @endisset
@endsection

@section('content-wrapper')
    @php
        $image = '/storage/news/' . $post->image;
    @endphp
    <div class="cms-page-container cart-details row offset-1 static-page-container">
      <div class="row">
        <div class="col-12">
          <h1> {{ $post->title }} </h1>
          <div class="fof-post-image">
            <img src="{{ $image }}" alt="{{ $post->title }}">
          </div>
          <div class="fof-post-content">{!! $post->content !!}</div>
          <div class="fof-product-shares-container">
              <div class="fb-share-button" data-href="http://free.ams.agency/blogs/{{ $post->url_key }}" data-layout="button_count"></div>
          </div>
          <div class="fof-blog-back"><a href="/blogs"><span class="material-icons"> keyboard_backspace </span>
                  Назад в блог</a></div>
        </div>

      </div>

    </div>
@endsection
