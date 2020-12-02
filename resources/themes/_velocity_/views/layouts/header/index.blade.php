@php
    $velocityContent = app('Webkul\Velocity\Repositories\ContentRepository')->getAllContents();
    $name = Route::currentRouteName();
    if($name != 'shop.home.index') {
      $headerSubRow = true;
      $headerClass = 'header_page';
    } else {
      $headerSubRow = false;
      $headerClass = ' ';
    }
    $cart = cart()->getCart();

    $cartItemsCount = trans('shop::app.minicart.zero');

    if ($cart) {
        $cartItemsCount = $cart->items->count();
    }
@endphp

<header class="header {{ $headerClass }}">
<div class="container-fluid">
  <div class="header__wrap">
    <div class="header__logo">
      <a href="/" class="header__logo-link">
        <img src="{{ asset('/themes/freeonfriday/assets/images/dest/logo.svg') }}" alt="">
      </a>
    </div>
    <nav class="nav">
      <ul class="nav__list">
        <li class="nav__item">
          <a href="/shop" class="nav__link">каталог</a>
          <ul class="lv-2">
            <li class="lv-2__item"><a class="lv-2__link" href="/beard">для бороды</a></li>
            <li class="lv-2__item"><a class="lv-2__link" href="/hair">для волос</a></li>
            <li class="lv-2__item"><a class="lv-2__link" href="/musthave">мастхев</a></li>
            <li class="lv-2__item"><a class="lv-2__link" href="/gifts">подарок</a></li>
          </ul>
        </li>
        @foreach($velocityContent as $menuItem)
        <li class="nav__item">
          <a href="/{{ $menuItem['page_link'] }}" class="nav__link">{{ $menuItem['title'] }}</a></li>
        @endforeach
      </ul>
    </nav>

    <div class="header__btn-group">
      <a href="/customer/account/profile" class="btn btn__link">
        <i class="ic ic-user"></i>
      </a>
      <a href="#" class="btn btn__link search-trigger">
        <i class="ic ic-search"></i>

      </a>
      <a href="/customer/account/wishlist" class="btn btn__link">
        <i class="ic ic-heart"></i>
      </a>
      <a href="#" class="btn btn__link cart-btn">
        <i class="ic ic-supermarket"></i>
      </a>
      <div class="fof-searchbar">
          <form method="GET" role="search" id="search-form" action="{{ route('velocity.search.index') }}">
              <div  class="btn-toolbar full-width"  role="toolbar">

                  <div class="btn-group full-width">


                      <div class="full-width search-input-container">

                          <input
                              required
                              name="term"
                              type="search"
                              class="form-control"
                              placeholder="{{ __('velocity::app.header.search-text') }}" />

                          <button class="btn" type="submit" id="header-search-icon">
                              <i class="ic ic-search"></i>
                          </button>
                      </div>
                  </div>
              </div>

          </form>
      </div>
    </div>

    <div class="burger-mobile">
      <div class="burger-mobile-box">
        <div class="burger-mobile-line"></div>
      </div>
    </div>
  </div>
  @if($headerSubRow)
    <div class="header__bottom">
      <div class="container">
        <div class="header__utp">
          <!-- <div class="header__utp-wrap"> -->
          <div class="header__utp-block">Бесплатная доставка от 1000 грн</div>
          <div class="header__utp-block">Украинский бренд</div>
          <div class="header__utp-block">Сертифицированное производство</div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  @endif
</div>
@include('shop::layouts.header.mini-cart')

</header>
@push('scripts')
<script type="text/javascript">
  $('.search-trigger').on('click', function(e){
    e.preventDefault;
    $('.fof-searchbar').toggleClass('shown');
  });
</script>
@endpush
