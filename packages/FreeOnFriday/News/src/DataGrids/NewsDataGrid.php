<?php

namespace FreeOnFriday\News\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\Ui\DataGrid\DataGrid;

class NewsDataGrid extends DataGrid
{
    protected $index = 'id'; //the column that needs to be treated as index column

    protected $sortOrder = 'desc'; //asc or desc

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('news')
            ->select('news.id', 'news_translations.title', 'news.url_key')
            ->leftJoin('news_translations', function($leftJoin) {
                $leftJoin->on('news.id', '=', 'news_translations.news_id')
                         ->where('news_translations.locale', app()->getLocale());
            })
            ->groupBy('news.id');

        $this->addFilter('id', 'news.id');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => trans('velocity::app.admin.contents.datagrid.id'),
            'type'       => 'number',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'title',
            'label'      => trans('velocity::app.admin.contents.datagrid.title'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);

        $this->addColumn([
            'index'      => 'url_key',
            'label'      => trans('admin::app.datagrid.url-key'),
            'type'       => 'string',
            'searchable' => true,
            'sortable'   => true,
            'filterable' => true,
        ]);
    }

    public function prepareActions() {
        $this->addAction([
            'type'   => 'Edit',
            'method' => 'GET',
            'route'  => 'news.edit',
            'icon'   => 'icon pencil-lg-icon',
        ]);

        $this->addAction([
            'type'         => 'Delete',
            'method'       => 'POST',
            'route'        => 'news.delete',
            'confirm_text' => trans('ui::app.datagrid.massaction.delete', ['resource' => 'content']),
            'icon'         => 'icon trash-icon',
        ]);
    }

    public function prepareMassActions()
    {
        $this->addMassAction([
            'type'   => 'delete',
            'action' => route('velocity.admin.content.mass-delete'),
            'label'  => trans('admin::app.datagrid.delete'),
            'method' => 'DELETE',
        ]);
    }
}
