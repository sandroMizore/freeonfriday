@extends('shop::customers.account.index')

@section('page_title')
    {{ __('shop::app.customer.account.address.edit.page-title') }}
@endsection

@section('page-detail-wrapper')
    <div class="account-head mb-15">
        <span class="back-icon"><a href="{{ route('customer.account.index') }}"><i class="icon icon-menu-back"></i></a></span>
        <span class="account-heading">{{ __('shop::app.customer.account.address.edit.title') }}</span>
        <span></span>
    </div>

    {!! view_render_event('bagisto.shop.customers.account.address.edit.before', ['address' => $address]) !!}

    <form method="post" action="{{ route('customer.address.edit', $address->id) }}">

        <div class="account-table-content">
            @method('PUT')
            @csrf

            {!! view_render_event('bagisto.shop.customers.account.address.edit_form_controls.before', ['address' => $address]) !!}

            <?php $addresses = explode(PHP_EOL, (old('address1') ?? $address->address1)); ?>



            {!! view_render_event('bagisto.shop.customers.account.address.edit_form_controls.company_name.after') !!}

            <div class="control-group">
                <label for="first_name" class="mandatory">{{ __('shop::app.customer.account.address.create.first_name') }}</label>
                <input type="text" class="control" name="first_name" value="{{ old('first_name') ?? $address->first_name }}" >
            </div>

            {!! view_render_event('bagisto.shop.customers.account.address.edit_form_controls.first_name.after') !!}



            {!! view_render_event('bagisto.shop.customers.account.address.edit_form_controls.last_name.after') !!}



            {!! view_render_event('bagisto.shop.customers.account.address.edit_form_controls.vat_id.after') !!}

            <div class="control-group" :class="[errors.has('address1[]') ? 'has-error' : '']">
                <label for="address_0" class="mandatory">{{ __('shop::app.customer.account.address.edit.street-address') }}</label>
                <input type="text" class="control" name="address1[]" value="{{ isset($addresses[0]) ? $addresses[0] : '' }}" id="address_0" >
            </div>

            @if (core()->getConfigData('customer.settings.address.street_lines') && core()->getConfigData('customer.settings.address.street_lines') > 1)
                @for ($i = 1; $i < core()->getConfigData('customer.settings.address.street_lines'); $i++)
                    <div class="control-group" style="margin-top: -25px;">
                        <input type="text" class="control" name="address1[{{ $i }}]" id="address_{{ $i }}" value="{{ $addresses[$i] ?? '' }}">
                    </div>
                @endfor
            @endif

            {!! view_render_event('bagisto.shop.customers.account.address.edit_form_controls.street-addres.after') !!}


            {!! view_render_event('bagisto.shop.customers.account.address.edit_form_controls.country-state.after') !!}



            {!! view_render_event('bagisto.shop.customers.account.address.edit_form_controls.create.after') !!}



            {!! view_render_event('bagisto.shop.customers.account.address.edit_form_controls.postcode.after') !!}

            <div class="control-group" :class="[errors.has('phone') ? 'has-error' : '']">
                <label for="phone" class="mandatory">{{ __('shop::app.customer.account.address.create.phone') }}</label>
                <input type="text" class="control fof-phone-control" name="phone" value="{{ old('phone') ?? $address->phone }}" >
            </div>

            {!! view_render_event('bagisto.shop.customers.account.address.edit_form_controls.after', ['address' => $address]) !!}

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
    {!! view_render_event('bagisto.shop.customers.account.address.edit.after', ['address' => $address]) !!}
@endsection
