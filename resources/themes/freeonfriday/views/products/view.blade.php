@extends('shop::layouts.master')

@inject ('reviewHelper', 'Webkul\Product\Helpers\Review')
@inject ('customHelper', 'Webkul\Velocity\Helpers\Helper')
@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
@inject ('productViewHelper', 'Webkul\Product\Helpers\View')

@php
    $total = $reviewHelper->getTotalReviews($product);

    $avgRatings = $reviewHelper->getAverageRating($product);
    $avgStarRating = ceil($avgRatings);

    $productImages = [];
    $images = $productImageHelper->getGalleryImages($product);

    foreach ($images as $key => $image) {
        array_push($productImages, $image['medium_image_url']);
    }
    $capasityData = $productViewHelper->getValueData($product);

@endphp
@push('css')
  <link rel="stylesheet" href="{{ asset('/themes/freeonfriday/assets/libs/fancybox/dist/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/themes/freeonfriday/assets/libs/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('/themes/freeonfriday/assets/libs/slick/slick-theme.css') }}">
@endpush
@section('page_title')
    {{ trim($product->meta_title) != "" ? $product->meta_title : $product->name }}
@stop
@section('seo')
    <meta name="description" content="{{ trim($product->meta_description) != "" ? $product->meta_description : str_limit(strip_tags($product->description), 120, '') }}"/>
    <meta name="keywords" content="{{ $product->meta_keywords }}"/>
