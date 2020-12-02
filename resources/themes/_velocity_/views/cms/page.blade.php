@extends('shop::layouts.master')

@section('page_title')
    {{ $page->page_title }}
@endsection

@section('head')
    @isset($page->meta_title)
        <meta name="title" content="{{ $page->meta_title }}" />
    @endisset

    @isset($page->meta_description)
        <meta name="description" content="{{ $page->meta_description }}" />
    @endisset

    @isset($page->meta_keywords)
        <meta name="keywords" content="{{ $page->meta_keywords }}" />
    @endisset

    @push('css')
      <link rel="stylesheet" href="{{ asset('/themes/freeonfriday/assets/css/parts/static-page.css') }}">
      <style>
        .header_page {
          margin-bottom: 0;
        }
      </style>
    @endpush

@endsection

@section('content-wrapper')
    @if($page->id != 9 && $page->id != 7)
    <div class="cms-page-container cart-details row offset-1 static-page-container container">
      <div class="row">
        <div class="col-12">

          <h1> {{ $page->page_title }} </h1>

          {!! DbView::make($page)->field('html_content')->render() !!}


        </div>

      </div>

    </div>
    @else
    {!! DbView::make($page)->field('html_content')->render() !!}
    @endif
@endsection
@push('scripts')
<script type="text/javascript">
  $('.main').addClass('main-about');
</script>
@endpush
