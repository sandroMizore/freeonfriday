<?php

namespace Webkul\CMS\Repositories;

use Illuminate\Support\Facades\Event;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Webkul\Core\Eloquent\Repository;
use Webkul\CMS\Models\CmsPageTranslation;
use Webkul\CMS\Models\CmsPage;

class CmsRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Webkul\CMS\Contracts\CmsPage';
    }

    /**
     * @param  array  $data
     * @return \Webkul\CMS\Contracts\CmsPage
     */
    public function create(array $data)
    {
        Event::dispatch('cms.pages.create.before');

        $model = $this->getModel();

        foreach (core()->getAllLocales() as $locale) {
            foreach ($model->translatedAttributes as $attribute) {
                if (isset($data[$attribute])) {
                    $data[$locale->code][$attribute] = $data[$attribute];
                }
            }
        }

        $page = parent::create($data);

        $page->channels()->sync($data['channels']);

        Event::dispatch('cms.pages.create.after', $page);

        return $page;
    }

    /**
     * @param  array  $data
     * @param  int  $id
     * @param  string  $attribute
     * @return \Webkul\CMS\Contracts\CmsPage
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $page = $this->find($id);

        Event::dispatch('cms.pages.update.before', $id);

        parent::update($data, $id, $attribute);

        $page->channels()->sync($data['channels']);

        Event::dispatch('cms.pages.update.after', $id);

        return $page;
    }

    /**
     * Checks slug is unique or not based on locale
     *
     * @param  int  $id
     * @param  string  $urlKey
     * @return bool
     */
    public function isUrlKeyUnique($id, $urlKey)
    {
        $exists = CmsPageTranslation::where('cms_page_id', '<>', $id)
            ->where('url_key', $urlKey)
            ->limit(1)
            ->select(\DB::raw(1))
            ->exists();

        return $exists ? false : true;
    }

    /**
     * Retrive category from slug
     *
     * @param  string  $urlKey
     * @return \Webkul\CMS\Contracts\CmsPage|\Exception
     */
    public function findByUrlKeyOrFail($urlKey)
    {
        $page = $this->model->whereTranslation('url_key', $urlKey)->first();

        if ($page) {
            return $page;
        }

        throw (new ModelNotFoundException)->setModel(
            get_class($this->model), $urlKey
        );
    }
    public function fofGetBlogs($limit) {
      /*$blogs = $query
          ->addSelect('cms_page_translations.*')
          ->leftJoin('cms_page_translations', function($leftJoin) {
              $leftJoin->on('cms_page_translations.cms_page_id', '=', 'cms_pages.id')
                       ->where('cms_page_translations.locale', app()->getLocale());
          })
          ->leftJoin('cms_page_channels', '=', 2)
          ->limit($limit)
          ->get();
      */
      /*$blogs = app('Webkul\Velocity\Contracts\Content')::select('SELECT *
                  FROM cms_page_translations
                  LEFT JOIN cms_pages ON cms_page_translations.cms_page_id = cms_pages.id
                  LEFT JOIN cms_page_channels ON cms_pages.id = cms_page_channels.cms_page_id
                  WHERE cms_page_channels.channel_id = 2');
      return $blogs;*/
      $blogs = app('Webkul\CMS\Models\CmsPageTranslation')->select('*')
      ->leftJoin('cms_pages', 'cms_page_translations.cms_page_id', '=', 'cms_pages.id')
      ->leftJoin('cms_page_channels','cms_pages.id', '=', 'cms_page_channels.cms_page_id')
      ->where('cms_page_channels.channel_id', 2)
      ->where('cms_page_translations.locale', app()->getLocale())
      ->limit($limit)
      ->get();
      return $blogs;

    }
}
