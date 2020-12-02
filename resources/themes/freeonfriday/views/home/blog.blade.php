@php
 $blogs = app('FreeOnFriday\News\Http\Controllers\BlogController')->getPosts(3);
@endphp

<div class="blog ">
  <div class="container">
    <div class="blog__title">
      Блог
    </div>
    <div class="blog-content slider">
      <div class="blog__wrap slider__track">
        @foreach($blogs as $post)
        @php
          $date = date("d.m.y", strtotime($post->created_at));
          $image = '/storage/news/' . $post->image;
        @endphp
        <div class="blog__block">
          <a href="/blogs/{{ $post->url_key }}" class="blog__img frame-decor frame-decor_sm">
            <img src="{{ $image }}" alt="">
          </a>
          <div class="blog__content">
            <a href="/blogs/{{ $post->url_key }}" class="title">
              {{ $post->title }}
            </a>
            <div class="description">
              {{ $post->except }}
            </div>
            <div class="bottom">
              <div class="data">
                {{ $date }}
              </div>
              <!--<div class="section">
                Акции
              </div>-->
            </div>
          </div>
        </div>

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
</div>
