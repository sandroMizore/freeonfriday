{!! view_render_event('bagisto.shop.products.list.card.before', ['product' => $product]) !!}
@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
@php
  $rate = $reviewHelper->getAverageRating($product);
  $total = $reviewHelper->getTotalReviews($product)
@endphp




    <?php $productBaseImage = $productImageHelper->getProductBaseImage($product);
          $galleryImages = $productImageHelper->getGalleryImages($product);
    ?>



<div class="fof-featured-slide">
  @if(count($galleryImages) > 1)
  <div class="fof-featured-slide-image flappable">
    <a href="{{ route('shop.productOrCategory.index', $product->url_key) }}" title="{{ $product->name }}">
      <img src="{{ $productBaseImage['medium_image_url'] }}" onerror="this.src='{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}'" alt="{{ $product->name }}" class="fof-flapp-image-1">
      <img src="{{ $galleryImages[1]['medium_image_url'] }}" alt="{{ $product->name }}" class="fof-flapp-image-2">
    </a>
  </div>
  @else
  <div class="fof-featured-slide-image">
    <a href="{{ route('shop.productOrCategory.index', $product->url_key) }}" title="{{ $product->name }}">
      <img src="{{ $productBaseImage['medium_image_url'] }}" onerror="this.src='{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}'" alt="{{ $product->name }}" class="fof-flapp-image-1">
    </a>
  </div>
  @endif
  <div class="fof-featured-slide-title">
    <a href="{{ route('shop.productOrCategory.index', $product->url_key) }}" title="{{ $product->name }}">
      <span>
          <span class="fof-product-typy">{{ $product->typy }}</span> <span class="fof-product-name">{{ $product->name }}</span>
      </span>
    </a>
  </div>
  <div class="fof-featured-slide-rating">
    <span class="stars">
        @for ($i = 1; $i <= round($rate); $i++)
        <i class="material-icons cursor-pointer">
            star
        </i>
        @endfor
        @if($i < 5)
          <?php $blanks = 5 - $i; ?>
          @for ($a = 0; $a <= round($blanks); $a++)
          <i class="material-icons cursor-pointer">
              star_border
          </i>
          @endfor

        @endif
    </span>

    <div class="total-reviews">
        {{ __('shop::app.products.total-reviews', ['total' => $total]) }}
    </div>
  </div>
  <div class="fof-featured-slide-price">
    @include ('shop::products.price', ['product' => $product])
  </div>

</div>
