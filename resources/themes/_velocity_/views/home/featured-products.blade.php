@inject ('reviewHelper', 'Webkul\Product\Helpers\Review')

@php
    $count = $velocityMetaData ? $velocityMetaData->featured_product_count : 10;
    $categories = array('beard','gifts','musthave','hair');

@endphp




<div class="fof-tabs-nav">
  @foreach($categories as $k=>$category)
      <?php $categoryDetails = app('Webkul\Category\Repositories\CategoryRepository')->findByPath($category); ?>


      	<div class="fof-nav-item">
      		<a class="fof-nav-link  <?php if($k==0) { echo 'triggired'; } ?>  " href="#{{ $categoryDetails->slug }}" >{{ $categoryDetails->name }}</a>
      	</div>


  @endforeach
</div>
<div class="fof-tabs-content">
  @foreach($categories as $z=>$category)
    <?php $categoryDetails = app('Webkul\Category\Repositories\CategoryRepository')->findByPath($category); ?>
    <div class="fof-tab-pane <?php if($z==0) { echo 'triggired'; } ?>" id="{{ $categoryDetails->slug }}">
      <div class="fof-featured-products-slider-container">
        <div class="fof-featured-slider fof-cat-slider-{{ $categoryDetails->slug }}">
          @foreach (app('Webkul\Product\Repositories\ProductRepository')->getAll($categoryId = $categoryDetails->id) as $productFlat)

              @include ('shop::products.list.featured-card', ['product' => $productFlat])

          @endforeach
        </div>
      </div>
    </div>
    <script>
    $(document).ready(function(){
    $('.fof-cat-slider-{{ $categoryDetails->slug }}').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: "<div class='featured-prev-arrow'><span class='material-icons'>chevron_left</span></div>",
      nextArrow: "<div class='featured-next-arrow'><span class='material-icons'>chevron_right</span></div>",
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
  @endforeach
</div>
<script>
  $(document).ready(function(){
    $('.fof-nav-link').on('click', function(e){
      e.preventDefault();
      //e.stopPropagation();
      if($(this).hasClass('triggired')) {
        return;
      } else {
        var target = $(this).attr('href');
        var free_target = target.replace('#', '');
        $('.fof-nav-link').removeClass('triggired');
        $('.fof-tab-pane').removeClass('triggired');
        $(target).addClass('triggired');
        $('.fof-tabs-nav').find('[href="' + target + '"]').addClass('triggired');
        $('.fof-cat-slider-' + free_target).slick('setPosition').slick();

      }
    });
  });
</script>
