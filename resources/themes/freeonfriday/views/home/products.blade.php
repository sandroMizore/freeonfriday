@inject ('reviewHelper', 'Webkul\Product\Helpers\Review')

@php
    $count = $velocityMetaData ? $velocityMetaData->featured_product_count : 10;
    $categories = array('beard','hair','musthave','gifts');

@endphp

<div class="tabs">
  <div class="container">
    <div class="tabs__menu">
      <ul class="tabs__menu-list">
        @foreach($categories as $k=>$category)
            <?php $categoryDetails = app('Webkul\Category\Repositories\CategoryRepository')->findByPath($category); ?>
            <li class="tabs__menu-item" data-tab-item="tab-{{ $categoryDetails->slug }}">{{ $categoryDetails->name }}</li>
        @endforeach
      </ul>
    </div>
    <div class="tabs__content">
      @foreach($categories as $z=>$category)
        <?php $categoryDetails = app('Webkul\Category\Repositories\CategoryRepository')->findByPath($category); ?>
      <div class="tabs__block slider" id="tab-{{ $categoryDetails->slug }}">

        <div class="product-slider slider__track">
            @foreach (app('Webkul\Product\Repositories\ProductRepository')->getAll($categoryId = $categoryDetails->id) as $productFlat)
              @include ('shop::home.parts.product-card', ['product' => $productFlat])
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

          @endforeach
      </div>
    </div>
</div>
