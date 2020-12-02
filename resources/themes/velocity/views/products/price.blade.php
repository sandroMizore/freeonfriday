{!! view_render_event('bagisto.shop.products.price.before', ['product' => $product]) !!}

<div class="product-price">
  @if($product->bundle_price)
    {{$product->bundle_price}} ₴
  @else
    {!! $product->getTypeInstance()->getPriceHtml() !!}
  @endif

</div>

{!! view_render_event('bagisto.shop.products.price.after', ['product' => $product]) !!}
