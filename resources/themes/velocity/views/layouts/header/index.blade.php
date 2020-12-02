<header class="sticky-header" v-if="!isMobile()">
    <div class="row col-12 remove-padding-margin velocity-divide-page">
      <div class="fof-header-top-row row col-12">
        <logo-component></logo-component>
        <div class="fof-login-trigger">
          @include('velocity::layouts.top-nav.login-section')
        </div>

        <searchbar-component></searchbar-component>
      </div>

        @php
            $velocityContent = app('Webkul\Velocity\Repositories\ContentRepository')->getAllContents();
        @endphp

        <content-header
            url="{{ url()->to('/') }}"
            :header-content="{{ json_encode($velocityContent) }}"
            heading= "{{ __('velocity::app.menu-navbar.text-category') }}"
            class="fof-header-subrow"
            ref="headerString"
        ></content-header>
    </div>
</header>

@push('scripts')
    <script type="text/javascript">
        (() => {
            document.addEventListener('scroll', e => {
                scrollPosition = Math.round(window.scrollY);

                if (scrollPosition > 50){
                    document.querySelector('header').classList.add('header-shadow');
                } else {
                    document.querySelector('header').classList.remove('header-shadow');
                }
            });

        })()
    </script>
@endpush
