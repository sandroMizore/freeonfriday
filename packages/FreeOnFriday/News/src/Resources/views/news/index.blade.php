@extends('admin::layouts.content')

@section('page_title')
    {{ __('news::app.admin.news.title') }}
@stop

@section('content')
<a href="{{ route('news.create') }}" class="btn btn-lg btn-primary">
    {{ __('news::app.admin.news.add-title') }}
</a>
<div class="page-content">
    @inject('news', 'FreeOnFriday\News\DataGrids\NewsDataGrid')
    {!! $news->render() !!}
</div>
@stop
