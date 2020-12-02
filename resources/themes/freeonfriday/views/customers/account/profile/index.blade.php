@extends('shop::customers.account.index')

@section('page_title')
    {{ __('shop::app.customer.account.profile.index.title') }}
@endsection

@push('css')
    <style>
        .account-head {
            height: 50px;
        }
    </style>
@endpush


@section('page-detail-wrapper')
    <div class="account-head mb-0">
            <a href="{{ route('customer.account.index') }}">
                <i class="icon icon-menu-back"></i>
            </a>

        <h1 class="account-heading">
            {{ __('shop::app.customer.account.profile.index.title') }}
        </h1>

            <a href="{{ route('customer.profile.edit') }}" class="theme-btn light unset pull-right">
                {{ __('shop::app.customer.account.profile.index.edit') }}
            </a>
    </div>

    {!! view_render_event('bagisto.shop.customers.account.profile.view.before', ['customer' => $customer]) !!}

    <div class="account-table-content profile-page-content">
        <div class="table">
            <table>
                <tbody>
                    {!! view_render_event(
                    'bagisto.shop.customers.account.profile.view.table.before', ['customer' => $customer])
                    !!}

                    <tr>
                        <td>{{ __('shop::app.customer.account.profile.fname') }}</td>
                        <td>{{ $customer->first_name }}</td>
                    </tr>

                    {!! view_render_event('bagisto.shop.customers.account.profile.view.table.first_name.after', ['customer' => $customer]) !!}

                    <tr>
                        <td>{{ __('shop::app.customer.account.profile.lname') }}</td>
                        <td>{{ $customer->last_name }}</td>
                    </tr>

                    {!! view_render_event('bagisto.shop.customers.account.profile.view.table.last_name.after', ['customer' => $customer]) !!}

                    <tr>
                        <td>{{ __('shop::app.customer.account.profile.gender') }}</td>
                        <td>{{ $customer->gender ?? '-' }}</td>
                    </tr>

                    {!! view_render_event('bagisto.shop.customers.account.profile.view.table.gender.after', ['customer' => $customer]) !!}

                    <tr>
                        <td>{{ __('shop::app.customer.account.profile.dob') }}</td>
                        <td>{{ $customer->date_of_birth ?? '-' }}</td>
                    </tr>

                    {!! view_render_event('bagisto.shop.customers.account.profile.view.table.date_of_birth.after', ['customer' => $customer]) !!}

                    <tr>
                        <td>{{ __('shop::app.customer.account.profile.email') }}</td>
                        <td>{{ $customer->email }}</td>
                    </tr>

                    {!! view_render_event(
                    'bagisto.shop.customers.account.profile.view.table.after', ['customer' => $customer])
                    !!}
                </tbody>
            </table>
        </div>

        <button
            type="submit"
            class="theme-btn mb20" onclick="showModal('deleteProfile')" >
            {{ __('shop::app.customer.account.address.index.delete') }}
        </button>

        <form method="POST" action="{{ route('customer.profile.destroy') }}">
            @csrf

            <modal id="deleteProfile">
                <h3 slot="header">{{ __('shop::app.customer.account.address.index.enter-password') }}
                </h3>
                <i class="rango-close"></i>

                <div slot="body">
                    <div class="control-group">
                        <label for="password" class="required"></label>
                        <input type="password"  class="control" id="password" name="password"/>
                    </div>

                    <div class="page-action">
                        <button type="submit"  class="theme-btn mb20">
                        {{ __('shop::app.customer.account.address.index.delete') }}
                        </button>
                    </div>
                </div>
            </modal>
        </form>
    </div>

    {!! view_render_event('bagisto.shop.customers.account.profile.view.after', ['customer' => $customer]) !!}
@endsection
@push('scripts')
<script type="text/javascript">
  function showModal(id) {
    $('#' + id).show();
  }
</script>
@endpush
