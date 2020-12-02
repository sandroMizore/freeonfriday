@extends('shop::layouts.master')

@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
@inject ('productRatingHelper', 'Webkul\Product\Helpers\Review')

@php
    $channel = core()->getCurrentChannel();

    $homeSEO = $channel->home_seo;

    if (isset($homeSEO)) {
        $homeSEO = json_decode($channel->home_seo);

        $metaTitle = $homeSEO->meta_title;

        $metaDescription = $homeSEO->meta_description;

        $metaKeywords = $homeSEO->meta_keywords;
    }
@endphp

@section('page_title')
    {{ isset($metaTitle) ? $metaTitle : "" }}
@endsection

@section('head')

    @if (isset($homeSEO))
        @isset($metaTitle)
            <meta name="title" content="{{ $metaTitle }}" />
        @endisset

        @isset($metaDescription)
            <meta name="description" content="{{ $metaDescription }}" />
        @endisset

        @isset($metaKeywords)
            <meta name="keywords" content="{{ $metaKeywords }}" />
        @endisset
    @endif
@endsection



@include('shop::home.slider')


@section('full-content-wrapper')


<div class="banner">
  <div class="container">
    <div class="banner__wrap">
      <div class="banner__title">
        Свобода и импульсивность — это,
        бесспорно, хорошо. Но вы пробовали планирование и чёткость?
      </div>
      <div class="banner__content">
        «Free on Friday» — мужская косметика для тех, кто умеет сочетать. Нет лучше импровизации, чем
        запланированная. Сначала продумай до деталей, потом вдохновенно твори. Мы позаботились об основе
        для
        полёта вашей фантазии и создали максимально чёткий, эффективный и простой продукт. Дальше вы.
      </div>
    </div>

  </div>
</div>


@include('shop::home.products')



<div class="banner frame-decor" style="background-image: url('{{ asset('themes/freeonfriday/assets/images/dest/banner/banner1.jpg') }}') ;">
  <div class="container">
    <div class="banner__wrap">
      <div class="banner__title">
        Тестируем на себе
        и благосклонных товарищах. Никаких животных.
      </div>
    </div>


  </div>
</div>

@include('shop::home.reviews')


<div class="social-network">
  <div class="container">
    <div class="social-network__wrap slider">
      <div class="social-network__title">
        Живи <i class="ic ic-instagram"></i> FreeonFriday
      </div>
      <div class="social-network__content slider__track">
        <div class="social-network__block">
          <a href="#" target="_blank" class="social-network__block-img">
            <img src="{{ asset('themes/freeonfriday/assets/images/dest/instagramm/insta1.jpg') }}" alt="">
          </a>

        </div>
        <div class="social-network__block">
          <a href="#" target="_blank" class="social-network__block-img">
            <img src="{{ asset('themes/freeonfriday/assets/images/dest/instagramm/insta2.jpg') }}" alt="">
          </a>
        </div>
        <div class="social-network__block">
          <a href="#" target="_blank" class="social-network__block-img">
            <img src="{{ asset('themes/freeonfriday/assets/images/dest/instagramm/insta3.jpg') }}" alt="">
          </a>

        </div>
        <div class="social-network__block">
          <a href="#" target="_blank" class="social-network__block-img">
            <img src="{{ asset('themes/freeonfriday/assets/images/dest/instagramm/insta4.jpg') }}" alt="">
          </a>
        </div>
        <div class="social-network__block">
          <a href="#" target="_blank" class="social-network__block-img">
            <img src="{{ asset('themes/freeonfriday/assets/images/dest/instagramm/insta5.jpg') }}" alt="">
          </a>
        </div>
        <div class="social-network__block">
          <a href="#" target="_blank" class="social-network__block-img">
            <img src="{{ asset('themes/freeonfriday/assets/images/dest/instagramm/insta6.jpg') }}" alt="">
          </a>
        </div>
        <div class="social-network__block">
          <a href="#" target="_blank" class="social-network__block-img">
            <img src="{{ asset('themes/freeonfriday/assets/images/dest/instagramm/insta7.jpg') }}" alt="">
          </a>
        </div>
        <div class="social-network__block">
          <a href="#" target="_blank" class="social-network__block-img">
            <img src="{{ asset('themes/freeonfriday/assets/images/dest/instagramm/insta8.jpg') }}" alt="">
          </a>
        </div>
      </div>
      <div class="slider__nav">
        <a href="#" class="slider__btn slider__prev">
          <i class="ic ic-arrow-left"></i>
        </a>
        <a href="#" class="slider__btn slider__next">
          <i class="ic ic-arrow-right"></i>
        </a>
      </div>
    </div>

  </div>
</div>

@include('shop::home.blog')


@endsection
