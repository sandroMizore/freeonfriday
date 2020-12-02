@php
    $isCustomer = auth()->guard('customer')->check();
@endphp

    @if (isset($shipping) && $shipping)
        <div :class="`col-12 tttt form-field mb30 ${errors.has('address-form.shipping[first_name]') ? 'has-error' : ''}`">
            <label for="shipping[first_name]" class="mandatory" style="width: unset;">
                {{ __('shop::app.checkout.onepage.first-name') }}
            </label>

            <input
                type="text"
                class="control"
                v-validate="'required'"
                id="shipping[first_name]"
                name="shipping[first_name]"
                v-model="address.shipping.first_name"
                @change="validateForm('address-form')"
                data-vv-as="&quot;{{ __('shop::app.checkout.onepage.first-name') }}&quot;" />

            <span class="control-error" v-if="errors.has('address-form.shipping[first_name]')">
                @{{ errors.first('address-form.shipping[first_name]') }}
            </span>
        </div>

        <div :class="`col-12 form-field ${errors.has('address-form.shipping[email]') ? 'has-error' : ''}`">
            <label for="shipping[email]" class="mandatory">
                {{ __('shop::app.checkout.onepage.email') }}
            </label>

            <input
                type="text"
                class="control"
                id="shipping[email]"
                name="shipping[email]"
                v-validate="'required|email'"
                v-model="address.shipping.email"
                @change="validateForm('address-form')"
                data-vv-as="&quot;{{ __('shop::app.checkout.onepage.email') }}&quot;" />

            <span class="control-error" v-if="errors.has('address-form.shipping[email]')">
                @{{ errors.first('address-form.shipping[email]') }}
            </span>
        </div>

        <div :class="`col-12 form-field ${errors.has('address-form.shipping[address1][]') ? 'has-error' : ''}`" style="margin-bottom: 0;">
            <label for="shipping_address_0" class="mandatory">
                {{ __('shop::app.checkout.onepage.address1') }}
            </label>

            <input
                type="text"
                class="control"
                v-validate="'required'"
                id="shipping_address_0"
                name="shipping[address1][]"
                v-model="address.shipping.address1[0]"
                @change="validateForm('address-form')"
                data-vv-as="&quot;{{ __('shop::app.checkout.onepage.address1') }}&quot;" />

            <span class="control-error" v-if="errors.has('address-form.shipping[address1][]')">
                @{{ errors.first('address-form.shipping[address1][]') }}
            </span>
        </div>

        @if (
            core()->getConfigData('customer.settings.address.street_lines')
            && core()->getConfigData('customer.settings.address.street_lines') > 1
        )
            @for ($i = 1; $i < core()->getConfigData('customer.settings.address.street_lines'); $i++)
                <div class="col-12 form-field" style="margin-top: 10px; margin-bottom: 0">
                    <input
                        type="text"
                        class="control"
                        id="shipping_address_{{ $i }}"
                        name="shipping[address1][{{ $i }}]"
                        @change="validateForm('address-form')"
                        v-model="address.shipping.address1[{{$i}}]" />
                </div>
            @endfor
        @endif



        <div :class="`col-12 form-field ${errors.has('address-form.shipping[phone]') ? 'has-error' : ''}`">
            <label for="shipping[phone]" class="mandatory">
                {{ __('shop::app.checkout.onepage.phone') }}
            </label>

            <input
                type="text"
                class="control"
                id="shipping[phone]"
                name="shipping[phone]"
                v-validate="'required'"
                v-model="address.shipping.phone"
                @change="validateForm('address-form')"
                data-vv-as="&quot;{{ __('shop::app.checkout.onepage.phone') }}&quot;" />

            <span class="control-error" v-if="errors.has('address-form.shipping[phone]')">
                @{{ errors.first('address-form.shipping[phone]') }}
            </span>
        </div>

        @auth('customer')
            <div class="mb10">
                <span class="checkbox fs16 display-inbl no-margin">
                    <input
                        class="ml0"
                        type="checkbox"
                        id="shipping[save_as_address]"
                        name="shipping[save_as_address]"
                        @change="validateForm('address-form')"
                        v-model="address.shipping.save_as_address"/>

                    <span class="ml-5">
                        {{ __('shop::app.checkout.onepage.save_as_address') }}
                    </span>
                </span>
            </div>
        @endauth

    @elseif (isset($billing) && $billing)


        <div :class="`col-12  form-field ${errors.has('address-form.billing[first_name]') ? 'has-error' : ''}`">
            <label for="billing[first_name]" class="mandatory">
                {{ __('shop::app.checkout.onepage.first-name') }}
            </label>

            <input
                type="text"
                class="control"
                v-validate="'required'"
                id="billing[first_name]"
                name="billing[first_name]"
                v-model="address.billing.first_name"
                @change="validateForm('address-form')"
                data-vv-as="&quot;{{ __('shop::app.checkout.onepage.first-name') }}&quot;" />

            <span class="control-error" v-if="errors.has('address-form.billing[first_name]')">
                @{{ errors.first('address-form.billing[first_name]') }}
            </span>
        </div>
        <div :class="`col-12 form-field ${errors.has('address-form.billing[city]') ? 'has-error' : ''}`" style="margin-top: 15px;">
            <label for="billing[city]" class="mandatory">
                {{ __('shop::app.checkout.onepage.city') }}
            </label>

            <input
                type="text"
                class="control"
                id="billing[city]"
                name="billing[city]"
                v-validate="'required'"
                v-model="address.billing.city"
                @change="validateForm('address-form')"
                data-vv-as="&quot;{{ __('shop::app.checkout.onepage.city') }}&quot;" />

            <span class="control-error" v-if="errors.has('address-form.billing[city]')">
                @{{ errors.first('address-form.billing[city]') }}
            </span>
        </div>

        <div :class="`col-12 form-field ${errors.has('address-form.billing[address1][]') ? 'has-error' : ''}`" style="margin-bottom: 0;">
            <label for="billing_address_0" class="mandatory">
                {{ __('shop::app.checkout.onepage.address1') }}
            </label>

            <input
                type="text"
                class="control"
                v-validate="'required'"
                id="billing_address_0"
                name="billing[address1][]"
                v-model="address.billing.address1[0]"
                @change="validateForm('address-form')"
                data-vv-as="&quot;{{ __('shop::app.checkout.onepage.address1') }}&quot;" />

            <span class="control-error" v-if="errors.has('address-form.billing[address1][]')">
                @{{ errors.first('address-form.billing[address1][]') }}
            </span>
        </div>

        <div :class="`col-12 form-field ${errors.has('address-form.billing[email]') ? 'has-error' : ''}`">
            <label for="billing[email]" class="mandatory">
                {{ __('shop::app.checkout.onepage.email') }}
            </label>

            <input
                type="text"
                class="control"
                id="billing[email]"
                name="billing[email]"
                @blur="isCustomerExist"
                v-validate="'required|email'"
                v-model="address.billing.email"
                @change="validateForm('address-form')"
                data-vv-as="&quot;{{ __('shop::app.checkout.onepage.email') }}&quot;" />

            <span class="control-error" v-if="errors.has('address-form.billing[email]')">
                @{{ errors.first('address-form.billing[email]') }}
            </span>
        </div>

        {{--  for customer login checkout   --}}
        @if (! $isCustomer)
            @include('shop::checkout.onepage.customer-checkout')
        @endif



        @if (
            core()->getConfigData('customer.settings.address.street_lines')
            && core()->getConfigData('customer.settings.address.street_lines') > 1
        )
            @for ($i = 1; $i < core()->getConfigData('customer.settings.address.street_lines'); $i++)
                <div class="col-12 form-field" style="margin-top: 10px; margin-bottom: 0">
                        <input
                            type="text"
                            class="control"
                            id="billing_address_{{ $i }}"
                            name="billing[address1][{{ $i }}]"
                            v-model="address.billing.address1[{{$i}}]" />
                </div>
            @endfor
        @endif




        <div :class="`col-12 form-field ${errors.has('address-form.billing[phone]') ? 'has-error' : ''}`">
            <label for="billing[phone]" class="mandatory">
                {{ __('shop::app.checkout.onepage.phone') }}
            </label>

            <input
                type="text"
                class="control"
                id="billing[phone]"
                name="billing[phone]"
                v-validate="'required'"
                v-model="address.billing.phone"
                @change="validateForm('address-form')"
                data-vv-as="&quot;{{ __('shop::app.checkout.onepage.phone') }}&quot;" />

            <span class="control-error" v-if="errors.has('address-form.billing[phone]')">
                @{{ errors.first('address-form.billing[phone]') }}
            </span>
        </div>

        <div :class="`col-12 form-field ${errors.has('address-form.billing[comment]') ? 'has-error' : ''}`">
            <label for="billing[comment]" class="mandatory">
                {{ __('shop::app.checkout.onepage.comment') }}
            </label>

            <textarea
                type="textarea"
                class="control adress-commet"
                id="billing[comment]"
                name="billing[comment]"
                v-model="address.billing.comment"
                data-vv-as="&quot;{{ __('shop::app.checkout.onepage.comment') }}&quot;" />

            <span class="control-error" v-if="errors.has('address-form.billing[comment]')">
                @{{ errors.first('address-form.billing[comment]') }}
            </span>
        </div>

        <div class="mb10">
            <span class="checkbox fs16 display-inbl no-margin">
                <input
                    class="ml0 nocall-checkout"
                    type="checkbox"
                    id="billing[nocall]"
                    name="billing[nocall]"
                    v-model="address.billing.nocall"
                    @change="setTimeout(() => changeNocall(), 0)" />

                <span class="ml-5">
                    {{ __('shop::app.checkout.onepage.nocall') }}
                </span>
            </span>
        </div>

        @if ($cart->haveStockableItems())
            <div class="mb10 hide-this-thing">
                <span class="checkbox fs16 display-inbl no-margin">
                    <input
                        class="ml0"
                        type="checkbox"
                        id="billing[use_for_shipping]"
                        name="billing[use_for_shipping]"
                        v-model="address.billing.use_for_shipping"
                        @change="setTimeout(() => validateForm('address-form'), 0)" />

                    <span class="ml-5">
                        {{ __('shop::app.checkout.onepage.use_for_shipping') }}
                    </span>
                </span>
            </div>
        @endif

        @auth('customer')
            <div class="mb10">
                <span class="checkbox fs16 display-inbl no-margin">
                    <input
                        class="ml0"
                        type="checkbox"
                        id="billing[save_as_address]"
                        name="billing[save_as_address]"
                        @change="validateForm('address-form')"
                        v-model="address.billing.save_as_address"/>

                    <span class="ml-5">
                        {{ __('shop::app.checkout.onepage.save_as_address') }}
                    </span>
                </span>
            </div>
            @php
            @endphp
        @endauth
    @endif
