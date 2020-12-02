<div class="col-lg-4 col-md-12 col-sm-12 footer-ct-content">
	<div class="row">
        @if ($velocityMetaData)
            {!! $velocityMetaData->footer_middle_content !!}
        @else
            <div class="col-lg-6 col-md-12 col-sm-12 no-padding">
                <ul type="none">
                    <li><a href="https://webkul.com/about-us/company-profile/">About Us</a></li>
                    <li><a href="https://webkul.com/about-us/company-profile/">Customer Service</a></li>
                    <li><a href="https://webkul.com/about-us/company-profile/">What&rsquo;s New</a></li>
                    <li><a href="https://webkul.com/about-us/company-profile/">Contact Us </a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 no-padding">
                <ul type="none">
                    <li><a href="https://webkul.com/about-us/company-profile/"> Order and Returns </a></li>
                    <li><a href="https://webkul.com/about-us/company-profile/"> Payment Policy </a></li>
                    <li><a href="https://webkul.com/about-us/company-profile/"> Shipping Policy</a></li>
                    <li><a href="https://webkul.com/about-us/company-profile/"> Privacy and Cookies Policy </a></li>
                </ul>
            </div>
        @endif
	</div>
	<div class="row footer-payments">
			<div class="mb5 col-12 pl-0">
					<h3>{{ __('velocity::app.home.payment-methods') }}</h3>
			</div>

			<div class="payment-methods col-12 pl-0">
					@foreach(\Webkul\Payment\Facades\Payment::getPaymentMethods() as $method)
							<div class="method-sticker">
									{{ $method['method_title'] }}
							</div>
					@endforeach
							<div class="method-sticker payment-image-sticker">
								<img src="{{ asset('/themes/velocity/assets/images/footer-visa.png') }}" />
							</div>
							<div class="method-sticker payment-image-sticker">
								<img src="{{ asset('/themes/velocity/assets/images/mastercard.png') }}" />
							</div>
			</div>
	</div>
</div>


    <!--<div class="row">
        <div class="mb5 col-12">
            <h3>{{ __('velocity::app.home.shipping-methods') }}</h3>
        </div>

        <div class="shipping-methods col-12">
            @foreach(\Webkul\Shipping\Facades\Shipping::getShippingMethods() as $method)
                <div class="method-sticker">
                    {{ $method['method_title'] }}
                </div>
            @endforeach
        </div>
    </div>-->
