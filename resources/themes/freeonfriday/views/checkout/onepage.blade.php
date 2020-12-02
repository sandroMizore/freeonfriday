@extends('shop::layouts.master')

@section('page_title')
    {{ __('shop::app.checkout.onepage.title') }}
@stop

@section('content-wrapper')

  <div class="container">
    <div class="checkout-customer-info">
      <div class="overlay">

      </div>
      <div class="form-header">
          <h2>{{ __('shop::app.checkout.onepage.shipping-address') }}</h2>
      </div>
      <div class="form-group half-col">
          <label for="billing[first_name]" class="required">
              {{ __('shop::app.checkout.onepage.first-name') }}*
          </label>

          <input type="text" class="form-control" id="first_name" name="billing[first_name]" required />

      </div>

      <div class="form-group half-col" >
          <label for="billing[email]" class="required">
              {{ __('shop::app.checkout.onepage.email') }}*
          </label>

          <input type="text" class="form-control" id="email" name="billing[email]" required />

      </div>

      <div class="form-group half-col" >
          <label for="billing_address_0" class="required">
              {{ __('shop::app.checkout.onepage.address1') }}*
          </label>

          <input type="text"  class="form-control" id="billing_address_0" name="billing[address1][]" required/>

      </div>

      <div class="form-group half-col" >
          <label for="billing[phone]" class="required">
              {{ __('shop::app.checkout.onepage.phone') }}*
          </label>

          <input type="text" class="form-control" id="phone" name="billing[phone]" required/>

    </div>


    <div class="form-group">
        <label for="billing[comment]" class="mandatory">
            {{ __('shop::app.checkout.onepage.comment') }}
        </label>

        <textarea
            type="textarea"
            class="control adress-commet"
            id="comment"
            name="billing[comment]"></textarea>

    </div>

    <div class="form-group">
        <span class="checkbox fs16 display-inbl no-margin">
            <input
                class="ml0 nocall-checkout"
                type="checkbox"
                id="nocall"
                name="billing[nocall]"

               />

            <span class="ml-5">
                {{ __('shop::app.checkout.onepage.nocall') }}
            </span>
        </span>
    </div>
    <div class="nex-btn proc-btn">
      Далее
    </div>
  </div>



  <div class="checkout-shipping disabled">
    <div class="form-header">
        <h2>
            {{ __('shop::app.checkout.onepage.shipping-address') }}
        </h2>
    </div>
    <div class="shippings">
      <div class="overlay">

      </div>
      <form class="shipping-form">
        <div class="form-container">
          <div class="shipping-method">
            <input class="shpping-check" type="radio" id="novaposhta" name="novaposhta" data-method="novaposhta_novaposhta" checked/>

            <span class="shipping-title">
                Новая Почта
            </span>
            <div class="shipping-description">
              Доставка службой Новая Почта
            </div>
          </div>
          <div class="shipping-method">
            <input class="shpping-check" type="radio" id="flatrate" name="flatrate" data-method="flatrate_flatrate" />

            <span class="shipping-title">
                Курьерская доставка
            </span>
            <div class="shipping-description">
              Доставим по вашему адресу
            </div>
          </div>
          <div class="shipping-method">
            <input class="shpping-check" type="radio" id="free" name="free" data-method="free_free" />

            <span class="shipping-title">
              Самовывоз
            </span>
            <div class="shipping-description">
              Вывоз из фирменного магазина
            </div>
          </div>
        </div>
    </form>
    </div>
    <div class="shiiping-btn proc-btn">
      Далее
    </div>
  </div>


  <div class="checkout-payments disabled">
    <div class="form-header">
        <h2>
            {{ __('shop::app.checkout.onepage.payment-methods') }}
        </h2>
    </div>
    <div class="payments">
      <div class="overlay">

      </div>
      <form class="payment-form">
        <div class="form-container">
          <div class="shipping-method">
            <input class="payment-check" type="radio" id="cashondelivery" name="cashondelivery" data-method="cashondelivery" checked/>

            <span class="shipping-title">
                Оплата при доставке
            </span>

          </div>

        </div>
    </form>
    </div>
    <div class="payment-btn proc-btn">
      Далее
    </div>
  </div>


</div>


@endsection
@push('scripts')
  <script type="text/javascript">
    function saveCustomerAdress() {
      console.log('start');
      var name = $('#first_name').val(),
          email = $('#email').val(),
          adressCustomer = $('#billing_address_0').val(),
          phone = $('#phone').val(),
          comment = $('#comment').val(),
          nocall = $('#nocall').val(),
          nameIsValid = false,
          emailIsValid = false,
          adressIsValid = false,
          phoneIsValid = false,
          formattedAdress = [];

          if(!name || name == '' || name == ' ') {
            $('#first_name').addClass('danger');
          } else {
            nameIsValid = true;
          }
          if(!email || email == '' || email == ' ') {
            $('#email').addClass('danger');
          } else {
            emailIsValid = true;
          }
          if(!adressCustomer || adressCustomer == '' || adressCustomer == ' ') {
            $('#billing_address_0').addClass('danger');
          } else {
            adressIsValid = true;
            formattedAdress = adressCustomer;
          }
          if(!phone || phone == '' || phone == ' ') {
            $('#phone').addClass('danger');
          } else {
            phoneIsValid = true;
          }
          if(nameIsValid && emailIsValid && adressIsValid && phoneIsValid) {
            var address = {
                  'billing': {
                      'address1': [''],
                      'use_for_shipping': false,
                      'nocall': nocall,
                      'comment': comment,
                      'phone': phone,
                      'first_name': name,
                      'email': email,
                      'city': 'none'
                  },

                  'shipping': {
                    'address1': [''],
                    'use_for_shipping': true,
                    'nocall': nocall,
                    'comment': comment,
                    'phone': phone,
                    'first_name': name,
                    'email': email,
                  },
                  '_token' : '{{ csrf_token() }}'
              };
              address.billing.address1 = [formattedAdress];
              address.shipping.address1 = [formattedAdress];
              $.post("{{ route('shop.checkout.save-address') }}", address, function (json) {
                  console.log(json);
                  $('.checkout-shipping').removeClass('disabled');
                  $('.checkout-customer-info').addClass('disabled');
              });

            $('.danger').removeClass('danger');
          }
    }
    $('.nex-btn').on('click', function(){
      saveCustomerAdress();
    });

    $('.shpping-check').on('change', function(){
      $('.shpping-check').prop('checked', false);
      $(this).prop('checked', true);
    });
    $('.payment-check').on('change', function(){
      $('.payment-check').prop('checked', false);
      $(this).prop('checked', true);
    });
    $('.shiiping-btn').on('click', function(e){
      var shipping = $('.shpping-check:checked').data('method');
      var data = {
        'shipping_method': shipping,
        '_token' : '{{ csrf_token() }}'
      };
      $.post("{{ route('shop.checkout.save-shipping') }}", data, function (json) {
        $('.checkout-shipping').addClass('disabled');
        $('.checkout-payments').removeClass('disabled');
      });
    });


    $('.payment-btn').on('click', function(){
      var payment = $('.payment-check:checked').data('method');
      var data = {
        'payment': { 'method' : payment },
        '_token' : '{{ csrf_token() }}'
      };
      $.post("{{ route('shop.checkout.save-payment') }}", data, function (json) {
          console.log(json);
      });

      $.post("{{ route('shop.checkout.save-order') }}", {'_token': "{{ csrf_token() }}"}, function(response){
        if (response.success) {

          window.location.href = "{{ route('shop.checkout.success') }}";

        }
      });

    });
  </script>
@endpush
