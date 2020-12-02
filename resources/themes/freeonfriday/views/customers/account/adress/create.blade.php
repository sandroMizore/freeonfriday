@extends('shop::customers.account.index')

@section('page_title')
    {{ __('shop::app.customer.account.address.create.page-title') }}
@endsection

@section('page-detail-wrapper')
    <div class="account-head mb-15">
        <span class="back-icon"><a href="{{ route('customer.account.index') }}"><i class="icon icon-menu-back"></i></a></span>
        <span class="account-heading">{{ __('shop::app.customer.account.address.create.title') }}</span>
        <span></span>
    </div>

    {!! view_render_event('bagisto.shop.customers.account.address.create.before') !!}

        <form method="post" action="{{ route('customer.address.create') }}">

            <div class="account-table-content">
                @csrf

                {!! view_render_event('bagisto.shop.customers.account.address.create_form_controls.before') !!}



                {!! view_render_event('bagisto.shop.customers.account.address.create_form_controls.company_name.after') !!}

                <div class="control-group">
                    <label for="first_name" class="mandatory">{{ __('shop::app.customer.account.address.create.first_name') }}</label>
                    <input type="text" class="control" name="first_name" value="{{ old('first_name') }}" >
                </div>

                {!! view_render_event('bagisto.shop.customers.account.address.create_form_controls.first_name.after') !!}


                {!! view_render_event('bagisto.shop.customers.account.address.create_form_controls.last_name.after') !!}


                {!! view_render_event('bagisto.shop.customers.account.address.create_form_controls.vat_id.after') !!}

                @php
                    $addresses = explode(PHP_EOL, (old('address1') ?? ''));
                @endphp

                <div class="control-group" >
                    <label for="address_0" class="mandatory">{{ __('shop::app.customer.account.address.create.street-address') }}</label>
                    <input type="text" class="control" name="address1[]" id="address_0" value="{{ $addresses[0] ?: '' }}">
                    <span class="control-error" v-if="errors.has('address1[]')">@{{ errors.first('address1[]') }}</span>
                </div>

                @if (core()->getConfigData('customer.settings.address.street_lines') && core()->getConfigData('customer.settings.address.street_lines') > 1)
                    @for ($i = 1; $i < core()->getConfigData('customer.settings.address.street_lines'); $i++)
                        <div class="control-group" style="margin-top: -25px;">
                            <input type="text" class="control" name="address1[{{ $i }}]" id="address_{{ $i }}" value="{{ $addresses[$i] ?? '' }}">
                        </div>
                    @endfor
                @endif

                {!! view_render_event('bagisto.shop.customers.account.address.create_form_controls.street-address.after') !!}


                {!! view_render_event('bagisto.shop.customers.account.address.create_form_controls.country-state.after') !!}


                {!! view_render_event('bagisto.shop.customers.account.address.create_form_controls.city.after') !!}



                {!! view_render_event('bagisto.shop.customers.account.address.create_form_controls.postcode.after') !!}

                <div class="control-group">
                    <label for="phone" class="mandatory">{{ __('shop::app.customer.account.address.create.phone') }}</label>
                    <input type="text" class="control fof-phone-control" name="phone" value="{{ old('phone') }}">
                </div>

                {!! view_render_event('bagisto.shop.customers.account.address.create_form_controls.after') !!}

                <div class="button-group">
                    <button class="theme-btn" type="submit">
                        {{ __('shop::app.customer.account.address.create.submit') }}
                    </button>
                </div>
            </div>
        </form>
        @push('scripts')
        <script
            type="text/javascript"
            src="{{ asset('themes/velocity/assets/js/jquery.mask.js') }}">
        </script>
        <script type="text/javascript">
        $(document).ready(function(){

            $('.fof-phone-control').mask('+3-000-000-00-00');
          });
        </script>
        @endpush
    {!! view_render_event('bagisto.shop.customers.account.address.create.after') !!}
@endsection
