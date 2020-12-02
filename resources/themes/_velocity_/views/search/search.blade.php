@inject ('toolbarHelper', 'Webkul\Product\Helpers\Toolbar')

@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.search.page-title') }}
@endsection
@inject ('reviewHelper', 'Webkul\Product\Helpers\Review')

@section('content-wrapper')
<div class="container">
  <div class="catalog">
    @if (! $results)
        <h1 class="fw6 col-12">{{  __('shop::app.search.no-results') }}</h1>
    @else
        @if ($results->isEmpty())
            <h1 class="fw6 col-12">{{ __('shop::app.products.whoops') }}</h1>
            <span class="col-12">{{ __('shop::app.search.no-results') }}</span>
        @else
          <div class="catalog__title page-title">
              <div class="left">Search</div>
              <div class="right">result</div>
          </div>



          <div class="catalog__wrap">

                @foreach ($results as $productFlat)
                  @include ('shop::home.parts.product-card', ['product' => $productFlat->product])
                @endforeach
          </div>
          @endif
      @endif
  </div>
</div>
@endsection
