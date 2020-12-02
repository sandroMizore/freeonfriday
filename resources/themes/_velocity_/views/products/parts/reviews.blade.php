@inject ('reviewHelper', 'Webkul\Product\Helpers\Review')
@inject ('customHelper', 'Webkul\Velocity\Helpers\Helper')

@php
    if (! isset($total)) {
        $total = $reviewHelper->getTotalReviews($product);

        $avgRatings = $reviewHelper->getAverageRating($product);
        $avgStarRating = ceil($avgRatings);
    }

    $percentageRatings = $reviewHelper->getPercentageRating($product);
    $countRatings = $customHelper->getCountRating($product);
    $percRate = $customHelper->getPercentageRating($product);

@endphp
{!! view_render_event('bagisto.shop.products.review.before', ['product' => $product]) !!}


<div class="product__el">
  <div class="product__subtitle" data-accordion-title>
    рейтинг
  </div>
  <div class="product__el-content" data-accordion-content>
    <div class="product__row">
      <ul class="rating">
        @for($i = 1; $i <= round($avgRatings); $i++)
          <li class="rating__item rated"><i class="ic ic-star"></i></li>
        @endfor
        @if($i < 5)
          <?php $blanks = 5 - $i; ?>
          @for ($a = 0; $a <= round($blanks); $a++)
            <li class="rating__item"><i class="ic ic-star"></i></li>
          @endfor
        @endif
      </ul>
      <div class="rating-count">
        {{ __('shop::app.products.total-reviews', ['total' => $total]) }}
      </div>
      <a href="{{ route('shop.reviews.create', ['slug' => $product->url_key ]) }}" class="btn btn__grey">Написать отзыв</a>
    </div>
    @if($total)
    <div class="rating__table">
      @foreach($countRatings as $r=>$v)
      <div class="rating__row">
        <div class="number">{{ $r }}</div>
        <i class="ic ic-star"></i>
        <div class="rating__progress-bar"><span class="progress" style="width: {{ $percRate[$r] }}%;"></span>
        </div>
        <div class="rating__count">
          <span class="count">
            {{ $v }}
          </span>
          <span class="text">
            отзыв
          </span>
        </div>
      </div>
      @endforeach
    </div>
    @endif
  </div>

</div>
@if($total)
<div class="product__el">
  <div class="product__subtitle" data-accordion-title>
    Отзывы
  </div>
  <div class="product__el-content" data-accordion-content>
    <div class=" review__wrap_card slider">
      <div class="review__slider slider__track">
      @foreach($reviewHelper->getReviews($product)->paginate(10) as $review)
        <div class="review__block">
          <div class="review__block-wrap">
            <div class="review__text">
            {{ $review->comment }}
            </div>
            <div class="review__bottom">
              <div class="review__name">{{ $review->name }}</div>
              <div class="review__right">
                <ul class="rating">
                  @for($i = 1; $i <= round($review->rating); $i++)
                    <li class="rating__item rated"><i class="ic ic-star"></i></li>
                  @endfor
                  @if($i < 5)
                    <?php $blanks = 5 - $i; ?>
                    @for ($a = 0; $a <= round($blanks); $a++)
                    	<li class="rating__item"><i class="ic ic-star"></i></li>
                    @endfor
                  @endif
                </ul>
                <!--<div class="place">
                  Stop-motion
                </div>-->
              </div>
            </div>
          </div>
        </div>
      @endforeach


      </div>
      <div class="slider__nav">
        <a href="#" class="slider__btn slider__prev">
          <i class="ic ic-arrow-left-sm"></i>
        </a>
        <a href="#" class="slider__btn slider__next">
          <i class="ic ic-arrow-right-sm"></i>
        </a>
      </div>

    </div>
  </div>

</div>
@endif

{!! view_render_event('bagisto.shop.products.review.after', ['product' => $product]) !!}
