<?php
    $relatedProducts = $product->related_products()->get();
?>
@if(count($relatedProducts) > 0)
<div class="product__complements">
  <div class="product__title">
    Хорошо дополнят этот продукт
  </div>
  <div class="product__complements-row slider">

    <div class="product-slider slider__track">
      @foreach($relatedProducts as $product)
        @include ('shop::home.parts.product-card', ['product' => $product])
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
