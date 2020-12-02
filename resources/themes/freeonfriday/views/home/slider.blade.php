

@if (! empty($sliderData))
  <div class="main-slider">
    <div class="main-slider__wrap">
    @foreach ($sliderData as $index => $slider)

    @php
        $textContent = str_replace("\r\n", '', $slider['content']);
    @endphp
    <div class="main-slider__block">
      <img src="{{ url()->to('/') . '/storage/' . $slider['path'] }}" alt="">
      <div class="main-slider__content">
        <div class="page-title page-title_white">
          <div class="left">LOOKiNg</div>
          <div class="right">gOOD</div>
        </div>
        <div class="main-slider__text">{!! $textContent !!}</div>
        <a href="#" class="main-slider__link btn btn__white">подробнее</a>
      </div>
    </div>

  @endforeach
  </div>
</div>
  @else
  <div class="main-slider">
    <div class="main-slider__wrap">
      <div class="main-slider__block">
        <img src="{{ asset('themes/freeonfriday/assets/images/dest/main_slider/Background_Photo1.jpg') }}" alt="">
        <div class="main-slider__content">
          <div class="page-title page-title_white">
            <div class="left">LOOKiNg</div>
            <div class="right">gOOD</div>
          </div>
          <div class="main-slider__text">Advanced grooming & complete body-maintenance products</div>
          <a href="#" class="main-slider__link btn btn__white">подробнее</a>
        </div>
      </div>
      <div class="main-slider__block">
        <img src="{{ asset('themes/freeonfriday/assets/images/dest/main_slider/Background_Photo2.jpg') }}" alt="">
        <div class="main-slider__content">
          <div class="page-title page-title_white">
            <div class="left">plus BaRBeR</div>
            <div class="right">mODe</div>
          </div>
          <div class="main-slider__text">Advanced grooming & complete body-maintenance products</div>
          <a href="#" class="main-slider__link btn btn__white">подробнее</a>
        </div>
      </div>
      <div class="main-slider__block">
        <img src="{{ asset('themes/freeonfriday/assets/images/dest/main_slider/Background_Photo3.jpg') }}" alt="">
        <div class="main-slider__content">
          <div class="page-title page-title_white">
            <div class="left">alwaYs</div>
            <div class="right">tHE saMe sCeNT</div>
          </div>
          <div class="main-slider__text"></div>
          <a href="#" class="main-slider__link btn btn__white">подробнее</a>
        </div>
      </div>
    </div>
  </div>
  @endif
