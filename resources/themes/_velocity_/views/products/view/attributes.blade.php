@inject ('productViewHelper', 'Webkul\Product\Helpers\View')

{!! view_render_event('bagisto.shop.products.view.attributes.before', ['product' => $product]) !!}
    @php
        $customAttributeValues = $productViewHelper->getAdditionalData($product);
    @endphp

    @if ($customAttributeValues)



      <div class="fof-product-details">
        <div class="fof-product-details-nav">
          @foreach($customAttributeValues as $attribute)
            @if($attribute['id'] == 32)
              <div class="fof-product-details-tab">
                <a class="fof-product-details-tab-link triggired" @click="tabTrigger($event, 'sposob')" href="#sposob">Способ приминения</a>
              </div>
            @elseif($attribute['id'] == 33)
              <div class="fof-product-details-tab">
                <a class="fof-product-details-tab-link" @click="tabTrigger($event, 'sostav')" href="#sostav">Состав</a>
              </div>
            @elseif($attribute['id'] == 34)
              @if($product->type == 'bundle')
                <div class="fof-product-details-tab">
                  <a class="fof-product-details-tab-link" @click="tabTrigger($event, 'harakteristiki')" href="#harakteristiki">Описание комплектующих</a>
                </div>
              @else
                <div class="fof-product-details-tab">
                  <a class="fof-product-details-tab-link" @click="tabTrigger($event, 'harakteristiki')" href="#harakteristiki">Характеристики</a>
                </div>
              @endif

            @endif
          @endforeach

        </div>
        <div class="fof-product-details-content">

        @foreach($customAttributeValues as $attribute)

          @if($attribute['id'] == 32)
          <div class="fof-product-details-tab-content triggired" id="sposob">
            {!! $attribute['value'] !!}
          </div>
          @elseif($attribute['id'] == 33)
            <div class="fof-product-details-tab-content " id="sostav">
              {!! $attribute['value'] !!}
            </div>
          @elseif($attribute['id'] == 34)
            <div class="fof-product-details-tab-content " id="harakteristiki">
              {!! $attribute['value'] !!}
            </div>
          @endif
        @endforeach
        </div>
        <script>
              function tabTrigger(e, element) {
                console.log(element);
                e.preventDefault();


                  console.log(element);
                  $('.fof-product-details-tab-link').removeClass('triggired');
                  $('.fof-product-details-tab-content').removeClass('triggired');
                  $('#' + element).addClass('triggired');
                  $('.fof-product-details-nav').find('[href="#' + element + '"]').addClass('triggired');
                }
        </script>
      </div>


    @endif

{!! view_render_event('bagisto.shop.products.view.attributes.after', ['product' => $product]) !!}
