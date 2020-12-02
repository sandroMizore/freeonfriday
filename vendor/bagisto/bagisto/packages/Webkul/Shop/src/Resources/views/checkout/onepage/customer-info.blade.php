<form data-vv-scope="address-form">

    <div class="form-container fdsfds" v-if="!this.new_billing_address">
        <div class="form-header mb-30">
            <span class="checkout-step-heading">{{ __('shop::app.checkout.onepage.billing-address') }}</span>

            <a class="btn btn-lg btn-primary" @click = newBillingAddress()>
                {{ __('shop::app.checkout.onepage.new-address') }}
            </a>
        </div>
        <div class="address-holder">
            <div class="address-card" v-for='(addresses, index) in this.allAddress'>
                <div class="checkout-address-content" style="display: flex; flex-direction: row; justify-content: space-between; width: 100%;">
                    <label class="radio-container" style="float: right; width: 10%;">
                        <input type="radio" v-validate="'required'" id="billing[address_id]" name="billing[address_id]" :value="addresses.id" v-model="address.billing.address_id" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.billing-address') }}&quot;">
                        <span class="checkmark"></span>
                    </label>

                    <ul class="address-card-list" style="float: right; width: 85%;">
                        <li class="mb-10">
                            <b>@{{ allAddress.first_name }} @{{ allAddress.last_name }},</b>
                        </li>

                        <li class="mb-5">
                            @{{ addresses.address1 }},
                        </li>

                        <li class="mb-5">
                            @{{ addresses.city }},
                        </li>

                        <li class="mb-5">
                            @{{ addresses.state }},
                        </li>

                        <li class="mb-15">
                            @{{ addresses.country }}  @{{ addresses.postcode }}
                        </li>

                        <li>
                            <b>{{ __('shop::app.customer.account.address.index.contact') }}</b> : @{{ addresses.phone }}
                        </li>
                    </ul>
                </div>
            </div>
            <div id="message"></div>
            <div class="control-group" :class="[errors.has('address-form.billing[address_id]') ? 'has-error' : '']">
                <span class="control-error" v-if="errors.has('address-form.billing[address_id]')">
                    @{{ errors.first('address-form.billing[address_id]') }}
                </span>
            </div>
        </div>

        @if ($cart->haveStockableItems())
            <div class="control-group mt-5">
                <span class="checkbox">
                    <input type="checkbox" id="billing[use_for_shipping]" name="billing[use_for_shipping]" v-model="address.billing.use_for_shipping"/>
                        <label class="checkbox-view" for="billing[use_for_shipping]"></label>
                        {{ __('shop::app.checkout.onepage.use_for_shipping') }}
                </span>
            </div>
        @endif
    </div>

    @if ($cart->haveStockableItems())
        <div class="form-container" v-if="!address.billing.use_for_shipping && this.new_shipping_address">

            <div class="form-header">
                <h1>{{ __('shop::app.checkout.onepage.shipping-address') }}</h1>
                @auth('customer')
                    @if(count(auth('customer')->user()->addresses))
                        <a class="btn btn-lg btn-primary" @click = backToSavedShippingAddress()>
                            {{ __('shop::app.checkout.onepage.back') }}
                        </a>
                    @endif
                @endauth
            </div>

            <div class="control-group" :class="[errors.has('address-form.shipping[first_name]') ? 'has-error' : '']">
                <label for="shipping[first_name]" class="required">
                    {{ __('shop::app.checkout.onepage.first-name') }}
                </label>

                <input type="text" v-validate="'required'" class="control" id="shipping[first_name]" name="shipping[first_name]" v-model="address.shipping.first_name" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.first-name') }}&quot;"/>

                <span class="control-error" v-if="errors.has('address-form.shipping[first_name]')">
                    @{{ errors.first('address-form.shipping[first_name]') }}
                </span>
            </div>

            <div class="control-group" :class="[errors.has('address-form.shipping[email]') ? 'has-error' : '']">
                <label for="shipping[email]" class="required">
                    {{ __('shop::app.checkout.onepage.email') }}
                </label>

                <input type="text" v-validate="'required|email'" class="control" id="shipping[email]" name="shipping[email]" v-model="address.shipping.email" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.email') }}&quot;"/>

                <span class="control-error" v-if="errors.has('address-form.shipping[email]')">
                    @{{ errors.first('address-form.shipping[email]') }}
                </span>
            </div>

            <div class="control-group" :class="[errors.has('address-form.shipping[address1][]') ? 'has-error' : '']">
                <label for="shipping_address_0" class="required">
                    {{ __('shop::app.checkout.onepage.address1') }}
                </label>

                <input type="text" v-validate="'required'" class="control" id="shipping_address_0" name="shipping[address1][]" v-model="address.shipping.address1[0]" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.address1') }}&quot;"/>

                <span class="control-error" v-if="errors.has('address-form.shipping[address1][]')">
                    @{{ errors.first('address-form.shipping[address1][]') }}
                </span>
            </div>

            @if (core()->getConfigData('customer.settings.address.street_lines') && core()->getConfigData('customer.settings.address.street_lines') > 1)
                <div class="control-group" style="margin-top: -25px;">
                    @for ($i = 1; $i < core()->getConfigData('customer.settings.address.street_lines'); $i++)
                        <input type="text" class="control" name="shipping[address1][{{ $i }}]" id="shipping_address_{{ $i }}" v-model="address.shipping.address1[{{$i}}]">
                    @endfor
                </div>
            @endif

            <div class="control-group" :class="[errors.has('address-form.shipping[phone]') ? 'has-error' : '']">
                <label for="shipping[phone]" class="required">
                    {{ __('shop::app.checkout.onepage.phone') }}
                </label>

                <input type="text" v-validate="'required'" class="control" id="shipping[phone]" name="shipping[phone]" v-model="address.shipping.phone" data-vv-as="&quot;{{ __('shop::app.checkout.onepage.phone') }}&quot;"/>

                <span class="control-error" v-if="errors.has('address-form.shipping[phone]')">
                    @{{ errors.first('address-form.shipping[phone]') }}
                </span>
            </div>

            @auth('customer')
                <div class="control-group">
                    <span class="checkbox">
                        <input type="checkbox" id="shipping[save_as_address]" name="shipping[save_as_address]" v-model="address.shipping.save_as_address"/>
                        <label class="checkbox-view" for="shipping[save_as_address]"></label>
                        {{ __('shop::app.checkout.onepage.save_as_address') }}
                    </span>
                </div>
            @endauth

        </div>
    @endif

</form>
