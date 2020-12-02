{!! view_render_event('bagisto.shop.products.list.card.before', ['product' => $product]) !!}
@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
@php
  $rate = $reviewHelper->getAverageRating($product);
  $total = $reviewHelper->getTotalReviews($product);
  $productBaseImage = $productImageHelper->getProductBaseImage($product);
  $galleryImages = $productImageHelper->getGalleryImages($product);
@endphp


<div class="product-card">
  <a href="{{ route('shop.productOrCategory.index', $product->url_key) }}" title="{{ $product->name }}" class="product-card__wrap">
		<div class="product-card__img">
			<img src="{{ $productBaseImage['medium_image_url'] }}" alt="{{ $product->name }}">
		</div>
		<div class="product-card__title">
		    {{ $product->typy }} {{ $product->name }}
		</div>
		<div class="product-card__bottom">
			<div class="product-card__price">
        @if($product->bundle_price)
          {{$product->bundle_price}} ₴
        @else
          {!! $product->getTypeInstance()->getPriceHtml() !!}
        @endif
      </div>
				<ul class="rating">
          @for ($i = 1; $i <= round($rate); $i++)
            <li class="rating__item rated"><i class="ic ic-star"></i></li>
          @endfor
          @if($i < 5)
            <?php $blanks = 5 - $i; ?>
            @for ($a = 0; $a <= round($blanks); $a++)
            	<li class="rating__item"><i class="ic ic-star"></i></li>
            @endfor

          @endif
				</ul>
			<div class="review-count">{{ __('shop::app.products.total-reviews', ['total' => $total]) }}</div>
		</div>
	</a>
</div>
