@inject ('productViewHelper', 'Webkul\Product\Helpers\View')

{!! view_render_event('bagisto.shop.products.view.attributes.before', ['product' => $product]) !!}
@php
    $customAttributeValues = $productViewHelper->getAdditionalData($product);
@endphp

@if ($customAttributeValues)

<div class="tabs">
  <div class="tabs__menu">
    <ul class="tabs__menu-list">
      @foreach($customAttributeValues as $attribute)
        @if($attribute['id'] == 32)
          <li class="tabs__menu-item" data-tab-item="tab-prod1">Порядок действий</li>
        @elseif($attribute['id'] == 33)
          <li class="tabs__menu-item" data-tab-item="tab-prod2">Состав</li>
        @elseif($attribute['id'] == 34)
          @if($product->type == 'bundle')
            <li class="tabs__menu-item" data-tab-item="tab-prod3">Описание комплектующих</li>
          @else
            <li class="tabs__menu-item" data-tab-item="tab-prod3">Характеристики</li>
          @endif
        @endif
      @endforeach
    </ul>
  </div>
  <div class="tabs__content">
    @foreach($customAttributeValues as $attribute)
    @if($attribute['id'] == 32)
    <div class="tabs__menu-item" data-accordion-title>Порядок действий</div>
    <div class="tabs__block " data-accordion-content id="tab-prod1">
      {!! $attribute['value'] !!}
    </div>
    @elseif($attribute['id'] == 33)
    <div class="tabs__menu-item" data-accordion-title>Состав</div>
    <div class="tabs__block" data-accordion-content id="tab-prod2">
      {!! $attribute['value'] !!}
    </div>
    @elseif($attribute['id'] == 34)
    <div class="tabs__menu-item" data-accordion-title>Характеристики</div>
    <div class="tabs__block" data-accordion-content id="tab-prod3">
      {!! $attribute['value'] !!}
    </div>
    @endif
    @endforeach
  </div>
</div>


@endif

{!! view_render_event('bagisto.shop.products.view.attributes.after', ['product' => $product]) !!}
