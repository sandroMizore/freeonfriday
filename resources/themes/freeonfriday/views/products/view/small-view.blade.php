@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

@php
    $productBaseImage = $productImageHelper->getProductBaseImage($product);
@endphp

<div class="fof-small-product-container create-review-column">
    <a class="row" href="{{ route('shop.productOrCategory.index', $product->url_key) }}">
        <img src="{{ $productBaseImage['medium_image_url'] }}" class="col-12" />
    </a>

    <a class="row pt15 unset" href="{{ route('shop.productOrCategory.index', $product->url_key) }}">
        <h2 class="col-12 fw6 link-color">{{ $product->typy }} {{ $product->name }}</h2>
    </a>
</div>
