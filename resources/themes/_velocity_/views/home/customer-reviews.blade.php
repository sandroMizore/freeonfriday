@php
    $reviews = app('Webkul\Velocity\Helpers\Helper')->getShopRecentReviews(10);
    $reviewCount = count($reviews);
@endphp
@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

<div class="container-fluid reviews-container">
    @if ($reviewCount)
        <card-list-header
            heading="{{ __('velocity::app.home.customer-reviews') }}"
        ></card-list-header>

        <div class="row reviews-slider">
            @foreach ($reviews as $key => $review)
                <?php $productBaseImage = $productImageHelper->getProductBaseImage($review->product); ?>
                <div class="review-wrapper">
                    <div class="card no-padding">
                        <div class="review-info">
                            <div class="customer-info">
                                <div class="reviews-head-container">
                                    <div class="reviews-head-info">
                                      <h4 class="fs20 fw6 no-margin display-block">
                                          {{ $review['name'] }}
                                      </h4>
                                      <div class="star-ratings fs16">
                                          <star-ratings :ratings="{{ $review['rating'] }}"></star-ratings>
                                      </div>
                                    </div>

                                    <div class="product-info fs16 reviews-head-product-info">
                                        <span><a class="remove-decoration link-color" href="{{ route('shop.productOrCategory.index', $review->product->url_key) }}"> <img src="{{ $productBaseImage['medium_image_url'] }}"  alt="{{$review->product->name}}" class="reviews-product-icon"></a></span>
                                    </div>
                                </div>
                            </div>



                            <div class="review-description">
                                <p class="review-title">{{ $review['title'] }}</p>
                                <p class="review-content fs16">{{ $review['comment'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@push('scripts')
    <script type="text/javascript">
    $(document).ready(function(){
    $('.reviews-slider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: "<div class='reviews-prev-arrow'><span class='material-icons'>chevron_left</span></div>",
      nextArrow: "<div class='reviews-next-arrow'><span class='material-icons'>chevron_right</span></div>",
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });

    });

    </script>

@endpush
