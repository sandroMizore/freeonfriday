@inject ('toolbarHelper', 'Webkul\Product\Helpers\Toolbar')
@inject ('productRepository', 'Webkul\Product\Repositories\ProductRepository')
@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

@extends('shop::layouts.master')

@section('page_title')
    {{ $category->meta_title ?? $category->name }}
@stop

@section('seo')
    <meta name="description" content="{{ $category->meta_description }}" />
    <meta name="keywords" content="{{ $category->meta_keywords }}" />
@stop

@push('css')
    <style type="text/css">
        .product-price span:first-child, .product-price span:last-child {
            font-size: 18px;
            font-weight: 600;
        }

        @media only screen and (max-width: 992px) {
            .main-content-wrapper .vc-header {
                box-shadow: unset;
            }
        }
    </style>
@endpush
@if($category->id == 2)
  @section('content-wrapper')
    @include ('shop::home.popular-categories')
    @include('shop::products.list.recentrly-viewed-product-page')
  @stop
@else
  @php
      $isDisplayMode = in_array(
          $category->display_mode, [
              null,
              'products_only',
              'products_and_description'
          ]
      );

      $products = $productRepository->getAll($category->id);
  @endphp

  @section('content-wrapper')
      <category-component></category-component>
  @stop

  @push('scripts')
      <script type="text/x-template" id="category-template">
          <section class="row col-12 velocity-divide-page category-page-wrapper">
              {!! view_render_event('bagisto.shop.productOrCategory.index.before', ['category' => $category]) !!}


              <div class="category-container right">
                  <div class="row remove-padding-margin">
                      <div class="pl0 col-12">
                          <h1 class="fw6 mb10">{{ $category->name }}</h1>

                          @if ($isDisplayMode)
                              <template v-if="products.length > 0">
                                  @if ($category->description)
                                      <div class="category-description">
                                          {!! $category->description !!}
                                      </div>
                                  @endif
                              </template>
                          @endif
                      </div>

                      <div class="col-12 no-padding">
                          <div class="hero-image">
                              @if (!is_null($category->image))
                                  <img class="logo" src="{{ $category->image_url }}" />
                              @endif
                          </div>
                      </div>
                  </div>

                  <div class="filters-container">
                      @include ('shop::products.list.toolbar')
                  </div>

                  <div
                      class="category-block"
                      @if ($category->display_mode == 'description_only')
                          style="width: 100%"
                      @endif>

                      @if ($isDisplayMode)
                          <shimmer-component v-if="isLoading && !isMobile()" shimmer-count="4"></shimmer-component>

                          <template v-else-if="products.length > 0">
                              @if ($toolbarHelper->getCurrentMode() == 'grid')
                                  <div class="row col-12 remove-padding-margin">
                                      <div
                                        :key="Math.random()"
                                        class="card grid-card product-card-new col-3"
                                        v-for="(product, index) in products">

                                        <div class="product-image-container" v-bind:class="{ flappable: product.galleryImages[1] }">
                                            <a :href="`${baseUrl}/${product.slug}`" class="unset">
                                                <div class="product-image fof-flapp-image-1" :style="`background-image: url(${product.image})`"></div>
                                                <div class="product-image fof-flapp-image-2" :style="`background-image: url(${product.galleryImages[1]['medium_image_url']})`" v-if="product.galleryImages[1]"></div>
                                            </a>
                                        </div>

                                        <div class="col-12 no-padding card-body align-vertical-top" v-if="product.name" >
                                            <a :href="`${baseUrl}/${product.slug}`" class="unset no-padding">
                                                <div class="product-name">
                                                    <span class="fof-product-typy" v-html="product.typy"></span> <span class="fof-product-name" v-html="product.name"></span>
                                                </div>

                                                <div
                                                    v-html="product.priceHTML"
                                                    class="fs18 card-current-price fw6">
                                                </div>

                                                <star-ratings v-if="product.rating > 0"
                                                    push-class="display-inbl"
                                                    :ratings="product.rating">
                                                </star-ratings>
                                            </a>
                                        </div>
                                    </div>
                                  </div>
                              @else
                                  <div class="product-list">
                                      <product-card
                                          list=true
                                          :key="index"
                                          :product="product"
                                          v-for="(product, index) in products">
                                      </product-card>
                                  </div>
                              @endif

                              {!! view_render_event('bagisto.shop.productOrCategory.index.pagination.before', ['category' => $category]) !!}

                              <div class="bottom-toolbar">
                                  {{ $products->appends(request()->input())->links() }}
                              </div>

                              {!! view_render_event('bagisto.shop.productOrCategory.index.pagination.after', ['category' => $category]) !!}
                          </template>

                          <div class="product-list empty" v-else>
                              <h2>{{ __('shop::app.products.whoops') }}</h2>
                              <p>{{ __('shop::app.products.empty') }}</p>
                          </div>
                      @endif
                  </div>
              </div>
              @include('shop::products.list.recentrly-viewed-product-page')
              {!! view_render_event('bagisto.shop.productOrCategory.index.after', ['category' => $category]) !!}
          </section>
      </script>

      <script>
          Vue.component('category-component', {
              template: '#category-template',

              data: function () {
                  return {
                      'products': [],
                      'isLoading': true,
                      'paginationHTML': '',
                  }
              },

              created: function () {
                  this.getCategoryProducts();
              },

              methods: {
                  'getCategoryProducts': function () {
                      this.$http.get(`${this.$root.baseUrl}/category-products/{{ $category->id }}${window.location.search}`)
                      .then(response => {
                          this.isLoading = false;
                          this.products = response.data.products.data;
                          this.paginationHTML = response.data.paginationHTML;
                          console.log(this.products);
                      })
                      .catch(error => {
                          this.isLoading = false;
                          console.log(this.__('error.something_went_wrong'));
                      })
                  }
              }
          })
      </script>
  @endpush
@endif
