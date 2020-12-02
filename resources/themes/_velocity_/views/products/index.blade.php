@extends('shop::layouts.master')

@section('page_title')
    {{ trim($category->meta_title) != "" ? $category->meta_title : $category->name }}
@stop

@section('seo')
    <meta name="description" content="{{ trim($category->meta_description) != "" ? $category->meta_description : \Illuminate\Support\Str::limit(strip_tags($category->description), 120, '') }}"/>
    <meta name="keywords" content="{{ $category->meta_keywords }}"/>
@stop
@push('css')
  <link rel="stylesheet" href="{{ asset('/themes/freeonfriday/assets/libs/select2/dist/css/select2.min.css') }}">
@endpush
@inject ('reviewHelper', 'Webkul\Product\Helpers\Review')
@section('content-wrapper')
    @inject ('productRepository', 'Webkul\Product\Repositories\ProductRepository')

        {!! view_render_event('bagisto.shop.products.index.before', ['category' => $category]) !!}
        <div class="container">
          <div class="catalog">

            <div class="catalog__title page-title">
                <div class="left">Product</div>
                <div class="right">catalog</div>
            </div>

            @include ('shop::products.parts.toolbar')


            <div class="catalog__wrap">
              <?php $products = $productRepository->getAll($category->id); ?>

                @if ($products->count())
                  @foreach ($products as $productFlat)
                    @include ('shop::home.parts.product-card', ['product' => $productFlat])
                  @endforeach
                @endif
            </div>
          </div>

        </div>



        {!! view_render_event('bagisto.shop.products.index.after', ['category' => $category]) !!}
@stop
