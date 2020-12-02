@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
<div class="fof-mini-cart-container">
  <div class="fof-mini-cart-close">
      <span aria-hidden="true">&times;</span>
  </div>
  <div class="mini-cart">

      @if($cart)

          @foreach($cart->items as $item)
          <div class="mini-cart-items">
            @php
                $images = $item->product->getTypeInstance()->getBaseImage($item);
            @endphp
              <div class="mini-cart-item-image">
                <img src="{{ $images['small_image_url'] }}" alt="">
              </div>
              <div class="mini-cart-item-title">
                {{ $item->name }}
              </div>
              <div class="mini-cart-item-qty">
                {{ $item->quantity }}
              </div>
              <div class="mini-cart-item-price">
                {{ core()->currency($item->base_total) }}
              </div>
            </div>
          @endforeach
        @else
        <div class="mini-cart-empty">
          Корзина пуста
        </div>


    @endif



    <div class="mini-cart-footer">
      @if($cart)
        <div class="mini-cart-total">
          Итого: {{ core()->currency($cart->base_sub_total) }}
        </div>
      @endif
        <div class="mini-cart-links">
          <a href="{{ route('shop.checkout.cart.index') }}">{{ __('shop::app.minicart.view-cart') }}</a>

          <a class="" href="{{ route('shop.checkout.onepage.index') }}">{{ __('shop::app.minicart.checkout') }}</a>
        </div>

    </div>
  </div>
</div>
