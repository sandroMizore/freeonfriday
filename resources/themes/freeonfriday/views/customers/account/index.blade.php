@extends('shop::layouts.master')
@push('css')
<link rel="stylesheet" href="{{ asset('themes/freeonfriday/assets/css/parts/account.css') }}" />
@endpush
@section('content-wrapper')
    <div class="account-content row no-margin velocity-divide-page">
        <div class="sidebar left">
            @include('shop::customers.account.partials.sidemenu')
        </div>

        <div class="account-layout right mt10">
            @yield('page-detail-wrapper')
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            window.updateHeight = () => {
                setTimeout(() => {
                    let sidebarHeight = $('.customer-sidebar').css('height');
                    let contentHeight = $('.account-layout').css('height');

                    sidebarHeight = parseInt(sidebarHeight.substring(0, sidebarHeight.length - 2));
                    contentHeight = parseInt(contentHeight.substring(0, contentHeight.length - 2));

                    let height = sidebarHeight > contentHeight ? sidebarHeight + 30 : contentHeight;
                    height = height + "px";

                    $('.account-content').css('height', height);
                }, 0);
            }

            window.updateHeight();

            $('input, select').change(() => {
                window.updateHeight();
            });

            $('button').click(() => {
                window.updateHeight();
            });

            $('.accordian-header').click(window.updateHeight);
        });
    </script>
@endpush