@stop
@section('full-content-wrapper')
    {!! view_render_event('bagisto.shop.products.view.before', ['product' => $product]) !!}

    <div class="container">
    			<!--<div class="breadcrump">
    				<ul class="breadcrump__list">
    					<li class="breadcrump__item"><a href="/" class="breadcrump__link">Главная</a></li>
    					<li class="breadcrump__item"><a href="/shop" class="breadcrump__link">Каталог</a></li>
    					<li class="breadcrump__item"><a href="#" class="breadcrump__link">Для бороды</a></li>
    				</ul>
    			</div>-->
    			<!--<div class="breadcrump__mobile">
    				<div class="left">
    					<a href="#" class="back">
    						<i class="ic ic-arrow-left-sm"></i>
    					</a>
    					<span class="text">Для бороды</span>
    				</div>

    				<div class="right">
    					<a href="#" class="link link-share">
    						<i class="ic ic-back"></i>
    					</a>
    					<a href="#" class="link link-like">
    						<i class="ic ic-heart2"></i>
    					</a>
    				</div>
    			</div>-->
    			<div class="product">
    				<!-- <div class="product__left"> -->
    				<div class="product__title product__mobile">
    					{{ $product->typy }} {{ $product->name }}
    				</div>
    				<div class="product__row product__mobile">
    					<div class="volume">{{ $capasityData }}</div>
    					<div class="article">№ {{ $product->sku }}</div>

    				</div>
    				<div class="product__slider">
    					<!-- <div class="product__content-left"> -->
    					<div class="product__slider-nav">
                @foreach($productImages as $navImage)
                <div class="product__slider-el">
                  <div class="product__slider-el-wrap">
                    <img src="{{ $navImage }}" alt="">
                  </div>
                </div>
                @endforeach
    					</div>
    					<div class="product__home-slider" id="product__home-gallery">
                @foreach($productImages as $bigImage)
    						<a data-fancybox href="{{ $bigImage }}" class="product__home-el">
    							<span class="product__home-el-wrap">
    								<img src="{{ $bigImage }}" alt="">
    							</span>
    						</a>
                @endforeach
    					</div>
    					<!-- </div> -->
    				</div>
    				<div class="product__right">
    					<div class="product__top">
    						<div class="product__title">
    						{{ $product->typy }} {{ $product->name }}
    						</div>
    						<div class="product__row">
    							<div class="volume">{{ $capasityData }}</div>
    							<div class="article">№ {{ $product->sku }}</div>
    							<ul class="rating">
                    @for ($i = 1; $i <= round($avgStarRating); $i++)
                      <li class="rating__item rated"><i class="ic ic-star"></i></li>
                    @endfor
                    @if($i < 5)
                      <?php $blanks = 5 - $i; ?>
                      @for ($a = 0; $a <= round($blanks); $a++)
                        <li class="rating__item"><i class="ic ic-star"></i></li>
                      @endfor

                    @endif
    							</ul>
    							<div class="review-count">
                    {{ __('shop::app.products.total-reviews', ['total' => $total]) }}
    							</div>
    							<a href="#" class="link link-share">
    								<i class="ic ic-back"></i>
    							</a>
    							<a href="{{ route('customer.wishlist.add', $product->product_id) }}" title="{{ __('velocity::app.shop.wishlist.remove-wishlist-text') }}" class="link link-like">
    								<i class="ic ic-heart2"></i>
    							</a>
    						</div>
    						<div class="product__price">
    							<div class="price">
                    @if($product->bundle_price)
                      {{$product->bundle_price}} ₴
                    @else
                      {!! $product->getTypeInstance()->getPriceHtml() !!}
                    @endif
                  </div>
    							<div class="right product__mobile">
    								<ul class="rating">
                      @for ($i = 1; $i <= round($avgStarRating); $i++)
                        <li class="rating__item rated"><i class="ic ic-star"></i></li>
                      @endfor
                      @if($i < 5)
                        <?php $blanks = 5 - $i; ?>
                        @for ($a = 0; $a <= round($blanks); $a++)
                          <li class="rating__item"><i class="ic ic-star"></i></li>
                        @endfor

                      @endif
    								</ul>
    								<div class="review-count">
                      {{ __('shop::app.products.total-reviews', ['total' => $total]) }}
    								</div>
    							</div>
    						</div>
    						<div class="product__row">
    							<div class="qty">
    								<div class="qty__text">
    									Количество
    								</div>
    								<div class="qty__wrap">
    									<div class="minus"></div>
    									<input type="number" value="1" class="qty__field">
    									<div class="plus"></div>
    								</div>
    							</div>
    							<a href="#" class="btn btn__red buy" data-id="{{ $product->product_id }}">купить</a>
    						</div>
    					</div>
    					<div class="product__description">
    						{!! $product->short_description !!}
    					</div>

              @include('shop::products.parts.attributes')


              @include('shop::products.parts.reviews')

    				</div>
    			</div>

          @include('shop::products.parts.featured')
    		</div>

    		<!--<div class="product__viewed">
    			<div class="container">
    				<div class="product__title">
    					Просмотренные продукты
    				</div>
    				<div class="product__complements-row slider">

    					<div class="product-slider slider__track">
    						<div class="product-card">

    							<a href="product.html" class="product-card__wrap">
    								<div class="product-card__img">
    									<img src="images/dest/product/pasta.png" alt="">
    								</div>
    								<div class="product-card__title">
    									Паста для укладки Stop-motion
    								</div>
    								<div class="product-card__bottom">
    									<div class="product-card__price">220 грн</div>
    									<ul class="rating">
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    									</ul>
    									<div class="review-count">287 отзыв</div>
    								</div>
    							</a>
    						</div>
    						<div class="product-card">
    							<a href="product.html" class="product-card__wrap">
    								<div class="product-card__img">
    									<img src="images/dest/product/crema.png" alt="">
    								</div>
    								<div class="product-card__title">
    									Крем для бороды
    									Midday vibes
    								</div>
    								<div class="product-card__bottom">
    									<div class="product-card__price">600 грн.</div>
    									<ul class="rating">
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    									</ul>
    									<div class="review-count">287 отзыв</div>
    								</div>
    							</a>
    						</div>
    						<div class="product-card">
    							<a href="product.html" class="product-card__wrap">
    								<div class="product-card__img">
    									<img src="images/dest/product/balsam.png" alt="">
    								</div>
    								<div class="product-card__title">
    									Бальзам для бороды
    									Deep breath
    								</div>
    								<div class="product-card__bottom">
    									<div class="product-card__price">200 грн</div>
    									<ul class="rating">
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    									</ul>
    									<div class="review-count">287 отзыв</div>
    								</div>
    							</a>
    						</div>

    						<div class="product-card">
    							<a href="product.html" class="product-card__wrap">
    								<div class="product-card__img">
    									<img src="images/dest/product/maslo.png" alt="">
    								</div>
    								<div class="product-card__title">
    									Масло для бороды
    									The same time
    								</div>
    								<div class="product-card__bottom">
    									<div class="product-card__price">180 грн</div>
    									<ul class="rating">
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    									</ul>
    									<div class="review-count">287 отзыв</div>
    								</div>
    							</a>
    						</div>
    						<div class="product-card">
    							<a href="product.html" class="product-card__wrap">
    								<div class="product-card__img">
    									<img src="images/dest/product/pasta.png" alt="">
    								</div>
    								<div class="product-card__title">
    									Паста для укладки Stop-motion
    								</div>
    								<div class="product-card__bottom">
    									<div class="product-card__price">220 грн</div>
    									<ul class="rating">
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    										<li class="rating__item"><i class="ic ic-star"></i></li>
    									</ul>
    									<div class="review-count">287 отзыв</div>
    								</div>
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
    		</div> -->

    @push('scripts')
      <script>
        let searchParams = new URLSearchParams(window.location.search)
        if(searchParams.has('showcart')) {
          $('.fof-mini-cart-container').toggleClass('open');
        }
        $('.buy').on('click', function(e){
          e.preventDefault;
          var product_data = {
            'product_id' : $('.buy').data('id'),
            'quantity' : $('.qty__field').val(),
            '_token' : '{{ csrf_token() }}'
          };
          $.post('/cart/add', product_data, function (json) {
              window.location.href = '{{ Request::url() }}?showcart=true';
          });
        });

      </script>
    @endpush

    {!! view_render_event('bagisto.shop.products.view.after', ['product' => $product]) !!}
@endsection
