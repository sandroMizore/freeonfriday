@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.reviews.add-review-page-title') }} - {{ $product->name }}
@endsection

@section('content-wrapper')

    <div class="container">
        <section class="row review-page-container">
            @include ('shop::products.view.small-view', ['product' => $product])

            <div class="create-review-column">
                <div class="row customer-rating col-12 remove-padding-margin">
                    <h2 class="full-width">
                        Оставьте свой отзыв
                    </h2>

                    <form
                        method="POST"
                        class="review-form"
                        @submit.prevent="onSubmit"
                        action="{{ route('shop.reviews.store', $product->product_id ) }}">

                        @csrf

                        <div class="form-row">
                            <label for="title" class="required">
                                Рейтинг
                            </label>
                            <input type="hidden" name="rating" id="rating" value="0">
                            <div class="rating">

                            </div>
                        </div>

                        <div class="form-row">
                            <label for="title" class="required">
                                Заголовок
                            </label>
                            <input
                                type="text"
                                name="title"
                                class="control"
                                value="{{ old('title') }}" />

                        </div>

                        @if (core()->getConfigData('catalog.products.review.guest_review') && ! auth()->guard('customer')->user())
                            <div class="form-row">
                                <label for="title" class="required">
                                  Имя
                                </label>
                                <input  type="text" class="control" name="name"value="{{ old('name') }}">

                            </div>
                        @endif

                        <div class="form-row">
                            <label for="comment" class="required">
                                Комментарий
                            </label>
                            <textarea
                                type="text"
                                class="control"
                                name="comment"
                                v-validate="'required'"
                                value="{{ old('comment') }}">
                            </textarea>

                        </div>

                        <div class="submit-btn">
                            <button
                                type="submit"
                                class="theme-btn fs16">
                                {{ __('velocity::app.products.submit-review') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>

@endsection
@push('scripts')
  <script src="{{ asset('themes/freeonfriday/assets/js/rater.min.js') }}"></script>
  <script type="text/javascript">
  var options = {
    max_value: 5,
    step_size: 1,
    change_once: true
  }
  $(".rating").rate(options);
  $(".rating").on("afterChange", function(ev, data){
    console.log(data.from, data.to);
    $('#rating').val(data.to);
  });
  </script>
@endpush
