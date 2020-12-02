@php
    $reviews = app('Webkul\Velocity\Helpers\Helper')->getShopRecentReviews(10);
    $reviewCount = count($reviews);
@endphp
@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')


<div class="review">
  @if ($reviewCount)
  <div class="container">

    <div class="review__title">
      Отзывы пользователей
    </div>

    <div class="review__wrap slider">
      <div class="review__slider slider__track" style="max-height: 180px;">
        @foreach ($reviews as $key => $review)
        <?php $productBaseImage = $productImageHelper->getProductBaseImage($review->product);?>
        <div class="review__block">
          <div class="review__block-wrap">
            <div class="review__text">
              {{ $review['comment'] }}
            </div>
            <div class="review__bottom">
              <div class="review__name">{{ $review['name'] }}</div>
              <div class="review__right">
                <ul class="rating">
                  @for ($i = 1; $i <= round($review['rating']); $i++)
                    <li class="rating__item rated"><i class="ic ic-star"></i></li>
                  @endfor
                  @if($i < 5)
                    <?php $blanks = 5 - $i; ?>
                    @for ($a = 0; $a <= round($blanks); $a++)
                    	<li class="rating__item"><i class="ic ic-star"></i></li>
                    @endfor

                  @endif
                </ul>
                <div class="place">
                  <a href="{{ route('shop.productOrCategory.index', $review->product->url_key) }}">{{$review->product->name}}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
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
  @endif
</div>
